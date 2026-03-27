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
    return view('admin/login', [
        "title" => "Welcome Admin",
        "subtitle" => "Masukkan kredensialmu untuk akses akunmu."
    ]);
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
    return view('admin/user', [
        "pageTitle" => "Daftar Pengguna"
    ]);
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
