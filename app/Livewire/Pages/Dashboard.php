<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $jumlahSiswa;
    public $jumlahMapel;
    public $jumlahNilai;

    public function mount()
    {
        $user = Auth::user();

        $this->jumlahSiswa = Siswa::where('user_id', $user->id)->count();
        $this->jumlahMapel = $user->mapels()->count();
        $this->jumlahNilai = Nilai::where('user_id', $user->id)->count();
    }

    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
