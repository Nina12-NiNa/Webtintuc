<?php
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ThongKeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('backend', function(){
//     return view ("backend");
// })->middleware('auth','backend');
 
Route::get('backend/thongke', function () {
    return view('backend.thongke');
})->middleware(['auth', 'Quantri']);

Route::get('backend/danhsach', function () {
    return view('backend/danhsach');
})->middleware(['auth', 'check.group']);



// Route::get('/tin/{id}', [TinController::class, 'show']);

Route::get('/home', function(){
    return view ("/home");
})->middleware('auth');

Route::get('/quantritin',[QuanTriTinController::class,'index']);


Route::get('/',[TinController::class ,'index']);
Route::get('/tin/{id}',[TinController::class ,'chitiet']);
Route::get('/tintrongloai/{id}',[TinController::class ,'tintrongloai']);


Route::get('tin/{id}', [TinController::class, 'show']); // Các tin liên quan

Route::get('/search', [TinController::class, 'search'])->name('search');
//backend
// Menu Admin
Route::middleware(['check.group'])->group(function () {
    Route::get('backend/menu_admin', function () {
        return view('backend/menu_admin');
    })->name('backend.menu_admin');

    Route::get('/backend/thongke', [ThongKeController::class, 'index']);

    // Danh sách Tin
    Route::get('/backend/danhsach', [TinController::class, 'danhsach'])->name('backend.danhsach');
    Route::get('/backend/themtin', [TinController::class, 'them'])->name('tin.create');
    Route::post('/backend/themtin', [TinController::class, 'them_'])->name('tin.store');
    Route::get('/backend/capnhaptin/{id}', [TinController::class, 'capnhaptin'])->name('tin.edit');
    Route::post('/backend/capnhaptin/{id}', [TinController::class, 'capnhaptin_'])->name('tin.update');
    Route::get('/backend/danhsach/xoa/{id}', [TinController::class, 'xoa'])->name('tin.delete');

    // Loại Tin
    Route::get('/backend/loaitin', [LoaiTinController::class, 'loaitin'])->name('loaitin.index');
    Route::get('/backend/themLT', [LoaiTinController::class, 'them'])->name('loaitin.create');
    Route::post('/backend/themLT', [LoaiTinController::class, 'them_'])->name('loaitin.store');
    Route::get('/backend/loaitin/xoa/{id}', [LoaiTinController::class, 'xoa'])->name('loaitin.delete');

    // Người Dùng
    Route::get('/backend/users', [UsersController::class, 'index'])->name('users.index');
});


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');




require __DIR__.'/auth.php';