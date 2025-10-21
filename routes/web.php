<?php

use Illuminate\Support\Facades\Route;

// Livewire Pages
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\MapelSelect as MapelSelect;
use App\Livewire\Pages\Siswa\Index as SiswaIndex;
use App\Livewire\Pages\Nilai\Index as NilaiIndex;
use App\Livewire\Pages\Nilai\Form as NilaiForm;

Route::view('/', 'welcome')->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Mapel
    Route::get('/mapel/pilih', MapelSelect::class)->name('mapel.select');

    // Siswa
    Route::get('/siswa', SiswaIndex::class)->name('siswa.index');

    // Nilai (Harian, UTS, UAS)
    Route::get('/nilai', NilaiIndex::class)->name('nilai.index');
    Route::get('/nilai/create', NilaiForm::class)->name('nilai.create');
    Route::get('/nilai/edit/{id}', NilaiForm::class)->name('nilai.edit');

    // Profil
    Route::view('/profile', 'profile')->name('profile');
});

require __DIR__.'/auth.php';
