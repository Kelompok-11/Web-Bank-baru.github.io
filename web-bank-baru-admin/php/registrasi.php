

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/registrasi.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>E-Wallet</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
            <a class="navbar-brand" href="home2.html">E-Wallet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home2.html">Home </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="registrasi.html">Registrasi</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Akun</a>
                        </li>
                </ul>
            </div>
        </div>
      </nav>
    <!--BACKGROUND HOME-->
    <form  action="config.php" method="POST" >
    <section class="banner">
        <section class="banner2">
          <section class ="norek">
            <div class="registrasi">
               
                    <h1>Registrasi</h1>
                        <label for="username">Username : </label>
                        <input type = "text" name="username" id="username">
                        <p></p>
                        <label for="pw">Password : </label> 
                        <input type= "password" name="pw" id="pw">    
                        <p></p>     
                        <label for="firstname">First name : </label> 
                        <input name="firstname">
                        <p></p>
                        <label for="lastname">Last name : </label> 
                        <input name="lastname">    
                        <p></p>     
                        <label for="nomorkartu">Nomor kartu : </label> 
                        <input name="nomorkartu">   
                        <p></p>
                        <label for="nomorrekening">Nomor rekening : </label> 
                        <input name="nomorrekening">   
                        <p></p>
                        <label for="saldo">Saldo : </label> 
                        <input name="saldo">   
                        <p></p>
                        <input type="submit" name="register" value="Daftarkan"> 
            </div>
          </section>
        </section>
      </section>
    </form>
     
      
  <div class="sosmed">
    <ul>
      <a href="https://www.facebook.com/E-Wallet-102001815025988/?modal=admin_todo_tour"><i class="fab fa-facebook-square"></i></a>
      <a href="https://www.youtube.com/c/RadikaYudha"><i class="fab fa-youtube"></i></a>
      <a href="https://twitter.com/EWallet16"><i class="fab fa-twitter-square"></i></a>
    </ul>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>