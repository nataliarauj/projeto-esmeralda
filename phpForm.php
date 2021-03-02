<?php
    include('conexao.php');

    $nome_hospital = $_POST['nome_hospital'];
    $soro = $_POST['soro'];
    $quantidade = $_POST['quantidade'];
    $geolocalizacao = $_POST['geolocalizacao'];
    $agora = date('d/m/Y H:i');
    $querySelecao = "select* from soros where nome_hospital like ? and soro = ?";

    $resul1;
    
    $stmt1 = mysqli_prepare($conexao, $querySelecao);
    mysqli_stmt_bind_param($stmt1, "ss", $nome_hospital, $soro);
    mysqli_stmt_execute($stmt1);

    if(mysqli_stmt_fetch($stmt1)){
        mysqli_stmt_close($stmt1);
        $queryUpdate = "update soros set quantidade = ? where nome_hospital like ?";
        
        $stmt2 = mysqli_prepare($conexao, $queryUpdate);
        mysqli_stmt_bind_param($stmt2, "is", intval($quantidade), $nome_hospital);
        mysqli_stmt_execute($stmt2);
        
        $queryInsercaoHora = "insert into atualizacoes(data_hora) values('$agora')";
        echo($queryInsercaoHora);
        $resulHora = mysqli_query($conexao,$queryInsercaoHora) or die("Erro na inserção do horário");
        echo("<script type='text/javascript' language='javascript'>alert('Atualização realidada com sucesso, Obrigado por fortalecer nossa causa!'); window.location.href='formulario.html'</script>");
    }else{
        mysqli_stmt_close($stmt1);
        $queryInsercao = "insert into soros(nome_hospital, soro, quantidade, geolocalizacao) values (?, ?, ?, ?)";

        $stmt3 = mysqli_prepare($conexao, $queryInsercao);
        mysqli_stmt_bind_param($stmt3, "ssis", $nome_hospital, $soro, intval($quantidade), $geolocalizacao);
        mysqli_stmt_execute($stmt3);

        $queryInsercaoHora = "insert into atualizacoes(data_hora) values('$agora')";
        $resulHora = mysqli_query($conexao,$queryInsercaoHora) or die("Erro na inserção do horário");
        //echo("<script type='text/javascript' language='javascript'>alert('cadastro realidado com sucesso, Obrigado por fortalecer nossa causa!'); window.location.href='formulario.html'</script>");
    }
?>