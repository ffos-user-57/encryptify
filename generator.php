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
        font-size: 10px !important;
        bottom: 0;
    }
    .textualpart {
        background-color:white;
        margin-left:5%;
        margin-right:5%;
        opacity:90%;
    }
</style>

<body>
    <?php
    $ret = "";
    $hashtype = "";

    function randomPassword()
    {
        $alphabet = '!#$&.,-:_;()=?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 12; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


    if (!empty($_GET)) {
        if (isset($_GET['gen'])) {
            //md5 enc
            $ret = randomPassword();
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
                <a href="./checker.php" class="linkx w3-bar-item w3-button w3-medium">Check Password safety </a>

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
            <h3 class="">Press a button – Get a safe password.</h3>


            <form action="generator.php" method="get">
                <button type="submit" name="gen" class="w3-button w3-green w3-padding-medium w3-medium" value="Generate">
                Generate </button>
            </form>
            <div class="result">
                <p> Generated safe password : <b> <?php echo $ret ?> </b> </p>
                <p style=color:grey>If the generated password does not contain any a capital letter, a non-capital letter, number or a symbol <br/> click "Generate" again for the safest password.</p>
            </div>
            <br/>
            <div class="textualpart">
                <h5>Q: This is too complex! Why does my password have to be like this? </h5>
                <p> A: The security policies of many of websites leave information completely exposed. Complex passwords are more difficult to crack! </p>
                <br/>
                <h5>Q: Can I insert a word into my password ?</h5>
                <p> A: Sure, but make sure you use lowercase and uppercase letters, numbers and symbols - that way it should be way safer.<br/> Also - Don't use words that are too common! Admin123! isnt a safe password. Check <a href="https://en.wikipedia.org/wiki/List_of_the_most_common_passwords">Here</a> for a list of the most common passwords. </p>
                <br/>
            </div>
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