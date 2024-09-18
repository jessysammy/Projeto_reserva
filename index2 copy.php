<?php


    

    if (isset($_POST['submit']))
    {
      // print_r($_POST['nome']);
      // print_r($_POST['telefone']);
      // print_r($_POST['data_reserva']);
      // print_r($_POST['quantidade_pessoas']);

      include_once('conexão.php');

      $nome = $_POST['nome'];
      $telefone = $_POST['telefone'];
      $data_reserva = $_POST['data_reserva'];
      $quantidade_pessoas = $_POST['quantidade_pessoas'];

      $result = mysqli_query($mysqli, "INSERT INTO reservas(nome, telefone, data_reserva, quantidade_pessoas) VALUES ('$nome', '$telefone', '$data_reserva', '$quantidade_pessoas')");

      header('Location: confirma.php');
      exit();

    
    }
    
    ?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="br"> 
  <head>
    <title>Home</title>
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
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
      }
      .container {
          max-width: 500px;
          margin: 50px auto;
          background: #fff;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      h2 {
          text-align: center;
      }
      label {
          display: block;
          margin: 15px 0 5px;
      }
      input, select {
          width: 100%;
          padding: 10px;
          margin: 5px 0 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
      }
      button {
          width: 100%;
          padding: 10px;
          background-color: #28a745;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }
      button:hover {
          background-color: #218838;
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
      
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel"> 
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand" ><a href="index.html"><img class="brand-logo-light" src="images/logo.png" alt="" width="140" height="57" srcset="" style="max-width: 90px;"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;images/bg-bunner-2.png&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title"></h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text"></p>
            </div>
          </div>
        </div>
      </section>
      <div class="bg-gray-1">
        <section class="section-transform-top">
          <div class="container">
            
              <div class="container">
                <h3>Informações do Cliente</h3>
                <form action="index2 copy.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Jessica" required>
        
                    <label for="telefone">Número de Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(00) XXXXX-01010 " required>
        
                    <label for="data_reserva">Data:</label>
                    <input type="date" id="nome" name="data_reserva" placeholder="10/10/2024" required>
        
                    <label for="quantidade_pessoas">Numero de Pessoas:</label>
                    <input type="int" id="nome" name="quantidade_pessoas" placeholder="5" required>
                    <button type="submit" name="submit" id="submit">Confirma</button>
                </form>
            
               
               
            </div>
          </div>
        </section>
       
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.html"><img src="images/logo.png" alt="" width="140" height="57" srcset=""/></a></div>
              
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
         
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>