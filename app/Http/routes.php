<?php

# home & organization
Route::get('/', ['as' => 'home', 'uses' => 'IndexController@home']);
Route::get('org', ['as' => 'org.about', 'uses' => 'OrgController@about']);
Route::get('org/faq', ['as' => 'org.faq', 'uses' => 'OrgController@faq']);
Route::get('org/policies', ['as' => 'org.policies', 'uses' => 'OrgController@policies']);
Route::get('org/team', ['as' => 'org.team', 'uses' => 'OrgController@team']);
Route::get('org/terms', ['as' => 'org.terms', 'uses' => 'OrgController@terms']);
Route::get('org/contact', ['as' => 'org.contact', 'uses' => 'OrgController@contact']);

# mains
