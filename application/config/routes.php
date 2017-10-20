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
$route['togglePrivacy/(:any)/(:any)/(:any)'] = 'Functions/togglePrivacy/$1/$2/$3';
$route['editDescription'] = 'Functions/editDescription';
$route['reportUser'] = 'Functions/reportUser';
$route['reportScrapbook'] = 'Functions/reportScrapbook';
$route['unlikeScrapbook/(:any)'] = 'Functions/unlikeScrapbook/$1';
$route['likeScrapbook/(:any)'] = 'Functions/likeScrapbook/$1';
$route['changeDP'] = 'Functions/changeDP';
$route['updateAccount'] = 'Functions/updateAccount';
$route['uploadAsset'] = 'Functions/uploadAsset';
$route['save'] = 'Functions/save';
$route['Logout'] = 'Functions/Logout';
$route['Login/(:any)/(:any)'] = 'MemoRecap/Login/$1/$2';
$route['Login/(:any)'] = 'MemoRecap/Login/$1';
$route['Signup'] = 'MemoRecap/Signup';
$route['Assets'] = 'MemoRecap/Assets';
$route['About'] = 'MemoRecap/About';
$route['Profile/(:any)'] = 'MemoRecap/Profile/$1';
$route['Account'] = 'MemoRecap/Account';
$route['Scrapbooks/(:any)'] = 'MemoRecap/Scrapbooks/$1';
$route['Scrapbooks'] = 'MemoRecap/Scrapbooks';
$route['editor/(:any)'] = 'MemoRecap/editor/$1';
$route['view/(:any)'] = 'MemoRecap/view/$1';
$route['delete/(:any)'] = 'MemoRecap/delete/$1';
$route['myScrapbooks'] = 'MemoRecap/myScrapbooks';
$route['Home'] = 'MemoRecap/Home';
$route['default_controller'] = 'MemoRecap';
$route['404_override'] = 'MemoRecap/four_oh_four';
$route['translate_uri_dashes'] = FALSE;
