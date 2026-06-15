<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Dragao;
use App\Models\Caverna;

// Listagem
Route::get('/dragoes', function () {
    $dragao = Dragao::all();
    return response()->json($dragao);
});

Route::get('/cavernas', function () {
    $caverna = Caverna::all();
    return response()->json($caverna);
});

// Listar por id
Route::get('/dragoes/{id}', function (int $id) {
    $dragao = Dragao::find($id);
    return response()->json($dragao);
});

Route::get('/cavernas/{id}', function (int $id) {
    $caverna = Caverna::find($id);
    return response()->json($caverna);
});

// Incluir
Route::post('/dragao', function (Request $request) {
    $dragao = new Dragao();

    $dragao->nome = $request->input('nome');
    $dragao->idade = $request->input('idade');
    $dragao->comprimento = $request->input('comprimento');
    $dragao->largura = $request->input('largura');
    $dragao->cor = $request->input('cor');
    $dragao->caverna_id = $request->input('caverna_id');

    $dragao->save();
    return response()->json($dragao);
});

Route::post('/caverna', function (Request $request) {
    $caverna = new Caverna();

    $caverna->nome = $request->input('nome');
    $caverna->altura = $request->input('altura');
    $caverna->largura = $request->input('largura');

    $caverna->save();
    return response()->json($caverna);
});