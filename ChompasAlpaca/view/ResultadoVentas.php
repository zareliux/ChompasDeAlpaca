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

    </body>
</html>
