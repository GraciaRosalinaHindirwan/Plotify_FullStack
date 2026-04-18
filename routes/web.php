<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
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
    Route::get('/region', function () {
        return view('admin/region', [
            "pageTitle" => "Region Management"
        ]);
    })->middleware("auth");
    
    Route::get('/user', [AdminController::class, 'user'])->middleware("auth");
});

Route::get('notary/home', function () {
    return view('notary/home');
});

Route::prefix('/users')->group(function (){
    Route::get('property', [UsersController::class, 'property'])->middleware("auth");
    Route::get('property/detail/{id}', [UsersController::class, 'propertyDetail'])->name('property.detail');
     Route::get('property/add', [UsersController::class, 'addProperty'])->middleware("auth");
    Route::get('choose/agent', [UsersController::class, 'chooseAgent'])->middleware("auth");
    Route::get('appoinment', [UsersController::class, 'appoinment'])->middleware("auth");
    Route::get('review', [UsersController::class, 'review'])->middleware("auth");

    Route::get('negotiation', [UsersController::class, 'negotiation'])->middleware("auth");
    Route::get('negotiation/detail/{id}', [UsersController::class, 'negotiationDetail'])->name('negotiation.detail')->middleware("auth");
  
    Route::get('/transaction', function () {
        return view('users/transaction', [
        "propertyName" => "Modern Building House",
        "transactionType" => "Pembayaran Langsung",
        "price" => "IDR 500.000.000,00"
    ]);
    });

    Route::get('/transaction/method', function () {
        return view('users/method-transaction');
    });
});
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

Route::get('/notary/home', function () {
    return view('notary/home');
});
