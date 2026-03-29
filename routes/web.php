<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::prefix("/admin")->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name("login");
    Route::post('/login', [AdminController::class, 'loginPost']);
    Route::post("/logout", [AdminController::class, 'logout']);
    Route::get('/home', [AdminController::class, 'home'])->middleware("auth");
    Route::get('/account/manage', [AdminController::class, 'accountManage'])->middleware("auth");
    Route::get('/user', [AdminController::class, 'user'])->middleware("auth");
});

Route::get('/pemilik/choose/agent', function () {
    return view('pemilik/choose-agent');
});

Route::get('/pemilik/property/add', function () {
    return view('pemilik/add-property');
});

Route::get('/pemilik/appoinment', function () {
    return view('pemilik/appoinment');
});

Route::prefix('/agent')->group(function () {
    Route::get('/appointment', [AgentController::class, 'appointment']);
    Route::get('/appointment/{id}', [AgentController::class, 'appointmentDetail']);
    Route::get('/appointment/{id}/create-property', [AgentController::class, 'createProperty']);
    Route::get('/property', [AgentController::class, 'property']);
    Route::get('/property/{id}', [AgentController::class, 'detailProperty']);
    Route::get('/property/{id}/publication', [AgentController::class, 'publication']);
    Route::get('/offer', [AgentController::class, 'offer']);
});
