<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EchoWave | Müzik Dinleme Platformu</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
  #app {
	  overflow-x: hidden;
  }
  .center-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 85vh;
  }
  .slide-in-right {
    animation: slide-in-right 0.5s ease-out both;
  }
  .slide-in-left {
    animation: slide-in-left 0.5s ease-out both;
  }
  @keyframes slide-in-right {
    from {
      transform: translateX(100%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }
  @keyframes slide-in-left {
    from {
      transform: translateX(-100%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @media (max-width: 768px) {
    .center-content {
      height: auto;
      padding: 2rem;
    }

    .md:flex-row {
      flex-direction: column-reverse;
    }

    .md:w-1/2 {
      width: 100%;
    }

    h2 {
      font-size: 2rem;
    }

    p {
      font-size: 1rem;
    }

    .slide-in-right, .slide-in-left {
      animation: none;
    }
  }
  </style>
</head>
<body class="bg-gray-900 text-white">
<div id="app" class="min-h-screen">
  <section id="anasec" class="container mx-auto px-4 py-16 center-content">
    <div class="flex flex-col md:flex-row items-center">
      <div class="md:w-1/2 mb-8 md:mb-0">
        <h2 class="text-5xl md:text-7xl font-bold mb-4 slide-in-left">Müzik Tutkunuzu EchoWave ile Keşfedin</h2>
        <p class="text-2xl md:text-3xl text-gray-400 slide-in-left">Binlerce şarkı, albüm ve sanatçıya sınırsız erişim. Kişiselleştirilmiş öneriler ve çalma listeleriyle müzik deneyiminizi zenginleştirin.</p>
        <div class="mt-6">
          <button onclick="window.open('https://github.com/RRechz/EchoWave/releases', '_blank')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded mr-4 slide-in-right">Hemen Başla</button>
          <button onclick="window.open('ozellikler', '_self')" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded slide-in-right">Daha Fazla Bilgi</button>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="assets/img/banner.png" alt="EchoWave Banner" class="w-full rounded-lg shadow-2xl slide-in-right" />
      </div>
    </div>
  </section>
</div>
</body>
</html>