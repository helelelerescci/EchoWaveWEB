<?php
$isLoggedIn = isset($_SESSION['user_id']);
?>

<header class="header">
  <div class="container">
    <div class="flex items-center justify-between">
      <div class="logo-container">
        <img src="assets/img/logo.png" alt="Logo" class="logo" onclick="window.open('index', '_self')">
        <span class="site-name" onclick="window.open('index', '_self')">EchoWave</span>
      </div>

      <button class="hamburger" type="button" aria-label="Toggle Menu" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </button>

      <nav class="nav">
        <ul class="nav-links">
          <li><a href="index">Anasayfa</a></li>
          <li><a href="ozellikler">Özellikler</a></li>
          <li><a href="gelistirici">Geliştirici</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<style>
  .header {
    backdrop-filter: blur(5px);
    background-color: transparent;
    color: #fff;
    padding: 1rem 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    border-bottom: 2px solid rgba(255, 255, 255, 0.1);
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
  }

  .logo-container {
    display: flex;
    align-items: center;
  }

  .logo {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 0.8rem;
  }

  .site-name {
    font-size: 1.5rem;
    font-weight: bold;
  }
  
  .nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end;
    width: 100%;
  }

  .nav-links li {
    margin-right: 1.5rem;
  }

  .nav-links a {
    color: #fff;
    text-decoration: none;
    padding: 0.8rem 1.5rem;
    background-color: transparent;
    border-radius: 20px;
    transition: background-color 0.3s ease, color 0.3s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    font-weight: bold;
  }

  .nav-links a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ddd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  }

  .hamburger {
    display: none;
    cursor: pointer;
    border: none;
    background-color: transparent;
    padding: 0;
    position: absolute;
    top: 1rem;
    right: 1rem;
    z-index: 100;
  }

  .bar {
    display: block;
    width: 30px;
    height: 3px;
    margin: 5px auto;
    background-color: #fff;
    transition: transform 0.3s ease, opacity 0.3s ease;
  }

  .hamburger.active .bar:nth-child(1) {
    transform: rotate(45deg);
    position: relative;
    top: 8px;
  }

  .hamburger.active .bar:nth-child(2) {
    opacity: 0;
  }

  .hamburger.active .bar:nth-child(3) {
    transform: rotate(-45deg);
    position: relative;
    top: -8px;
  }

@media (max-width: 768px) {
  .header {
    background-color: transparent;
    position: relative;
  }

  .hamburger {
    display: block;
  }

  .nav-links {
    margin: 0;
    padding: 0;
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    height: 100vh;
    width: 100%;
    background-color: #20283b;
    padding: 2rem;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease-in-out;
  }

  .nav-links.active {
	display: flex;
    opacity: 1;
    left: 0;
  }

  .nav-links li {
    margin: 1rem 0;
  }

  .nav-links a {
    color: #fff;
    text-decoration: none;
    padding: 1rem 2rem;
    background-color: transparent;
    border-radius: 10px;
    font-weight: bold;
    transition: background-color 0.3s ease, color 0.3s ease;
    display: block;
    width: 100%;
    text-align: center;
  }

  .nav-links a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ddd;
  }

  .hamburger.active {
    position: absolute;
    top: 2rem;
    right: 2rem;
    z-index: 101;
  }
}
  
  .hidden {
      display: none;
  }
</style>

<script>
  function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');

    const hamburger = document.querySelector('.hamburger');
    hamburger.classList.toggle('active');

    document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : 'auto';
    
    const ids = document.querySelectorAll('#anasec, #ozsec, #devsec, #hessec');
    ids.forEach(element => {
      element.classList.toggle('hidden');
    });
  }
</script>