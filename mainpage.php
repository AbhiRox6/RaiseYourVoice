
<?php ?>
<html>
    <head>
        <title>CitizenVoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="home.html"><img src="logo.png" width="120px" height="60px"></a></div>
        <ul class="links">
          <li><a href="complaintform.html">Register A Complaint</a></li>
          <li><a href="aboutus.html">About</a></li>
          <li><a href="support.html">Support</a></li>
          <li><a href="feedback.html">Feedback</a></li>
          <li>
          <a href="home.html" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-log-out"></span> Log out
          </a></li>
         
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
    </head>
    <body>
<br>
      <br>
      <br>
      <br>
      <br>

            <div> 
                <h1 style="text-align:center;color:green">Complaints List</h1>
                <hr>
                <p>
                    <?php include "display.php"; ?>
                </p>
            </div>
    </body>
    
</html>