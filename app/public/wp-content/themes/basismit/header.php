<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?> 
</head>
<body>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
</ul>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?php bloginfo('name');?></h1>
    <p class="lead"><?php bloginfo('description');?></p>
  </div>
</div>