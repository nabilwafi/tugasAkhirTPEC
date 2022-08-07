<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');

// Login & Register User
$routes->get('/login', 'Form::indexUser');
$routes->post('/login/to', 'Form::verifyUser');
$routes->get('/register', 'Form::registerUser');
$routes->post('/register/create', 'Form::addUser');

// Login & Register Company
$routes->get('/login/company', 'Form::indexCompany');
$routes->post('/login/company/to', 'Form::verifyCompany');
$routes->get('/register/company', 'Form::registerCompany');
$routes->post('/register/company/create', 'Form::addCompany');

// Pesanan
$routes->get('/take/services/(:segment)', 'Pesanan::index/$1');
$routes->post('/take/services/create', 'Pesanan::submitServices');
$routes->get('/data/pesanan/(:num)', 'Pesanan::dataPesanan/$1');

//upload bukti pembayaran
$routes->get('/upload/bukti-pembayaran/(:num)', 'Pesanan::UploadBuktiPage/$1');
$routes->post('/upload/bukti-pembayaran/edit/(:num)', 'Pesanan::DoUpload/$1');

//login Admin
$routes->get('/login/admin', 'Form::indexAdmin');
$routes->post('/login/admin/to', 'Form::verifyAdmin');

// Logout
$routes->get('/logout', 'Form::logout');

// ------------------------------------------------- //

// Super Admin Dashboard
$routes->get('/dashboard', 'Admin::index');

//Tampil Company Profile - Super Admin Dashboard
$routes->get('/dashboard/data/company', 'Admin::getCompany');

//Edit & Update Company Profile - Super Admin Dashboard
$routes->get('/dashboard/data/company/edit/(:num)', 'Admin::editComp/$1');
$routes->post('/dashboard/data/company/update/(:num)', 'Admin::updateComp/$1');

//Delete Company Profile - Super Admin Dashboard
$routes->delete('/dashboard/data/company/data_profile/(:num)', 'Admin::delete/$1');

//Tampil Users - Super Admin Dashboard
$routes->get('/dashboard/data/users', 'Admin::getCompanyUsr');
$routes->get('/dashboard/data/users_cus', 'Admin::getCustomerUsr');

//Edit & Update Users - Super Admin Dashboard
$routes->get('/dashboard/data/user/edit/(:num)', 'Admin::editUsr/$1');
$routes->post('/dashboard/data/user/update/(:num)', 'Admin::updateUsr/$1');

//Tampil Couriers - Super Admin Dashboard
$routes->get('/dashboard/data/courier', 'Admin::getCourier');

//Tambah Couriers
$routes->get('/dashboard/data/courier/tambah', 'Admin::tambahCou');
$routes->post('/dashboard/data/courier/simpan', 'Admin::simpanCou');

//Edit & Update Courier
$routes->get('/dashboard/data/courier/edit/(:num)', 'Admin::editCou/$1');
$routes->post('/dashboard/data/courier/update/(:num)', 'Admin::updateCou/$1');

//Delete Courier
$routes->delete('/dashboard/data/courier/data_courier/(:num)', 'Admin::deleteCou/$1');

//Tampil Transaksi
$routes->get('/dashboard/data/transaksi', 'Admin::getTransaction');



// ------------------------------------------------- //

//Company Dashboard
$routes->get('/dashboard/company', 'Company::index');

//company profile dashboard
$routes->get('/dashboard/company/profile/(:num)', 'Company::profilePerusahaan/$1');

//company edit & update profile dashboard
$routes->get('/dashboard/company/profile/editprofile/(:num)', 'Company::editProfile/$1');
$routes->post('/dashboard/company/profile/update/(:num)', 'Company::update/$1');

// Logout Company Dashboard
$routes->get('/company/logout', 'Company::logout');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
