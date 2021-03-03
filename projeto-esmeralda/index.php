<?php
include('conexao.php');

$querySoroAntiButropico = "select* from soros where soro = 'Soro antibotrópico'";
$querySoroAnticrotalico = "select* from soros where soro = 'Soro anticrotálico'";
$querySoroAntilaquetico = "select* from soros where soro = 'Soro antilaquético'";
$querySoroAntielapidico = "select* from soros where soro = 'Soro antielapídico'";
$querySoroAntibotropicoLaquetico = "select* from soros where soro = 'Soro antibotrópico-laquético'";
$querySoroAntiaracnidico = "select* from soros where soro = 'Soro antiaracnídico'";
$querySoroAntiescorpionico = "select* from soros where soro = 'Soro antiescorpiônico'";
$querySoroAntilonomia = "select* from soros where soro = 'Soro antilonomia'";



$resulAntiButropico = mysqli_query($conexao, $querySoroAntiButropico) or die("Erro na checagem do soro AntiButropico");
$resulAnticrotalico = mysqli_query($conexao, $querySoroAnticrotalico) or die("Erro na checagem do soro Anticrotalico");
$resulAntielapidico = mysqli_query($conexao, $querySoroAntielapidico) or die("Erro na checagem do soro Antielapidico");
$resulAntilaquetico = mysqli_query($conexao, $querySoroAntilaquetico) or die("Erro na checagem do soro Antilaquetico");
$resulAntibotropicoLaquetico = mysqli_query($conexao, $querySoroAntibotropicoLaquetico) or die("Erro na checagem do soro AntibotropicoLaquetico");
$resulAntiAntiaracnidico = mysqli_query($conexao, $querySoroAntiaracnidico) or die("Erro na checagem do soro Antiaracnidico");
$resulAntiescorpionico = mysqli_query($conexao, $querySoroAntiescorpionico) or die("Erro na checagem do soro Antiescorpionico");
$resulAntilonomia = mysqli_query($conexao, $querySoroAntilonomia) or die("Erro na checagem do soro AntiAntilonomia");

$queryHora = "SELECT id, data_hora FROM atualizacoes ORDER BY ID DESC LIMIT 1";
$resulHora = mysqli_query($conexao, $queryHora) or die("Erro ao checar hora");
$valorAntiButropico;
$valorAntiCrotalico;
?>

<!doctype html>
<html lang="pt-BR">

