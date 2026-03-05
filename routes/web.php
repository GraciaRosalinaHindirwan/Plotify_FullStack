<?php

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

Route::get('/admin/login', function () {
    return view('admin/login');
});

Route::get('/admin/home', function () {
    return view('admin/home-admin', ["pageTitle" => "Dashboard"]);
});

Route::get('/admin/account/manage', function () {
    return view('admin/manage-acc', [
        "pageTitle" => "Registrasi Agen dan Notaris"
    ]);
});

Route::get('/admin/user', function () {
    return view('admin/user');
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
});
