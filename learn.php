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

  .textframe {
    background-color: white;
    margin-left: 10%;
    margin-right: 10%;
    opacity: 90%;
    font-weight: bold;
    font-size: 14px;
    border-radius: 2%;
  }
</style>

<body>


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
      <h3>About Hashes, Us and staying safe online</h3>
      <div class="textframe">

        <h3>What is a hash? </h3>
        <p style="margin-left:1%; margin-right:1%;">
          A cryptographic hash function is an algorithm that can be run on data such as an individual file or a password
          to produce a value called a checksum. The values returned by a hash function are called hash values, hash codes,
          digests, or simply hashes. A cryptographic hash function is a special class of hash function that has certain
          properties which make it suitable for use in cryptography. Hash functions are generally irreversible (one-way),
          which means you can't figure out the input if you only know the output unless you try every possible input which
          is called a <u>brute-force attack</u>.
        <p style="font-size:10px">Source: https://www.onlinewebtoolkit.com/hash-generator</p>
        <br />
        <h3>What is an MD5 hash</h3>
        <p style="margin-left:1%; margin-right:1%;">
          MD5 is a message-digest algorithm is a widely used hash function producing a 128-bit hash value. This md5 online
          generator calculate the md5 hash of a string, which from any input data creates a 32 character hexadecimal
          number. <br />For example MD5 for 12345: 827ccb0eea8a706c4c34a16891f84e7b
        </p>
        <p style="font-size:10px">Source: https://www.onlinewebtoolkit.com/hash-generator</p>
        <br />
        <h3>What is a SHA1 hash</h3>

        SHA1 (Secure Hash Algorithm 1) is a cryptographic hash function or algorithm which takes an input as a string
        and produces a 160-bit (20-byte) hash value known as a message digest typically generated as a hexadecimal
        number, 40 digits long.


        <p style="font-size:10px">Source: https://www.onlinewebtoolkit.com/hash-generator</p>

        <p style="margin-left:1%; margin-right:1%;">
          <br />
        <h3>About Us</h3>
        This site is fully Open Source project by students at FFOS@UNIOS. You can visit the developer's Github to see the code:<br /> https://github.com/ffos-user-57 <br />
        Encryptify does NOT use databases, or anything similar. It does NOT keep logs <br/><p style="font-size:10px">(at least the original version doesn't, we are not responsible for forks or changed up copies)</p> We made Encryptify like this so your data is safer. <br />Online services which convert a string to MD5 usually dont provide their open source code and you are never sure what's running behind. <br />With our project you can set it up locally easily and have a safe way to secure your passwords.
        <br />For a safer approach use HTTPS (SSL/TLS) !
        </p>
        </p>

        <br />
        <h3>How easy is it to crack passwords?</h3>
        <p style="margin-left:1%; margin-right:1%;"> A hacker can crack your account password very easily, just using a variety of programs like a simple password-guessing program. This program makes multiple guesses until the password is fully cracked. The program may take a few minutes or a century; it depends on the complexity of the password. Other methods like key loggers consist of hardware devices attached to your computer that can copy your information through keywords that you use to access the accounts. Hacking through phones is another way for these people to steal your data. Using programs that can duplicate what you see on your phone, it is relatively easy for them to get your password from your phone. How long does it take for your password to be cracked?
        <br/>
      5 characters = 10 seconds
      <br/>
      6 characters = 1,000 seconds
      <br/>
      7 characters = 1 day
      <br/>
      8 characters = 115 days
      <br/>
      9 characters = 31 years
      <br/>
      10 characters = 3,000 years 
      </p>

        <br />
        <h3>Why should my password be secure?</h3>
        <p style="margin-left:1%; margin-right:1%;"> Passwords provide the first line of defense against unauthorized access to your computer and personal information. <br/>The stronger your password, the more protected your computer will be from hackers and malicious software. You should maintain strong passwords for all accounts on your computer. 
        Here’s a list of common ways to be more efficient with your passwords:
        </br>
        -Capitalizing the first letter of a word.
        </br>
        -Checking all combinations of upper/lower case for words.
        </br>
        -Inserting a number randomly in the word.
        </br>
        -Putting numbers on the ends of words.
        </br>
        -Putting numbers on the beginning of words.
        </br>
        -Putting the same pattern at both ends.

      </br>

      You can also use our <a href="./generator.php">Generator of safe passwords</a> for this purpose.
      </p>

        <br />
        <h3>Should i tell anyone my password?</h3>
        <p style="margin-left:1%; margin-right:1%;"> NO. You compromise your account security. ... Even if you trust the person to whom you give your password, they may not store it in a secure location or they might keep it on a compromised device, opening it up to potential theft and thus putting you, your accounts and your private information at risk. </p>

        <br />
        <h3>Contact</h3>
        <p style="margin-left:1%; margin-right:1%;"> Currently our contact information is limited to Github. (ffos-user-57)</p>


        <br /><br /><br />



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