@extends('layouts.app')

@section('title', 'Joki Tugas & Konsultasi Akademik Farmasi')

@section('content')
    <section class="bg-gradient-to-br from-blue-100 via-white to-blue-50">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div class="space-y-6">
                    <span class="inline-flex items-center rounded-full bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.4em] text-[#2D3C8C]">pendampingan etis</span>
                    <h1 class="text-4xl font-semibold text-slate-900">Joki Tugas &amp; Konsultasi Akademik Farmasi</h1>
                    <p class="text-lg leading-relaxed text-slate-600">Dampingi setiap tahap penulisan ilmiahmu — mulai dari brainstorming topik, penyusunan proposal, analisis data, hingga publikasi. Semua berjalan etis dan edukatif.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#paket" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-3 text-white shadow-lg shadow-[#2D3C8C]/30 transition hover:bg-blue-900">Lihat Paket Pendampingan</a>
                                            <div class="mt-8 flex gap-4">
                        <a href="{{ route('kontak') }}" class="inline-flex items-center rounded-full bg-[#2D3C8C] px-6 py-3 text-white font-semibold transition hover:bg-blue-900">Request Konsultasi</a>
                    </div>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-10 shadow-xl">
                    <h2 class="text-xl font-semibold text-slate-900">Layanan yang Kami Tawarkan</h2>
                    <ul class="mt-6 space-y-4 text-sm text-slate-600">
                        <li>• Konsultasi ide topik skripsi, KTI, tesis, dan publikasi.</li>
                        <li>• Penyusunan proposal, bab penelitian, dan kerangka teori.</li>
                        <li>• Analisis data, statistik, dan interpretasi hasil.</li>
                        <li>• Editing referensi, sitasi, dan pengecekan plagiarisme.</li>
                        <li>• Persiapan presentasi, sidang, dan pembuatan poster ilmiah.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-8 md:grid-cols-3">
                <div class="rounded-3xl border border-blue-100 bg-blue-50 p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Tahap Awal</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Brainstorming dan pemetaan masalah.</li>
                        <li>• Penyusunan latar belakang &amp; rumusan masalah.</li>
                        <li>• Pembuatan kerangka teori dan tinjauan pustaka.</li>
                        <li>• Konsultasi metodologi penelitian.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Tahap Pelaksanaan</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Desain instrumen penelitian &amp; pengambilan data.</li>
                        <li>• Analisis statistik (SPSS, R, Excel).</li>
                        <li>• Interpretasi hasil dan penulisan pembahasan.</li>
                        <li>• Supervisi penyusunan BAB IV &amp; BAB V.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Tahap Akhir</h3>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Proofreading, editing tata bahasa, dan layout.</li>
                        <li>• Cek kemiripan dan perbaikan sitasi.</li>
                        <li>• Pembuatan slide presentasi &amp; latihan sidang.</li>
                        <li>• Pendampingan publikasi jurnal ilmiah.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="paket" class="bg-blue-50/70">
        <div class="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-slate-900">Paket Pendampingan</h2>
                <p class="mt-3 text-base text-slate-600">Transparan, fleksibel, dan menyesuaikan kebutuhan tiap peserta.</p>
            </div>
            <div class="mt-12 grid gap-8 lg:grid-cols-3">
                <div class="flex flex-col rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Starter Guidance</h3>
                    <p class="mt-3 text-sm text-slate-600">Pendampingan 1 bab untuk mengawali penulisan.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• 3 sesi konsultasi online</li>
                        <li>• Template kerangka bab</li>
                        <li>• Review literatur &amp; sitasi</li>
                        <li>• Support revisi minor</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Mulai Rp950.000</p>
                    <a href="{{ route('kontak') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Konsultasi Gratis</a>
                </div>
                <div class="relative flex flex-col rounded-3xl border border-blue-200 bg-white p-8 shadow-xl shadow-blue-100">
                    <span class="absolute -top-4 right-6 rounded-full bg-[#2D3C8C] px-4 py-1 text-xs font-semibold uppercase tracking-wide text-white">Favorit</span>
                    <h3 class="text-xl font-semibold text-slate-900">Complete Writing</h3>
                    <p class="mt-3 text-sm text-slate-600">Pendampingan keseluruhan tugas akhir sampai siap sidang.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• Pendampingan semua bab</li>
                        <li>• Analisis data &amp; statistik</li>
                        <li>• Editing referensi &amp; anti-plagiarisme</li>
                        <li>• Simulasi sidang &amp; presentasi</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Mulai Rp2.450.000</p>
                    <a href="{{ route('kontak') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Konsultasi Gratis</a>
                </div>
                <div class="flex flex-col rounded-3xl border border-blue-100 bg-white p-8 shadow-sm">
                    <h3 class="text-xl font-semibold text-slate-900">Publishing Pro</h3>
                    <p class="mt-3 text-sm text-slate-600">Fokus pada publikasi jurnal &amp; konferensi ilmiah.</p>
                    <ul class="mt-6 space-y-2 text-sm text-slate-600">
                        <li>• Reformat artikel sesuai template jurnal</li>
                        <li>• Konsultasi submit dan korespondensi</li>
                        <li>• Proofreading bahasa Inggris</li>
                        <li>• Strategi reviewer response</li>
                    </ul>
                    <p class="mt-6 text-2xl font-semibold text-[#2D3C8C]">Mulai Rp3.050.000</p>
                    <a href="{{ route('kontak') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-[#2D3C8C] px-6 py-3 text-sm font-semibold text-white transition hover:bg-blue-900">Konsultasi Gratis</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <h2 class="text-3xl font-semibold text-slate-900">Tim Konsultan Akademik</h2>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600">Dibimbing oleh dosen, reviewer jurnal, dan praktisi riset kefarmasian yang siap membantu secara profesional.</p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600">
                        <li>• Komitmen kerahasiaan dan orisinalitas karya.</li>
                        <li>• Feedback konstruktif dan edukatif di setiap sesi.</li>
                        <li>• Garansi revisi sesuai arahan dosen pembimbing.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-blue-100 bg-blue-50/80 p-10 shadow-sm">
                    <h3 class="text-xl font-semibold text-[#2D3C8C]">Kata Mahasiswa</h3>
                    <blockquote class="mt-6 space-y-4 text-sm leading-relaxed text-slate-600">
                        <p>“Bukan cuma dibantu nulis, tapi juga diajari cara berpikir ilmiah. Saat sidang, saya siap menjawab tiap pertanyaan dosen.”</p>
                        <footer class="pt-4 text-xs font-semibold text-[#2D3C8C]">— Gilang Nugraha, Mahasiswa S2 Farmasi</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
