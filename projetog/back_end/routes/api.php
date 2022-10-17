<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tabela_redirect;
use App\Models\Tabela_link;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/env', function(Request $request){
    $dados = $request->all();
    $env = Tabela_redirect::create([
        'nome_link' => $dados['nome_link'],
        'link_hash' => $dados['link_hash'],
        'total_max_click' => $dados['total_max_click']
    ]);
    return $env;
});

Route::get('/receber', function(){
    return Tabela_redirect::all();
});

Route::post('/saida', function(Request $request){
    $dados = $request->all();
    $saida = Tabela_link::create([
        'link' => $dados['link'],
        'click' => $dados['click'],
        'max_click' => $dados['max_click']
    ]);
});