<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ChedSub\Index;


Route::get('/students-document', Index::class)->name('cs.index');
