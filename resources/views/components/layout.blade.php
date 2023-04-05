<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    @vite(['resources/css/app.css' , 'resources/js/app.js'])

    <title>The Aulab Post</title>
  </head>
  <body>

  <x-navbar/>

    {{$slot}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
  </body>
</html>