<?php if(@!$_SESSION['id']):?>
  <nav>
    <ul class="titulo">
      <h1>Comercio Pasco</h1>
    </ul>
    <ul class="nav">
      <li><a href="index.php" class="<?= $active_link == "index" ? "active": '' ?>">Inicio</a></li>
      <li><a href="dulces.php" class="<?= $active_link == "dulces" ? "active": '' ?>">Dulces</a></li>
      <li><a href="lacteos.php" class="<?= $active_link == "lacteos" ? "active": '' ?>">Lacteos</a></li>
      <li><a href="ingresar.php" class="<?= $active_link == "ingresar" ? "active": '' ?>">Ingresar</a></li>
    </ul>
  </nav>
<?php elseif(@$_SESSION['permiso'] == 1):?>
  <nav>
    <ul class="titulo">
      <h1>Comercio Pasco</h1>
    </ul>
    <ul class="nav">
      <li><a href="index.php" class="<?= $active_link == "index" ? "active": '' ?>">Inicio</a></li>
      <li><a href="producto.php" class="<?= $active_link == "dulces" ? "active": '' ?>">Añadir Producto</a></li>
      <li><a href="categoria.php" class="<?= $active_link == "lacteos" ? "active": '' ?>">Añadir Categoria</a></li>
      <li><a href="pedidos.php" class="<?= $active_link == "ingresar" ? "active": '' ?>">Pedidos</a></li>
      <li><a href="#" class="<?= $active_link == "ingresar" ? "active": '' ?>"><?= $_SESSION['nombre']?></a></li>
      <li><a href="php/cerrar_sesion.php" class="<?= $active_link == "ingresar" ? "active": '' ?>">Salir</a></li>
    </ul>
  </nav>
<?php else:?>
  <nav>
  <ul class="titulo">
    <h1>Comercio Pasco</h1>
  </ul>
  <ul class="nav">
    <li><a href="index.php" class="<?= $active_link == "index" ? "active": '' ?>">Inicio</a></li>
    <li><a href="dulces.php" class="<?= $active_link == "dulces" ? "active": '' ?>">Dulces</a></li>
    <li><a href="lacteos.php" class="<?= $active_link == "lacteos" ? "active": '' ?>">Lacteos</a></li>
    <li><a href="cesta.php" class="<?= $active_link == "cesta" ? "active": '' ?>">Cesta</a></li>
    <li><a href="#" class="<?= $active_link == "ingresar" ? "active": '' ?>"><?= $_SESSION['nombre']?></a></li>
    <li><a href="php/cerrar_sesion.php" >Salir</a></li>
  </ul>
</nav>
<?php endif;?>