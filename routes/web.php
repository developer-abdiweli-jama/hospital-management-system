<?php
use App\Core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/about', 'HomeController@about');
$router->get('/services', 'HomeController@services');
$router->get('/doctors', 'HomeController@doctors');
$router->get('/contact', 'HomeController@contact');
$router->post('/contact/submit', 'HomeController@contactSubmit');
$router->get('/login', 'Auth\LoginController@index');
$router->post('/login', 'Auth\LoginController@login');
$router->get('/logout', 'Auth\LoginController@logout');
$router->get('/register', 'Auth\RegisterController@index');
$router->post('/register', 'Auth\RegisterController@register');
$router->get('/dashboard/admin', 'HomeController@dashboard');
$router->get('/dashboard/doctor', 'DoctorController@dashboard');
$router->get('/dashboard/patient', 'PatientController@dashboard');
$router->post('/dashboard/book', 'PatientController@bookAppointment');

$router->dispatch();
?>