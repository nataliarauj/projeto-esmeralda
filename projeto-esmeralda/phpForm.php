<?php
    include('conexao.php');

    $nome_hospital = $_POST['nome_hospital'];
    $soro = $_POST['soro'];
    $quantidade = $_POST['quantidade'];
    $geolocalizacao = $_POST['geolocalizacao'];


    $queryInsercao = "INSERT INTO `soros`(`id`, `nome_hospital`, `soro`, `quantidade`, `geolocalizacao`) VALUES ('','$nome_hospital','$soro','$quantidade',$geolocalizacao)";
    $resul = mysqli_query($conexao, $queryInsercao) or die('Erro na inserção do sistema');

    echo("<script type='text/javascript' language='javascript'>alert('cadastro realidado com sucesso, Obrigado por fortalecer nossa causa!'); window.prompt.href='formulario.html'</script>");
?>