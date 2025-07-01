<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTransactionController;
use App\Http\Controllers\ProfileController;
use App\Models\ProductTransaction;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/search', [FrontController::class, 'search'])->name('front.search');
Route::get('/details/{product:slug}', [FrontController::class, 'details'])->name('front.product.details');
Route::get('/category/{category}', [FrontController::class, 'category'])->name('front.product.category');
Route::get('/products', [FrontController::class, 'allProducts'])->name('front.products.all');//percobaan
Route::get('/cart', [CartController::class, 'index'])->name('front.carts');
<<<<<<< HEAD
Route::post('/product_transactions', [ProductTransactionController::class, 'store'])->name('product_transactions.store');
Route::get('/success-checkout', [ProductTransactionController::class, 'success'])->name('success-checkout');
Route::get('/transaction/success', [ProductTransactionController::class, 'success']);

=======
Route::post('/checkout', [ProductTransactionController::class, 'store'])->name('product_transactions.store');
Route::get('/checkout/success', [ProductTransactionController::class, 'successCheckout'])->name('transactions.success-checkout');
>>>>>>> f65dc3e670c749ca9be81e4e3a0a66277f53b84a

//Route::get('/success-checkout', [ProductTransactionController::class, 'successCheckout'])->name('transactions.success-checkout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::resource('carts', CartController::class)->middleware('role:buyer');
    Route::post('/cart/add/{productId}', [CartController::class, 'store'])->middleware('role:buyer')->name('carts.store');

    Route::resource('product_transactions', ProductTransactionController::class)->middleware('role:owner|buyer');
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('products', ProductController::class)->middleware('role:owner');
        Route::resource('categories', CategoryController::class)->middleware('role:owner');
    });
});

require __DIR__.'/auth.php';
