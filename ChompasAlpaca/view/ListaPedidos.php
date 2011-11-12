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
        <h1>Pedidos realizados a la fecha</h1>

        <table>
            <tr>
                <th>Fecha Solicitud</th>
                <th>Cantidad</th>
                <th>Insumo</th>
            </tr>
            <?php foreach($lista as $pedido){?>
            <tr>
                <td><?php echo $pedido->getFecha();?></td>
                <td><?php echo $pedido->getCantidad();?></td>
                <td><?php echo $pedido->getInsumo();?></td>
            </tr>
            <?php }?>
        </table>
        <a href="?opcion=4">Iniciar</a>
    </body>
</html>
