@extends('layouts.app')

@section('title', 'Masuk Akun Bimbel Farmasi')

@section('content')
    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="rounded-3xl bg-[#2D3C8C]/95 p-10 text-white shadow-2xl shadow-blue-900/30">
                    <h1 class="text-3xl font-semibold">Masuk ke Akunmu</h1>
                    <p class="mt-4 text-sm leading-relaxed text-blue-100">Dapatkan akses ke dashboard pembelajaran, jadwal mentoring, dan laporan progres secara real-time.</p>
                    <div class="mt-8 space-y-4 text-sm text-blue-50">
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Sinkronisasi materi belajar dan tryout otomatis.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Reminder kelas dan konsultasi via email &amp; WhatsApp.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Komunitas diskusi eksklusif untuk peserta aktif.</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-xl">
                    <div class="mx-auto flex w-full max-w-md flex-col gap-8">
                        <div class="flex items-center gap-4 border-b border-blue-100 pb-4 text-sm font-semibold">
                            <span class="rounded-full bg-[#2D3C8C] px-6 py-2 text-white">Masuk</span>
                            <a href="{{ route('register') }}" class="rounded-full px-6 py-2 text-[#2D3C8C] transition hover:bg-blue-50">Daftar</a>
                        </div>
                        <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
                            @csrf
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200 @error('email') border-red-300 @enderror" placeholder="nama@email.com" required>
                                @error('email')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <div class="flex items-center justify-between text-xs font-semibold text-slate-500">
                                    <label class="uppercase tracking-wide">Password</label>
                                    <a href="#" class="text-[#2D3C8C] hover:underline">Lupa Password?</a>
                                </div>
                                <input type="password" name="password" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200 @error('password') border-red-300 @enderror" placeholder="••••••••" required>
                                @error('password')
                                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="flex items-center gap-2 text-xs text-slate-500">
                                <input type="checkbox" name="remember" class="h-4 w-4 rounded border-blue-200 text-[#2D3C8C] focus:ring-[#2D3C8C]">
                                Ingat Saya
                            </label>
                            <button type="submit" class="w-full rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-[#2D3C8C]/30 transition hover:bg-blue-900">Masuk</button>
                        </form>
                        <div class="flex items-center gap-4 text-xs text-slate-400">
                            <span class="flex-1 border-t border-blue-100"></span>
                            atau
                            <span class="flex-1 border-t border-blue-100"></span>
                        </div>
                        <a href="{{ route('login.google') }}" class="inline-flex w-full items-center justify-center gap-3 rounded-full border border-blue-100 bg-white px-6 py-3 text-sm font-semibold text-slate-600 transition hover:bg-blue-50">
                            <img src="https://www.gstatic.com/images/branding/product/2x/google_g_48dp.png" alt="Google" class="h-5 w-5">
                            Masuk dengan Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
