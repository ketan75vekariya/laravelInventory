<?php

use App\Admin\Controllers\AddressController;
use App\Admin\Controllers\BrandController;
use App\Admin\Controllers\CarrierController;
use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\CompanyController;
use App\Admin\Controllers\CustomerController;
use App\Admin\Controllers\DashboardController;
use App\Admin\Controllers\ImageController;
use App\Admin\Controllers\InvoiceController;
use App\Admin\Controllers\ItemController;
use App\Admin\Controllers\ManufactureController;
use App\Admin\Controllers\OnlineOrderController;
use App\Admin\Controllers\PackageController;
use App\Admin\Controllers\PhoneController;
use App\Admin\Controllers\PoslineOrderController;
use App\Admin\Controllers\ShipmentController;
use App\Admin\Controllers\SupplierController;
use App\Admin\Controllers\SystemUserController;
use App\Admin\Controllers\SystemUserRoleController;
use App\Admin\Controllers\UnitController;
use App\Admin\Controllers\WarehouseController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->resource('/', DashboardController::class);
    $router->resource('companies', CompanyController::class);
    $router->resource('addresses', AddressController::class);
    $router->resource('brands', BrandController::class);
    $router->resource('carriers', CarrierController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('customers', CustomerController::class);
    $router->resource('images', ImageController::class);
    $router->resource('invoices', InvoiceController::class);
    $router->resource('items', ItemController::class);
    $router->resource('manufactures', ManufactureController::class);
    $router->resource('online-orders', OnlineOrderController::class);
    $router->resource('packages', PackageController::class);
    $router->resource('phones', PhoneController::class);
    $router->resource('posline-orders', PoslineOrderController::class);
    $router->resource('shipments', ShipmentController::class);
    $router->resource('suppliers', SupplierController::class);
    $router->resource('system-users', SystemUserController::class);
    $router->resource('system-user-roles', SystemUserRoleController::class);
    $router->resource('units', UnitController::class);
    $router->resource('warehouses', WarehouseController::class);
    $router->get('documentation', 'HomeController@index')->name('home');

});
