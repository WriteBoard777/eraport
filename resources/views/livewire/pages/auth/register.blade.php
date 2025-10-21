<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $kelas = '';
    public string $asal_sekolah = '';
    public string $nama_kepala_sekolah = '';
    public string $npsn = '';
    public string $tahun_ajaran = '';
    public string $semester = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'kelas' => ['required', 'string', 'max:255'],
            'asal_sekolah' => ['required', 'string', 'max:255'],
            'nama_kepala_sekolah' => ['required', 'string', 'max:255'],
            'npsn' => ['required', 'string', 'max:255'],
            'tahun_ajaran' => ['required', 'string', 'max:255'],
            'semester' => ['required', 'string', 'max:255'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        // Auth::login($user);

        $this->redirect(route('login', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register" class="space-y-4 md:space-y-6">
        <div class="flex w-full gap-6 justify-center">
            <div class="w-full">
                <!-- Name -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                            
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                                
                <!-- Semester -->
                <div class="mt-4">
                    <x-input-label for="semester" :value="__('Semester')" />
                    <x-text-input wire:model="semester" id="semester" class="block mt-1 w-full" type="text" name="semester" required autofocus autocomplete="semester" />
                    <x-input-error :messages="$errors->get('semester')" class="mt-2" />
                </div>
            </div>

            <div class="w-full">
                <!-- Kelas -->
                <div class="mt-4">
                    <x-input-label for="kelas" :value="__('Kelas')" />
                    <x-text-input wire:model="kelas" id="kelas" class="block mt-1 w-full" type="text" name="kelas" required autofocus autocomplete="kelas" />
                    <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                </div>
                
                <!-- Asal Sekolah -->
                <div class="mt-4">
                    <x-input-label for="asal_sekolah" :value="__('Asal Sekolah')" />
                    <x-text-input wire:model="asal_sekolah" id="asal_sekolah" class="block mt-1 w-full" type="text" name="asal_sekolah" required autofocus autocomplete="asal_sekolah" />
                    <x-input-error :messages="$errors->get('asal_sekolah')" class="mt-2" />
                </div>
                
                <!-- Nama Kepala Sekolah -->
                <div class="mt-4">
                    <x-input-label for="nama_kepala_sekolah" :value="__('Nama Kepala Sekolah')" />
                    <x-text-input wire:model="nama_kepala_sekolah" id="nama_kepala_sekolah" class="block mt-1 w-full" type="text" name="nama_kepala_sekolah" required autofocus autocomplete="nama_kepala_sekolah" />
                    <x-input-error :messages="$errors->get('nama_kepala_sekolah')" class="mt-2" />
                </div>
                
                <!-- NPSN -->
                <div class="mt-4">
                    <x-input-label for="npsn" :value="__('NPSN')" />
                    <x-text-input wire:model="npsn" id="npsn" class="block mt-1 w-full" type="text" name="npsn" required autofocus autocomplete="npsn" />
                    <x-input-error :messages="$errors->get('npsn')" class="mt-2" />
                </div>
                
                <!-- Tahun Ajaran -->
                <div class="mt-4">
                    <x-input-label for="tahun_ajaran" :value="__('Tahun Ajaran')" />
                    <x-text-input wire:model="tahun_ajaran" id="tahun_ajaran" class="block mt-1 w-full" type="text" name="tahun_ajaran" required autofocus autocomplete="tahun_ajaran" />
                    <x-input-error :messages="$errors->get('tahun_ajaran')" class="mt-2" />
                </div>

            </div>
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-500 dark:text-gray-100 dark:hover:text-[#b8a5ff] hover:text-[#37208B] rounded-md focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                href="{{ route('login') }}" wire:navigate>
                Already registered?
            </a>

            <x-primary-button class="ms-4">
                Register
            </x-primary-button>
        </div>
    </form>
</div>
