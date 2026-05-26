<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Agent;
use App\Models\Buyer_Document;
use App\Models\Seller_Document;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function document(){
       $transaction = Transaction::with([
            'property',
            'buyer_document',
            'seller_document'
        ]) 
        ->withCount(['buyer_document', 
        'seller_document'])
        ->where('seller_id', Auth::id())
        ->latest()
        ->get();

        // dd($transaction);

        return view('users.document',[
            "pageTitle" => "Document",
            "transactions" => $transaction
        ]);
    }

    public function detailDocument($id){

        $transaction = Transaction::with([
            'buyer_document',
            'seller_document',
            'property'
        ])->findorFail($id);

        if(Auth::id() != $transaction->buyer_id && Auth::id() != $transaction->seller_id){
            abort(403);
        }

        if(Auth::id() == $transaction->buyer_id) {
            $link = route("users.detailTransaction", ["id" => $id]);
            $documents = $transaction->buyer_document;
        } else {
            $link = route("users.document", ["id" => $id]);
            $documents = $transaction->seller_document;
        }

        return view('users.documentDetail',[
            "link" => $link,
            "title" => "Document Detail",
            "documentId" => $id,
            "transaction" => $transaction,
            "documents" => $documents
        ]);
    }

    public function addDocument($id){
        $transaction = Transaction::findorFail($id);
        if(Auth::id() != $transaction->buyer_id && Auth::id() != $transaction->seller_id){
            abort(403);
        }

        return view('users.addDocument',[
            "link" => route("users.detailTransaction", ["id" => $id]),
            "title" => "Add Document",
            "transactionId" => $id,
            "transaction" => $transaction
        ]);
    }

    public function addDocumentSeller($id){
        $transaction = Transaction::findorFail($id);
        if(Auth::id() != $transaction->buyer_id && Auth::id() != $transaction->seller_id){
            abort(403);
        }

        return view('users.addDocumentSeller',[
            "link" => route("users.document", ["id" => $id]),
            "title" => "Add Document Seller",
            "documentId" => $id,
            "transaction" => $transaction
        ]);
    }

    public function storeDocument(Request $request, $id){
        $transaction = Transaction::findOrFail($id);
        $documents = [
        'ktp' => 'Kartu Tanda Penduduk (KTP)',
        'kk' => 'Kartu Keluarga (KK)',
        'payment' => 'Bukti Pembayaran'
        ];

        foreach($documents as $inputName => $documentType){
            if($request->hasFile($inputName)){
                $path = $request->file($inputName)->store('buyer_documents', 'public');
                Buyer_Document::create([
                    'transaction_id' =>  $transaction->id,
                    'document_name' => $request->file($inputName)
                    ->getClientOriginalName(),
                    'document_type' => $documentType,
                    'file_path' => $path,
                    'is_approve_agen' => null
                ]);
            }
        }
        return redirect()->route('users.detailTransaction', ['id' => $transaction->id])
         ->with('success', 'Dokumen berhasil ditambahkan');
    }

    public function storeDocumentSeller(Request $request, $id){
        $transaction = Transaction::findOrFail($id);
        $documents = [
            'ktp' => 'Kartu Tanda Penduduk (KTP)',
            'kk' => 'Kartu Keluarga (KK)',
            'shm' => 'Sertifikat Hak Milik (SHM)',
            'pbb' => 'Pajak Bumi dan Bangunan (PBB)',
            'sertifikat_tanah' => 'Sertifikat Tanah'
        ];

        foreach($documents as $inputName => $documentType){
            if($request->hasFile($inputName)){
                $path = $request->file($inputName)->store('seller_documents', 'public');
                Seller_Document::create([
                    'transaction_id' =>  $transaction->id,
                    'document_name' => $request->file($inputName)
                    ->getClientOriginalName(),
                    'document_type' => $documentType,
                    'file_path' => $path,
                    'is_approve_agen' => null
                ]);
            }
        }
        return redirect()->route('users.document', ['id' => $transaction->id])
        ->with('success', 'Dokumen berhasil ditambahkan');
    }

    // AGENT 

    public function documentAgent(){
        $agentId = Agent::where("user_id", Auth::id())->first()->id;
        $transaction = Transaction::with([
            'property',
            'buyer_document',
            'seller_document'
        ]) 
        ->where('agent_id', $agentId)
        ->latest()
        ->get();

        $transaction->map(function ($transaction) {
            $buyerDocs = $transaction->buyer_document;
            $sellerDocs = $transaction->seller_document;

            // Ada reject?
            $hasRejected =
                $buyerDocs->contains(fn($doc) => $doc->is_approve_agen == 0) ||
                $sellerDocs->contains(fn($doc) => $doc->is_approve_agen == 0);

            // Semua approve?
            $allApproved =
                $buyerDocs->every(fn($doc) => $doc->is_approve_agen == 1) &&
                $sellerDocs->every(fn($doc) => $doc->is_approve_agen == 1);

            // Masih pending?
            $transaction->show_status =
                !$hasRejected && !$allApproved;

            return $transaction;
        });

        //dd($transaction, $agentId);

        return view('agent.document',[
            "transactions" => $transaction
        ]);
    }

    public function detailDocumentAgent($id){
        $agentId = Agent::where("user_id", Auth::id())->first()->id;
        $transaction = Transaction::with([
            'property',
            'buyer_document',
            'seller_document'
        ]) 
        ->where('agent_id', $agentId)
        ->latest()
        ->findOrFail($id);

        return view('agent.documentDetail',[
            "title" => "Document Detail",
            "link" => route('agent.document'),
            "transaction" => $transaction,
            "sellerDocuments" => $transaction->seller_document,
            "buyerDocuments" => $transaction->buyer_document
        ]);
    }

    public function documentStatus(Request $request, $id){
        $request->validate([
        'status' => 'required|in:setuju,tolak',
        'document_owner' => 'required|in:buyer,seller'
        ]);

        if ($request->document_owner == 'buyer') {

            $document = Buyer_Document::findOrFail($id);

        } else {

            $document = Seller_Document::findOrFail($id);

        }

        // Update status
        $document->is_approve_agen = $request->status == 'setuju';
        $document->save();

        return back()->with('success', 'Status dokumen berhasil diperbarui');
    }
}

