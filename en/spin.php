<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win Instant Cash with Americana</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="outer-wraper">
        <div class="container">
        <header class="header">
            <a href="./" class="logo"><img src="../assets/images/logo.webp" alt="" class="img-fluid"></a>
        </header>
        <main class="main">
            <div class="win-cash">
                <img src="../assets/images/win-instant-cash.webp" alt="" class="img-fluid">
               
            </div>
            <section class="spin-wheel">
        
            <div class="container d-flex jcc aic flex-column" id="spinner">
          <div class="spinner">
          <div class="wheel ">
            <div class="number" style="--i:1;--clr:#ff3538"><span class="rb1"><img src="../assets/images/recipe-book.png" alt="Recipe Book" class="img-fluid"></span></div>
            <div class="number" style="--i:2;--clr:#ffffff"><span class="v200"><img src="../assets/images/voucher-200.png" alt="AED 200 Voucher" class="img-fluid"></span></div>
            <div class="number" style="--i:3;--clr:#ff3538"><span class="rb2"><img src="../assets/images/recipe-book.png" alt="Recipe Book" class="img-fluid"></span></div>
            <div class="number" style="--i:4;--clr:#ffffff"><span class="v100"><img src="../assets/images/voucher100.png" alt="AED 100 Voucher" class="img-fluid"></span></div>
        </div>
        <div class="base">
            <img src="../assets/images/spinner-base.svg" class="img-fluid" alt="Spinner base">
        </div>
          </div>
          
           <h2 class="text-white text-heavy text-center">SPIN TO REVEAL YOUR PRIZE</h2>
           <div class="spinBtn" onclick="spin()"><img src="../assets/images/spin-button.png" class="img-fluid" alt="SPIN"></div>
           
             
            </div>
            <div class="container d-flex jcc aic flex-column hideNow" id="prize">
            <form action="#" class="submit">
                <input type="hidden" name="prize" value="prize">
            </form>
            <div class="voucher" id="voucher">
                
            </div>
            </div>

        </section>
            
        </main>

        <footer class="footer">
            <div class="container">
           
            </div>
        </footer>
        </div>
    </div>
<?php include_once('../spinjs.php'); ?>
    <!-- <script src="../assets/scripts/script.js"></script> -->
</body>
</html>