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
if (!empty($_POST))
{
    if (isset($_POST['passMD5']) ) {
        //md5 enc
        $str = $_POST['passMD5'];
        $hashtype = "MD5";
        $ret = md5($str);
    }
    elseif (isset($_POST['pass512']) ){
        //sha enc
        $str = $_POST['pass512'];
        $hashtype = "SHA1";
        $ret = sha1($str);
    }
    else {
        //nothing
    }
}
?>
    <?php include("navbar.php");?>
    <!-- <div class="navbar">
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

    </div> -->

    <div class="titlething">
        <h1>Encryptify</h1>
    </div>
    <!-- Encryption section -->
    <div class="section">
        <br />
        <h2>Your password to MD5</h2>
        <p>Enter your password and click encrypt :</p>
        <form action="index.php" method="post">
        <input type="text" name="passMD5"><br><br />
        <input type="submit">
        </form>
        <br />
        <h2>Your password to sha1</h2>
        <p>Enter your password and click encrypt </p>
        <form action="index.php" method="post">
        <input type="text" name="pass512"><br><br />
        <input type="submit">
        </form>
        <br/><br />
    </div>
    <div class="result"> 
        <p> Your result <?php echo $hashtype ?> hash is : <b> <?php echo $ret ?> </b> </p> 

        <br>

    </div>
    <div class="opensource">
        <p> This site is fully Open Source. Visit my GitHub for more: https://github.com/ffos-user-57 </p>
        <p> It does NOT use databases, or anything similar. It does NOT keep logs (at least the original version doesn't, im not responsible for forks) So your data should be safe.</p>
        <p> For the safest approach use HTTPS (SSL/TLS) ! </p>
    </div>
    <div class="footer">
        <p class="copyright">Copyright 2021 - FFOS Croatia students: F.O.(Programming),  </p>
    </div>

</body>

</html>