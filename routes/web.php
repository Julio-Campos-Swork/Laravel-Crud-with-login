<?php
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('companies', CompanyController::class);
Route::get('/vue', function () {
    return view('/vue/app');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/contacto','contact')->name('contact');

// Route::get('/blog',[PostController::class, 'index'])->name('post.index');
// Route::get('/blog/create',[PostController::class, 'create'])->name('post.create');
// Route::post('/blog', [PostController::class, 'store'])->name("post.store");
// Route::get('/blog/{post}',[PostController::class, 'show'])->name('post.show');
// Route::get('/blog/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
// Route::patch('/blog/{post}',[PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}',[PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog'=>'post']
]);


Route::view('/about','about')->name('about');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
