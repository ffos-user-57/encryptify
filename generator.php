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

function randomPassword() {
    $alphabet = '!#$&.,-:_;()=?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 12; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


if (!empty($_GET))
{
    if (isset($_GET['gen']) ) {
        //md5 enc
        $ret = randomPassword();
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
        <h2>Press the button to generate a safe password</h2>
        <form action="generator.php" method="get">
            <button type="submit" name="gen" value="value">Generate</button>
        </form>
        <br/><br />
    </div>
    <div class="result"> 
        <p> Generated safe password : <b> <?php echo $ret ?> </b> </p> 

        <br>

    </div>


    <footer>
        <br /><br />
        <p class="copyright">Copyright 2021 - FFOS Croatia students: F.O.(Programming),  </p>
    </footer>

</body>

</html>