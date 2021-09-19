<! DOCTYPE html>
<html>
    <head>
        <title>Responsive portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

/*---------NavigationBar*********/

#navbar{
    position: sticky;
    top: 0;
    z-index: 10;
    }
    .navbar-brand {
        height: 40;
        padding-left: 30;
        text-transform: uppercase;
        font-style: italic;
        font-weight: 600;
        color: #007bff!important;
    }
    .navbar-nav li{
        padding: 0 10px;
    }
    .navbar-nav li a{
        float: right;
        text-align: left;
    }
    #nav-bar ul li a:hover{
        color: #007bff !important;
    }
    .navbar{
        background-color: #fff!important;
    }
    .navbar-toggler{
      border: none!important;
    }
    .nav-link{
      color:#555!important;
      font-weight: 600;
      font-size: 16px;
    }
</style>

        <!-- CSS only -->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
<link rel="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> 
    </head>
    <body>
        <!--navigationBar-->
        <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Daniel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  
        </section>
    </body>
</html>