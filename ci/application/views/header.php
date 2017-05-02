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

    <div class="container" id="wrapper">