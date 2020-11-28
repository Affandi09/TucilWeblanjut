<!doctype html>
<?= $this->include('admin/admin_header') ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.5.3/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href=" base_url('bootstrap-4.5.3/dist/css/cover.css')" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Library</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="<?php echo base_url('produk')?>">Features</a>
        <a class="nav-link" href="<?php echo base_url('about')?>" >Contact</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <?php $session = session(); ?>
    <h1 class="cover-heading">Wellcome!</h1>
    <p class="lead"><?php echo "Thanks for Your Back!, ".$session->get('user_name');  ?></p>
    <div style="position: relative">
    <p class="lead">
      <a href="<?php echo base_url('/Dashboard/logout'); ?>" class="btn btn-lg btn-secondary">Log-Out</a>
    </p>
    </div>
  </main>

  
  <?= $this->include('admin/admin_footer') ?>
  
