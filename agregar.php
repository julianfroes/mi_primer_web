<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Hot Dog´s el compadre
        </title>
        <script src="CambiodePaginas.js"></script>
        <script src="pedidosFunciones.js"></script>
        <link rel="stylesheet" href="./estilos.css">
    </head>
    <body>
        
        <div class="contenedor">
            <div class="barraP" >
                <p class="contenedor-p" onclick="dirInicio();">Inicio</p>
                <p class="contenedor-p" onclick="dirPedido();">Generar pedido</p>
                <p class="contenedor-p" onclick="dirPromociones();">Promociones</p>
                <p class="contenedor-p" onclick="dirContacto();">Contactanos</pl>
                <p onclick="dirRegistro();">Iniciar sesion</p>
            </div>
        </div>
        <div class="contenedor2" >
            <div class ="menu">
                <h2 class="menu-group-heading" >
                    Ticket
                    <table border="1">
                        <tr>
                            <td><h3>Total</h3></td>
                            <td><p id="total">0</p></td>
                        </tr>
                    </table>
                </h2>
                <?php
                    echo $_SESSION['usuario'];
                ?>
                <div class="menu-group">
                    
                        <form action="procesar_agregar.php" method="POST">
                            <p>Imagen</p>
                            <input type="text" value="" name="txtDireccion" >
                            <p>Nombre del producto</p>
                            <input type="text" value="" name="txtNombreP">
                            <p>Descripcion</p>
                            <input type="text" value="" name="txtDescripcion">
                            <p>Precio</p>
                            <input type="text" value="" name="txtPrecio">
                            
                        

                        <?php
                    
                        ?>

                    <td><button type="sumbit" value="ACTUALIZAR">Agregar</button><td>
                    </form>
                    </div>

                </div>
            
                
            </div>
        </div>
    </body>
</html>