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
    Route::get('/account/manage', [AdminController::class, 'accountManage']);
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

Route::prefix('/users')
    ->middleware("auth")
    ->group(function () {
        Route::get('property', [UsersController::class, 'property'])->name('users.property');
        Route::get('property/detail/{id}', [UsersController::class, 'propertyDetail'])->name('property.detail');
        Route::get('property/detail', [UsersController::class, 'propertyAction'])->name('users.propertyAction');

        Route::get('choose/agent', [UsersController::class, 'chooseAgent'])->name('users.chooseAgent');
        Route::post('choose/agent', [UsersController::class, 'chooseAgentAction'])->name('users.chooseAgentAction');

        Route::get('appoinment', [UsersController::class, 'appoinment'])->name('users.appointment');
        Route::post('appoinment', [UsersController::class, 'appoinmentPost'])->name('users.appointmentAction');
        Route::get('appoinment/list', [UsersController::class, 'listAppoinment'])->name('users.listAppoinment');
        Route::get('appoinment/detail/{id}', [UsersController::class, 'appoinmentDetail'])->name('users.AppoinmentDetail');
        Route::post('/appointment/{id}/apporve', [UsersController::class, 'approveAppointment'])->name("users.approveAppointment");

        Route::get('reschedule-appointment/{id}', [UsersController::class, 'rescheduleAppointment'])->name('users.rescheduleAppointment');
        Route::post('reschedule-appointment/{id}', [UsersController::class, 'rescheduleAppointmentAction'])->name('users.rescheduleAppointmentAction');

        Route::post('appoinment/detail/{id}', [UsersController::class, 'appoinmentDetailPost'])->name('users.appoinmentDetailPost');

        Route::get('review', [UsersController::class, 'review'])->name('users.review');

        Route::get('negotiation', [UsersController::class, 'negotiation']);
        Route::get('negotiation/detail/{id}', [UsersController::class, 'negotiationDetail'])->name('negotiation.detail');

        Route::get('/transaction', [UsersController::class, 'transaction']);
        Route::get('/transaction/method', [UsersController::class, 'transactionMethod'])->name('users.transactionMethod');
    });




Route::prefix('/agent')
    ->middleware("auth")
    ->group(function () {
        Route::get('/appointment', [AgentController::class, 'appointment'])->name("agent.appointmentList");
        Route::get('/appointment/{id}', [AgentController::class, 'appointmentDetail'])->name("agent.appointmentDetail");
        Route::post('/appointment/{id}/apporve', [AgentController::class, 'approveAppointment'])->name("agent.approveAppointment");
        Route::get('/reschedule-appointment/{id}', [AgentController::class, 'rescheduleAppointment'])->name("agent.rescheduleAppointment");
        Route::post('/reschedule-appointment/{id}', [AgentController::class, 'rescheduleAppointmentAction'])->name("agent.rescheduleAppointmentAction");
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
