<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->post('createuser', 'UserController@create');
$router->post('createquestion', 'QuestionController@create');
$router->post('submitanswer', 'AnswerController@submit');
$router->post('userlogin', 'UserController@login');
$router->post('createcategory', 'CategoryController@create');
$router->get('categories', 'CategoryController@get');
$router->get('getmyquestions/{user_id}', 'UserController@getQuestions');
$router->get('questions', 'QuestionController@getAll');
$router->get('questions/{category_id}', 'QuestionController@getByCategory');