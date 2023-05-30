<?php

use App\Http\Controllers\Eventscontroller;
use Illuminate\Support\Facades\Route;

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

route::get(('/'),[Eventscontroller::class,'index'])->name('index');
route::get(('event'),[Eventscontroller::class,'event'])->name('event');
route::post(('send_event'),[Eventscontroller::class,'sendevent'])->name('save_event');
route::get(('liste_event'),[Eventscontroller::class,'liste_event'])->name('liste_event');
route::get(('edit_event/{id}'),[Eventscontroller::class,'edit_event'])->name('edit_event');
route::put(('update_event/{id}'),[Eventscontroller::class,'update_event'])->name('update_event');
route::get(('destroy/{id}'),[Eventscontroller::class,'destroy'])->name('destroy');