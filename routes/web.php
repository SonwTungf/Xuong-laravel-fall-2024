<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Financial_ReportController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentsSubjectController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\Authenticate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('client.index');
});

Route::get('post-details', function () {

    return view('client.post-details');
});


Route::resource('customers', CustomerController::class)->middleware('auth');

Auth::routes();


Route::delete('customers/{customers}/forceDestroy', [CustomerController::class, 'forceDestroy'])
    ->name('customers.forceDestroy');

Route::get('/users', function () {
    $data = User::paginate();
    return view('user-list', compact('data'));
});

// Route::get('session', function () {
//     session()->put('orders.101', [
//         'name' => 'sp1',
//         'price' => 2222
//     ]);

//     session()->flash('choi ke', 'okee choi luon');

//     session('choi ke');
//     return session()->all();
// });





//====================================BAI TAP=====================================================//


//BUOI 1
// $results = DB::table('users')
//     ->join('orders', 'users.id', '=', 'orders.user_id')
//     ->select('users.name', 'orders.id')
//     ->get();

// $results = DB::table('orders')
//     ->whereBetween('created_at', ['2023-01-01', '2023-01-31'])
//     ->count();

// $results = DB::table('products as p')
//     ->whereNotExists(function ($query) {
//         $query->select(DB::raw(1))
//             ->from('order_items')
//             ->whereRaw('order_items.product_id = p.id');
//     })
//     ->get();

// $results = DB::table('users')
//     ->join('orders', 'users.id', '=', 'orders.user_id')
//     ->join('order_items', 'orders.id', '=', 'order_items.order_id')
//     ->join('products', 'order_items.product_id', '=', 'products.id')
//     ->select('users.name', 'products.name', 'orders.created_at')
//     ->where('orders.created_at', '>=', DB::raw('NOW() - INTERVAL 30 DAY'))
//     ->get();

// $results = DB::table('orders')
//     ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(total_amount) as total_revenue'))
//     ->where('status', '=', 'completed')
//     ->groupBy(DB::raw('MONTH(created_at)'))
//     ->get();

// $results = DB::table('products')
//     ->whereNotExists(function ($query) {
//         $query->select(DB::raw(1))
//             ->from('order_items')
//             ->whereRaw('order_items.product_id = products.id');
//     })
//     ->get();

// $results = DB::table('orders')
//     ->join('order_items', 'orders.id', '=', 'order_items.order_id')
//     ->select('order_items.category_id', DB::raw('MAX(orders.total_amount) as highest_revenue'))
//     ->groupBy('order_items.category_id')
//     ->get();

// $avg = DB::table('orders')->avg('total_amount');
// $results = DB::table('orders')
//     ->where('total_amount', '>', $avg)
//     ->get();

// $results = DB::table('products')
//     ->select('category_id', 'product_id', DB::raw('MAX(sales) as max_sales'))
//     ->groupBy('category_id')
//     ->get();


//Buoi 2

Route::get('/doanhthu', function () {
    $sales = DB::table('sales')
        ->selectRaw('SUM(total) as total_sales, MONTH(sale_date) as month, YEAR(sale_date) as year')
        ->groupBy(DB::raw('MONTH(sale_date)'), DB::raw('YEAR(sale_date)'))
        ->get();
    dd($sales);
});

Route::get('/chiphi', function () {
    $expenses = DB::table('expenses')
        ->selectRaw('SUM(amount) as total_expenses, MONTH(expense_date) as month, YEAR(expense_date) as year')
        ->groupBy(DB::raw('MONTH(expense_date)'), DB::raw('YEAR(expense_date)'))
        ->get();
    dd($expenses);
});
Route::get('/generate-financial-report', [Financial_ReportController::class, 'generateFinancialReport']);


// //Buoi 4
// Route::get('/19Phim', [MovieController::class, 'index'])->middleware('kiemtratuoi');

// Route::get('/rap-phim-19/{age}', function ($age) {
//     session(['age' => $age]);
//     return redirect('/19Phim');
// });

// Route::get('/quyen-truy-cap/{role}', function ($role) {
//     session(['role' => $role]);
//     return redirect('/');
// });

// Route::middleware(['kiemtraadmin:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// });

// Route::middleware(['kiemtraadmin:nhanvien'])->group(function () {
//     Route::get('/nhanvien', [OrderController::class, 'index'])->name('orders.index');
// });

// Route::middleware(['kiemtraadmin:khachhang'])->group(function () {
//     Route::get('/khachhang', [ProfileController::class, 'index'])->name('profile.index');
// });


// //BUOI 5

Route::get('/transaction/start', [TransactionController::class, 'startTransaction'])->name('transaction.start');
Route::post('/transaction/process', [TransactionController::class, 'processTransaction'])->name('transaction.process');
Route::post('/transaction/complete', [TransactionController::class, 'completeTransaction'])->name('transaction.complete');
Route::post('/transaction/cancel', [TransactionController::class, 'cancelTransaction'])->name('transaction.cancel');
Route::get('/transaction/resume', [TransactionController::class, 'resumeTransaction'])->name('transaction.resume');


Route::resource('students', StudentsSubjectController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('passports', PassportController::class);
Route::resource('students_subjects', StudentsSubjectController::class);
