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
  </head>
  <body>

    <header>
    <nav class="navbar fixed-top navbar-light">
        <a class="navbar-brand" style="font-family: 'Lobster Two', cursive; font-size: x-large; color: lightgreen;" href="#">
          <img src="img/icon2.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
          Projeto Esmeralda
        </a>
       
        <ul class="nav justify-content-end">
          <li class="nav-item" href="#">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.html">Hospitais/Clínicas</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#myFooter">Contatos</a>
          </li>
        </ul>
      </nav>
    </header>

    
     
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Sobre o projeto</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>

      <hr style="width:50%;border-width:0;color:gray;background-color:gray;height:2px;">

      <div id="container-articles" class="container-fluid">
              <div class="row">
                <div class="col">
                  <center> <h3> Soro antipeçonhento </h3> </center>   
                  <center><p style="color: red;">Atualizado há 4 minutos</p></center>
                </div>
              </div>
          </div> <br> <br>

    <div class='container-fluid'>
      <div class='row'>

        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/jararaca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro AntiButropico</h5>
              <?php
                if($valorAntiButropico = mysqli_fetch_array($resulAntiButropico)){
                  if($valorAntiButropico['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }    
                else{
                  echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }}
              ?>
              <p class="card-text"> Para vítimas de acidentes com jararaca, jararacuçu, urutu e cotiara.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
                if($valorAntiButropico){
                  do{
                    echo("<a href='".$valorAntiButropico['geolocalizacao']."'>".$valorAntiButropico['nome_hospital'].'</a><br>');
                  }while($valorAntiButropico = mysqli_fetch_assoc($resulAntiButropico));
                }
              ?>
            </div>
          </div>
        </div>

        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/cascavel.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Anticrotalico</h5>
              <?php
                if($valorAntiCrotalico = mysqli_fetch_array($resulAnticrotalico)){
                  if($valorAntiCrotalico['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }    
                  else{
                    echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                  }
                }
              ?>
              <p class="card-text">Para vítimas de acidentes com cascavel.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
                do{
                  echo("<a href='".$valorAntiCrotalico['geolocalizacao']."'>".$valorAntiCrotalico['nome_hospital'].'</a><br>');
                }while($valorAntiCrotalico = mysqli_fetch_assoc($resulAnticrotalico));
              ?>
            </div>
          </div>
        </div>

        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/surucucu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antilaquético</h5>
              <?php
                if($valorAntilaquetico = mysqli_fetch_array($resulAntilaquetico)){
                  if($valorAntilaquetico['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }else{
                    echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                  }
                }
              ?>
              <p class="card-text">Para vítimas de acidentes com surucucu.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if($valorAntilaquetico){
                do{
                  echo("<a href='".$valorAntilaquetico['geolocalizacao']."'>".$valorAntilaquetico['nome_hospital'].'</a><br>');
                }while($valorAntilaquetico = mysqli_fetch_assoc($resulAntilaquetico));
              }
              ?>
            </div>
          </div>
        </div>
            </div>

      <div class='row' style='margin-top: 2%'>
        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/coral.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antielapídico</h5>
              <?php
                if($valorAntielapidico = mysqli_fetch_array($resulAntielapidico)){
                  if($valorAntielapidico['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }    
                }else{
                  echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              ?>
              <p class="card-text">Para vítimas de acidentes com a coral-verdadeira.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
                if($valorAntielapidico){
                  do{
                    echo("<a href='".$valorAntielapidico['geolocalizacao']."'>".$valorAntielapidico['nome_hospital'].'</a><br>');
                  }while($valorAntielapidico = mysqli_fetch_assoc($resulAntielapidico));
                }
              ?>
              
            </div>
          </div>
      
        </div>

        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/aranha.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antiaracnídico</h5>
              <?php
                if($valorAntiAracnidico = mysqli_fetch_array($resulAntiAntiaracnidico)){
                  if($valorAntiAracnidico['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }    
                }else{
                  echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              ?>
              <p class="card-text">Para vítimas de acidentes com aranha-armadeira e aranha-marrom.</p>
              <p class="card-text">Disponível nos hospitais: </p>
                <?php
                if($valorAntiAracnidico){
                  do{
                    echo("<a href='".$valorAntiAracnidico['geolocalizacao']."'>".$valorAntiAracnidico['nome_hospital'].'</a><br>');
                  }while($valorAntiAracnidico = mysqli_fetch_assoc($resulAntiAntiaracnidico));
                }
              ?>
            </div>
          </div>
        </div>

        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/tityus.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro Antiescorpiônico</h5>
              <?php
                if($valorAntiEscorpionico = mysqli_fetch_array($resulAntiescorpionico)){
                  if($valorAntiEscorpionico['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }    
                }else{
                  echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              ?>
              <p class="card-text">Para vítimas de acidentes com escorpiões brasileiros do gênero Tityus.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
              if($valorAntiEscorpionico){
                do{
                  echo("<a href='".$valorAntiEscorpionico['geolocalizacao']."'>".$valorAntiEscorpionico['nome_hospital'].'</a><br>');
                }while($valorAntiEscorpionico = mysqli_fetch_assoc($resulAntiescorpionico));
              } 
              ?>
            </div>
          </div>
        </div>

            </div>
  
        <div class='col'>
          <div class="card" style="width: 18rem;">
            <img src="img/tarturana.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Soro antilonomia</h5>
              <?php
                if($valorAntilonomia = mysqli_fetch_array($resulAntilonomia)){
                  if($valorAntilonomia['quantidade'] > 0){
                    echo("<span class='badge badge-secondary' style='background-color: green'>Disponível</span>");
                  }    
                }else{
                  echo("<span class='badge badge-secondary' style='background-color: red'>Não disponível</span>");
                }
              ?>
              <p class="card-text"> Para vítimas de acidentes com taturanas do gênero Lonomia.</p>
              <p class="card-text">Disponível nos hospitais: </p>
              <?php
                if($valorAntilonomia){
                  do{
                    echo("<a href='".$valorAntilonomia['geolocalizacao']."'>".$valorAntilonomia['nome_hospital'].'</a><br>');
                  }while($valorAntilonomia = mysqli_fetch_assoc($resulAntilonomia));
                }  
              ?>
            </div>
          </div>
        </div>
       </div> <br> <br>

       <hr style="width:50%;border-width:0;color:gray;background-color:gray;height:2px;">
       <div id="container-articles" class="container-fluid">
              <div class="row">
                <div class="col">
                  <center> <h3> Cuidados </h3> </center>   
                </div>
              </div>
          </div> <br> <br>

          <div class="row">
          <div class="col">
          <div class="container">
             <iframe width="560" height="315" src="https://www.youtube.com/embed/jOceyhhQVsA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
          </div>

          <div class="col">
            <h4>Como prevenir acidentes com animais peçonhentos</h4>
            <p> O risco de acidentes com animais peçonhentos pode ser reduzido tomando algumas medidas gerais e bastante simples para prevenção:</p>
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
          
        
       
        
        <br> <br>

      <footer id="myFooter">
      <div class="container">
          <div class="row">
              <div class="col-sm-3">
                  <h5>Início</h5>
                  <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="hospitais.html">Hospitais/Clínicas</a></li>
                      <li><a href="#">Projeto</a></li>
                     
                  </ul>
              </div>
              <div class="col-sm-3">
                  <h5>Sobre nós</h5>
                  <ul>
                      <li>Desenvolvedores:</li>
                      <li><a href="">Francisca Natália S. Araújo</a></li>
                      <li><a href="">Lucas Sardemberg B. Gonçalves</a></li>
                      <li><a href="">Milleny Sawany</a></li>
                  </ul>
              </div>
              <div class="col-sm-3">
                  <h5>Suporte</h5>
                  <ul>
                      <li><a href="">f.nataliaraujoo@gmail.com</a></li>
                      <li><a href="">lucassardem@gmail.com</a></li>
                      <li><a href="">millenysawany@gmail.com</a></li>
                  </ul>
              </div>
              <div class="col-sm-3 info">
                  <h5>Informações</h5>
                  <p> Se você deseja se tornar um programador de suce </p>
              </div>
          </div>
      </div>
  </footer>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>