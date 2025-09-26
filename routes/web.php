<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bulma');
});

Route::get('/materialize', function () {
    return view('materialize');
});

Route::post('/form-submit', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

    dd([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);

    return back()->with('success', 'Form berhasil dikirim!');
})->name('form-materialize.submit');
Route::get('/bulma', function () {
    return view('bulma');
});

Route::post('/submit-form', [FormController::class, 'store'])->name('form_bulma.submit');