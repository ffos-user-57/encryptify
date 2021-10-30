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
        <p>Hello world </p>
        <br/>
    </div>
    <div class="result"> 
        <p> To learn more about password safety visit our <a href="generator.php"> SECURE PASSWORD GENERATOR</a> or <a href="checker.php">PASSWORD CHECKER </a> </p> 



    </div>


    <footer>
        <br /><br />
        <p class="copyright">Copyright 2020 F.O. - FFOS Student</p>
    </footer>

</body>

</html>