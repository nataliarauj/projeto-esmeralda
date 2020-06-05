<?php
    include('conexao.php');

    $nome_hospital = $_POST['nome_hospital'];
    $soro = $_POST['soro'];
    $quantidade = $_POST['quantidade'];
    $geolocalizacao = $_POST['geolocalizacao'];
    $agora = date('d/m/Y H:i');
    $querySelecao = "select* from soros where nome_hospital like '%$nome_hospital%' and soro = '$soro'";
    
    $resul1 = mysqli_query($conexao, $querySelecao) or die("Erro na pesquisa do banco"); 
    
    if($valores = mysqli_fetch_array($resul1)){
        $queryUpdate = "UPDATE `soros` SET `quantidade`= $quantidade WHERE nome_hospital like "."'%".$valores['nome_hospital']."%'";
        
        $resul2 = mysqli_query($conexao, $queryUpdate) or die("Erro na atualização");
        
        
        $queryInsercaoHora = "insert into atualizacoes(data_hora) values('$agora')";
        echo($queryInsercaoHora);
        $resulHora = mysqli_query($conexao,$queryInsercaoHora) or die("Erro na inserção do horário");
        echo("<script type='text/javascript' language='javascript'>alert('Atualização realidada com sucesso, Obrigado por fortalecer nossa causa!'); window.location.href='formulario.html'</script>");
    }else{
        $queryInsercao = "INSERT INTO `soros`(`nome_hospital`, `soro`, `quantidade`, `geolocalizacao`) VALUES ('$nome_hospital','$soro',$quantidade, '$geolocalizacao')";
        
        $resul = mysqli_query($conexao, $queryInsercao) or die('Erro na inserção do sistema');

        $queryInsercaoHora = "insert into atualizacoes(data_hora) values('$agora')";
        $resulHora = mysqli_query($conexao,$queryInsercaoHora) or die("Erro na inserção do horário");
        echo("<script type='text/javascript' language='javascript'>alert('cadastro realidado com sucesso, Obrigado por fortalecer nossa causa!'); window.location.href='formulario.html'</script>");
    }
    

    
    
?>