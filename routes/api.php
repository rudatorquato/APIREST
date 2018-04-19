<?php

//Route::group([

    //'middleware' => 'api',
    //'prefix' => 'auth'

//], function () {
    
    Route::post('register', 'Auth\RegisterController@create');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('payload', 'AuthController@payload');
    
   

//});

Route::middleware(['jwt.auth'])->group(function(){
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');
});

/**
 * iss = emissor
 * iat = emitida em
 * exp = tempo de expiração
 * nbf = não antes) identifica o tempo antes do qual o JWT NÃO DEVE ser aceite para processamento
 * jti = JWT ID
 * sub = assunto
 * prv = 
 * https://tools.ietf.org/html/rfc7519#section-4.1
 */
