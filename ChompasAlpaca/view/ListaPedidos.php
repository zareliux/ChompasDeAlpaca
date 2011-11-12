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
        <h1>Pedidos realizados a la fecha</h1>

        <table>
            <tr>
                <th class="texto3">Fecha Solicitud</th>
                <th class="texto3">Cantidad</th>
                <th class="texto3">Insumo</th>
            </tr>
            <?php foreach($lista as $pedido){?>
            <tr>
                <td><?php echo $pedido->getFecha();?></td>
                <td><?php echo $pedido->getCantidad();?></td>
                <td><?php echo $pedido->getInsumo();?></td>
            </tr>
            <?php }?>
        </table>
        <a class="linka" href="ChompasView.php?opcion=4">Iniciar</a>
    </body>
</html>
