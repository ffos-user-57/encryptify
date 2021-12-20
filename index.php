<!DOCTYPE html>
<html>
<title>Encryptify</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: Roboto, sans-serif
  }

  body,
  html {
    height: 80%;
    line-height: 1.8;
  }

  body {
    background-position: center;
    background-size: cover;
    background-image: url("img/bgRedesigned.jpg");
    min-height: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
  }

  .logox {
    height: auto;
    width: auto;
    max-height: 72px;
    max-width: 200px;
  }


  .linkx:hover {
    background: rgba(76, 175, 80, 0.3) !important;
  }
  .linkx {
    font-weight: bold;
  }
  .w3-bar .w3-button {
    padding-top: 2%;
  }

  .padx {
    text-align: center;
    margin-top: 15%;
  }
  .bottomtext {
    font-size:10px !important; 
    bottom: 0;
  }
</style>

<body>
  <?php
  $ret = "";
  $ret2 = "";
  if (!empty($_POST)) {
    if (isset($_POST['pwdcon'])) {
      //md5 enc
      $str = $_POST['pwdcon'];
      $ret = md5($str);
      $ret2 = sha1($str);

    } else {
      //nothing
    }
  }
  ?>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-transparent" id="myNavbar">
      <a href="./index.php"><img  class="logox" src="img/officialLogo.png" /></a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <!--  <b> -->
        <a href="./index.php" class="linkx w3-bar-item w3-button w3-medium">Home</a>
        <a href="./bulk.php" class="linkx w3-bar-item w3-button w3-medium">Bulk Encrypt</a>
        <a href="./learn.php" class="linkx w3-bar-item w3-button w3-medium">Stay safe online</a>
        <a href="./generator.php" class="linkx w3-bar-item w3-button w3-medium">Get a safe Password</a>
        <a href="./checker.php" class="linkx w3-bar-item w3-button w3-medium">Check Password strength</a>

      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none; box-shadow: none;" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="./index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="./bulk.php" onclick="w3_close()" class="w3-bar-item w3-button"> Bulk Encrypt</a>
    <a href="./learn.php" onclick="w3_close()" class="w3-bar-item w3-button"> Stay safe online</a>
    <a href="./generator.php" onclick="w3_close()" class="w3-bar-item w3-button"> Get a safe Password</a>
    <a href="./checker.php" onclick="w3_close()" class="w3-bar-item w3-button"> Check Password strength </a>
  </nav>




  <div class="w3-display-container w3-grayscale-min" id="home">
    <div class="padx w3-text-black">
      <h3 class="">Press a button – get hashes.</h3>
      <p class="">Simple as that.</p>
      <div class="result">
        <p> 
          
            <?php 
            if($ret != "" && $ret2 != ""){
              echo "Your hashes:<br/><b>MD5:</b> " .  $ret . " <br/> <b>SHA1:</b> " . $ret2;
            }
            ?>
        </p>
      </div>
      <div class="section">

        <form action="index.php" method="post">
          <input type="text" name="pwdcon"><br><br />
          <input type="submit" class="w3-button w3-green w3-padding-medium w3-medium" value="Convert">
        </form>

      </div>


      </p>

      <br>
      <p style="text-align:center"> Encryptify is fully open source. It uses no database. No information is stored.</p>
      <p class="bottomtext">This website is a project from Information Technology students at FFOS@UNIOS. Made by F.O. , A. K. and E.S. </p>
    </div>
  </div>



  <script>
    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }
  </script>

</body>

</html>