<?php

namespace App\Http\Livewire\Siswa;

use Livewire\Component;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
    public $nis, $nama, $jenis_kelamin, $tanggal_lahir;
    public $nama_orang_tua = [''];

    public function addOrangTua()
    {
        $this->nama_orang_tua[] = '';
    }

    public function removeOrangTua($index)
    {
        unset($this->nama_orang_tua[$index]);
        $this->nama_orang_tua = array_values($this->nama_orang_tua);
    }

    public function store()
    {
        $this->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        Siswa::create([
            'user_id' => Auth::id(),
            'nis' => $this->nis,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
            'nama_orang_tua' => $this->nama_orang_tua,
        ]);

        $this->reset();
        $this->emit('refreshSiswa');
    }

    public function render()
    {
        return view('livewire.pages.siswa.form');
    }
}

