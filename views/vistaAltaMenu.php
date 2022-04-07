<!DOCTYPE html>
<?php

if ((isset($_POST['nombrePlatillo'])) && ($_POST['nombrePlatillo'] != '') 
    && (isset($_POST['descripcion'])) && ($_POST['descripcion'] != '')
    && (isset($_POST['ingredientes'])) && ($_POST['ingredientes'] != '')
    && (isset($_POST['costo'])) && ($_POST['costo'] != '')
   ) { 

    include "../models/modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setNewMenu($_POST['nombrePlatillo'], $_POST['descripcion'], $_POST['ingredientes'], $_POST['costo'], $_POST['idFonda']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Examen Jonathan</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="homeworks.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1></h1>
                <hr/>
                <p class="lead">Examen Jonathan</p>
            </header>
            <div class="row">
                <div class="col-lg-12">

                    <form action="#" method="post" class="col-lg-12">
                        <h3>Genera nuevo menu para "<strong><?php echo $_GET["nombreFondas"];?></strong>"</h3>                
                        Nombre Platillo: <input type="text" name="nombrePlatillo" class="form-control" required/>    
                        Descripcion: <input type="text" name="descripcion" class="form-control" required/>    
                        Ingredientes: <input type="text" name="ingredientes" class="form-control" required/>    
                        Costo: <input id="costo" type="text" name="costo" maxLength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" style="width: 20%;" required/>  
                        <input type="hidden" value="<?php echo $_GET["id"];?>" name="idFonda"/>
                        <br/>
                        <input type="submit" value="Crear Menu" class="btn btn-danger"/>
                    </form>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                Fondas Godinez- <?php echo date("D,M,Y"); ?>
            </footer>
        </div>
    </body>
</html>