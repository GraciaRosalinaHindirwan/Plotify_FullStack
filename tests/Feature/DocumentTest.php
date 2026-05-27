<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;
use App\Models\User;
use App\Models\Agent;
use App\Models\Transaction;
use App\Models\Property;
use App\Models\Appoinment;
use App\Models\Seller_Document;
use App\Models\Buyer_Document;

class DocumentTest extends TestCase
{
    use RefreshDatabase;

    protected User $buyer;
    protected User $seller;
    protected Agent $agent;
    protected Transaction $transaction;
    protected Property $property;
    protected Appoinment $appointment;

    protected function setUp(): void{
        parent::setUp();
        $this->buyer = User::factory()->create([
            'role' => 'users',
        ]);

        $this->seller = User::factory()->create([
            'role' => 'users',
        ]);

        $agentUser = User::factory()->create([
            'role' => 'agent', 
        ]);
        $this->agent = Agent::factory()->create([
            'user_id' => $agentUser->id,
        ]);

        $this->withoutVite();

        $this->appointment = Appoinment::factory()->create();        
        $this->property = Property::factory()->create([
            'appoinment_id' => $this->appointment->id,
        ]);

        $this->transaction = Transaction::factory()->create([
            'property_id' => $this->property->id,
            'seller_id' => $this->seller,
            'agent_id' => $this->agent,
            'buyer_id' => $this->buyer,
            'negotiation_id' => null,
        ]);

    }

    public function test_non_seller_cannot_access_document_navbar(): void
    {
        $this->actingAs($this->buyer);
        $response = $this->get(route('users.document'));
        $response->assertStatus(403); ///forbidden tidak punya akses 
    }

    public function test_seller_can_access_document_navbar():void{
        $this->actingAs($this->seller);
        $this->transaction;

        $response = $this->get(route('users.document'));
        $response->assertStatus(200); //berhasil di akses 
        $response->assertViewIs('users.document');
    }

    public function test_buyer_can_add_document_support():void{
        $this->actingAs($this->buyer);
        $this->transaction;

        $response = $this->get(route('users.addDocument', $this->transaction->id));
        $response->assertStatus(200);
        $response->assertViewIs('users.addDocument');
        $response->assertViewHas('transaction', function ($transaction) { //data apa yang dikirim ke controller
            return $transaction->id === $this->transaction->id;
        });
    }

    public function test_buyer_can_submit_document(): void{
        Storage::fake('public');
        $this->actingAs($this->buyer);
        $this->transaction;
        $file = UploadedFile::fake()->create('ktp.jpg');

        $response = $this->post(route('users.storeDocument', $this->transaction->id),[
            'transaction_id' => $this->transaction->id,
            'document_type' => 'KTP',
            'file_path' => $file,

        ]);

        $response->assertRedirect(route('users.detailTransaction', $this->transaction->id));
    }

    public function test_buyer_can_view_detail_document(): void{
        $this->actingAs($this->buyer);
        $this->transaction;

        $response = $this->get(route('users.detailDocument', $this->transaction->id));
        $response->assertOk();
        $response->assertViewIs('users.documentDetail');
        $response->assertViewHas('transaction', function ($transaction) { //data apa yang dikirim ke controller
            return $transaction->id === $this->transaction->id;
        });
    }

    public function test_seller_can_add_document_suuport(): void{
        $this->actingAs($this->seller);
        $this->transaction;

        $response = $this->get(route('users.addDocumentSeller', $this->transaction->id));
        $response->assertStatus(200);
        $response->assertViewIs('users.addDocumentSeller');
        $response->assertViewHas('transaction', function ($transaction) { //data apa yang dikirim ke controller
            return $transaction->id === $this->transaction->id;
        });
    }

    public function test_seller_can_submit_document(): void{
        Storage::fake('public');
        $this->actingAs($this->seller);
        $this->transaction;
        $file = UploadedFile::fake()->create('ktp.jpg');

        $response = $this->post(route('users.storeDocumentSeller', $this->transaction->id),[
            'transaction_id' => $this->transaction->id,
            'document_name' => 'ktp.jpg',
            'document_type' => $file,

        ]);

        $response->assertRedirect(route('users.document', [
            'id' => $this->transaction->id,
            ]));
    }

