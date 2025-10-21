<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Mapel;
use Illuminate\Support\Facades\Auth;

class MapelSelect extends Component
{
    public $selectedMapels = [];

    public function mount()
    {
        $this->selectedMapels = Auth::user()->mapels->pluck('id')->toArray();
    }

    public function save()
    {
        $user = Auth::user();
        $user->mapels()->sync($this->selectedMapels);

        session()->flash('message', 'Data mapel berhasil diperbarui!');
    }

    public function render()
    {
        return view('livewire.pages.mapel-select', [
            'mapels' => Mapel::all(),
        ]);
    }
}
