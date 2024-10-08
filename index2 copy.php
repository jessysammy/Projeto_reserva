<?php
// Conectar ao banco de dados
include_once('conexão.php');

// Consultar a última reserva inserida
$query = "SELECT * FROM reservas ORDER BY id DESC LIMIT 1";
$result = mysqli_query($mysqli, $query);

// Verificar se encontrou algum registro
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Atribuir os valores da última reserva a variáveis
    $last_id = $row['id'];
    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $data_reserva = $row['data_reserva'];
    $quantidade_pessoas = $row['quantidade_pessoas'];
} else {
    // Caso não haja nenhum registro, inicializar os campos como vazios
    $last_id = null;
    $nome = '';
    $telefone = '';
    $data_reserva = '';
    $quantidade_pessoas = '';
}

// Verificar se o formulário foi enviado
if (isset($_POST['submit'])) {
    // Capturar os dados do formulário
    $nome_novo = $_POST['nome'];
    $telefone_novo = $_POST['telefone'];
    $data_reserva_novo = $_POST['data_reserva'];
    $quantidade_pessoas_novo = $_POST['quantidade_pessoas'];

    if ($last_id) {
        // Se já houver um registro, atualize o último registro
        $result = mysqli_query($mysqli, 
            "UPDATE reservas 
            SET nome='$nome_novo', telefone='$telefone_novo', data_reserva='$data_reserva_novo', quantidade_pessoas='$quantidade_pessoas_novo' 
            WHERE id='$last_id'");
    } else {
        // Se não houver registro, insira um novo
        $result = mysqli_query($mysqli, 
            "INSERT INTO reservas(nome, telefone, data_reserva, quantidade_pessoas) 
            VALUES ('$nome_novo', '$telefone_novo', '$data_reserva_novo', '$quantidade_pessoas_novo')");
    }

    // Verificar se a operação foi bem-sucedida e redirecionar
    if ($result) {
        // Redirecionar para a página confirma.php
        header('Location: confirma.php');
        exit(); // Certifique-se de que o script seja finalizado após o redirecionamento
    } else {
        echo "Erro ao processar os dados. Tente novamente.";
    }
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
        <h3>Informações do Cliente</h3>
        <form action="index2 copy.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>" placeholder="Jessica" required>
            
            <label for="telefone">Número de Telefone:</label>
            <input type="tel" id="telefone" name="telefone" value="<?php echo isset($telefone) ? $telefone : ''; ?>" placeholder="(00) XXXXX-01010" required>
            
            <label for="data_reserva">Data:</label>
            <input type="date" id="data_reserva" name="data_reserva" value="<?php echo isset($data_reserva) ? $data_reserva : ''; ?>" required>
            
            <label for="quantidade_pessoas">Número de Pessoas:</label>
            <input type="int" id="quantidade_pessoas" name="quantidade_pessoas" value="<?php echo isset($quantidade_pessoas) ? $quantidade_pessoas : ''; ?>" required>
            
            <button type="submit" name="submit" id="submit">Confirmar</button>
        </form>
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