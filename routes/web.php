<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost']);

Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/login', [AuthController::class, 'loginPost']);

Route::prefix("/admin")->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name("login");
    Route::post('/login', [AdminController::class, 'loginPost']);
    Route::post("/logout", [AdminController::class, 'logout']);

    Route::get('/home', [AdminController::class, 'home'])->middleware("auth");
    Route::get('/account/manage', [AdminController::class, 'accountManage'])->middleware("auth");
    Route::post('/account/manage', [AdminController::class, 'homePost'])->middleware("auth");
    
    Route::get('/user', [AdminController::class, 'user'])->middleware("auth");
});

Route::get('notary/home', function () {
    return view('notary/home');
});

Route::prefix('/users')->group(function (){
    Route::get('property', function () {
        return view('users/property');
    });
     Route::get('property/detail/{id}', function ($id) {
        return view('users/detail-property', compact('id'));
    })->name('property.detail');

});

Route::get('/users/choose/agent', function () {
    return view('users/choose-agent', [
        "link" => '/users/choose/agent',
        "title" => 'Pilih Agen Properti'
    ]);
});

Route::get('/users/property/add', function () {
    return view('users.add-property', [
        "link" => '/users/property',
        "title" => 'Pengajuan Penjualan Properti',
        'currentStep' => 1
    ]);
});

Route::get('/users/appoinment', function () {
    return view('users/appoinment');
});

Route::prefix('/agent')
->middleware("auth")
->group(function () {
    Route::get('/appointment', [AgentController::class, 'appointment']);
    Route::get('/appointment/{id}', [AgentController::class, 'appointmentDetail']);
    Route::post("/logout", [AuthController::class, 'logout']);

    Route::get('/appointment/{id}/create-property', [AgentController::class, 'createProperty']);
    Route::get('/property', [AgentController::class, 'property']);
    Route::get('/property/{id}', [AgentController::class, 'detailProperty']);
    Route::get('/property/{id}/publication', [AgentController::class, 'publication']);
    Route::get('/offer', [AgentController::class, 'offer']);
});
