<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Özellikler | EchoWave</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    #app {
		z-index: 99;
		overflow-x: hidden;
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
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: transparent;
      padding: 2rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      min-height: 400px;
	  
    }

  @media (max-width: 768px) {
    section {
      flex-direction: column;
      text-align: center;
      gap: 2rem;
    }

    .md\:w-1\/2 {
      width: 100%;
    }

    .md\:w-1\/3 {
      width: 90%;
      margin: 1rem auto;
    }

    #details-container img {
      width: 100%;
      max-width: 400px; 
	  height: auto;
      object-fit: contain;
      margin: 0 auto;      
    }

    #details-container h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem; 
    }

    #details-container p {
      font-size: 0.9rem;
      line-height: 1.4;
    }
  }
  </style>
</head>
<body class="bg-gray-900 text-white">
  <div id="app">
    <section id ="ozsec" class="container mx-auto px-4 py-16">
      <div class="grid grid-cols-1 gap-8" id="details-container">
      </div>
    </section>
  </div>

  <script>
    const detailsContainer = document.getElementById('details-container');
    const details = [
      {
        title: 'Geniş Müzik Kütüphanesi',
        text: 'EchoWave, binlerce şarkı, albüm ve sanatçıya ev sahipliği yapan geniş bir müzik kütüphanesine sahiptir. En sevdiğiniz şarkıları dinleyebilir, yeni müzikler keşfedebilir ve kişiselleştirilmiş öneriler alabilirsiniz.',
        image: 'assets/img/ozellik-1.png'
      },
      {
        title: 'Kişiselleştirilmiş Öneriler',
        text: 'EchoWave, müzik zevkinizi öğrenir ve size özel öneriler sunar. Böylece, daha önce hiç duymadığınız yeni şarkılar ve sanatçılar keşfedebilirsiniz.',
        image: 'assets/img/ozellik-2.png'
      },
      {
        title: 'Modern Kullanıcı Arayüzü',
        text: 'EchoWave, modern ve şık bir kullanıcı arayüzü ile tasarlanmıştır. Kullanımı kolay ve sezgisel arayüzü sayesinde müzik keyfinizi en üst düzeye çıkarın.',
        image: 'assets/img/ozellik-3.png' 
      },
      {
        title: 'Çalma Listeleri',
        text: 'Kendi çalma listelerinizi oluşturun ve müziklerinizi düzenleyin. Ayrıca, EchoWave\'in hazırladığı çalma listelerini keşfedin ve yeni müzikler bulun.',
        image: 'assets/img/ozellik-4.png'
      },
    ];

    details.forEach((detail, index) => {
      const section = document.createElement('section');
      section.classList.add('p-8', 'rounded-lg', 'flex', 'flex-col', 'md:flex-row', 'items-center', index % 2 === 0 ? 'slide-in-left' : 'slide-in-right');

      let content = '';
      if (index % 2 === 0) {
        content = `
          <div class="md:w-1/2">
            <h2 class="text-5xl font-bold mb-4">${detail.title}</h2>
            <p class="text-gray-400 text-2xl">${detail.text}</p>
          </div>
          <div class="md:w-1/3">
            <img src="${detail.image}" alt="${detail.title}" class="w-full h-64 object-fill rounded-md mb-4" />
          </div>
        `;
      } else {
        content = `
          <div class="md:w-1/3">
            <img src="${detail.image}" alt="${detail.title}" class="w-full h-64 object-fill rounded-md mb-4" />
          </div>
          <div class="md:w-1/2 pl-10"> 
            <h2 class="text-5xl font-bold mb-4">${detail.title}</h2>
            <p class="text-gray-400 text-2xl">${detail.text}</p>
          </div>
        `;
      }

      section.innerHTML = content;
      detailsContainer.appendChild(section);
    });
  </script>
</body>
</html>