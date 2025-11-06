@extends('layouts.app')

@section('title', 'Masuk dengan Google')

@section('content')
    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div class="rounded-3xl bg-[#2D3C8C]/95 p-10 text-white shadow-2xl shadow-blue-900/30">
                    <h1 class="text-3xl font-semibold">Selamat Datang di Bimbel Farmasi</h1>
                    <p class="mt-4 text-sm leading-relaxed text-blue-100">Platform pembelajaran kefarmasian terpadu dengan mentor berpengalaman dan kurikulum adaptif untuk mendukung perjalanan akademik dan karirmu.</p>
                    <div class="mt-8 space-y-4 text-sm text-blue-50">
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Akses materi eksklusif UKOM, CPNS &amp; P3K, serta tugas akademik berbasis kasus nyata.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Konsultasi langsung dengan mentor klinis, industri, dan akademisi farmasi.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Diskon kelas dan webinar rutin dengan pembicara nasional.</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1">✅</span>
                            <p>Pemantauan progres belajar real-time dan laporan performa personal.</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-xl">
                    <div class="mx-auto flex w-full max-w-md flex-col gap-6">
                        <div class="text-center">
                            <img src="https://www.gstatic.com/images/branding/product/2x/google_g_48dp.png" alt="Google" class="mx-auto h-10 w-10">
                            <h2 class="mt-4 text-xl font-semibold text-slate-900">Login dengan Google</h2>
                            <p class="mt-2 text-sm text-slate-500">Gunakan akun Google-mu untuk mengakses dashboard.</p>
                        </div>
                        <form action="#" method="post" class="space-y-6">
                            <div>
                                <label class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email atau nomor telepon</label>
                                <input type="email" class="mt-2 w-full rounded-xl border border-blue-100 px-4 py-3 text-sm text-slate-700 focus:border-[#2D3C8C] focus:outline-none focus:ring-2 focus:ring-blue-200" placeholder="email@domain.com" required>
                            </div>
                            <div class="flex justify-between text-xs">
                                <a href="#" class="font-semibold text-[#2D3C8C] hover:underline">Lupa email?</a>
                            </div>
                            <p class="text-xs leading-relaxed text-slate-500">Bukan komputer Anda? Gunakan mode tamu untuk login secara privat. <a href="#" class="font-semibold text-[#2D3C8C] hover:underline">Pelajari lebih lanjut</a></p>
                            <div class="flex items-center justify-between">
                                <a href="#" class="text-sm font-semibold text-[#2D3C8C] hover:underline">Buat akun</a>
                                <button type="submit" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-2 text-sm font-semibold text-white transition hover:bg-blue-900">Berikutnya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
