<?php
  use App\Core\Router;

  $router = new Router();

  // Public routes
  $router->get('/', 'HomeController@index');
  $router->get('about', 'HomeController@about');
  $router->get('services', 'HomeController@services');
  $router->get('doctors', 'HomeController@doctors');
  $router->get('contact', 'HomeController@contact');
  $router->post('contact/submit', 'HomeController@contactSubmit');

  // Auth routes
  $router->get('login', 'Auth\LoginController@showLoginForm');
  $router->post('login', 'Auth\LoginController@login');
  $router->get('register', 'Auth\RegisterController@showRegisterForm');
  $router->post('register', 'Auth\RegisterController@register');
  $router->get('logout', 'Auth\LoginController@logout');

  // Dashboard routes
  $router->get('dashboard/admin', 'HomeController@dashboard');
  $router->get('dashboard/doctor', 'DoctorController@dashboard');
  $router->get('dashboard/patient', 'PatientController@dashboard');
  $router->post('dashboard/book', 'PatientController@bookAppointment');

  // API routes
  $router->get('api/doctors', 'ApiController@getDoctors');
  $router->get('api/departments', 'ApiController@getDepartments');

  $router->dispatch();
  ?>