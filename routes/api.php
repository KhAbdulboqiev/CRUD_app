<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Api\Usercontroller;

Route::apiResource('/users', UserController::class);
