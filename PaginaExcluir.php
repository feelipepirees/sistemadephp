<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!Doctype HTML>
<head>
    <meta charset="UTF-8">
    <title>Página Excluir</title>
</head>
<body>
    <label>Código: </label>
    <input type="number" name="codigo" id="codigo"/><br><br>

    <button type="submit"> Excluir
        <?php
            $conexao = new Conexao();
            $codigo  = $_POST['codigo'];
            $excluir = new Excluir();
            
        ?>
    </button>
    <?php
    $excluir->excluirPessoa($conexao, $codigo);
    ?>
</form>