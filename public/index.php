<?php
require_once '../app/core/Application.php';

$app = new Application();

Router::get('/signup', 'signup');
Router::post('/signup',[UserController::class, 'signup']);
Router::get('/login', 'login');
Router::post('/login',[UserController::class, 'login']);

Router::get('/',[WikisController::class, 'getAllWikis']);
Router::get('/contentWiki',[WikisController::class, 'getWikiById']);
Router::get('/dashWiki',[WikisController::class, 'getWikis']);
Router::get('/dashboard',[WikisController::class, 'getAllWikis']);
Router::get('/deleteWiki', [WikisController::class,'deleteWiki']);

Router::get('/dashTag',[TagController::class, 'getAllTag']);
Router::get('/addTag', 'addTag');
Router::post('/addTag',[TagController::class, 'addTag']);
Router::get('/updateTag', 'updateTag');
Router::post('/updateTag',[TagController::class, 'updateTag']);
Router::get('/deleteTag', [TagController::class,'deleteTag']);
Router::get('/updateTag', [TagController::class,'updateTag']);

Router::get('/dashCategory',[CategoryController::class, 'getAllCategory']);
Router::get('/addCategory', 'addCategory');
Router::post('/addCategory',[CategoryController::class, 'addCategory']);
Router::get('/deleteCategory', [CategoryController::class,'deleteCategory']);


$app->run();        