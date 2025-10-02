<?php
use lib\Route;
use app\controllers\IndexController;

Route::get("/", [IndexController::class,"index"]);

Route::dispatch();
?>