<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bumdes</title>
  <link rel="icon" type="image/x-icon" href="{{asset('/assets/admin/img/bumdes-logo.png')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <link rel="stylesheet" href="{{asset('/assets/home/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/assets/home/css/style.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  @yield('css')
</head>
<body>
    <div class="container-fluid" style="font-family: 'Poppins', sans-serif;" style="background-color: #F7F7F7;">
        @yield('content')
    </div>
    <script type="text/javascript" src="{{asset('/assets/home/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script>
      function upper() {
          var x = document.getElementById("upper");
          if (x.style.display === "none") {
              x.style.display = "block";
          } else {
              x.style.display = "none";
          }
      }
      
    function pelatihan() {
        var v = document.getElementById("pendampingan");
        var w = document.getElementById("berita");
        var x = document.getElementById("pelatihan");
        var y = document.getElementById("layanan");
        var z = document.getElementById("profil");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            w.style.display = "none";
            v.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }

    function layanan() {
        var v = document.getElementById("pendampingan");
        var w = document.getElementById("berita");
        var x = document.getElementById("layanan");
        var y = document.getElementById("pelatihan");
        var z = document.getElementById("profil");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            w.style.display = "none";
            v.style.display = "none";
        }
         else {
            x.style.display = "none";
        }
    }

    function profil() {
        var v = document.getElementById("pendampingan");
        var w = document.getElementById("berita");
        var x = document.getElementById("profil");
        var y = document.getElementById("layanan");
        var z = document.getElementById("pelatihan");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
            w.style.display = "none";
            v.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }

    function berita() {
        var v = document.getElementById("pendampingan");
        var w = document.getElementById("berita");
        var x = document.getElementById("profil");
        var y = document.getElementById("layanan");
        var z = document.getElementById("pelatihan");
        if (w.style.display === "none") {
            v.style.display = "none";
            w.style.display = "block";
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "none";
        } else {
            w.style.display = "none";
        }
    }
    function pendampingan() {
        var v = document.getElementById("pendampingan");
        var w = document.getElementById("berita");
        var x = document.getElementById("profil");
        var y = document.getElementById("layanan");
        var z = document.getElementById("pelatihan");
        if (v.style.display === "none") {
            v.style.display = "block";
            w.style.display = "none";
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "none";
        } else {
            v.style.display = "none";
        }
    }
      
    </script>
    @yield('js')
</body>
</html>