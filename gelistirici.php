<?php 
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RRechz | EchoWave</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    #app {
		overflow-x: hidden;
	}
    .fade-in {
      animation: fade-in 1s ease-in-out both;
}

    @keyframes fade-in {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .developer-container {
      background: linear-gradient(to bottom right, rgba(255, 0, 128, 0.15), rgba(128, 0, 128, 0.15));
      backdrop-filter: blur(5px);
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      max-width: 1000px;
      margin: 0 auto;
      min-height: 400px;
    }

	.skills-container {
	  display: grid;
	  grid-template-columns: repeat(3, 23%);
	  gap: 1rem;
	  margin-top: 5rem;
	}

    .skill-box {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 0.5rem;
      padding: 0.3rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .skill-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .skill-box a {
      display: block;
      text-decoration: none;
      color: inherit;
    }

	.developer-info {
		font-size: 1.2rem;
		line-height: 1.6;
	}
  </style>
</head>
<body class="bg-gray-900 text-white">
  <div id="app">
    <section id ="devsec" class="container mx-auto px-4 py-16">
      <div class="developer-container fade-in">
        <div class="flex flex-col md:flex-row items-start">
          <div class="w-full md:w-1/2 mb-8 md:mb-0">
            <div class="flex items-center mb-4 md:mb-0">
              <img src="assets/img/gelistirici.jpeg" alt="RRechz" class="w-32 h-32 rounded-full mr-4">
              <div>
                <h2 class="text-4xl font-bold">RRechz</h2>
                <p class="text-gray-400 text-sm">Developer of EchoWave</p>
              </div>
            </div>
            <div class="skills-container mt-8">
              <div class="skill-box" v-for="skill in skills" :key="skill.id">
                <a :href="skill.link" target="_blank" rel="noopener noreferrer"> 
                  <img :src="skill.image" :alt="skill.name" class="w-6 h-6 mx-auto mb-1">
                  <p class="text-xm">{{ skill.name }}</p>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2 developer-info">
            <p class="text-gray-400">Hey Selam! Naber? Python ile başladığım yazılım hayatıma Android Geliştiricisi olarak devam ediyorum. Bu süreçte geliştirdiğim bir çok uygulamamı GitHub sayfamda yayınlıyorum.</p>
            <p class="text-gray-400 mt-4">EchoWave Projesi, sizlere ücretsiz ve reklamsız olarak sonsuz bir müzik dinleme keyfi sunar. Spotify ve rakiplerine göre içerisinde barındırdığı zengin kütüphaneleri sayesinde sizlere sonsuz müzik seçenekleri sunmaktadır. Projeye ekstra bağışlarda bulunarak daha fazla gelişmesine katkı sağlayabilirsiniz! İyi eğlenceler!</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    new Vue({
      el: '#app',
      data: {
        skills: [
          {id: 1, name: 'Kotlin', image: 'assets/img/kotlin.png'},
          {id: 2, name: 'Python', image: 'assets/img/python.png'},
          {id: 3, name: 'Github', image: 'assets/img/github.png', link: 'https://github.com/RRechz'},
        ]
      }
    });
  </script>
</body>
</html>