<?php
use lib\Route;
use app\controllers\IndexController;

Route::get("/", [IndexController::class,"index"]);
Route::post("/resultados", [IndexController::class,"resultado"]);


Route::dispatch();
?>