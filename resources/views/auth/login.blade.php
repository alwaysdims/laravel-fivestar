<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login SMK N 2 Karanganyar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #4547ba 100%);
    }

    .card-shadow {
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .floating-elements {
      animation: float 6s ease-in-out infinite;
    }

    .floating-elements:nth-child(2) {
      animation-delay: -2s;
    }

    .floating-elements:nth-child(3) {
      animation-delay: -4s;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      33% { transform: translateY(-20px) rotate(1deg); }
      66% { transform: translateY(10px) rotate(-1deg); }
    }

    .input-focus {
      transition: all 0.3s ease;
    }

    .input-focus:focus {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }

    .btn-hover {
      transition: all 0.3s ease;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .btn-hover:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
      background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
    }

    .glass-effect {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .wave-animation {
      animation: wave 3s ease-in-out infinite;
    }

    @keyframes wave {
      0%, 100% { transform: translateX(0px); }
      50% { transform: translateX(10px); }
    }

    .text-gradient {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    @media (max-width: 768px) {
      .mobile-stack {
        flex-direction: column;
      }

      .mobile-full {
        width: 100%;
      }

      .mobile-padding {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body class="min-h-screen flex font-sans bg-gray-50">

  <!-- Container Responsive -->
  <div class="w-full flex mobile-stack min-h-screen">

    <!-- Left Section -->
    <div class="mobile-full lg:w-3/5 gradient-bg flex flex-col justify-center items-center relative overflow-hidden mobile-padding lg:px-12 py-8 lg:py-0">

      <!-- Floating Decorative Elements -->
      <div class="absolute w-64 h-64 bg-white opacity-10 rounded-full -top-10 -left-10 floating-elements"></div>
      <div class="absolute w-40 h-40 bg-white opacity-15 rounded-full top-1/4 right-10 floating-elements"></div>
      <div class="absolute w-32 h-32 bg-white opacity-10 rounded-full bottom-20 left-1/4 floating-elements"></div>

      <!-- Wave Background -->
      <svg class="absolute bottom-0 left-0 w-full h-32 lg:h-40 wave-animation" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,60 C200,100 400,20 600,60 C800,100 1000,20 1200,60 V120 H0 Z" fill="rgba(255, 255, 255, 0.1)" />
      </svg>

      <!-- Main Content -->
      <div class="z-10 text-center lg:text-left">
        <!-- Logo and Title -->
        <div class="flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-6 mb-8">
          <div class="w-24 h-24 lg:w-32 lg:h-32 bg-white rounded-full flex items-center justify-center shadow-2xl">
            <svg class="w-12 h-12 lg:w-16 lg:h-16 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
            </svg>
          </div>
          <div class="text-white">
            <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold leading-tight">SMK N 2</h1>
            <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold leading-tight">Karanganyar</h1>
            <p class="text-sm lg:text-lg font-medium mt-2 opacity-90">Inspiring Future Leaders</p>
          </div>
        </div>

        <!-- Quote -->
        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-6 max-w-lg mx-auto lg:mx-0 mb-8">
          <p class="text-white text-base lg:text-lg italic leading-relaxed">
            "Bersuara hari ini, mengubah masa depan. Mari bersama wujudkan perubahan di lingkungan sekolah kita!"
          </p>
        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="mobile-full lg:w-2/5 flex items-center justify-center mobile-padding lg:p-8 bg-gray-50">
      <div class="w-full max-w-md glass-effect mobile-padding lg:p-10 rounded-3xl card-shadow">
      
        <!-- Header -->
        <div class="text-center mb-8">
          <h2 class="text-3xl lg:text-4xl font-bold text-gradient mb-2">Selamat Datang</h2>
          <p class="text-gray-600 font-medium">Masuk untuk melanjutkan</p>
        </div>

        @if ($errors->has('login'))
            <div id="alert-login" class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative" role="alert">
                <strong class="font-bold">Login gagal! </strong>
                <span class="block sm:inline">{{ $errors->first('login') }}</span>
                <button onclick="closeAlert()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <title>Tutup</title>
                        <path d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652A1 1 0 105.652 7.066L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z"/>
                    </svg>
                </button>
            </div>
        @endif
        <!-- Form -->
        <form class="space-y-6" method="post" action="{{ route('auth.login') }}">
          @csrf
          <!-- Email Field -->
          <div class="space-y-2">
            <label for="Email" class="block text-sm font-semibold text-gray-700">Email</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
              </div>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Masukkan Email Anda"
                class="input-focus w-full pl-12 pr-4 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white"
              />
            </div>
          </div>

          <!-- Password Field -->
          <div class="space-y-2">
            <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
              </div>
              <input
                type="password"
                id="password"
                name="password_hash"
                placeholder="Masukkan password Anda"
                class="input-focus w-full pl-12 pr-4 py-4 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white"
              />
            </div>
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center">
              <input type="checkbox" class="rounded border-gray-300 text-purple-600 focus:ring-purple-500 focus:ring-offset-0">
              <span class="ml-2 text-gray-600">Remember me</span>
            </label>
            <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Lupa password?</a>
          </div>

          <!-- Login Button -->
           <button type="submit"  class="btn-hover w-full py-4 rounded-xl text-white font-bold text-lg shadow-lg block text-center bg-blue-600 hover:bg-blue-700 transition duration-300">
            MASUK SEKARANG
           </button>
        </form>
        <p class="mt-8 text-center text-sm text-gray-600">
          Belum punya akun?
          <a href="register.html" class="font-semibold text-purple-600 hover:text-purple-800">Daftar sekarang</a>
        </p>
        <!-- Divider -->

    </div>
  </div>

  <script>
    function closeAlert() {
      document.getElementById("alert-login").remove();
    }
  
    // Auto close setelah 5 detik
    setTimeout(() => {
      let alertBox = document.getElementById("alert-login");
      if (alertBox) {
        alertBox.remove();
      }
    }, 5000);
  </script>
  
</body>
</html>
