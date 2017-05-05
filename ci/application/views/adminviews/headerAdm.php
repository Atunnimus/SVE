<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$title;?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="<?=base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('css/custom.css');?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

  </head>
  <body>
    <header>
      <div class="container-fluid" style="background-image: url(<?=base_url('img/header.png');?>);">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4" id="header">
            <img class="img-responsive center-block" src="<?=base_url('img/unamLargo.png');?>">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4" id="header">
            <h1><span class="texto_responsive" data-desktoptext="DGTIC" data-tablettext="DGTIC" data-phonetext="DGTIC"></span></h1>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4" id="header">
            <h3><span class="texto_responsive" data-desktoptext="Sistema de Votaciones Electrónicas " data-tablettext="Sist. de Votaciones Electrónicas " data-phonetext="SVE "></span><i class="fa fa-cubes" aria-hidden="true"></i></h3>
          </div>
        </div>
      </div>
    </header>

    <div class="navbar-header">
      <!--Botón de menu responsivo-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!--Menu y sub-menus-->
    <div class="navbar-collapse collapse" id="menu">
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
        </li>
        <li class="active"><a href="<?=site_url('admin/index');?>">Inicio</a></li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Admin. Catálogos<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('admin/entidad');?>">Entidad</a></li>
            <li class="divider"></li>
            <li><a href="<?=site_url('admin/orgcolegiado');?>">Órgano Colegiado</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Figura</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Nivel</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">División de Estudios</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Elección</a></li>
          </ul>
        </li>
        <li><a href="javascript:;">Conf. Jornada</a></li>
        <li><a href="javascript:;">Padrón</a></li>
        <li><a href="javascript:;">Boleta</a></li>
        <li><a href="javascript:;">Usuarios</a></li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:;">Jornada</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Importación</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Horarios</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Boleta/Padrón</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Participación</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Estadísticos</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Verificación de Urnas</a></li>
          </ul>
        </li>
        <li><a href="javascript:;">Generar Documentación</a></li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Admin. Jornada<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:;">Inicializar</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Finalizar</a></li>
            <li class="divider"></li>
            <li><a href="javascript:;">Generar Reportes</a></li>
          </ul>
        </li>
        <li><a href="<?=site_url('/');?>">Cerrar Sesión</a></li>
      </ul>
    </div>
    
    <div class="container" id="wrapper">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=site_url('admin/index');?>">Home</a></li>