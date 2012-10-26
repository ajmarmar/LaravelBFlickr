<?php

Route::get('(:bundle)/connect', 'bflickr::access@connect');
Route::get('(:bundle)/callback', function(){
					if ( Input::has('frob') ){
					    return Controller::call('bflickr::access@callback', array(Input::get('frob')));
					}
	});



