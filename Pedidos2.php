
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Hot Dog´s el compadre
        </title>
        <script src="scripts javascript/CambiodePaginas2.js"></script>
        <script src="scripts javascript/pedidosFunciones.js"></script>
        <link rel="stylesheet" href="./estilos.css">
    </head>
    <body>
        
        <div class="contenedor">
            <div class="barraP" >
                <p class="contenedor-p" onclick="dirInicio();">Inicio</p>
                <p class="contenedor-p" onclick="dirPedido();">Generar pedido</p>
                <p class="contenedor-p" onclick="dirPedido2();">Editar Productos</p>
                <p class="contenedor-p" onclick="dirPromociones();">Promociones</p>
                <p class="contenedor-p" onclick="dirContacto();">Contactanos</pl>
                <p onclick="dirRegistro();">Iniciar sesion</p>
            </div>
        </div>
        <div class="contenedor2" >
            <div class ="menu">
                <h2 class="menu-group-heading" >
                        Productos
                        
                    </h2>
                    <div class="menu-group">
                    
                        <?php

                            $user="root";
                            $pass="";
                            $server="localhost";
                            $db="login";
                            $conexion=mysqli_connect($server,$user,$pass,$db);
                            $sql="SELECT*FROM productos";
                            $result = mysqli_query($conexion,$sql);

                            while($Pedidos2 = mysqli_fetch_array($result)){

                            


                        ?>



                        <div class="menu-item">
                            <img class="menu-item-image" src="imagenes/<?php echo $Pedidos2['Direccion'] ?>">
                        <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name"><?php echo $Pedidos2['NombreP'] ?></span>
                            <span class="menu-item-price"><?php echo $Pedidos2['Precio'] ?></span>
                        </h3>
                        <p class="menu-item-description">
                        <?php echo $Pedidos2['Descripcion'] ?>
                        </p> 
                        <form action="eliminar.php" method="POST">
                                    <input type="text" value="<?php echo $Pedidos2['NombreP']?>" name="NombreP"hidden>
                                    <td><button type="sumbit" required name="eliminar">Eliminar</button></td>
                                    
                                </form>
                                <a href="editar.php?idp=<?php echo $Pedidos2['ID'] ?>">Editar</a>
                                </div>

                        </div>


                        <?php
                        }
                            ?>

                        </div>
                        
                    </div>
                    
                
                    
            </div>
            
        </div>
        
    </body>
    <form action="agregar.php" method="POST">
                            <button type="sumbit" required name="agregar">Agregar nuevo producto</button>             
                        </form>
</html>