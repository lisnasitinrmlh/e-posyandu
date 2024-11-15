<!DOCTYPE html>
<html>
  <head><html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon/logoremove.png" type="image/x-icon">
    <title>E-Posyandu</title>
    <style type="text/css">
      body {
        background: white;
      }
      .bawahnav {
        background-image: url(img/Menu/bg1.png);
        background-attachment: scroll;
        background-size: cover;
        background-origin: inherit;
      }
      #judul{
        font-size: 35px;
        margin: 0px 0px 0px 18px;
        font-family: "futura Md BT";
        color: black;
      } 
      #logonav{
        margin-left: 30px;
      }

      .t-inline-block{
        font-size: 50px;
      }
      #box{
        border: none;
      }
      .box{
        padding: 20px;
        margin-bottom: 10px;
      }
      #content{
        position: absolute;
        align-content: center;
      }

      @media screen and (max-height: 640px) {
        #wraper {width: 640px; 
            position: relative;}
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            .card-img-top {width: 50px;}
      }
    </style>
  </head>
  <body>
   <div id="wrapper">
    <div id="container">
      <nav class="navbar bg-light">
        <a class="navbar-brand" onclick="window.location.href='dashboard.php'">
          <img src="img/icon/logoremove.png" width="80px" height="80px" class="align-center" id="logonav">
          <p class="d-inline-block align-middle" id="judul">E-Posyandu </p>
        </a>
        <div class="nav-item dropleft">
          <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/garis2.png" width="70px"></a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="login.php">Login Admin</a>
              <a class="dropdown-item" href="login.php">Login Petugas Posyandu</a>
             </div>
          </div> 
      </nav>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>