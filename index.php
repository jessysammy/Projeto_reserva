<?php
    // Incluindo o arquivo de conexão com o banco de dados
    include_once('conexão.php');

    // Verificando se o formulário foi enviado
    if (isset($_POST['submit']))
    {
        // Coletando os dados do formulário
        $nome = $_POST['name'];
        $telefone = $_POST['phone'];
        $data_reserva = $_POST['date'];
        $quantidade_pessoas = $_POST['num_people'];

        // Inserindo os dados na tabela 'reservas'
        $result = mysqli_query($mysqli, "INSERT INTO reservas(nome, telefone, data_reserva, quantidade_pessoas) VALUES ('$nome', '$telefone', '$data_reserva', '$quantidade_pessoas')");

        // Redirecionando para uma página de confirmação
        header('Location: index2 copy.php');
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
                    <a class="button button-white button-sm" href="#">Gestor</a>
                  </div>
                </div>
                <a class="button button-white button-sm" href="#">Gestor</a>
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
              <h1 class="box-default-title">Bem Vindo</h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text">Nosso restaurante oferece serviço completo de refeições com vistas deslumbrantes do nosso pátio interno coberto e do nosso deck externo</p>
            </div>
          </div>
        </div>
      </section>
      <div class="bg-gray-1">
        <section class="section-transform-top">
          <div class="container">
            <div class="box-booking">
            <form class="rd-form rd-mailform booking-form" action="" method="POST">
  <div>
    <p class="booking-title">Nome</p>
    <div class="form-wrap">
      <input class="form-input" id="booking-name" type="text" name="name" data-constraints="@Required">
      <label class="form-label" for="booking-name">Seu nome</label>
    </div>
  </div>
  <div>
    <p class="booking-title">Telefone</p>
    <div class="form-wrap">
      <input class="form-input" id="booking-phone" type="text" name="phone" data-constraints="@Numeric">
      <label class="form-label" for="booking-phone">Seu numero</label>
    </div>
  </div>
  <div>
    <p class="booking-title">Data</p>
    <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
      <input class="form-input" id="booking-date" type="date" name="date" data-constraints="@Required" data-time-picker="date">
    </div>
  </div>
  <div>
    <p class="booking-title">Numero de Pessoas</p>
    <div class="form-wrap">
      <select name="num_people" data-placeholder="2">
        <option label="placeholder"></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
    </div>
  </div>
  <div>
    <button class="button button-lg button-gray-600" type="submit" name="submit">Verificar</button>
  </div>
</form>
                <div>
                  <button class="button button-lg button-gray-600" type="submit">Verificar</button>
                </div>
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