<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>

<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página de Consultar</title>
    /head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type= "number" name="codigo" id="codigo"><br><br>

            <button type="submit">
                Consultar
                <?php
                    //Conexão com banco
                    $conexao = new Conexao();
                    //Coletar o Código
                    $codigo = $_POST['codigo'];
                    //Chamar o consultar
                    $consultar = new Consultar();
                    echo $consultar->consultarIndividual($conexao,$codigo);

                ?>
        </button>
     </form>
     
     <br><br>
     <a href="menu.php"><button>Voltar</button></a>
     
    </body>
</html>