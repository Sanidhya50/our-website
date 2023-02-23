<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
  .jumbotron {
    background-color: #f2f2f2;
    padding: 80px;
  }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <!-- <?php get_header(); ?> -->
  <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'about':
          include 'about-template.php';
          break;
        case 'contact-us':
          include 'contact-us-template.php';
          break;
        case 'our-products':
          include 'our-products-template.php';
          break;
        case 'testimonials':
          include 'testimonials-template.php';
          break;
        case 'blog':
          include 'blog-template.php';
          break;
        default:
          include 'home-template.php';
          break;
      
      }
    } else {
      include 'home-template.php';
    }
  ?>
  <!-- Output the Jumbotron template with the name "Sanidhya" -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0

</body>
</html>

