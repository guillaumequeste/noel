<?php
$page = $_REQUEST["page"] ?? "home";
  $fichier = "";
  switch($page){
    case 'home' :
      $fichier = "accueil.php";
      break;
    case 'sage' :
      $fichier = "sage.php";
      break;
    case 'questionnaire' :
      $fichier = "questionnaire.php";
      break;
    case 'image' :
      $fichier = "image.php";
      break;
  }
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Noël</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </head>

  <body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark" style="min-height: 10vh;margin: 0 !important;">
    <a class="navbar-brand" href="index.php?page=home">Noël</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['QUERY_STRING'] == 'page=home'){echo 'active';}?>" href="index.php?page=home">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['QUERY_STRING'] == 'page=sage'){echo 'active';}?>" href="index.php?page=sage">As-tu été sage ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['QUERY_STRING'] == 'page=questionnaire'){echo 'active';}?>" href="index.php?page=questionnaire">Questionnaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($_SERVER['QUERY_STRING'] == 'page=image'){echo 'active';}?>" href="index.php?page=image">Image</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" style="min-height:85vh;">