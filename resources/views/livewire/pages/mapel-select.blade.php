<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Pilih Mata Pelajaran yang Anda Ajar</h2>

    <form wire:submit.prevent="save">
        <div class="grid grid-cols-2 gap-4 mb-6">
            @foreach ($mapels as $mapel)
                <label class="flex items-center space-x-2">
                    <input type="checkbox"
                           wire:model="selectedMapels"
                           value="{{ $mapel->id }}"
                           class="rounded text-blue-500 focus:ring-blue-400">
                    <span>{{ $mapel->nama_mapel }}</span>
                </label>
            @endforeach
        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan Pilihan
        </button>
    </form>

    @if (session()->has('message'))
        <div class="mt-4 text-green-600 font-semibold">
            {{ session('message') }}
        </div>
    @endif
</div>
