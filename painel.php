<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .info, .reservas {
            margin: 15px 0;
        }
        .info span {
            font-weight: bold;
        }
        .reservas table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .reservas table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .btn-cancelar {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-cancelar:hover {
            background-color: #e60000;
        }
    </style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
          <div class="main-bunner-img" style="background-image: url(&quot;images/bg-bunner-2.png&quot;); background-size: cover;"></div>
          <div class="main-bunner-inner">
            <div class="container">
              <div class="box-default">
          <h2 class="box-default-title"></h2>
          <h3></h3>
          <div class="container">
            <h1>Controle de Reservas</h1>
            <div class="info">
              <p>Lugares Disponíveis: <span id="lugaresDisponiveis">30</span></p>
              <p>Lugares Ocupados: <span id="lugaresOcupados">30</span></p>
              <p>Total de Lugares na Casa: <span id="totalLugares">60</span></p>
            </div>
          </div>
          <div class="reservas">
            <h2>Reservas dos Clientes</h2>
            <table>
              <thead>
                <tr>
            <th>Nome do Cliente</th>
            <th>Quantidade de Lugares Reservados</th>
            <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
            <td>Cliente 1</td>
            <td>5</td>
            <td><button class="btn-cancelar" onclick="cancelarReserva('Cliente 1')">Cancelar</button></td>
                </tr>
                <tr>
            <td>Cliente 2</td>
            <td>3</td>
            <td><button class="btn-cancelar" onclick="cancelarReserva('Cliente 2')">Cancelar</button></td>
                </tr>
                <tr>
            <td>Cliente 3</td>
            <td>2</td>
            <td><button class="btn-cancelar" onclick="cancelarReserva('Cliente 3')">Cancelar</button></td>
                </tr>
              </tbody>
            </table>
          </div>
              </div>
            </div>
          </div>
        </section>
            
        
      <div class="bg-gray-1">
        <section class="section-transform-top" >
        <div class="login-container">
        
    </div>
        </section>
      <!-- Page Footer-->
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.html"><img src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="about-us.html">About</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Pesto</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="#">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">Templatemonster</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>