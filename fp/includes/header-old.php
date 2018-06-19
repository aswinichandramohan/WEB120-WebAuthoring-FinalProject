<?php include "fp-config.php"?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex,nofollow" />

    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    
    <!--
    <link rel="stylesheet" href="css/nav.css" />
    
    <link rel="stylesheet" href="css/fp.css" />
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>
    -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title><?=$title?></title>
  </head>

  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-0 col-md-1">
        </div>
        <div class="col-sm-12 col-md-10">
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="catalog.php">Catalog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-sm-0 col-md-1">
        </div>
    </div>


      


    </div>

  <!-- START WRAPPER -->
  <div class="wrapper">
    <header>
      <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Aswini: Web Dev Examples</a></h1>
      <!--CSS menumaker nav html-->
      <nav id="cssmenu">
            <ul>
               <li>
                  <a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a>
                </li>
                <li>
                  <a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a>
                </li>
                <li>
                  <a href="catalog.php"><span><i class="fa fa-fw fa-eye"></i> Catalog</span></a>
                </li>
                <li>
                  <a href="blog.php"><span><i class="fa fa-fw fa-eye"></i> Blog</span></a>
                </li>
                <li>
                  <a href="about.php"><span><i class="fa fa-fw fa-eye"></i> About</span></a>
                </li>
            </ul>
      </nav>
    </header>


    <!-- START LEFT COL -->
    <section>
      <h2 class="pageID"><?=$PageID?></h2>
      <!--End header.php include here!-->