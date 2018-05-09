<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <title>Sponsors</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
  body
  {
       background-image: url(R8.png);
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-position: center;
       background-size: cover;
     }
   .navbar-default
     {
       background:transparent;
       background-image:none;
       border-color:transparent;
       box-shadow:none;
     }
    .navbar-collapse
     {
       float: left;
     }
    h2
     {
       color: lightgrey;
     }
   h4
     {
       color: red;
     }
    p
     {
       color: red;
     }
  #brands
    {
     float: right;
     margin: 25px;
    }
  footer
    {
      color: red;
      text-align: center;
    }
  .nav>li>a:focus, .nav>li>a:hover
    {
      background-color: #4d4d4d;
      border-radius: 20px;
      padding-bottom: 1px;
    }
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover
    {
      background-color: #cc0000;
      border-radius: 20px;
      padding-bottom: 1px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <br><br>
          <img src="company logo.png" class="rounded mx-auto d-block" alt="logo" width="280px" height="100px"</a>
      </div>
        <div class="col-md-4">
          <br><br>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav nav-pills">
              <li><a href="index.html"><img src="Home.png" width="110px" height="60px"></a></li>
              <li><a href="products.html"><img src="Products.png" width="110px" height="60px"></a></li>
              <li><a href="gallery.html"><img src="Gallery.png" width="110px" height="60px"></a></li>
              <li class="active"><a href="sponsors.php"><img src="sponsors.png" width="110px" height="60px"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div id="brands">
          <img src="brands.png" alt="brands" width="240px" height="100px">
          </div>
        </div>
      </div>
    </div>
  </nav>
      <h2>
        Our Sponsors
      </h2>
        <p>
          CAM Tuning & Performance would not be possible if it wasn't for our sponsors support.
        </p>
      <br></br>
    <h4>
      <div class="row">
        <div class="col-md-4">
          <?php
        include 'mod3_config.php';
        include 'mod3_opendb.php';

        $sql= "SELECT company, fName, lName, phone FROM sponsors LIMIT 10";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Company: " .$row["company"]. "<br>";
                echo "First Name: " . $row["fName"]. "<br>";
                echo "Last Name: " . $row["lName"]. "<br>";
                echo "Phone Number: " . $row["phone"]. "<br><hr>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
  </h4>
  <div class="col-md-12">
    <footer>
      <br><br>
      <a href="mailto:CAMT&amp;P@gmail.com"><u>CONTACT US</u></a>
      &emsp;
      <a href="aboutUs.html"> <u>ABOUT US</u></a>
      <br><br>
      <a href="https:www.facebook.com"><img src="fb.png" width="40px" height="40px"></a>
      &emsp;
      <a href="https:www.twitter.com"><img src="tw.png" width="40px" height="40px"></a>
      &emsp;
      <a href="https:www.instagram.com"><img src="ig.png" width="40px" height="40px"></a>
      <br></br>
    </footer>
  </div>
</body>
</html>