<head>
  <title>Página Inicial</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/icon2.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <style>
    html {
      margin: 0;
      padding: 0;
    }

    img {
      max-width: 100%;
    }

    .container-fluid {
      margin: 0;
      padding: 0;
    }

    .container-fluid .row .col-sm .card {
      align-items: center;
      margin: 0 auto;
      justify-content: center;
      margin-bottom: 2%;
    }

    #containerCards {
      padding: 5%;
    }

    .container-fluid .row .col-sm .col ul {
      list-style: outside;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" style="font-family: 'Lobster Two', cursive; font-size: large; color: lightgreen;" href="#">
        <img src="img/icon2.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Projeto Esmeralda
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav justify-content-end">
          <li class="nav-item" href="#">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.html">Hospitais/Clínicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contatos.html">Contatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#myFooter">Sobre</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Sobre o projeto</h1>
        <p class="lead" style="text-align: justify;">Projeto realizado com intuito de facilitar a busca por medicações (soros) antipeçonhento, a fim de diminuir os índices de complicações após o acidente. A ideia veio após o caso da Maria Elza Esmeralda Cavalcante, de 72 anos, residente de Assaré, que foi a óbito após ser picada por uma cobra cascavel.</p>
      </div>
    </div>

    <hr style="width:50%;border-width:0;color:gray;background-color:gray;height:2px;">

    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <center>
            <h3> Soro antipeçonhento </h3>
          </center>
          <center>
            <p style="color: red;">
              <?php if ($valorHora = mysqli_fetch_assoc($resulHora)) {
                echo ("Ultima atualização: " . $valorHora["data_hora"]);
              } ?>
            </p>
          </center>
        </div>
      </div>
    </div> <br> <br>

    <div class="container-fluid" id='containerCards'>
      <div class='row'>
        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/jararaca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro AntiButropico</h5>
              <?php
              if ($valorAntiButropico = mysqli_fetch_array($resulAntiButropico)) {
                if ($valorAntiButropico['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                } else {
                  echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              }
              ?>
              <p class="card-text"> Para vítimas de acidentes com jararaca, jararacuçu, urutu e cotiara.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntiButropico['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntiButropico['geolocalizacao'] . "'>" . $valorAntiButropico['nome_hospital'] . '</a><br>');
                } while ($valorAntiButropico = mysqli_fetch_assoc($resulAntiButropico));
              }
              ?>
            </div>
          </div>
        </div>

        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/cascavel.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Anticrotalico</h5>
              <?php
              if ($valorAntiCrotalico = mysqli_fetch_array($resulAnticrotalico)) {
                if ($valorAntiCrotalico['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                } else {
                  echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              }
              ?>
              <p class="card-text">Para vítimas de acidentes com cascavel.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntiCrotalico['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntiCrotalico['geolocalizacao'] . "'>" . $valorAntiCrotalico['nome_hospital'] . '</a><br>');
                } while ($valorAntiCrotalico = mysqli_fetch_assoc($resulAnticrotalico));
              }
              ?>
            </div>
          </div>
        </div>

        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/surucucu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antilaquético</h5>
              <?php
              if ($valorAntilaquetico = mysqli_fetch_array($resulAntilaquetico)) {
                if ($valorAntilaquetico['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                } else {
                  echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              }
              ?>
              <p class="card-text">Para vítimas de acidentes com surucucu.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntilaquetico['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntilaquetico['geolocalizacao'] . "'>" . $valorAntilaquetico['nome_hospital'] . '</a><br>');
                } while ($valorAntilaquetico = mysqli_fetch_assoc($resulAntilaquetico));
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class='row' style='margin-top: 2%'>
        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/coral.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antielapídico</h5>
              <?php
              if ($valorAntielapidico = mysqli_fetch_array($resulAntielapidico)) {
                if ($valorAntielapidico['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                }
              } else {
                echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
              }
              ?>
              <p class="card-text">Para vítimas de acidentes com a coral-verdadeira.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntielapidico['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntielapidico['geolocalizacao'] . "'>" . $valorAntielapidico['nome_hospital'] . '</a><br>');
                } while ($valorAntielapidico = mysqli_fetch_assoc($resulAntielapidico));
              }
              ?>

            </div>
          </div>

        </div>

        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/aranha.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antiaracnídico</h5>
              <?php
              if ($valorAntiAracnidico = mysqli_fetch_array($resulAntiAntiaracnidico)) {
                if ($valorAntiAracnidico['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                }
              } else {
                echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
              }
              ?>
              <p class="card-text">Para vítimas de acidentes com aranha-armadeira e aranha-marrom.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntiAracnidico['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntiAracnidico['geolocalizacao'] . "'>" . $valorAntiAracnidico['nome_hospital'] . '</a><br>');
                } while ($valorAntiAracnidico = mysqli_fetch_assoc($resulAntiAntiaracnidico));
              } else if ($valorAntiAracnidico == null) {
                echo ('');
              }
              ?>
            </div>
          </div>
        </div>

        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/tityus.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antiescorpiônico</h5>
              <?php
              if ($valorAntiEscorpionico = mysqli_fetch_array($resulAntiescorpionico)) {
                if ($valorAntiEscorpionico['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                }
              } else {
                echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
              }
              ?>
              <p class="card-text">Para vítimas de acidentes com escorpiões brasileiros do gênero Tityus.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntiEscorpionico['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntiEscorpionico['geolocalizacao'] . "'>" . $valorAntiEscorpionico['nome_hospital'] . '</a><br>');
                } while ($valorAntiEscorpionico = mysqli_fetch_assoc($resulAntiescorpionico));
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class='col-sm'>
          <div class="card" style="width: 18rem;">
            <img src="img/tarturana.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro antilonomia</h5>
              <?php
              if ($valorAntilonomia = mysqli_fetch_array($resulAntilonomia)) {
                if ($valorAntilonomia['quantidade'] > 0) {
                  echo ("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                }
              } else {
                echo ("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
              }
              ?>
              <p class="card-text"> Para vítimas de acidentes com taturanas do gênero Lonomia.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if ($valorAntilonomia['quantidade'] > 0) {
                do {
                  echo ("<a href='" . $valorAntilonomia['geolocalizacao'] . "'>" . $valorAntilonomia['nome_hospital'] . '</a><br>');
                } while ($valorAntilonomia = mysqli_fetch_assoc($resulAntilonomia));
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    <hr style="width:50%;border-width:0;color:gray;background-color:gray;height:2px;">
    <div id="container-articles" class="container-fluid">
      <div class="row">
        <div class="col">
          <center>
            <h3> Cuidados </h3>
          </center>
        </div>
      </div>
    </div> <br> <br>


    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="col">
            <h4>Como prevenir acidentes com animais peçonhentos</h4><br>
            <p> O risco de acidentes com animais peçonhentos pode ser reduzido tomando algumas medidas gerais e bastante simples para prevenção:</p><br>
            <ul>
              <li>Usar calçados e luvas nas atividades rurais e de jardinagem.</li>
              <li>Examinar calçados, roupas pessoais, de cama e banho, antes de usá-las.</li>
              <li>Afastar camas das paredes e evitar pendurar roupas fora de armários.</li>
              <li>Não acumular entulhos e materiais de construção.</li>
              <li>Vedar frestas e buracos em paredes, assoalhos, forros e rodapés.</li>
              <li>Utilizar telas, vedantes ou sacos de areia em portas, janelas e ralos.</li>
            </ul>
          </div>
        </div>
        <div class="col-sm">
          <div class="col">
            <div class="container">
              <iframe width="560" style="max-width: 100%;" height="315" src="https://www.youtube.com/embed/jOceyhhQVsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br> <br>

    <div class="container-fluid">
      <footer id="myFooter">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <h5>Início</h5>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="formulario.html">Hospitais/Clínicas</a></li>
                <li><a href="#myFooter">Contato</a></li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h5>Desenvolvedores</h5>
              <ul>
                <li>Francisca Natália S. Araújo</li>
                <li>Lucas Sardemberg B. Gonçalves</li>
                <li>Milleny Sawany S. Nascimento</li>

              </ul>
            </div>
            <div class="col-sm-3">
              <h5>Orientadores</h5>
              <ul>
                <li>Alcides Tomaz</li>
                <li>Josniel Pires</li>
                <li>Ronis Uchôa</li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h5>Informações</h5>
              <ul>
                <li>EEEP Governador Virgílio Távora</li>
                <li><a href="https://goo.gl/maps/WsdL4uBGKjr7PPzLA">Rua Pergentino Silva, S/N</a></li>
                <li></li>
              </ul>

            </div>


          </div>
        </div>
        <div class="second-bar">
          <div class="container">
            <h4 class="logo"> © 2020 todos os direitos reservados </h4>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>