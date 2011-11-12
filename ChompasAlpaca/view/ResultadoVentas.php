<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chompas de Alpaca</title>
    </head>
    <body>
        <h1>Stock Actual de chompas</h1>
        <h2>Su registro de venta fue exitosa</h2>
        <p>El stock Actual de chompas es:</p>
        <table>
            <tr>
                <th>Chompas</th>
                <th>Stock Actual</th>
                <th>Stock Minimo</th>
            </tr>
             <?php foreach($listaChompas as $chompita){?>
            <tr>
                <td> <?php echo $chompita->getNombre();?></td>
                <td> <?php echo $chompita->getCantidadActual();?></td>
                <td> <?php echo $chompita->getStockMinimo()?></td>
            </tr>
            <?php }?>
        </table>

            <?php if($stockPedido!= null){?>
            <p>Se ha llegado al tope mínimo de stock, por favor realice un pedido</p>
            <form action="PedidoView.php" method="post">
                <table>
                     <tr>
                        <th>Chompa</th>
                        <th>Insumo</th>
                        <th>Cantidad x Pedido</th>
                        
                    </tr>
                     <?php foreach($stockPedido as $pedido){?>
                    <tr>
                        <td><?php echo $pedido->getNombre();?></td>
                        <td><?php echo $pedido->getInsumo();?></td>
                        <td><?php echo $pedido->getCantidadxPedido();?></td>
                        
                    </tr>                   
                    <?php }?>
                </table>
                <input type="hidden" name="pedido" value="1">
                <p><input type="submit" name="solicitarPedido" value="Solicitar Pedido"></p>
            </form>
                <?php }?>
    </body>
</html>
