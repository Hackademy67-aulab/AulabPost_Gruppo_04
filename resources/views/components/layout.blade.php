<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CDN GOOGLE FONTS --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Nanum+Myeongjo:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    
    @vite(['resources/css/app.css' , 'resources/js/app.js'])

    <title>The Aulab Post</title>
  </head>
  <body class="bodyBackgroundColor">
  
  <x-navbar/>

    {{$slot}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <x-footer/>
  </body>
</html>