<?php
  if(!isset($_SESSION['logado']))      
  {
      header("Location:/");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="PI2V2/App/Resources/imagens/navicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/booZtstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Ver Estoque</title>
    <link rel="icon" href="PI2V2/App/Resources/imagens/navicon.ico">
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
    padding: 9px 9px;
    border-radius: 50%;
    position: absolute;
    top: 5px;
    right: 27px;
   
}


    </style>
</head>
<body>

<img src="PI2V2/App/Resources/imagens/dottext.png" alt="erro" style="position: fixed; bottom: 0; left: 0; width: 100px; height: 40px;">

<form  class="mx-auto mt-5 w-25" action="/Tver_estoque" method="post">
<img src="PI2V2/App/Resources/imagens/verestoque.png" alt="erro" width="70" height="70">
        <h1>Lista de estoque</h1>
        

            <div class="form-group">
                <label for="curso">Procurar E.P.I</label>
              <input type="text" class="form-control" name="pesquisa" values="">
        </div>



        <div class="form-group">
        <button type="submit" class="blue-buttom" >Pesquisar</button>
        <span class="help-block"></span>
    </div>


    <div class="form-group">
        <a href="Tmenu" type="button" class="red-buttom" >Voltar</a>
        <span class="help-block"></span>
        </div>



        <?php if ($_SESSION['tipo_acesso'] === "supervisor") :  ?>
<a id="sino" href="#">
    <span class="fa-regular fa-bell fa-2xl" style="color: black;"></span>
    <span id="badge"></span>
</a>
<script src="script.js"></script>
<?php endif ?>


</form>
<img src="PI2V2/App/Resources/imagens/dottext.png" alt="erro" style="position: fixed; bottom: 0; left: 0; width: 100px; height: 40px;">
<div class="container-fluid">

        <div class="mx-auto mt-5 w-50">
            <?php
                echo "<table class='table'>";
                
                echo "<thead>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nome</th>
                            <th scope='col'>C.A</th>
                            <th scope='col'>Unidade</th>
                            <th scope='col'>Estoque</th>
                            <th scope='col'>Minimo</th>
                            <th scope='col'>Validade</th>
                        </tr>
                    </thead>
                    <tbody>";

                while ($row = $query->fetch()) {
                    echo "<tr>
                            <th scope='row'>". $row['id'] ."</th>
                            <td>". $row['nome'] ."</td>
                            <td>". $row['CA'] ."</td>
                            <td>". $row['unidade'] ."</td>
                            <td>". $row['estoque'] ."</td>
                            <td>". $row['minimo'] ."</td>
                            <td>". $row['validade'] ."</td>
                        </tr>";
                }

                    
                echo "  </tbody>
                    </table>"; 
                
            ?>
        </div>
        
    </div>

</body>
</html>