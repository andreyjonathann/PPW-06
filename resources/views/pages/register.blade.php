@extends('layouts.app')

@section('title', 'Daftar Akun Bimbel Farmasi')

@section('content')
    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="rounded-3xl bg-[#2D3C8C]/95 p-10 text-white shadow-2xl shadow-blue-900/30">
                    <h1 class="text-3xl font-semibold">Bergabung dengan Komunitas FarmasiPro</h1>
                    <p class="mt-4 text-sm leading-relaxed text-blue-100">Lengkapi data berikut untuk mengakses seluruh modul pembelajaran, webinar khusus, dan konsultasi personal bersama mentor terbaik.</p>
                    <div class="mt-8 space-y-4 text-sm text-blue-50">
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Dashboard progres belajar &amp; rekomendasi materi personal.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Akses semua kelas live dan rekaman eksklusif.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Diskusi komunitas dan sesi tanya jawab mingguan.</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-xl">
                    <div class="mx-auto flex w-full max-w-md flex-col gap-8">
                        <div class="flex items-center gap-4 border-b border-blue-100 pb-4 text-sm font-semibold">
                            <a href="{{ route('login') }}" class="rounded-full px-6 py-2 text-[#2D3C8C] transition hover:bg-blue-50">Masuk</a>
                            <span class="rounded-full bg-[#2D3C8C] px-6 py-2 text-white">Daftar</span>
                        </div>
                        <form action="{{ route('register.submit') }}" method="POST" class="space-y-5">
                            @csrf
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200 @error('name') border-red-300 @enderror" placeholder="Masukkan nama lengkap" required>
                                @error('name')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200 @error('email') border-red-300 @enderror" placeholder="nama@email.com" required>
                                @error('email')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">No. Handphone</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200 @error('phone') border-red-300 @enderror" placeholder="08xxxxxxxxxx" required>
                                @error('phone')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Universitas (Opsional)</label>
                                <input type="text" name="university" value="{{ old('university') }}" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="Nama institusi">
                            </div>
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Tertarik Dengan</label>
                                <select name="interest" class="mt-2 w-full rounded-xl border border-blue-100 bg-white px-4 py-3 text-sm text-slate-600 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200">
                                    <option value="">Pilih layanan</option>
                                    <option value="Bimbel UKOM D3 Farmasi" {{ old('interest') == 'Bimbel UKOM D3 Farmasi' ? 'selected' : '' }}>Bimbel UKOM D3 Farmasi</option>
                                    <option value="CPNS & P3K Farmasi" {{ old('interest') == 'CPNS & P3K Farmasi' ? 'selected' : '' }}>CPNS &amp; P3K Farmasi</option>
                                    <option value="Joki Tugas Akademik" {{ old('interest') == 'Joki Tugas Akademik' ? 'selected' : '' }}>Joki Tugas Akademik</option>
                                    <option value="Konsultasi Akademik" {{ old('interest') == 'Konsultasi Akademik' ? 'selected' : '' }}>Konsultasi Akademik</option>
                                </select>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Password</label>
                                    <input type="password" name="password" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200 @error('password') border-red-300 @enderror" placeholder="Minimal 8 karakter" required>
                                    @error('password')
                                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="Ulangi password" required>
                                </div>
                            </div>
                            <label class="flex items-start gap-3 text-xs text-slate-500">
                                <input type="checkbox" class="mt-1 h-4 w-4 rounded border-blue-200 text-[#2D3C8C] focus:ring-[#2D3C8C]" required>
                                Dengan mendaftar, saya menyetujui <a href="#" class="ml-1 font-semibold text-[#2D3C8C] hover:underline">Syarat &amp; Ketentuan</a> dan kebijakan privasi Bimbel Farmasi.
                            </label>
                            <button type="submit" class="w-full rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-[#2D3C8C]/30 transition hover:bg-blue-900">Daftar</button>
                        </form>
                        <div class="flex items-center gap-4 text-xs text-slate-400">
                            <span class="flex-1 border-t border-blue-100"></span>
                            atau
                            <span class="flex-1 border-t border-blue-100"></span>
                        </div>
                        <a href="{{ route('login.google') }}" class="inline-flex w-full items-center justify-center gap-3 rounded-full border border-blue-100 bg-white px-6 py-3 text-sm font-semibold text-slate-600 transition hover:bg-blue-50">
                            <img src="https://www.gstatic.com/images/branding/product/2x/google_g_48dp.png" alt="Google" class="h-5 w-5">
                            Daftar dengan Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
