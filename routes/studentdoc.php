<?php

use App\Http\Livewire\StudentDoc\CertificateOfEnrollment;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StudentDoc\Index;
use App\Http\Livewire\StudentDoc\ViewFile;

Route::get('/students-document', Index::class)->name('sd.index');
Route::get('/student-document-certificate-of-enrollment', CertificateOfEnrollment::class)->name('sd.co-enrollment');


Route::get('/student-view-document/{student}', ViewFile::class)->name('sd.viewfile');
