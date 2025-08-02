<html>
<head>
    <title> Lista Articulos </title>
</head>
<body>

<?php
   include("conexion.php");
   $sql="select * from articulo";
   $resultado=myqli_query($conexion,$sql);
 ?>
    <h1>Lista de articulos</h1>
    <a href="">Nuevo Articulo</a><br><br>
    <table>
        <thead>
            <tr>
                <th>id_articulo</th>
                <th>nombre_articulo</th>
                <th>Acciones</th>
           </tr>
       </thead>
  <tbody>
    
    <?php
   while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
        <td>  <?php echo $filas['id_articulo']?></td>
        <td> <?php echo $filas['nombre_articulo']?></td>
   <td>
  <?php echo "<a href=''>EDITAR</a> "; ?>
   -
   <?php echo "<a href=''>ELIMINAR</a> "; ?>

   </td>
    </tr>
    <?php
   }
    ?>
</tbody>
</table>
<?php 
mysli_close($conexion);
?>
