<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?= $this->renderSection('head') ?>

    

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
    <!-- Style.css -->
    <link rel="stylesheet" href="/assets/style.css">
  </head>
  
  <body>
    <!-- Header -->
    <?= $this->include('frontend/layout/header') ?>
    <!-- End of Header -->

    <!-- Header -->
    <?= $this->include('messages/messages') ?>
    <!-- End of Header -->

    
    
    <!-- Jumbotron -->
    <?= $this->include('frontend/layout/jumbotron') ?>
    <!-- End of Jumbotron -->
    
    <!-- Content -->
    <?= $this->renderSection('content') ?>
    <!-- End of Content -->

    <!-- Footer -->
    <?= $this->include('frontend/layout/footer') ?>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>