<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Encryptify</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 
$ret = "";
$hashtype = "";

function checkPassword($pwd) {
    $errors = "";
    if (strlen($pwd) < 8) {
        $errors = $errors . "; Password too short! <br>";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $errors = $errors . "; Password must include at least one number! <br>";
    }

    if (!preg_match("#[a-z]+#", $pwd)) {
        $errors = $errors . "; Password must include at least one lowercase letter! <br>";
    }
    if(!preg_match("#[A-Z]+#", $pwd)) {
        $errors = $errors . "; Password must include at least one capital letter! <br>";
    } 
    if( !preg_match("#\W#", $pwd ) ){
        $errors = $errors . "; Password must include at least one symbol! <br>";
    } 

    

    return ($errors);
}


if (!empty($_POST))
{
    if (isset($_POST['gen']) ) {
        //md5 enc
        $thepass = $_POST['gen'];
        $ret = checkPassword($thepass);
        if ( strlen($ret) < 2 ){
            $ret = "Safe";  
        }
        if(str_starts_with($ret, ";")){
            $ret = substr($ret, 1);
            $ret = "<br>" . $ret;
        }
    }
    else {
        //nothing
    }
}
?>

<div class="navbar">
        <form action="index.php" class="link">
            <input type="submit" value="Home" class="btnx" />
        </form>
         <form action="bulkmd5.php" class="link">
            <input type="submit" value="Bulk MD5 Encrypt"  class="btnx"  />
        </form>
        <form action="bulksha.php" class="link">
            <input type="submit" value="Bulk SHA1 Encrypt" class="btnx"   />
        </form>
        </form>
        <form action="learn.php" class="link">
            <input type="submit" value="Learn to be safe online!"   class="btnx" />
        </form>
        <form action="generator.php" class="link">
            <input type="submit" value="Generate a safe password!"  class="btnx"  />
        </form>
        <form action="checker.php" class="link">
            <input type="submit" value="Check the safety of your password!"  class="btnx"  />
        </form>

    </div>


    <div class="titlething">
        <h1>Encryptify</h1>
    </div>
    <!-- Encryption section -->
    <div class="section">
        <br />
        <h2>Enter your password to check its safety</h2>
        <p> </p>
        <br/>
        <form action="checker.php" method="post">
            <input type="password" name="gen">
            <input type="submit">
        </form>
        <br/><br />
    </div>
    <div class="result"> 
        <p> Your password safety level : <b> <?php echo $ret ?> </b> </p> 

        <br>

    </div>
    <p style="color:white;"> Keep in mind that this checker DOES NOT check for words in the string !! So even Admin123! is considered safe, yet there are words in it which significantly reduces its safety. </p>

    <footer>
        <br /><br />
        <p class="copyright">Copyright 2021 - FFOS Croatia students: F.O.(Programming),  </p>
    </footer>

</body>

</html>