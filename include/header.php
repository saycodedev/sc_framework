<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta name="description" content="SC Framework | PHP Framework For All Web Programing ">
   <meta name="keywords" content="SC Framework, SC Framework V 1.0 ,SCFramework,scframework,tutorialscframework,tutorial.saycode.info ">
   <meta name="author" content="Saycode Development">
    <title>Welcome To SC Framework</title>
    <link rel="icon" type="image/png" href="<?=base_url()?>storage/config/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-md  navbar-light">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <a class="navbar-brand" href="index"><img src="<?=base_url()?>storage/config/favicon.png"  width="40" alt=""></a>
      <div class="collapse navbar-collapse justify-content-between" id="navbar">
        <div class="navbar-nav">
          <a class="nav-item nav-link"  href="<?=base_url()?>home">Home</a>
          <a class="nav-item nav-link" href="<?=base_url()?>about">About</a>
            <a class="nav-item nav-link" href="<?=base_url()?>tutorial">Tutorial</a>
        </div>
        <?php if($data['session_id']!=''){ ?>
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?=base_url()?>profile"><?=$_SESSION['username']?></a>
            <a class="nav-item nav-link" href="#">|</a>
          <a class="nav-item nav-link" href="<?=base_url()?>login/logout">Logout</a>
        </div>
      <?php }else{  ?>
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?=base_url()?>login">Login</a>
            <a class="nav-item nav-link" href="#">|</a>
          <a class="nav-item nav-link" href="<?=base_url()?>register">Register</a>
        </div>
    <?php  } ?>
      </div>
    </nav>
   <div class="jumbotron text-center">
     <h1>SC Framework</h1> <small> <img src="<?=base_url()?>storage/config/favicon.png"  width="25" alt="">   1.0</small>
   </div>
