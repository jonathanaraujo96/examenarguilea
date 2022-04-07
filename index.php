<!DOCTYPE html>
<?php

if ((isset($_POST['nombreFonda'])) && ($_POST['nombreFonda'] != '') 
    && (isset($_POST['calle'])) && ($_POST['calle'] != '')
    && (isset($_POST['numeroExterior'])) && ($_POST['numeroExterior'] != '')
    && (isset($_POST['numeroInterior'])) && ($_POST['numeroInterior'] != '')
    && (isset($_POST['cp'])) && ($_POST['cp'] != '')
    && (isset($_POST['colonia'])) && ($_POST['colonia'] != '')
    && (isset($_POST['municipio'])) && ($_POST['municipio'] != '')
    && (isset($_POST['ciudad'])) && ($_POST['ciudad'] != '')
    && (isset($_POST['estado'])) && ($_POST['estado'] != '')
    && (isset($_POST['pais'])) && ($_POST['pais'] != '')
   ) {

    include "models/modelo.php";
    $nuevo = new Service();
    $asd = $nuevo->setServicio($_POST['nombreFonda'], $_POST['calle'], $_POST['numeroExterior'], $_POST['numeroInterior'], $_POST['cp'], $_POST['colonia'], $_POST['municipio'], $_POST['ciudad'], $_POST['estado'], $_POST['pais']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Examen Jonathan Araujo</title>
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
                <p class="lead">Examen Jonathan Araujo</p>
            </header>
            <div class="row">
                <div class="col-lg-6">

                    <form action="#" method="post" class="col-lg-12">
                        <h3>Nueva  Fonda Godinez</h3>                
                        Nombre Fonda: <input type="text" name="nombreFonda" class="form-control" required/>    
                        Calle: <input type="text" name="calle" class="form-control" required/>    
                        Numero Exterior: <input type="text" name="numeroExterior" class="form-control" required/>    
                        Numero Interior: <input type="text" name="numeroInterior" class="form-control" required/>    
                        C.P.: <input id="cpS" type="text" name="cp" maxLength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" style="width: 20%;" required/>  
                        <i class="btn btn-danger" style="margin-top: 5px;" onclick="generaCP();";> Buscar CP</i> <br> 
                        Colonia: <!--<input type="text" name="colonia" class="form-control" required/> -->
                                 <select id="colonia" name="colonia" class="form-control" required></select>   
                        Municipio: <input type="text" name="municipio" id="municipio" class="form-control" required/>    
                        Ciudad: <input type="text" name="ciudad" id="ciudad" class="form-control" required/>    
                        Estado: <input type="text" name="estado" id="estado" class="form-control" required/>    
                        País: <input type="text" name="pais" id="pais" class="form-control" required/>     
                        <br/>
                        <input type="submit" value="Crear Fonda" class="btn btn-danger"/>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <hr/>
                    <h3>Listado de fondas</h3>
                    <a href="controllers/controlador.php"><i class="fa fa-align-justify"></i> Acceder al listado de  Fondas Godinez</a>
                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                Fondas Godinez - <?php echo date("m,d,Y"); ?>
            </footer>
        </div>
    </body>
</html>