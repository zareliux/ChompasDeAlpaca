<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Se actualizo con exito</h2>

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
        
        <p><a href="?opcion=2">Ver Lista de pedidos</a></p>
    </body>
</html>
