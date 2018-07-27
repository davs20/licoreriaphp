 <?php 
$dir="http://localhost/licoreria";
 ?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
   
    <ul class="nav menu">
        <li class="active"><a href=""><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li><a href="<?php echo $dir.'/Pedidos' ?>"><em class="fa fa-calendar">&nbsp;</em> Pedidos</a></li>
        <li><a href="<?php echo $dir.'/Empleados' ?>"><em class="fa fa-bar-chart">&nbsp;</em> Empleados</a></li>
        <li><a href="<?php echo $dir.'/Usuarios' ?>"><em class="fa fa-toggle-off">&nbsp;</em>Usuarios</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
            <em class="fa fa-navicon">&nbsp;</em> Configuracion <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="<?php echo $dir.'/Productos' ?>">
                    <span class="fa fa-arrow-right">&nbsp;</span> Productos
                </a></li>
                <li><a class="" href="<?php echo $dir.'/Categorias' ?>">
                    <span class="fa fa-arrow-right">&nbsp;</span> Categorias
                </a></li>
                <li><a class="" href="<?php echo $dir.'/Proveedores' ?>">
                    <span class="fa fa-arrow-right">&nbsp;</span> Proveedores
                </a></li>
            </ul>
        </li>
        <li><a href="<?php echo $dir.'/login' ?>"><em class="fa fa-power-off">&nbsp;</em>Salir</a></li>
    </ul>
</div>
