<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user'] = 'user/index';
$route['user/sign-up'] = 'user/signUp';
$route['user/login'] = 'user/signIn';
$route['logout'] = "user/logout";
$route['edit/(:any)'] = "user/edit/$1";
$route['edit-period/(:any)'] = "user/editPeriod/$1";
$route['data/(:any)'] = "user/data/$1";
$route['symptom-log/(:any)'] = "user/symptomLog/$1";
$route['medication-reminder/(:any)'] = "user/medicationReminder/$1";
$route['doctor-reminder/(:any)'] = "user/doctorReminder/$1";
$route['user/doctor'] = "user/doctorcal";
$route['user/period'] = "user/period";
$route['user/update'] = "user/update";
$route['user/period-update'] = "user/periodUpdate";
$route['user/dashboard'] = 'user/dashboard';
$route['user/process-sign-up'] = 'user/processSignUp';
$route['user/insert-symptoms'] = 'user/insertSymptoms';
$route['user/insert-medication'] = 'user/insertMedication';
$route['user/insert-doctors-appoinment'] = 'user/insertDoctorsAppoinment';
$route['user/insert-period'] = 'user/insertPeriod';
$route['user/symptoms'] = 'user/symptoms';
$route['user/medication'] = 'user/medication';
$route['user/pdf/(:any)'] = 'GeneratePdfController/index/$1';
$route['user/age-tips'] = 'user/ageTips';
$route['filter'] = "Product_filter";
$route['cal'] = "mycal";



//Static Pages
$route['news'] = "Home/news";
$route['reports'] = "Home/reports";
$route['hospitals'] = "Home/hospital";
$route['ambulance'] = "Home/ambulance";
$route['freezer'] = "Home/freezer";
$route['Tips'] = "Home/generaltips";
$route['ageTips'] = "Home/agetips";
$route['causeEffect'] = "Home/symptomtips";
$route['symptomTips'] = "Product_filter";



// Features

$route['periodCycle'] = "Home/periodCycle";
$route['healthTips'] = "Home/healthTips";
$route['healthAssistence'] = "Home/healthAssistence";
$route['healthDirectory'] = "Home/healthDirectory";
$route['awareness'] = "Home/awareness";