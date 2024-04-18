<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\CategoryController;


    
    Route::get('/',  [AuthController::class, 'index'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
    Route::post('/register', [AuthController::class, 'registerAcc'])->name('register.auth');

    Route::get('/booklist', [BookController::class, 'bookList'])->name('booklist');
    Route::post('/booklist/create', [BookController::class, 'create'])->name('book.create');
    Route::patch('/booklist/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/booklist/delete/{id}', [BookController::class, 'destroy'])->name('book.delete');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/borrowlist', [BorrowController::class, 'borrowlist'])->name('borrowlist');

    Route::get('/export/book', [ExportController::class, 'book'])->name('export.book');
    Route::get('/export/user', [ExportController::class, 'user'])->name('export.user');
    Route::get('/export/category', [ExportController::class, 'category'])->name('export.category');
    Route::get('/export/borrow', [ExportController::class, 'borrow'])->name('export.borrow');

    Route::get('/user', [AuthController::class, 'user'])->name('user');
    Route::post('/user/create', [AuthController::class, 'create'])->name('user.create');
    Route::patch('/user/update/{id}', [AuthController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{id}', [AuthController::class, 'destroy'])->name('user.delete');

    Route::get('/borrow', [BorrowController::class, 'index'])->name('borrow');
    Route::patch('/borrow/add/{slug}', [BorrowController::class, 'borrow'])->name('borrow.add');
    Route::patch('/borrow/return/{id}', [BorrowController::class, 'return'])->name('borrow.return');

    Route::get('/review/{id}', [BookController::class, 'review'])->name('review');

    Route::get('/collection', [CollectionController::class, 'index'])->name('collection');
    Route::post('/collection/store', [CollectionController::class, 'store'])->name('collection.store');



    Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

