<div class="border p-3 rounded mb-4">
    <input type="text" wire:model="nis" placeholder="NIS" class="border p-1 rounded w-full mb-2">
    <input type="text" wire:model="nama" placeholder="Nama Siswa" class="border p-1 rounded w-full mb-2">

    <select wire:model="jenis_kelamin" class="border p-1 rounded w-full mb-2">
        <option value="">-- Jenis Kelamin --</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>

    <input type="date" wire:model="tanggal_lahir" class="border p-1 rounded w-full mb-2">

    <label>Nama Orang Tua:</label>
    @foreach ($nama_orang_tua as $index => $ortu)
        <div class="flex mb-1 gap-2">
            <input type="text" wire:model="nama_orang_tua.{{ $index }}" class="border p-1 rounded w-full">
            <button type="button" wire:click="removeOrangTua({{ $index }})" class="text-red-500">x</button>
        </div>
    @endforeach
    <button type="button" wire:click="addOrangTua" class="text-blue-500 text-sm mb-2">+ Tambah Orang Tua</button>

    <button wire:click="store" class="bg-blue-500 text-white px-4 py-1 rounded">Simpan</button>
</div>
