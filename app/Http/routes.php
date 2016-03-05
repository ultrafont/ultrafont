<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::group(['prefix' => 'es'], function () {
    Route::get('privacy', ['as' => 'privacy', 'uses' => 'HomeController@privacy']);
    Route::get('techies', ['as' => 'techies', 'uses' => 'HomeController@techies']);  
    Route::get('faq', ['as' => 'faq', 'uses' => 'HomeController@faq']);  
    Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
    Route::post('contactStore', ['as' => 'contactStore', 'uses' => 'HomeController@contactStore']); 
});