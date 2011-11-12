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
        <h1>Stock Actual</h1>

        <table border="1">
            <tr>
                <th>Chompa</th>
                <th>Cantidad Actual</th>
                <th>Insumo</th>
                <th>Stock Minimo</th>
            </tr>
            <?php foreach($lista as $chompa){?>
            <tr>
                <td><?php echo $chompa->getNombre();?></td>
                <td><?php echo $chompa->getCantidadActual();?></td>
                <td><?php echo $chompa->getInsumo();?></td>
            </tr>
            <?php }?>
        </table>
         <a href="?opcion=4">iniciar</a>
    </body>
</html>
