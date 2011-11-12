<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<table width="1009" border="0" align="center" cellpadding="0" cellspacing="0" class="contenido">
  <tr>
    <td colspan="3"><table width="1010" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div class="Header" id="header"><img src="Im&aacute;genes/logo.jpg" width="1010" height="180" alt="" /></div></td>
      </tr>
      <tr>
        <td><img src="Im&aacute;genes/spacer.gif" width="1010" height="1" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="210"><div class="Menu" id="Menu">
      <table width="210" border="0" cellpadding="0" cellspacing="0" class="barramenu">
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" alt="" width="210" height="50" align="absbottom" /></td>
        </tr>
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
        </tr>
        
        <tr>
          <td class="links"><a href="?opcion=4">REGISTRAR VENTAS </a></td>
        </tr>
        <tr>
          <td class="links"><a href="?opcion=3">REVISAR STOCK </a></td>
        </tr>
          <tr>
          <td class="links"><a href="?opcion=2">LISTADO DE PEDIDOS </a></td>
        </tr>
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
        </tr>
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
        </tr>
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
        </tr>
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
        </tr>
        <tr>
          <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
        </tr>
      </table>
    </div></td>
    <td width="45" rowspan="3"><img src="Im&aacute;genes/spacer.gif" width="45" height="1" alt="" /></td>
    <td width="755" rowspan="3"><table width="754" height="534" border="0">
  <td valign="top">
  
    <h1>Stock Actual de Chompas </h1>
	<br />
<p>El stock Actual de chompas es:</p>
        <table>
            <tr>
                <th><h1>Chompas</h1></th>
                <th><h1>Stock Actual</h1></th>
                <th><h1>Stock Minimo</h1></th>
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
<div  class="divEspacio"></div>
    <p>Se ha llegado al tope mínimo de stock, por favor realice un pedido</p>
<form id="formVenta" name="form1Venta" method="post" action="PedidoView.php">
 <table >
                     <tr>
                        <th>Chompa</th>
                        <th>Insumo</th>
                        <th>Cantidad x Pedido</th>

                    </tr>
                     <?php foreach($stockPedido as $pedido){?>
     <tr class="stockMinimo">
                        <td><?php echo $pedido->getNombre();?></td>
                        <td><?php echo $pedido->getInsumo();?></td>
                        <td><?php echo $pedido->getCantidadxPedido();?></td>

                    </tr>
                    <?php }?>
                </table>
                <input type="hidden" name="pedido" value="1"/>
                <p><input type="submit" name="solicitarPedido" value="Solicitar Pedido"/></p>
  </form>
<?php }?>
  </td>
      
    </table></td>
  </tr>
  <tr>
    <td><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></td>
  </tr>
  <tr>
    <td><div class="adorno1" id="adorno"><img src="Im&aacute;genes/adorno.jpg" width="210" height="50" alt="" /></div></td>
  </tr>
  
  <tr>
    <td colspan="3"><div id="Footer">
      <div id="copyright">Copyright 2010 &copy; <br/>
        Todos los derechos reservados</div>
      <div id="botoneraFooter">Av. Cipriano Dulanto (Ex Av. La Mar) 2376 - Pando San Miguel<br />
        Tel: 5616127 - 5616128 | Nextel:   121 * 4598 </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" id="footer"><img src="Im&aacute;genes/spacer.gif" width="255" height="1" alt="" /></td>
    <td id="footer"><img src="Im&aacute;genes/spacer.gif" width="755" height="1" alt="" /></td>
  </tr>
</table>
</body>
</html>
