@extends('layouts.app')

@section('title', 'Bimbel UKOM D3 Farmasi')

@section('content')
    <section class="bg-gradient-to-br from-blue-100 via-white to-blue-50">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div class="space-y-6">
                    <span class="inline-flex items-center rounded-full bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.4em] text-[#2D3C8C]">program unggulan</span>
                    <h1 class="text-4xl font-semibold text-slate-900">Program Bimbel UKOM D3 Farmasi</h1>
                    <p class="text-lg leading-relaxed text-slate-600">Siap menaklukkan Uji Kompetensi Tenaga Teknis Kefarmasian (UKTTK) dengan modul klinis lengkap, analitik cerdas, dan coaching mentor berpengalaman.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#paket" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-3 text-white shadow-lg shadow-[#2D3C8C]/30 transition hover:bg-blue-900">Lihat Paket Belajar</a>
                                            <div class="mt-8 flex gap-4">
                        <a href="{{ route('order.create', 'bimbel-ukom-d3-farmasi') }}" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-3 text-white font-semibold transition hover:bg-blue-900">Beli Sekarang</a>
                    </div>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-xl">
                    <h2 class="text-xl font-semibold text-slate-900">Skema Pembelajaran</h2>
                    <ul class="mt-6 space-y-4 text-sm text-slate-600">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-lg text-[#2D3C8C]">1️⃣</span>
                            <div>
                                <p class="font-semibold text-slate-800">Diagnostic Test &amp; Study Plan</p>
                                <p>Pemetaan kompetensi awal dan pembuatan jadwal belajar personal.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-lg text-[#2D3C8C]">2️⃣</span>
                            <div>
                                <p class="font-semibold text-slate-800">Kelas Intensif &amp; Klinik Kasus</p>
                                <p>Sesi live interaktif dengan pembahasan kasus klinik &amp; komunitas.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-lg text-[#2D3C8C]">3️⃣</span>
                            <div>
                                <p class="font-semibold text-slate-800">Bank Soal Adaptif</p>
                                <p>Ribuan soal terbaru dengan analitik kesulitan dan rekomendasi materi.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-lg text-[#2D3C8C]">4️⃣</span>
                            <div>
                                <p class="font-semibold text-slate-800">Tryout Nasional &amp; Review</p>
                                <p>Simulasi UKTTK serentak dan pembahasan mendalam bersama mentor.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-2">
                <div class="rounded-3xl border border-blue-100 bg-blue-50 p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Materi Pembelajaran</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Farmakologi &amp; Toksikologi</li>
                        <li>• Farmasi Klinik &amp; Komunitas</li>
                        <li>• Farmasetika &amp; Teknologi Farmasi</li>
                        <li>• Manajemen Farmasi RS &amp; Puskesmas</li>
                        <li>• Etika Profesi &amp; Regulasi Kefarmasian</li>
                        <li>• Studi kasus pasien &amp; clinical pathway</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Benefit Peserta</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Kelas live interaktif &amp; rekaman seumur hidup</li>
                        <li>• Modul belajar digital &amp; ringkasan klinik</li>
                        <li>• Grup diskusi Telegram &amp; konsultasi harian</li>
                        <li>• Monitoring progres &amp; reminder otomatis</li>
                        <li>• Voucher webinar kefarmasian tiap bulan</li>
                        <li>• Sertifikat kelulusan program intensif</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="paket" class="bg-blue-50/70">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-900">Paket Pembelajaran</h2>
                <p class="mt-3 text-base text-slate-600">Sesuaikan dengan kebutuhan dan intensitas belajar kamu.</p>
            </div>
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <div class="flex flex-col rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Reguler</h3>
                    <p class="mt-2 text-sm text-slate-600">Untuk kamu yang ingin belajar mandiri dengan arahan mentor.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• 16 sesi live / hybrid</li>
                        <li>• Akses modul digital &amp; bank soal</li>
                        <li>• 4x tryout terjadwal</li>
                        <li>• Grup diskusi komunitas</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Rp1.250.000</p>
                    <a href="{{ route('order.create', 'bimbel-ukom-d3-farmasi') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Beli Sekarang</a>
                </div>
                <div class="relative flex flex-col rounded-3xl border border-blue-200 bg-white p-8 shadow-xl shadow-blue-100">
                    <span class="absolute -top-4 right-6 rounded-full bg-[#2D3C8C] px-4 py-1 text-xs font-semibold uppercase tracking-wide text-white">Best Seller</span>
                    <h3 class="text-xl font-semibold text-slate-900">Premium</h3>
                    <p class="mt-2 text-sm text-slate-600">Pendampingan intensif dengan jadwal fleksibel dan bimbingan personal.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• Semua fasilitas Paket Reguler</li>
                        <li>• Mentoring privat mingguan</li>
                        <li>• Evaluasi progres personal</li>
                        <li>• Konsultasi karir &amp; interview</li>
                        <li>• Paket modul cetak &amp; bank soal premium</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Rp1.850.000</p>
                    <a href="{{ route('order.create', 'bimbel-ukom-d3-farmasi') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Beli Sekarang</a>
                </div>
                <div class="flex flex-col rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Ultimate</h3>
                    <p class="mt-2 text-sm text-slate-600">Program eksklusif untuk target kelulusan tinggi dengan supervisi harian.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• Semua fasilitas Paket Premium</li>
                        <li>• Coaching harian &amp; progress tracker</li>
                        <li>• Simulasi mini UKOM tiap minggu</li>
                        <li>• Konsultasi psikolog &amp; breathing session</li>
                        <li>• Bonus webinar &amp; workshop industri</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Rp2.350.000</p>
                    <a href="{{ route('order.create', 'bimbel-ukom-d3-farmasi') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <h2 class="text-3xl font-semibold text-slate-900">Mentor Klinis &amp; Akademisi Terbaik</h2>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">Dipandu oleh apoteker rumah sakit, dosen, dan praktisi industri dengan pengalaman sukses membimbing mahasiswa lulus UKTTK hingga 100%.</p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Mentor bersertifikat preseptor klinik</li>
                        <li>• Konsultasi kasus farmasi rumah sakit</li>
                        <li>• Strategi menjawab soal dengan clinical reasoning</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-blue-50/80 p-10 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Testimoni Alumni</h3>
                    <blockquote class="mt-6 space-y-4 text-sm leading-relaxed text-slate-600">
                        <p>“Dari diagnostic test sampai tryout final, semuanya terstruktur. Nilai UKOM saya naik drastis setelah ikut program ini.”</p>
                        <footer class="pt-4 text-xs font-semibold text-[#2D3C8C]">— Raras Salsabila, Lulus UKTTK 2024</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
