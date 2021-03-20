<?php

use Illuminate\Support\Facades\Route;


Route::get('search', 'Nahorr\Giphy\GiphyController@search')->name('search');
