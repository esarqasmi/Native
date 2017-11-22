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
|	http://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//======== ADMIN ===============
 $route['admin'] = 'admin/Login';
$route['admin/login'] = 'admin/Login/login';
$route['admin/logout'] = 'admin/Login/logout';
$route['admin/dashboard'] = 'admin/Admin';

$route['admin/testimonials'] = 'admin/Testimonials';
$route['admin/add_testimonials'] = 'admin/Testimonials/add_testimonial';

$route['admin/map'] = 'admin/Admin/map';
$route['admin/add_map'] = 'admin/Admin/add_map';

$route['admin/team'] = 'admin/Team';
$route['admin/add_team'] = 'admin/Team/add_team';
$route['admin/projects'] = 'admin/Projects';
$route['admin/add_projects'] = 'admin/Projects/add_projects';

$route['admin/messages'] = 'admin/Contact'; 
$route['admin/reply/(:num)'] = 'admin/Contact/reply/$1'; 
$route['admin/send_reply'] = 'admin/Contact/send_reply'; 

//======== Front ===============
$route['display_messages'] = 'Main/message';
$route['contact/save'] = 'Main/add_contact';
$route['contact'] = 'Main/contact_page';

