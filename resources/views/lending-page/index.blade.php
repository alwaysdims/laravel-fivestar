<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pengaduan Masyarakat SMKN 2 Karanganyar</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/@heroicons/vue@2.0.18/24/outline"></script>

  <style>
    * {
      font-family: 'Montserrat', sans-serif;
    }

    .counter {
      transition: all 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateX(-10px); }
      to { opacity: 1; transform: translateX(0); }
    }

    .animate-fadeIn {
      animation: fadeIn 0.5s ease-in-out;
    }
  </style>

</head>

<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 sticky top-0 z-50">
      <div class="container mx-auto px-5 lg:px-20 flex items-center justify-between h-16">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
          <img src="{{ 'assets/image/OIP.jpg' }}" alt="Logo SMK Negeri 2 Karanganyar"
            class="h-12 w-12 object-contain rounded-full" />
          <div class="flex flex-col leading-5">
            <span class="font-bold text-lg text-gray-800 select-none">PENGADUAN MASYARAKAT</span>
            <span class="font-bold text-lg text-gray-800 select-none">SMK NEGERI 2 KARANGANYAR</span>
          </div>
        </div>

        <!-- Navigation Links + Buttons (Desktop) -->
        <div class="hidden md:flex items-center space-x-6">
          <ul class="flex space-x-6 font-medium text-gray-700">
            <li><a href="#home" class="hover:text-blue-600 transition duration-300">Home</a></li>
            <li><a href="#aduan" class="hover:text-blue-600 transition duration-300">Aduan</a></li>
            <li><a href="tentang.html#tentang" class="hover:text-blue-600 transition duration-300">Tentang</a></li>
          </ul>

          <div class="flex items-center space-x-3">
            <a href="{{ '/login' }}"
              class="px-4 py-2 border-2 border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white hover:scale-105 transform transition duration-300 shadow-md">
              Login
            </a>
            <a href="loginregister/register.html"
              class="px-4 py-2 border-2 border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white hover:scale-105 transform transition duration-300 shadow-md">
              Register
            </a>
          </div>
        </div>

        <!-- Mobile Toggle -->
        <button id="navbar-toggle" class="md:hidden focus:outline-none text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
          </svg>
        </button>
      </div>

      <!-- Mobile Menu with Transition -->
      <div id="mobile-menu"
        class="transition-all duration-300 ease-in-out overflow-hidden max-h-0 md:hidden bg-white px-5">
        <ul class="flex flex-col py-3 space-y-3 font-semibold text-gray-700">
          <li><a href="#home" class="hover:text-blue-600 transition duration-300">Home</a></li>
            <li><a href="#aduan" class="hover:text-blue-600 transition duration-300">Aduan</a></li>
            <li><a href="tentang.html#tentang" class="hover:text-blue-600 transition duration-300">Tentang</a></li>
          <li>
            <div class="flex flex-col gap-2 mt-2">
              <a href="{{ '/login' }}"
                class="px-4 py-2 w-auto bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-full hover:scale-105 transform transition duration-300 shadow-md text-center">
                Login
              </a>

              <a href="loginregister/register.html"
                class="w-full px-4 py-2 border-2 border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white hover:scale-105 transform transition duration-300 shadow-md text-center">
                Register
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>



  <!-- Home Section -->
  <section id="home" class="container mx-auto px-5 lg:px-10 py-12 flex flex-col md:flex-row md:items-center gap-10">
    <div class="flex-1" data-aos="fade-right">
      <img src="assets/image/Sejarah.webp"
        alt="Exterior view of SMK Negeri 2 Karanganyar building with trees and blue sky during daytime, modern school complex"
        class="rounded-lg shadow-lg w-full object-cover max-h-96"
        onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/15a53732-4230-439b-aaf5-4a53e6388bab.png';" />
    </div>
    <div class="flex-1 space-y-6" data-aos="fade-left" data-aos-delay="200">
      <h1 class="text-4xl font-extrabold text-blue-500" data-aos="fade-up" data-aos-delay="300">
        Selamat Datang di Pengaduan Masyarakat SMKN 2 Karanganyar
      </h1>
      <p class="text-lg leading-relaxed text-gray-700" data-aos="fade-up" data-aos-delay="400">
        Sistem pengaduan masyarakat ini dibuat untuk memudahkan warga dan siswa melaporkan keluhan, masalah, atau
        aspirasi kepada pihak sekolah SMKN 2 Karanganyar dengan cepat, transparan, dan mudah diakses.
      </p>
      <a href="loginregister/login.html" data-aos="zoom-in" data-aos-delay="500">
        <!-- From Uiverse.io by nathAd17 -->
        <button type="submit"
          class="flex justify-center gap-2 mt-3 items-center ml-0 shadow-xl text-lg bg-gray-50 backdrop-blur-md lg:font-semibold isolation-auto border-gray-50 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-blue-500 hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group">
          Adukan masalah
          <svg
            class="w-8 h-8 justify-end group-hover:rotate-45 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-240"
            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
              class="fill-gray-800 group-hover:fill-gray-800"></path>
          </svg>
        </button>
      </a>
    </div>
  </section>


  <section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-20">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" data-aos="fade-up">Statistik Pengaduan</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div
          class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow duration-300"
          data-aos="zoom-in" data-aos-delay="100">
          <div class="flex justify-center mb-4">
            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h4l3 6 4-12 4 12h4" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-blue-700 counter" data-target="50">0</div>
          <div class="text-lg text-gray-600">Pengaduan Masuk</div>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow duration-300"
          data-aos="zoom-in" data-aos-delay="200">
          <div class="flex justify-center mb-4">
            <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 17v-6a2 2 0 114 0v6m-4 0H5a2 2 0 012-2h10a2 2 0 012 2h-4z" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-green-700 counter" data-target="50">0</div>
          <div class="text-lg text-gray-600">Tanggapan Disampaikan</div>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-white p-6 rounded-xl shadow-lg text-center hover:shadow-xl transition-shadow duration-300"
          data-aos="zoom-in" data-aos-delay="300">
          <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A4 4 0 019 16h6a4 4 0 013.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <div class="text-5xl font-bold text-purple-700 counter" data-target="45">0</div>
          <div class="text-lg text-gray-600">Pengguna Terdaftar</div>
        </div>
      </div>
    </div>
  </section>

  <section id="aduan" class="px-6 py-12 lg:px-20 bg-white">
    <div class="text-center mb-10" data-aos="fade-down">
      <p class="text-sm text-blue-500 font-semibold uppercase">Aduan Terbaru</p>
      <h2 class="text-3xl font-bold text-gray-800">Cek Pengaduan <span class="text-blue-500">Terbaru</span></h2>
    </div>

    <div class="grid lg:grid-cols-3 gap-10 items-start">
      <!-- Kartu utama besar (kiri) -->
      <article id="main-card" class="lg:col-span-2 bg-white rounded-xl shadow-lg overflow-hidden flex flex-col md:flex-row"
        data-aos="fade-right" data-aos-delay="100">
        <img id="main-image" src="assets/image/kantin.jpg"
          alt="Ilustrasi Aduan" class="w-full md:w-1/2 h-60 md:h-auto object-cover">
        <div class="p-6 flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-2">
              <span id="main-status"
                class=" bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold">Selesai</span>
              <span id="main-date" class="text-sm text-gray-500">18 Juli 2024</span>
            </div>
            <h3 id="main-title" class="text-lg font-semibold text-gray-800 mb-2">
              Harga makanan di kantin sekolah tidak konsisten
            </h3>
            <p id="main-description" class="text-gray-600 text-sm mb-4">
              Beberapa siswa mengeluhkan harga yang terlalu mahal tanpa daftar harga yang jelas. Hal ini menyebabkan kebingungan dan ketidaknyamanan dalam membeli makanan saat istirahat.
            </p>
          </div>
          <div class="flex items-center justify-between mt-2 pt-3 border-t border-gray-200">
            <div class="flex items-center space-x-2">
              <img src="https://placehold.co/32x32" alt="User" class="w-8 h-8 rounded-full object-cover">
              <span class="text-sm font-medium text-gray-700">A*** P*******</span>
            </div>
            <a id="main-detail-link" href="detail.html"
              class="relative inline-flex items-center justify-center px-4 py-1.5 overflow-hidden
                    text-sm font-medium text-blue-600 transition duration-300 ease-out border-2 border-blue-600
                    rounded-full group hover:text-white">

              <span class="absolute left-0 top-0 w-full h-full bg-blue-600
                          transition-transform duration-300 ease-out transform scale-x-0
                          origin-left group-hover:scale-x-100 rounded-full z-0">
              </span>

              <span class="relative z-10">Detail</span>
            </a>
          </div>
        </div>
      </article>

      <!-- Daftar kartu mini (kanan) -->
      <div class="space-y-6">

      <a href="detail1.html" class="block">
        <article onclick="updateMainCard(this)"
          class="flex bg-white shadow-2xl rounded-2xl p-2 space-x-4 cursor-pointer"
          data-aos="fade-left" data-aos-delay="200"
          data-title="Banyak komputer di lab TIK rusak dan lambat"
          data-description="Kegiatan praktik terganggu dan tidak efektif."
          data-image="assets/image/Sejarah.webp"
          data-date="12 Juli 2024"
          data-status="Pending"
          data-status-color="bg-yellow-100 text-yellow-800"
          data-detail="detail1.html">
          <img src="assets/image/labkomputer.webp" alt="Gambar" class="w-20 h-20 object-cover rounded-lg">
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded-full font-semibold">Pending</span>
              <span class="text-xs text-gray-500">12 Juli 2024</span>
            </div>
            <h4 class="text-sm font-semibold text-gray-800">Banyak komputer di lab TIK rusak dan lambat</h4>
            <p class="text-xs text-gray-500 mt-1">Kegiatan praktik terganggu dan tidak efektif.</p>
          </div>
        </article>
      </a>

      <a href="detail2.html" class="block">
        <article onclick="updateMainCard(this)"
          class="flex bg-white shadow-2xl rounded-2xl p-2 space-x-4 cursor-pointer"
          data-aos="fade-left" data-aos-delay="300"
          data-title="Kondisi toilet kotor dan tidak ada air"
          data-description="Toilet tidak nyaman bagi siswa perempuan."
          data-image="assets/image/Sejarah.webp"
          data-date="8 Juli 2024"
          data-status="Proses"
          data-status-color="bg-green-100 text-green-800"
          data-detail="detail2.html">
          <img src="assets/image/toilet.jpg" alt="Gambar" class="w-20 h-20 object-cover rounded-lg">
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="text-xs bg-green-100 text-green-800 px-2 py-0.5 rounded-full font-semibold">Proses</span>
              <span class="text-xs text-gray-500">8 Juli 2024</span>
            </div>
            <h4 class="text-sm font-semibold text-gray-800">Kondisi toilet kotor dan tidak ada air</h4>
            <p class="text-xs text-gray-500 mt-1">Toilet tidak nyaman bagi siswa perempuan.</p>
          </div>
        </article>
      </a>

      <a href="detail3.html" class="block">
        <article onclick="updateMainCard(this)"
          class="flex bg-white shadow-2xl rounded-2xl p-2 space-x-4 cursor-pointer"
          data-aos="fade-left" data-aos-delay="400"
          data-title="Jalan berlubang dekat asrama siswa"
          data-description="Membahayakan siswa saat pergi dan pulang sekolah."
          data-image="assets/image/Sejarah.webp"
          data-date="5 Juli 2024"
          data-status="Selesai"
          data-status-color="bg-blue-100 text-blue-800"
          data-detail="detail3.html">
          <img src="assets/image/jalan.jpg" alt="Gambar" class="w-20 h-20 object-cover rounded-lg">
          <div class="flex-1">
            <div class="flex items-center justify-between mb-1">
              <span class="text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full font-semibold">Selesai</span>
              <span class="text-xs text-gray-500">5 Juli 2024</span>
            </div>
            <h4 class="text-sm font-semibold text-gray-800">Jalan berlubang dekat asrama siswa</h4>
            <p class="text-xs text-gray-500 mt-1">Membahayakan siswa saat pergi dan pulang sekolah.</p>
          </div>
        </article>
      </a>

      </div>
    </div>
  </section>

  <!-- Faq -->
  <section id="faq" class="bg-gray-50 py-12 px-6 lg:px-24">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center text-blue-700 mb-10"  data-aos="fade-up">Frequently Asked Questions (FAQ)</h2>

      <!-- FAQ Item -->
      <div class="space-y-4">
        <!-- FAQ 1 -->
        <div class="bg-white rounded-lg shadow transition duration-300"  data-aos="fade-up">
          <button
            class="flex justify-between items-center w-full p-6 text-left text-lg font-semibold text-gray-800 hover:bg-gray-100 focus:outline-none"
            onclick="toggleDropdown('faq1')">
            Apa itu Aplikasi Pengaduan Masyarakat SMKN 2 Karanganyar?
            <svg class="w-6 h-6 transform transition-transform duration-200" id="faq1-icon"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="faq1" class="hidden p-6 text-gray-600">
            Aplikasi ini adalah sistem digital yang disediakan sekolah untuk menerima dan menindaklanjuti pengaduan dari
            warga sekolah atau masyarakat sekitar.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="bg-white rounded-lg shadow transition duration-300"  data-aos="fade-up">
          <button
            class="flex justify-between items-center w-full p-6 text-left text-lg font-semibold text-gray-800 hover:bg-gray-100 focus:outline-none"
            onclick="toggleDropdown('faq2')">
            Siapa saja yang boleh membuat pengaduan?
            <svg class="w-6 h-6 transform transition-transform duration-200" id="faq2-icon"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="faq2" class="hidden p-6 text-gray-600">
            Pengaduan dapat dikirim oleh siswa, guru, wali murid, maupun masyarakat umum yang terhubung dengan
            lingkungan sekolah.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="bg-white rounded-lg shadow transition duration-300"  data-aos="fade-up">
          <button
            class="flex justify-between items-center w-full p-6 text-left text-lg font-semibold text-gray-800 hover:bg-gray-100 focus:outline-none"
            onclick="toggleDropdown('faq3')">
            Apakah saya bisa membuat laporan secara anonim?
            <svg class="w-6 h-6 transform transition-transform duration-200" id="faq3-icon"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="faq3" class="hidden p-6 text-gray-600">
            Ya. Anda bisa memilih opsi anonim saat mengisi laporan. Identitas Anda tidak akan ditampilkan ke publik.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="bg-white rounded-lg shadow transition duration-300"  data-aos="fade-up">
          <button
            class="flex justify-between items-center w-full p-6 text-left text-lg font-semibold text-gray-800 hover:bg-gray-100 focus:outline-none"
            onclick="toggleDropdown('faq4')">
            Bagaimana cara mengetahui status laporan saya?
            <svg class="w-6 h-6 transform transition-transform duration-200" id="faq4-icon"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="faq4" class="hidden p-6 text-gray-600">
            Gunakan fitur <strong>Riwayat Laporan</strong> untuk memantau status laporan Anda secara real-time.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="bg-white rounded-lg shadow transition duration-300"  data-aos="fade-up">
          <button
            class="flex justify-between items-center w-full p-6 text-left text-lg font-semibold text-gray-800 hover:bg-gray-100 focus:outline-none"
            onclick="toggleDropdown('faq5')">
            Berapa lama laporan saya akan ditangani?
            <svg class="w-6 h-6 transform transition-transform duration-200" id="faq5-icon"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="faq5" class="hidden p-6 text-gray-600">
            Tergantung tingkat urgensinya. Umumnya laporan akan ditanggapi dalam 1–3 hari kerja.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="bg-white rounded-lg shadow transition duration-300"  data-aos="fade-up">
          <button
            class="flex justify-between items-center w-full p-6 text-left text-lg font-semibold text-gray-800 hover:bg-gray-100 focus:outline-none"
            onclick="toggleDropdown('faq6')">
            Apa sanksi jika saya mengirim laporan palsu?
            <svg class="w-6 h-6 transform transition-transform duration-200" id="faq6-icon"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div id="faq6" class="hidden p-6 text-gray-600">
            Pengguna yang mengirimkan laporan palsu atau tidak bertanggung jawab dapat dikenai peringatan hingga sanksi
            dari pihak sekolah.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-blue-600 text-white mt-auto rounded-t-3xl">
    <div class="container mx-auto px-5 lg:px-10 py-12 grid grid-cols-1 md:grid-cols-3 gap-12">
      <div>
        <h3 class="font-semibold text-xl text-white mb-4">Lokasi Sekolah</h3>
        <div class="overflow-hidden rounded-lg shadow-lg mb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126548.37462387834!2d110.84279492421925!3d-7.614450917054266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e654b99ab219bfd%3A0x4e63f4d5cebe448a!2sSMK%20Negeri%202%20Karanganyar!5e0!3m2!1sid!2sid!4v1752927749666!5m2!1sid!2sid"
            class="w-full h-48 md:h-52 border-0" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div>
        <h3 class="font-semibold text-xl text-white mb-4">Kontak</h3>
        <address class="not-italic space-y-2 text-white">
          <p>Jl. Yos Sudarso, Jengglong, Bejen, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716</p>
          <p>Email: <a href="mailto:info@smkn2karanganyar.sch.id" class="hover:text-blue-200 transition">info@smkn2karanganyar.sch.id</a></p>
          <p>Telp: (0271) 123456</p>
          <p>Fax: (0271) 654321</p>
        </address>
      </div>
      <div>
        <h3 class="font-semibold text-xl text-white mb-4">Tentang SMKN 2 Karanganyar</h3>
        <p class="text-white leading-relaxed">
          SMK Negeri 2 Karanganyar adalah sekolah menengah kejuruan yang berfokus pada pendidikan vokasi berkualitas,
          menyiapkan lulusan siap kerja dan berkompeten di bidangnya.
        </p>
      </div>
    </div>

    <div class="border-t border-blue-300 text-center py-6 text-sm text-blue-100">
      © 2025 SMKN 2 Karanganyar - <br> Pengaduan Masyarakat. skanda.dev
    </div>
  </footer>

 <!-- AOS (Animate On Scroll) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<script>
  // Toggle Mobile Menu
  const toggleBtn = document.getElementById('navbar-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  toggleBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('max-h-0');
    mobileMenu.classList.toggle('max-h-[500px]');
  });

  // Fungsi untuk animasi angka dari 0 ke target (Counter)
  function animateCounter(counter) {
    if (counter.dataset.animated === "true") return; // Sudah dijalankan? Skip
    counter.dataset.animated = "true";

    counter.innerText = '0';
    const target = +counter.getAttribute('data-target');
    let current = 0;
    const increment = target / 100;

    const update = () => {
      if (current < target) {
        current = Math.ceil(current + increment);
        counter.innerText = current.toLocaleString();
        requestAnimationFrame(update);
      } else {
        counter.innerText = target.toLocaleString();
      }
    };

    update();
  }

  // Trigger animasi counter saat masuk viewport
  const counters = document.querySelectorAll('.counter');
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
        }
      });
    },
    {
      threshold: 0.6,
    }
  );

  counters.forEach((counter) => {
    observer.observe(counter);
  });

  // Toggle Dropdown FAQ
  function toggleDropdown(faqId) {
    const content = document.getElementById(faqId);
    const icon = document.getElementById(faqId + '-icon');

    if (content.classList.contains('hidden')) {
      content.classList.remove('hidden');
      icon.classList.add('rotate-180');
    } else {
      content.classList.add('hidden');
      icon.classList.remove('rotate-180');
    }
  }

  // Ganti Konten Utama dari Kartu (detail aduan)
  function updateMainCard(card) {
    const title = card.getAttribute('data-title');
    const desc = card.getAttribute('data-description');
    const img = card.getAttribute('data-image');
    const date = card.getAttribute('data-date');
    const status = card.getAttribute('data-status');
    const statusColor = card.getAttribute('data-status-color');
    const detailLink = card.getAttribute('data-detail');

    document.getElementById('main-title').textContent = title;
    document.getElementById('main-description').textContent = desc;
    document.getElementById('main-image').src = img;
    document.getElementById('main-date').textContent = date;
    document.getElementById('main-detail-link').href = detailLink;

    const statusElem = document.getElementById('main-status');
    statusElem.textContent = status;
    statusElem.className = 'text-sm px-3 py-1 rounded-full text-xs font-semibold ' + statusColor;

    const mainCard = document.getElementById('main-card');
    mainCard.classList.remove('animate-fadeIn');
    void mainCard.offsetWidth; // Force reflow
    mainCard.classList.add('animate-fadeIn');
  }
</script>

</body>

</html>
