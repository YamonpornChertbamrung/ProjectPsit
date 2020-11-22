<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <<link href='https://fonts.googleapis.com/css?family=Days One' rel='stylesheet'>
    <style>
      h1{
        /* color: rgb(59, 228, 81); */
        font-size: 100px;
      }
      html {
      background: url(food1.jpg) no-repeat center center fixed;
      background-size: cover;
      height: 100%;
      overflow: hidden;
      }
      .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: rgb(255, 255, 255);
      white-space: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      font-family: 'Days One';font-size: 22px;
      }
      div.first{
        background: rgba(93, 94, 87, 0.3);
      }
      button{
      color: black;
      }
    </style>
</head>
<body>
  <center>
    <div class="hero-text">
      <div class="first">
      <h1 style="font-size:70px">Calories Calculator For FastFood</h1></div>
      <button type="button" class="btn btn-secondary" style="font-size: 30px;">>></button>

    <!-- <h1>Calories Calculator For FastFood</h1> -->
  </center>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Fast Food</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- <h1>Hello, world!</h1> -->
    <!-- <button type="button" class="btn btn-lg btn-default">Default</button> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
