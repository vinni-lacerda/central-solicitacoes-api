<?php

// As rotas de categorias e solicitações serão desenvolvidas nas issues.

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{id}', [CategoryController::class, 'find']);

Route::patch('/categories/{id}', [CategoryController::class, 'updateCategory']);

Route::delete('categories/{id}', [CategoryController::class, 'deleteCategory']);

Route::post('/tickets', [TicketController::class, 'storeTicket']);
