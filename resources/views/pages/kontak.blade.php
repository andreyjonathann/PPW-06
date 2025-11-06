@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#2D3C8C] via-blue-800 to-blue-900 py-20 text-white">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -left-24 top-10 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
            <div class="absolute right-0 bottom-0 h-80 w-80 rounded-full bg-blue-600/20 blur-3xl"></div>
        </div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-flex items-center rounded-full bg-blue-700/50 px-4 py-1 text-xs font-semibold uppercase tracking-widest text-blue-100 backdrop-blur-sm">💬 Layanan 24/7</span>
                <h1 class="mt-4 text-4xl font-bold sm:text-5xl">Hubungi Kami</h1>
                <p class="mx-auto mt-4 max-w-2xl text-lg text-blue-100">Kami siap membantu menjawab pertanyaan dan memberikan solusi terbaik untuk kebutuhan akademik farmasi Anda. Jangan ragu untuk menghubungi!</p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="relative bg-gradient-to-br from-blue-50 via-white to-purple-50 py-16">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center">
                <h2 class="text-3xl font-bold text-gray-900">Informasi Kontak</h2>
                <p class="mt-2 text-gray-600">Pilih cara yang paling nyaman untuk menghubungi kami</p>
            </div>

            <div class="space-y-4">
                <!-- WhatsApp -->
                <a href="https://wa.me/6285123456789?text=Halo%20Bimbel%20Farmasi,%20saya%20ingin%20bertanya%20tentang%20layanan" target="_blank" class="group flex items-start gap-4 rounded-2xl bg-white p-6 shadow-md transition hover:shadow-xl hover:-translate-y-1">
                    <div class="flex-shrink-0 rounded-full bg-gradient-to-br from-green-400 to-green-600 p-4 shadow-lg">
                        <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 group-hover:text-green-600 transition">WhatsApp</h3>
                        <p class="mt-1 text-sm text-gray-600">Respon cepat & langsung chat</p>
                        <p class="mt-2 font-semibold text-green-600">+62 851-2345-6789</p>
                        <span class="mt-1 inline-flex items-center gap-1 text-xs text-green-600">
                            <span class="h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                            Online 24/7
                        </span>
                    </div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-green-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!-- Email -->
                <a href="mailto:info@bimbelfarmasi.id?subject=Pertanyaan%20Layanan%20Bimbel" class="group flex items-start gap-4 rounded-2xl bg-white p-6 shadow-md transition hover:shadow-xl hover:-translate-y-1">
                    <div class="flex-shrink-0 rounded-full bg-gradient-to-br from-blue-400 to-[#2D3C8C] p-4 shadow-lg">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 group-hover:text-[#2D3C8C] transition">Email</h3>
                        <p class="mt-1 text-sm text-gray-600">Kirim pertanyaan detail via email</p>
                        <p class="mt-2 font-semibold text-[#2D3C8C]">info@bimbelfarmasi.id</p>
                        <p class="mt-1 text-xs text-gray-500">📧 Respon dalam 1x24 jam</p>
                    </div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-[#2D3C8C] transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!-- Phone -->
                <a href="tel:+6285123456789" class="group flex items-start gap-4 rounded-2xl bg-white p-6 shadow-md transition hover:shadow-xl hover:-translate-y-1">
                    <div class="flex-shrink-0 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 p-4 shadow-lg">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 group-hover:text-purple-600 transition">Telepon</h3>
                        <p class="mt-1 text-sm text-gray-600">Hubungi langsung via telepon</p>
                        <p class="mt-2 font-semibold text-purple-600">+62 851-2345-6789</p>
                        <p class="mt-1 text-xs text-gray-500">🕐 Senin - Sabtu, 09.00 - 20.00 WIB</p>
                    </div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-purple-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com/bimbelfarmasi.id" target="_blank" class="group flex items-start gap-4 rounded-2xl bg-white p-6 shadow-md transition hover:shadow-xl hover:-translate-y-1">
                    <div class="flex-shrink-0 rounded-full bg-gradient-to-br from-pink-400 via-purple-500 to-orange-400 p-4 shadow-lg">
                        <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 group-hover:text-pink-600 transition">Instagram</h3>
                        <p class="mt-1 text-sm text-gray-600">Follow untuk tips & update terbaru</p>
                        <p class="mt-2 font-semibold text-pink-600">@bimbelfarmasi.id</p>
                        <p class="mt-1 text-xs text-gray-500">📸 Update harian & testimoni</p>
                    </div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-pink-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>

                <!-- Office Address -->
                <div class="flex items-start gap-4 rounded-2xl bg-white p-6 shadow-md">
                    <div class="flex-shrink-0 rounded-full bg-gradient-to-br from-orange-400 to-red-500 p-4 shadow-lg">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900">Alamat Kantor</h3>
                        <p class="mt-1 text-sm text-gray-600">📍 Jl. Apoteker Raya No. 88</p>
                        <p class="text-sm text-gray-600">Menteng, Jakarta Pusat 10340</p>
                        <p class="mt-2 text-xs text-gray-500">🏢 Gedung Farmasi Center Lt. 3</p>
                        <p class="text-xs text-gray-500">🚗 Dekat Stasiun MRT Bundaran HI</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900">📍 Lokasi Kantor Kami</h2>
                <p class="mt-2 text-gray-600">Kunjungi kantor kami untuk konsultasi langsung</p>
                <p class="mt-1 text-sm text-blue-600 font-medium">Dekat dengan Stasiun MRT Bundaran HI & Plaza Indonesia</p>
            </div>
            <div class="overflow-hidden rounded-2xl shadow-2xl border-4 border-blue-100">
                <div class="aspect-video bg-gradient-to-br from-blue-100 to-purple-100">
                    <!-- Google Maps Embed -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.2087634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMenteng%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1635881552194!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            
            <!-- Office Hours & Directions -->
            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <div class="rounded-xl bg-gradient-to-br from-blue-50 to-white p-6 text-center shadow-md">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-blue-100">
                        <svg class="h-8 w-8 text-[#2D3C8C]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 font-bold text-gray-900">Jam Operasional</h3>
                    <p class="mt-2 text-sm text-gray-600">Senin - Jumat: 09.00 - 20.00</p>
                    <p class="text-sm text-gray-600">Sabtu: 10.00 - 18.00</p>
                    <p class="text-sm font-medium text-red-600">Minggu: Libur</p>
                </div>

                <div class="rounded-xl bg-gradient-to-br from-purple-50 to-white p-6 text-center shadow-md">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-purple-100">
                        <svg class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 font-bold text-gray-900">Konsultasi Gratis</h3>
                    <p class="mt-2 text-sm text-gray-600">Booking konsultasi via WA</p>
                    <p class="text-sm text-gray-600">Tanpa biaya pendaftaran</p>
                    <a href="https://wa.me/6285123456789?text=Halo,%20saya%20ingin%20booking%20konsultasi%20gratis" target="_blank" class="mt-3 inline-flex items-center text-sm font-semibold text-purple-600 hover:text-purple-700">
                        Booking Sekarang →
                    </a>
                </div>

                <div class="rounded-xl bg-gradient-to-br from-green-50 to-white p-6 text-center shadow-md">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
                        <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <h3 class="mt-4 font-bold text-gray-900">Akses Transportasi</h3>
                    <p class="mt-2 text-sm text-gray-600">🚇 MRT Bundaran HI (5 min)</p>
                    <p class="text-sm text-gray-600">🚌 Halte TransJakarta (3 min)</p>
                    <p class="text-sm text-gray-600">🚗 Parkir tersedia</p>
                </div>
            </div>
        </div>
    </section>
@endsection