    public function test_seller_can_view_detail_document(): void{
        $this->actingAs($this->seller);
        $this->transaction;

        $response = $this->get(route('users.detailDocument', $this->transaction->id));
        $response->assertOk();
        $response->assertViewIs('users.documentDetail');
        $response->assertViewHas('transaction', function ($transaction) { //data apa yang dikirim ke controller
            return $transaction->id === $this->transaction->id;
        });
    }

    public function agent_can_view_list_document(): void{
        $this->actingAs($this->agent->id);
        $this->transaction;

        $response = $this->get(route('agent.document'));
        $response->assertOk();
        $response->assertViewIs('agent.document');
        $response->assertViewHas('transaction', function($transaction){
            return $transaction->id === $this->transaction->id;
        });
    }

    public function agent_can_view_detail_document(): void{
        $this->actingAs($this->agent->id);
        $this->transaction;

        $response = $this->get(route('agent.detailDocument', $this->transaction->id));
        $response->assertOk();
        $response->assertViewIs('agent.documentDetail');
        $response->assertViewHas('transaction', function($transaction){
            return $transaction->id === $this->transaction->id;
        });
    }

    public function test_agent_can_approve_buyer_document(): void
    {
        $this->actingAs($this->agent->user);
        $this->transaction;

        $document = Buyer_Document::create([
            'transaction_id' => $this->transaction->id,
            'document_name' => 'ktp.jpg',
            'document_type' => 'KTP',
            'file_path' => 'buyer_documents/ktp.jpg',
            'is_approve_agen' => null,
        ]);

        $response = $this->post(
            route('agent.documentStatus', $document->id),
            [
                'status' => 'setuju',
                'document_owner' => 'buyer',
            ]
        );

        $response->assertRedirect();

        $this->assertDatabaseHas('buyer__documents', [
            'transaction_id' => $this->transaction->id,
            'id' => $document->id,
            'is_approve_agen' => 1,
        ]);
    }

    public function test_agent_can_approve_seller_document(): void
    {
        $this->actingAs($this->agent->user);
        $this->transaction;

        $document = Seller_Document::create([
            'transaction_id' => $this->transaction->id,
            'document_name' => 'ktp.jpg',
            'document_type' => 'KTP',
            'file_path' => 'seller_documents/ktp.jpg',
            'is_approve_agen' => null,
        ]);

        $response = $this->post(
            route('agent.documentStatus', $document->id),
            [
                'status' => 'setuju',
                'document_owner' => 'seller',
            ]
        );

        $response->assertRedirect();

        $this->assertDatabaseHas('seller__documents', [
            'transaction_id' => $this->transaction->id,
            'id' => $document->id,
            'is_approve_agen' => 1,
        ]);
    }

    public function test_agent_reject_buyer_document(): void{
        $this->actingAs($this->agent->user);
        $this->transaction;

        $document = Buyer_Document::create([
            'transaction_id' => $this->transaction->id,
            'document_name' => 'ktp.jpg',
            'document_type' => 'KTP',
            'file_path' => 'buyer_documents/ktp.jpg',
            'is_approve_agen' => null,
        ]);

        $response = $this->post(
            route('agent.documentStatus', $document->id),
            [
                'status' => 'tolak',
                'document_owner' => 'buyer',
            ]
        );

        $response->assertRedirect();

        $this->assertDatabaseHas('buyer__documents', [
            'transaction_id' => $this->transaction->id,
            'id' => $document->id,
            'is_approve_agen' => 0,
        ]);
    }

    public function test_agent_can_reject_seller_document(): void
    {
        $this->actingAs($this->agent->user);
        $this->transaction;

        $document = Seller_Document::create([
            'transaction_id' => $this->transaction->id,
            'document_name' => 'ktp.jpg',
            'document_type' => 'KTP',
            'file_path' => 'seller_documents/ktp.jpg',
            'is_approve_agen' => null,
        ]);

        $response = $this->post(
            route('agent.documentStatus', $document->id),
            [
                'status' => 'tolak',
                'document_owner' => 'seller',
            ]
        );

        $response->assertRedirect();

        $this->assertDatabaseHas('seller__documents', [
            'transaction_id' => $this->transaction->id,
            'id' => $document->id,
            'is_approve_agen' => 0,
        ]);
    }

}
