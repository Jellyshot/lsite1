<?php

use App\Admin\Controllers\UserController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    // url admin폴더 뒤에 users라고 치면 UserController에 저장해 높은 루트의 class데이터가 붙도록 함.
    $router->resource('users', UserController::class);
    $router->resource('articles', ArticleController::class);
});
