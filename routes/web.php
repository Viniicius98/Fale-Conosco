<?php

use App\Mail\MensagemMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


Route::get('/meus-registros',function(){
    return view('site.meus-registros');
})->middleware('verified');;
Route::get('/enviar-solicitacao',function(){
    return view('site.formulario');
})->middleware('verified');;

// Route::get('/mensagem',function(){
//     return new MensagemMail();
//     // Mail::to('viniciuspa_silva@yahoo.com.br')->send(new MensagemMail());
//     // return ' E-mail enviado com sucesso';
// });
