<x-app-layout>
    <div class="flex">
        {{-- Sidebar --}}
        <x-navigation.sidebar />

        {{-- Konten utama --}}
        <div class="flex-1 ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-6 text-gray-700">Dashboard Guru</h2>

            {{-- Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <x-stats-card title="Jumlah Siswa" :value="$jumlahSiswa" icon="users" />
                <x-stats-card title="Mapel Aktif" :value="$jumlahMapel" icon="book-open" />
                <x-stats-card title="Data Nilai" :value="$jumlahNilai" icon="calculator" />
            </div>

            {{-- Info tambahan --}}
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-lg font-semibold text-gray-700 mb-3">
                    Selamat datang, {{ Auth::user()->name }} 👋
                </h3>
                <p class="text-gray-600">
                    Gunakan menu di sebelah kiri untuk mulai mengelola data siswa, memilih mapel, dan mengisi nilai.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
