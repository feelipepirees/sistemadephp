<?php
    namespace PHP\Modelo; //Definir o Local do Projeto

    require_once('Pessoa.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;

    /*

    $endCliente = new Endereco("Avenida","400","Centro","São Bernardo do Campo","São Paulo","Brasil","09950-000");
    $paciente = new Paciente("12345","Pedro","1197070",$endCliente,"Tomografia"); //Criar um Objeto
    $recepcionista = new Recepcionista("12","Luisa","13",3000.00,$endCliente);
    $medico = new Medico("123","Ricardo","2020",2150.35,$endCliente);

    echo $paciente -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $recepcionista -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $medico -> imprimir();
    echo $endCliente -> imprimir();

    */
    $conn = new Conexao();
    $conn->conectar();//Acessar o Banco de dados

    //$inserir = new Inserir();//Criando acesso a classe Inserir
    //echo $inserir->cadastrarPessoa($conn,"1","Fabio","Rua","11");

    $consultar = new Consultar();
    echo $consultar->consultarIndividual($conn,'1');
    
    $atualizar = new Atualizar();
    echo $atualizar->atualizarPessoa($conn, "nome", "allan",1);

    $excluir = new Excluir();
    $excluir->excluirPessoa($conn,1);

?>