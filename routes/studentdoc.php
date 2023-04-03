<?php

use App\Http\Livewire\StudentDoc\CertificateOfEnrollment;
use App\Http\Livewire\StudentDoc\COGrades\Index as COGradesIndex;
use App\Http\Livewire\StudentDoc\COGrades\View as COGradesView;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StudentDoc\Index;
use App\Http\Livewire\StudentDoc\ViewFile;
use App\Http\Livewire\StudentDoc\COR\Index as CorIndex;
use App\Http\Livewire\StudentDoc\COR\View;
use App\Http\Livewire\StudentDoc\COG\Index as COGIndex;
use App\Http\Livewire\StudentDoc\COG\View as COGView;
use App\Http\Livewire\StudentDoc\COLH\Index as COLHIndex;
use App\Http\Livewire\StudentDoc\COLH\View as COLHView;
use App\Http\Livewire\StudentDoc\CMI\Index as CMIIndex;
use App\Http\Livewire\StudentDoc\CMI\View as CMIView;
use App\Http\Livewire\StudentDoc\FORM137Req\Index as FORM137ReqIndex;
use App\Http\Livewire\StudentDoc\FORM137Req\View as FORM137ReqView;
use App\Http\Livewire\StudentDoc\GMC\Index as GMCIndex;
use App\Http\Livewire\StudentDoc\GMC\View as GMCView;
use App\Http\Livewire\StudentDoc\COE4\Index as COE4Index;
use App\Http\Livewire\StudentDoc\COE4\View as COE4View;
use App\Http\Livewire\StudentDoc\TORP\Index as TORPIndex;
use App\Http\Livewire\StudentDoc\TORP\View as TORPView;
use App\Http\Livewire\StudentDoc\TOROC\Index as TOROCIndex;
use App\Http\Livewire\StudentDoc\TOROC\View as TOROCView;
use App\Http\Livewire\StudentDoc\TORORIGINAL\Index as TORORIGINALIndex;
use App\Http\Livewire\StudentDoc\TORORIGINAL\View as TORORIGINALView;
use App\Http\Livewire\StudentDoc\HDTC\Index as HDTCIndex;
use App\Http\Livewire\StudentDoc\HDTC\View as HDTCView;
use App\Http\Livewire\StudentDoc\EP\Index as EPIndex;
use App\Http\Livewire\StudentDoc\EP\View as EPView;
use App\Http\Livewire\StudentDoc\SG\Index as SGIndex;
use App\Http\Livewire\StudentDoc\SG\View as SGView;

Route::get('/students-document', Index::class)->name('sd.index');

//Certificate of Enrollment
Route::get('/student-document-certificate-of-enrollment', CertificateOfEnrollment::class)->name('sd.co-enrollment');
Route::get('/student-view-document/{student}', ViewFile::class)->name('sd.viewfile');

//Certificate of Registration
Route::get('/students-document-cor', CorIndex::class)->name('sd.cor');
Route::get('/student-view-document-cor/{student}', View::class)->name('sd.corviewfile');

//Certificate of Grades
Route::get('/students-document-cogrades', COGradesIndex::class)->name('sd.cogrades');
Route::get('/student-view-document-cogrades/{student}', COGradesView::class)->name('sd.cogradesviewfile');

//Certificate of Graduation
Route::get('/students-document-cog', COGIndex::class)->name('sd.cog');
Route::get('/student-view-document-cog/{student}', COGView::class)->name('sd.cogviewfile');

//Certification of Latin Honors
Route::get('/students-document-colh', COLHIndex::class)->name('sd.colh');
Route::get('/student-view-document-colh/{student}', COLHView::class)->name('sd.colhviewfile');

//Certification Medium of Instruction
Route::get('/students-document-cmi', CMIIndex::class)->name('sd.cmi');
Route::get('/student-view-document-cmi/{student}', CMIView::class)->name('sd.cmiviewfile');

//Request of form137 for previous schools
Route::get('/students-document-form137req', FORM137ReqIndex::class)->name('sd.form137req');
Route::get('/student-view-document-form137req/{student}', FORM137ReqView::class)->name('sd.form137reqviewfile');

//Good Moral Character
Route::get('/students-document-gmc', GMCIndex::class)->name('sd.gmc');
Route::get('/student-view-document-gmc/{student}', GMCView::class)->name('sd.gmcviewfile');

//Certificate of enrollment 4p's
Route::get('/students-document-coe4', COE4Index::class)->name('sd.coe4');
Route::get('/student-view-document-coe4/{student}', COE4View::class)->name('sd.coe4viewfile');

//Transcript of Records (TOR) PHOTOCOPY
Route::get('/students-document-torp', TORPIndex::class)->name('sd.torp');
Route::get('/student-view-document-torp/{student}', TORPView::class)->name('sd.torpviewfile');

//Transcript of Records (TOR) OFFICIAL COPY
Route::get('/students-document-toroc', TOROCIndex::class)->name('sd.toroc');
Route::get('/student-view-document-toroc/{student}', TOROCView::class)->name('sd.torocviewfile');

//Transcript of Records (TOR) ORIGINAL COPY
Route::get('/students-document-tororiginal', TORORIGINALIndex::class)->name('sd.tororiginal');
Route::get('/student-view-document-tororiginal/{student}', TORORIGINALView::class)->name('sd.tororiginalviewfile');

//Honorable Dismissal Transfer Credential
Route::get('/students-document-hdtc', HDTCIndex::class)->name('sd.hdtc');
Route::get('/student-view-document-hdtc/{student}', HDTCView::class)->name('sd.hdtcviewfile');

//Examination Permit
Route::get('/students-document-ep', EPIndex::class)->name('sd.ep');
Route::get('/student-view-document-ep/{student}', EPView::class)->name('sd.epviewfile');

//Semestral Grades
Route::get('/students-document-sg', SGIndex::class)->name('sd.sg');
Route::get('/student-view-document-sg/{student}', SGView::class)->name('sd.sgviewfile');
