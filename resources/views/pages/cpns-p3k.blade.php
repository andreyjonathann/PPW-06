@extends('layouts.app')

@section('title', 'Bimbel CPNS & P3K Farmasi')

@section('content')
    <section class="bg-gradient-to-br from-blue-50 via-white to-blue-100">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div class="space-y-6">
                    <span class="inline-flex items-center rounded-full bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.4em] text-[#2D3C8C]">ASN kefarmasian</span>
                    <h1 class="text-4xl font-semibold text-slate-900">Bimbel CPNS &amp; P3K Farmasi</h1>
                    <p class="text-lg leading-relaxed text-slate-600">Raih formasi instansi kefarmasian idaman dengan simulasi CAT real-time, analitik performa, dan coaching SKB mendalam bersama mentor ahli.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#paket" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-3 text-white shadow-lg shadow-[#2D3C8C]/30 transition hover:bg-blue-900">Lihat Paket Bimbel</a>
                                            <div class="mt-8 flex gap-4">
                        <a href="{{ route('order.create', 'cpns-p3k-farmasi') }}" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-3 text-white font-semibold transition hover:bg-blue-900">Beli Sekarang</a>
                    </div>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-xl">
                    <h2 class="text-xl font-semibold text-slate-900">Komponen Pembelajaran</h2>
                    <ul class="mt-6 space-y-4 text-sm text-slate-600">
                        <li>• Materi SKD lengkap (TWK, TIU, TKP) dengan kisi-kisi terbaru.</li>
                        <li>• Klinik SKB kefarmasian: regulasi BPOM, pelayanan farmasi RS &amp; klinik.</li>
                        <li>• Simulasi Computer Assisted Test (CAT) real-time &amp; analitik skor.</li>
                        <li>• Coaching karir, penyusunan portofolio, dan wawancara.</li>
                        <li>• Grup support P3K dengan update formasi &amp; tips psikotes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-2">
                <div class="rounded-3xl border border-blue-100 bg-blue-50 p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Materi SKD</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• TWK: Pancasila, UUD 1945, wawasan kebangsaan.</li>
                        <li>• TIU: logika numerik, verbal, dan figural.</li>
                        <li>• TKP: pelayanan publik, sosial budaya, dan profesionalisme.</li>
                        <li>• Strategi pengerjaan &amp; manajemen waktu CAT.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Materi SKB Farmasi</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Regulasi kefarmasian (Permenkes, BPOM, JKN).</li>
                        <li>• Manajemen Farmasi RS &amp; Puskesmas.</li>
                        <li>• Clinical pharmacy case study.</li>
                        <li>• Administrasi kefarmasian &amp; pelayanan publik.</li>
                        <li>• Simulasi wawancara dan microteaching.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="paket" class="bg-blue-50/70">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-900">Pilihan Paket</h2>
                <p class="mt-3 text-base text-slate-600">Dirancang untuk menghadapi persaingan ketat CPNS &amp; P3K kefarmasian.</p>
            </div>
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <div class="flex flex-col rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Paket SKD Fokus</h3>
                    <p class="mt-3 text-sm text-slate-600">Pendalaman soal SKD dengan simulasi CAT intensif.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• 20x pertemuan intensif SKD</li>
                        <li>• 10x simulasi CAT &amp; analitik</li>
                        <li>• Bank soal ribuan item</li>
                        <li>• Group coaching strategi CAT</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Rp1.450.000</p>
                    <a href="{{ route('order.create', 'cpns-p3k-farmasi') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Beli Sekarang</a>
                </div>
                <div class="relative flex flex-col rounded-3xl border border-blue-200 bg-white p-8 shadow-xl shadow-blue-100">
                    <span class="absolute -top-4 right-6 rounded-full bg-[#2D3C8C] px-4 py-1 text-xs font-semibold uppercase tracking-wide text-white">Paling Dicari</span>
                    <h3 class="text-xl font-semibold text-slate-900">Paket ASN Lengkap</h3>
                    <p class="mt-3 text-sm text-slate-600">Kolaborasi SKD + SKB dengan mentoring karir dan portofolio.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• Semua fasilitas Paket SKD Fokus</li>
                        <li>• 16x klinik SKB kefarmasian</li>
                        <li>• Coaching karir instansi &amp; portofolio</li>
                        <li>• Konsultasi interview &amp; psikotes</li>
                        <li>• Evaluasi progres personal</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Rp2.050.000</p>
                    <a href="{{ route('order.create', 'cpns-p3k-farmasi') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Beli Sekarang</a>
                </div>
                <div class="flex flex-col rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Paket Fast Track</h3>
                    <p class="mt-3 text-sm text-slate-600">Bootcamp 30 hari menjelang ujian dengan pendampingan penuh.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• Sprint planner harian</li>
                        <li>• Tryout harian &amp; review cepat</li>
                        <li>• 1-on-1 coaching mingguan</li>
                        <li>• Modul ringkas high yield</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Rp2.550.000</p>
                    <a href="{{ route('order.create', 'cpns-p3k-farmasi') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <h2 class="text-3xl font-semibold text-slate-900">Keunggulan Program Kami</h2>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Tim mentor ASN aktif dari Kemenkes, RSUD, dan BPOM.</li>
                        <li>• Update formasi dan strategi penempatan terbaru.</li>
                        <li>• Bank soal selalu diperbarui sesuai kisi-kisi nasional.</li>
                        <li>• Dashboard progres dengan rekomendasi adaptif.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-blue-50/80 p-10 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Cerita Peserta</h3>
                    <blockquote class="mt-6 space-y-4 text-sm leading-relaxed text-slate-600">
                        <p>“Simulasi CAT-nya mirip banget dengan ujian resmi. Saya bisa memetakan kelemahan dan memperbaikinya sebelum tes berlangsung.”</p>
                        <footer class="pt-4 text-xs font-semibold text-[#2D3C8C]">— Vina Paramita, ASN P3K Kefarmasian 2024</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
