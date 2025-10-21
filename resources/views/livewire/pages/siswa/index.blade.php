<div>
    <h4 class="text-lg font-semibold mb-2">Daftar Siswa</h4>

    <livewire:siswa.form />

    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-gray-100">
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Orang Tua</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->nis }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->tanggal_lahir }}</td>
                <td>{{ implode(', ', $s->nama_orang_tua ?? []) }}</td>
                <td>
                    <button wire:click="delete('{{ $s->id }}')" class="text-red-500">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
