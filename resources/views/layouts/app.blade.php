<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Papeleria-Yusty´s</title>
    <link rel="icon" href="https://i.ibb.co/GQq4kNr/e558a424-10c4-43c2-846d-5d35fc76c6b3.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <section id="side">
    <div class="logo">
    <center>
        <img src="https://i.ibb.co/GQq4kNr/e558a424-10c4-43c2-846d-5d35fc76c6b3.png" alt="e558a424-10c4-43c2-846d-5d35fc76c6b3" border="0">
        <a class="btn btn-primary" href="">Dashboard</a>
    </center>
    </div>

    <div class="line">

    </div>
    <div class="items">
        <ul>
            <li><p>Pages</p></li>

            <li><a href="/inventario-principal" class="inventario"><i style="margin-right: 13px;" class="fa-solid fa-boxes-stacked"></i> Inventario</a></li>
            <li><a href="/facturas" class="factura"><i style="margin-right: 18px;" class="fa-solid fa-file-invoice-dollar"></i> Factura</a></li>
            <li><a href="/ventas" class="venta"><i style="margin-right: 13px;" class="fa-solid fa-cart-shopping"></i> Venta</a></li>
            <li style="margin-left: 0px;margin-right: 25px;"> <a class="btn btn-primary" style="text-align: left; border-radius: 4px; width: 100%; color: #039A49; background: rgba(61, 206, 128, 0.28); border: none;" href=""><i style="margin-right: 13px;" class="fa-solid fa-users"></i> Usuarios</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i style="margin-right: 13px;" class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a></li>

        </ul>
    </div>

    <div class="items" style="margin-top: 100px;">
        <ul>
            <li><a href=""><i style="margin-right: 13px;" class="fa-solid fa-screwdriver-wrench"></i> Soporte tecnico</a></li>
        </ul>
    </div>

</section>

<section id="nav">
    <div class="n1">
        <div class="navbar">
            <div class="firts_nav">
            <div id="but">
                <i id="open" class="fa-solid fa-bars"></i>
                <i id="close" class="fa-solid fa-x"></i>
            </div>
            <div class="search">
                <i class="fas fa-search"></i>
                <input type="text">
            </div>
            </div>
            <div class="person">
                <h4>Administrador</h4>
                <p>{{auth()->user()->name}}</p>
            </div>
        </div>
    </div>
    <div class="startSections">
        <img src="https://i.ibb.co/jLCdvJW/026518d9-79d7-4994-b6da-445f177a4640.jpg" alt="026518d9-79d7-4994-b6da-445f177a4640" alt="">
        <h1>Bienvenido a la papeleria YUSTYS</h1>
        <h4>Aquí podras administrar tus productos</h4>
    </div>
    @yield('content')
</section>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" name="exit">
  @csrf
</form>

<div id="modalSpiner" class="modal fade bd-example-modal-md" data-backdrop="static" data-keyboard="false" tabindex="-1" style="background-color: #ffffff99;">
    <div class="modal-dialog modal-md" style="padding-top: 10%;">
        <div class="modal-content" style="background-color: rgba(255, 255, 255, 0); border: none;">
          <div class="d-flex justify-content-center" style="padding: 10%;">
            <div class="spinner-border text-danger" role="status" style="width: 10rem; height: 10rem;">
              <span class="sr-only">Loading...</span>
            </div>
          </div>
        </div>
    </div>
  </div>
<script>


    $( "#but" ).click(function() {
        $('#side').toggleClass("active");
    });

</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
