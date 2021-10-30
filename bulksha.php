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

if (!empty($_POST))
{
    if (isset($_POST['bulkSHA']) ) {
        //md5 enc
        $str = $_POST['bulkSHA'];
        $str_arr = explode (",", $_POST['bulkSHA']); 
        foreach ($str_arr as &$value) {
            $val = sha1($value);
            $ret = $ret . "," . $val;
        }
        
    }
    else {
        //nothing
    }

    if(str_starts_with($ret, ",")){
        $ret = substr($ret, 1);
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
        <h2>Bulk SHA encrypt</h2>
        <p>Enter your passwords seperated by a comma (no spaces) :</p>
        <form action="bulksha.php" method="post">
        <textarea type="text" name="bulkSHA" style="width:80%;height:150px;" > </textarea><br><br />
        <input type="submit">
        </form>
        <br />
        <br />
    </div>
    <div class="result"> 
        <p> Your results : <b> <?php echo $ret ?> </b> </p> 



    </div>


    <footer>
        <br /><br />
        <p class="copyright">Copyright 2020 F.O. - FFOS Student</p>
    </footer>

</body>

</html>