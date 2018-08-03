<?php

Route::get('/', 'PagesController@root')->name('root');


























Route::get('/test', 'Test\TestController@test');
