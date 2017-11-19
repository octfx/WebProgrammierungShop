<?php $router = app()->make(\App\SparkPlug\Routing\Router::class);

$router->get('/', 'PageController@showIndexView')->name('index');
$router->get('/login', 'User\Auth\LoginController@showLoginView')->name('login');
$router->get('/register', 'User\Auth\RegisterController@showRegisterView')->name('register');
$router->get('/gallery', 'Ria\GalleryController@showGalleryView')->name('gallery');
$router->get('/ria/[0]', 'Ria\RiaController@showRiaDetailsView')->name('riaDetails');
$router->get('/profile', 'User\AccountController@showProfileView')->name('profile');
