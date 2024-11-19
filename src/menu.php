<?php
require_once 'controle.php';
/* require('cabeca.php'); */

$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="icon" href="img/navicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/cc7beb20bf.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <style type="text/css">
        body{ font: 18px sans-serif;
            background-color: #1D3736;
            color:#ffffff
        }

        .wrapper{ width: 350px; padding: 20px; }

        .green-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #1EE27A; 
            color: #1D3736;
        }
        .green-buttom:hover { 
            background-color: #1ec96d;
            color: white; 
            text-decoration: none;
        }

        
        .red-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc;  
            background-color: #E21E41; 
            color: white;
        }
        .red-buttom:hover{
            background-color: #c01937; 
            color: white;
            text-decoration: none;
        }

        

        .orange-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #F39C36; 
            color: #1D3736;
        }
        .orange-buttom:hover {
            background-color: #d88a31;
            color: white;
            text-decoration: none;
        }
        

        .blue-buttom {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px; 
            width: 100%; 
            height: 50px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #0E7FBE; 
            color: white;
        }
        .blue-buttom:hover {
            background-color: #0c6ea2;
            color: white;
            text-decoration: none;
        }

        
        .input-base {
            box-sizing: border-box;
            text-align: center;
            display: block;
            line-height: 30px;
            width: 100%; 
            height: 40px;
            padding: 10px; 
            border-radius: 4px; 
            border: 0px solid #ccc; 
            background-color: #D9D9D9; 
            color: black;
        }


        #sino{
            text-decoration: none;
            color: #1D3736;
            padding: 15px 26px;
            position: fixed; bottom: 0; right: 0; width: 100px; height: 50px;;
            display: inline-block;
        }

        #badge{
            background-color: #1EE27A;
            padding: 1px 5px;
            border-radius: 50%;
            position: absolute;
            top: 5px;
            right: 21px;
           
        }

        
    </style>
    
</head>
<center>
<body>

    <div class="wrapper">
    <img src="img/dottext.png" alt="erro" style="position: fixed; bottom: 0; left: 0; width: 100px; height: 40px;">

    <br>

    <p style="position: fixed; top: 20px; left: 0;">Usuário: <strong><?php echo htmlspecialchars($usuario); ?></strong></p>


    <div class="form-group" style="position: fixed; top: 20px; right: 0;">
            <a href="login.php" onclick="sair()" class="red-buttom">Sair da Conta</a>
            </div>

    <br>     
    <span class="help-block"></span>
    <img src="img/almoxarifeicon.png" alt="erro" width="60" height="60">
    
    <h2>SEJA BEM-VINDO</h2>
        <p>O que deseja fazer hoje ?</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
        <br>

        <div class="form-group">

            <div class="form-group">
            <a href="historico_entradas.php" class="green-buttom">Histórico de Entradas</a>
            <span class="help-block"></span>
            </div>

           

            <div class="form-group">
            <a href="historico_saidas.php" class="green-buttom">Histórico de Saídas</a>
            <span class="help-block"></span>
            </div>


            <div class="form-group">   
            <a href="historico.php" class="green-buttom">Histórico de Entradas e Saídas</a> 
            <span class="help-block"></span>
            </div>

            
            
            <div class="form-group">
            <a href="ver_estoque.php" class="green-buttom">Ver Estoque</a> 
            <span class="help-block"></span>
            </div>
            
           

        <?php if ($_SESSION["tipo_acesso"] === "supervisor") :  ?>
            <div class="form-group">
            <a href="cadastrar_fornecedor.php" class="green-buttom">Cadastrar Fornecedor</a>
            <span class="help-block"></span>
            </div>

            <div class="form-group">
            <a href="cadastrar_funcionario.php" class="green-buttom">Cadastrar Funcionário</a>
            <span class="help-block"></span>
            </div>

            <div class="form-group">
            <a href="checar_aviso.php" class="orange-buttom">Checar Alertas</a>
            <span class="help-block"></span>
            </div>

            <a id="sino" href="#">
        <span class="fa-regular fa-bell fa-2xl" style="color: white;"></span>
        <span id="badge"></span>
    </a>
    <script src="script.js"></script>
    
        <?php endif ?>
            
            
        
        <?php if ($_SESSION["tipo_acesso"] === "normal") :  ?>

            <div class="form-group">
            <a href="devolucao.php" class="green-buttom">Registrar Entrada</a>
            <span class="help-block"></span>
            </div>

            

            <div class="form-group">
            <a href="registrar_saida.php" class="green-buttom">Registrar saída</a>
            <span class="help-block"></span>
            </div>

            

            <div class="form-group">
            <a href="adicionar.php" class="green-buttom">Adicionar E.P.I ao Estoque</a>
            <span class="help-block"></span>
            </div>

            

            <div class="form-group">
            <a href="atualizar_estoque.php" class="green-buttom">Atualizar Estoque</a>
            <span class="help-block"></span>
            </div>

            <div class="form-group">
                <a href="remover_epi.php" class="green-buttom">Remover EPI</a>
                <span class="help-block"></span>
            </div>

            

            <div class="form-group">
            <a href="enviar_aviso.php" class="orange-buttom">Enviar Alerta</a>
            <span class="help-block"></span>
            </div>

          <?php endif ?>
          </div>


        </form>
    </div>    
</body>
</center>

<script>
    function sair(){
        console.log("djkhfjkdhk");
        $.ajax({
            url: "controle.php",
            type: "POST",
            dataType: "json",
            data: {action: "sair"},
            success:function(result){
                console.log(result.abc);
            }
        });
    }
</script>
</html>