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
                <h2 class="text-white text-heavy text-center"><small>THANK YOU FOR PARTICIPATING</small><br />ENTER YOUR DETAILS</h2>
             
            </div>
            <section class="campaign">
            <div class="participation <?php if(isset($active)) {  echo $active; } else { echo 'no-active';} ?>">
                <div class="red-box">
           
                <?php if(isset($msg)){ if($msg!=""){ 
                echo $msg;
            }}?>
            <?php if(isset($error)){ if($error!=""){ ?>
              	<div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> <?php echo $error; ?></h4>
                    
               	</div>
               <?php } } ?>
                </div>
            </div>
            <div class="container">
          <div class="shop-form">
          <form role="form" method="post"  class="form-horizontal" action="index.php#submitForm" enctype="multipart/form-data" id="submitForm" >
                    <input type="text" class="form-control" placeholder="First Name*" name="full-name" id="full-name" required />
						<div id="fname-err"></div>
                    <input type="text" class="form-control" placeholder="Last Name*" name="full-name" id="full-name" required />
						<div id="lname-err"></div>
            <input type="email" class="form-control" placeholder="Email Address*" name="email" id="inputEmail4" required/>
					  <div id="email-err"></div>

                                <input type="tel" name="mobile" class="form-control inputmobile" id="inputNumber" placeholder="Mobile Number*" required>
               <div id="mobile-err"></div>
              <select class="form-select form-control" name="city" id="city">
                  <option value="" selected>Region*</option>
                  <option value="Dubai">Dubai</option>
                  <option value="Abu Dhabi">Abu Dhabi</option>
                  <option value="Abu Dhabi">Al Ain</option>
                  <option value="Sharjah">Sharjah</option>
                  <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                  <option value="Ajman">Ajman</option>
                  <option value="Fujairah">Fujairah</option>
                  <option value="Umm Al Quwain">Umm Al Quwain</option>

              </select>
              <div id="city-err"></div>


            <h3 class="text-center text-white fontsize15">Upload the Purchase Receipt </h3>
            <div class="invoice-upload">
                <div class="invoice-wraper" >
                    <span class="invoice-copy"></span>
                </div>
                <input type="file" name="inputInvoice" class="form-control inputInvoice hideNow" accept="image/*" id="inputInvoice" placeholder="Upload picture" required capture="camera">
                
                <div id="invoice-err"></div>
            </div>
            <input type="text" class="form-control" placeholder="Receipt Number" name="invoice" id="inputInvoice" required/>
					  <div id="invoicen-err"></div>

            </div>
            <div class="form-terms">
                <img src="../assets/images/form-terms.svg" class="img-fluid" alt="By clicking “Submit” I agree to the competition’s
terms and conditions.">
            </div>
         
            <div class="form-buttons"><button type="submit" class="btn btn-primary submitnreset" name="btnadd" id="submit-button" BackColor="Transparent" ><img src="../assets/images/submit.webp" alt="Submit"> </button>
            </div>
		</div>  
					 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                   
                  </div>
                </form>
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
</body>
</html>