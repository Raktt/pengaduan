<?php
session_start();
require 'config/functions.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APPM &mdash; Landings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- link font -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,500&family=Poppins:ital,wght@1,300&family=Viga&display=swap" rel="stylesheet">


  <!-- link bootrap 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css">
  <style>

  </style>
</head>

<body>
  <!-- Navbars -->
  <div class="navbars">
    <nav class="navbar navbar-expand-lg ">
      <div class="container-fluid">
        <!-- logo -->
        <img src="https://dumas.btkljogja.or.id/front/images/logo.png" alt="" width="50px" height="50px">
        <!-- nama  -->
        <a class="navbar-brand" href="#">PENGADUAN MASYARAKAT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>


          </ul>
          <form class="d-flex">

          </form>
        </div>
      </div>
    </nav>
  </div>

  <!-- bagian content -->
  <section class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="single-image overlay">
            <img alt="" class="img-content">
            <a href="" class="btn video-popup mfp-fade"><i class="fa fa-play"></i></a>

          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-text">
            <h2 style="font-weight: bold;">PENGADUAN RAKYAT ONLINE</h2>
            <br>
            <p style="font-style: italic;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quos vero suscipit, incidunt et culpa consequatur, quod, nulla repudiandae eaque ex!x expedita, sit magnam tempora eveniet maiores eligendi provident. Explicabo quam sequi porro quidem corrupti omnis, tempore dolore sint illum voluptas architecto, optio sit fugit illo molestias, dicta nulla rem maxime? Repellat nostrum cupiditate repellendus doloremque perspiciatis quam quia culpa amet dicta nihil </p>
            <br>
            <button type="button" class="btn btn-outline-info">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">©rakacopyright2022 Company, Inc</p>

    <img src="https://dumas.btkljogja.or.id/front/images/logo.png" alt="" width="50px" height="50px">

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>

    </ul>
  </footer>