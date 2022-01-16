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
    padding-top: 3%;
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
        <a href="./index.php" class="linkx w3-bar-item w3-button w3-medium">Početna</a>
        <a href="./bulk.php" class="linkx w3-bar-item w3-button w3-medium">Šifriraj višestruko</a>
        <a href="./learn.php" class="linkx w3-bar-item w3-button w3-medium">Sigurnost na internetu</a>
        <a href="./generator.php" class="linkx w3-bar-item w3-button w3-medium">Generiraj lozinku</a>
        <a href="./checker.php" class="linkx w3-bar-item w3-button w3-medium">Provjeri lozinku</a>

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
      <h3>O hashevima, nama i kako ostati siguran Online</h3>
      <div class="textframe">

        <h3>Što je Hash?</h3>
        <p style="margin-left:1%; margin-right:1%;">
        Kriptografska hash funkcija je algoritam koji se može pokrenuti na podacima kao što su pojedinačna datoteka ili lozinka te proizvesti vrijednost koja se zove Hash/Checksum. 
        Vrijednosti koje vraća hash funkcija nazivaju se hash vrijednosti, hash kodovi, digesti ili jednostavno hashevi. 
        Kriptografska hash funkcija je posebna klasa hash funkcija koja ima određene svojstva koja ga čine prikladnim za korištenje u kriptografiji. 
        Hash funkcije su općenito nepovratne (jednosmjerne), što znači da ne možete shvatiti ulaz ako znate samo izlaz osim ako ne isprobate svaki mogući ulaz koji naziva se <u> Brute Force napad</u>.
        <p style="font-size:10px">Izvor: https://www.onlinewebtoolkit.com/hash-generator</p>
        <br />
        <h3>Što je MD5 hash</h3>
        <p style="margin-left:1%; margin-right:1%;">
        MD5 je kriptografska hash funkcija koja proizvodi 128-bitnu hash vrijednost. Ovaj MD5 online generator kalkulira MD5 od neke riječi, te se iz bilo kakvog inputa generira 32 slova/broja dug heksadecimalni broj.<br />Na primjer MD5 za 12345: 827ccb0eea8a706c4c34a16891f84e7b
        </p>
        <p style="font-size:10px">Izvor: https://www.onlinewebtoolkit.com/hash-generator</p>
        <br />
        <h3>Što je SHA1 hash</h3>

        SHA1 (Secure Hash Algoritam 1) je kriptografska hash funkcija ili algoritam koji uzima ulaz kao niz i proizvodi 160-bitnu (20-bajtnu) hash vrijednost poznatu kao hash koji se obično generira kao heksadecimalni broj, dug 40 znamenki.


        <p style="font-size:10px">Izvor: https://www.onlinewebtoolkit.com/hash-generator</p>

        <p style="margin-left:1%; margin-right:1%;">
          <br />
        <h3>O nama</h3>
        Ova stranica je projekt u potpunosti otvorenog koda (pod GPLv2 licencom) kreiran od studenata na FFOS@UNIOS. Možete posjetiti Github račun razvojnog programera da vidite izvorni kod:<br /> https://github.com/ffos-user-57 <br />
        Encryptify NE KORISTI baze podataka, niti bilo što slično. Također, ne zadržava nikakve oblike Logova. <br />
        <p style="font-size:10px">(barem originalna verzija ne zadržava, nismo odgovorni za forkove ili izmjenjene kopije koda)</p> Napravili smo Encryptify ovakvim kako bi vaši podaci bili sigurniji.<br /> Online servisi koji pretvaraju lozinke u MD5 često nisu otvorenog koda i nikad nismo sigurni što se pokreće iza i pamte li se naše lozinke igdje. <br />Naš projekt možete uspostaviti lokalno vrlo lako i imati siguran način za osiguravanje vaših lozinki.
        <br />Za sigurniji pristup uvijek koristite HTTPS (SSL/TLS) !
        </p>
        </p>

        <br />
        <h3>Koliko je lako probiti moju lozinku?</h3>
        <p style="margin-left:1%; margin-right:1%;"> Haker može vrlo lako provaliti vašu lozinku pomoću jednostavnog programa za pogađanje lozinke. Ovakav program višestruko pogađa lozinke dok se lozinka potpuno ne razbije (dok ne pogodi točnu). Program može potrajati nekoliko minuta ili stoljeće; ovisi o složenosti lozinke. Druge metode kao što su key loggeri sastoje se od hardverskih uređaja spojenih na vaše računalo koji mogu kopirati vaše podatke putem riječi koje napišete pri pristupu računima i korištenju vašeg računala. Key logger programi postoje i u software obliku. Hakiranje telefona je još jedan način da vam ljudi ukradu vaše podatke. Koristeći programe koji mogu duplicirati ono što vidite na svom telefonu, relativno im je lako dobiti vašu lozinku krađom. Također saznajte i: Koliko je vremena potrebno da vaša lozinka bude razbijena?
           <br />
          5 znakova = 10 sekundi
          <br />
          6 znakova = 1,000 seconds
          <br />
          7 znakova = 1 dan
          <br />
          8 znakova = 115 dana
          <br />
          9 znakova = 31 godina
          <br />
          10 znakova = 3,000 godina
        </p>

        <br />
        <h3>Zašto bi moja lozinka trebala biti sigurna?</h3>
        <p style="margin-left:1%; margin-right:1%;"> Lozinke su prva linija obrane od neovlaštenog pristupa vašem računalu i osobnim podacima. <br />Što je vaša lozinka jača, to će vaše računalo biti sigurnije od hakera i zlonamjernog softvera. Trebali biste održavati jake lozinke za sve račune na vašem računalu.
           Evo popisa uobičajenih načina da budete učinkovitiji sa svojim zaporkama:
           </br>
           -Pisanje velikim slovom u riječi.
           </br>
           -Provjera svih kombinacija velikih i malih slova za riječi.
           </br>
           - Nasumično umetanje broja u riječ.
           </br>
           - Stavljanje brojeva na krajeve riječi.
           </br>
           - Stavljanje brojeva na početak riječi.
           </br>
           -Postavljanje istog uzorka na oba kraja.
          </br>
          Možete i koristiti naš <a href="./generator.php">Generator sigurnih lozinki</a> za ovo.
        </p>

        <br />
        <h3>Smijem li reći nekome moju lozinku?</h3>
        <p style="margin-left:1%; margin-right:1%;"> Ne. Riskirate sigurnost vaših računa... Čak i da vjerujete osobi kojoj dajete lozinku, oni ju možda neće pohraniti na sigurno mjesto ili će ih zapisati na kompromitiranom uređaju, što vas izlaže napadačima. </p>
        <br />
        <h3>Kontakt</h3>
        <p style="margin-left:1%; margin-right:1%;">Trenutno su nam kontakt informacije ograničene samo na Github. (ffos-user-57)</p>


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