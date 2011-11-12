<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chompas de Alpaca</title>
    </head>
    <body>
        <h1>Solicitud de Pedidos</h1>
         <?php if($respuesta==null){?>
        <h2>Su pedido fue realizado con exito, por favor acepte el envio de productos</h2>
        <table>
            <tr>
                <th>Insumo</th>
                <th>Cantidad Enviada</th>
                <th>Estado</th>
            </tr>
            <?php foreach($listaPedidos as $pedidito){?>
            <tr>
                <td><?php echo $pedidito->getInsumo();?></td>
                <td><?php echo $pedidito->getCantidad();?></td>
                <td><?php echo $pedidito->getEstado();?></td>
            </tr>
            <?php }?>

        </table>
        <p><a href="?opcion=1">Aceptar nuevo Stock</a></p>
    <?php } ?>
    <?php if($respuesta != null){?>

         <p>Su stock ha sido guardado satisfactoriamente</p>

         <table>
            <tr>
                <th>Insumo</th>
                <th>Cantidad Enviada</th>
                <th>Estado</th>
            </tr>
            <?php foreach($pedidos as $pedidito){?>
            <tr>
                <td><?php echo $pedidito->getInsumo();?></td>
                <td><?php echo $pedidito->getCantidad();?></td>
                <td><?php echo $pedidito->getEstado();?></td>
            </tr>
            <?php }?>

        </table>
        <?php } ?>
    </body>
</html>
