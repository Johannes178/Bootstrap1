<?php
require_once('header.php');
require_once('carousel.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<div class="container" style="max-width: 80%;">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="../views/index.php">
            <ion-icon name="leaf"></ion-icon>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../views/index.php">Home<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../views/about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="row" style="margin-top: 1em;">
        <section class="col-sm-8">
            <header class="row">
                <div class="col">
                    <h1>Phasellus ut risus accumsan, faucibus nunc et, tristique metus.</h1>
                </div>
            </header>