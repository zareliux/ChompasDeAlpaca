<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chompas de Alpacas</title>
    </head>
    <body>
        <h1>Administrador Ventas</h1>
        <p>Por favor ingrese la cantidad vendida:</p>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Chompa</th>
                    <th>Cantidad</th>
                </tr>
               <?php $id=0; ?>
                 <?php foreach($listaChompa as $chompa){
                 $id++;?>
                <tr>
                    <td><label for="chompa"><?php echo $chompa->getNombre();?></label></td>
                    <td><input type="text" id="cantidad" name="cantidad<?php echo "$id";?>" /></td>
                </tr>
            <?php } ?>

           </table>
            <input type="hidden" name="venta" value="1">
            <p><input type="submit" value="Registrar" name="botonRegistrar"></p>
        </form>

    </body>
</html>
