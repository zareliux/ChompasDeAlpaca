<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alexander :::.. El experto en moda</title>
<style type="text/css">
<!--
@import url("CSS/css.css");

-->
</style>
</head>

    <body>
        <h1>Stock Actual</h1>

        <table border="1">
            <tr>
                <th class="texto3">Chompa</th>
                <th class="texto3">Cantidad Actual</th>
                <th class="texto3">Insumo</th>
                <th class="texto3">Stock Minimo</th>
            </tr>
            <?php foreach($lista as $chompa){?>
            <tr>
                <td><?php echo $chompa->getNombre();?></td>
                <td><?php echo $chompa->getCantidadActual();?></td>
                <td><?php echo $chompa->getInsumo();?></td>
            </tr>
            <?php }?>
        </table>
         <a href="ChompasView.php?opcion=4">iniciar</a>
    </body>
</html>
