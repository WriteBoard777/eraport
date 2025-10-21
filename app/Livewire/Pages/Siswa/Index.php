<?php

namespace App\Livewire\Pages\Siswa;

use Livewire\Component;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $siswa;

    protected $listeners = ['refreshSiswa' => '$refresh'];

    public function mount()
    {
        $this->siswa = Siswa::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.pages.siswa.index');
    }

    public function delete($id)
    {
        Siswa::findOrFail($id)->delete();
        $this->emit('refreshSiswa');
    }
}
