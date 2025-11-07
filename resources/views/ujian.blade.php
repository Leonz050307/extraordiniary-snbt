<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Extraordinary CBT adalah aplikasi pengelola ujian berbasis komputer yang dikembangkan oleh shellrean">
    <meta name="keywords" content="CBT, Computer Based Test, Ujian Berbasis Komputer">
    <meta name="author" content="shellrean">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#317EFB">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <title>Extraordinary CBT</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <noscript>Scripts are required</noscript>
  </head>
  <body class="c-app">

    <div id="app">
        <app>
            Kami sedang menyiapkan halaman untuk anda....
        </app>
    </div>

  	<script src="{{ asset('js/app.js') }}"></script>

    <!-- Floating WhatsApp button shown on hasil/result pages -->
    <style>
    .wa-floating {
      position: fixed;
      right: 20px;
      bottom: 20px;
      background: #25D366;
      color: white;
      border-radius: 50%;
      width: 56px;
      height: 56px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
      z-index: 9999;
      text-decoration: none;
    }
    .wa-floating img { width: 28px; height: 28px; }
    </style>

    <a id="wa-pembahasan" class="wa-floating" href="#" target="_blank" rel="noopener" style="display:none" aria-label="WhatsApp">
      <!-- inline WhatsApp SVG -->
      <svg viewBox="0 0 24 24" width="28" height="28" fill="#fff" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M20.52 3.48A11.86 11.86 0 0012 0C5.37 0 .01 5.36.01 12a11.9 11.9 0 001.64 6.01L0 24l6.24-1.63A11.95 11.95 0 0012 24c6.63 0 12-5.36 12-12 0-3.2-1.25-6.2-3.48-8.52zM12 21.5c-1.7 0-3.36-.44-4.81-1.27l-.34-.2-3.71.97.99-3.59-.22-.37A9.5 9.5 0 012.5 12c0-5.25 4.25-9.5 9.5-9.5s9.5 4.25 9.5 9.5-4.25 9.5-9.5 9.5z"/>
        <path d="M17.56 14.28c-.29-.15-1.7-.84-1.96-.94-.26-.1-.45-.15-.64.15s-.73.94-.9 1.13c-.17.19-.33.21-.61.07-.28-.15-1.17-.43-2.23-1.37-.82-.73-1.37-1.63-1.53-1.9-.16-.28-.02-.43.13-.58.13-.13.28-.33.42-.5.14-.17.19-.28.29-.46.1-.18.05-.34-.03-.48-.08-.13-.64-1.54-.88-2.11-.23-.55-.47-.48-.64-.49-.17-.01-.37-.01-.57-.01s-.48.07-.73.34c-.25.27-.95.93-.95 2.27s.98 2.64 1.12 2.82c.14.18 1.94 2.96 4.7 4.14 1.02.44 1.81.7 2.43.89.98.29 1.87.25 2.58.15.79-.11 1.7-.69 1.94-1.36.24-.67.24-1.25.17-1.36-.07-.11-.26-.18-.55-.33z"/>
      </svg>
    </a>

    <script>
      (function(){
        var path = window.location.pathname || '';
        // show WA button on result pages (e.g. /result/* or /hasil)
        if (path.indexOf('/result') !== -1 || path.indexOf('/hasil') !== -1) {
          var wa = document.getElementById('wa-pembahasan');
          var msg = encodeURIComponent('Kak saya mau pembahasan soal');
          wa.href = 'https://wa.me/6287874138999?text=' + msg;
          wa.style.display = 'flex';
        }
      })();
    </script>
  </body>
</html>
