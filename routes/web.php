<?php

use App\Http\Controllers\AdminController;
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

    Route::get('/home', function () {
        return view('admin/home-admin', ["pageTitle" => "Dashboard"]);
    })->middleware("auth");

    Route::get('/account/manage', function () {
        return view('admin/manage-acc', [
            "pageTitle" => "Registrasi Agen dan Notaris"
        ]);
    })->middleware("auth");

    Route::get('/user', function () {
        return view('admin/user', [
            "pageTitle" => "Daftar Pengguna"
        ]);
    })->middleware("auth");
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
    Route::get('/appointment', function () {
        return view("agent/appointment");
    });

    Route::get('/appointment/{id}', function () {
        return view("agent/appointment-detail");
    });

    Route::get('/appointment/{id}/create-property', function () {
        return view("agent/create-property");
    });

    Route::get('/property', function () {
        return view("agent/property");
    });

    Route::get('/property/{id}', function () {
        return view("agent/detail-property");
    });

    Route::get('/property/{id}/publication', function () {
        return view("agent/publication-property");
    });

    Route::get('/offer', function () {
        return view("agent/offer");
    });
});
