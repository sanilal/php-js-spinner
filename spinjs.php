<?php 
// 9230 -- AED 200
// 8300 -- AED 100
// 8220 -- AED Receipe Book 1
// 8400 -- AED Receipe Book 2

$rotatingAngles = [9230, 8300, 8220, 8400];
$randomKey = array_rand($rotatingAngles); 
if(isset($rotatingAngle)) {
    $randomValue = $rotatingAngle;
} else {
    $randomValue = $rotatingAngles[$randomKey];
}

?>
<script>    
// let wheel = document.querySelector('.wheel');
// let spinBtn = document.querySelector('.spinBtn');
// let value = Math.ceil(Math.random() * 3600);

// spinBtn.onclick = function() {
//     wheel.style.transform = `rotate(${value}deg)`;
//     value += Math.ceil(math.random() * 3600)
// }

function shuffle(array) {
    
    var currentIndex = array.length, randomIndex;


    while(0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex)
        currentIndex--;
        [array[currentIndex], array[randomIndex]] = [
            array[currentIndex],
            array[currentIndex]
        ]
    }
    return array
}



function spin(){
    // wheel.play()
     const box = document.querySelector('.wheel');
     const spinner = document.getElementById('spinner');
     const prize = document.getElementById('prize');
     const voucher = document.getElementById('voucher');
    //  const element = document.getElementById("mainbox");
     let selectedItem = "";
     
    //  let RB1 = shuffle([8220, 8600, 8960]);
    //  let AED200 = shuffle([9230, 8500, 8880]);
    //  let RB2 = shuffle([8400, 8780, 9130]); 
    //  let AED100 = shuffle([8300, 8700, 9050]);

 

     
    //  let results = shuffle([
    //      RB1[0],
    //      AED200[0],
    //      RB2[0],
    //      AED100[0],
    //  ]);

    //  if(RB1.includes(results[0])) selectedItem = "rb";
    //  if(AED200.includes(results[0])) selectedItem = "aed200";
    //  if(RB2.includes(results[0])) selectedItem = "rb";
    //  if(AED100.includes(results[0])) selectedItem = "aed100";

     <?php if($randomValue === 9230) { ?>
        selectedItem = "aed200";
    <?php } elseif($randomValue === 8300) {?>
        selectedItem = "aed100";
        <?php } else {?>
            selectedItem = "rb";
            <?php } ?>


     title = document.createElement('h2');
     title.className = 'text-white text-heavy text-center fontsize25';
     prizeImage = document.createElement('img');
     prizeImage.className = 'prize-image img-fluid'
     disclaimer = document.createElement('p');
     disclaimer.className = 'disclaimer mt-3 text-light text-white fontsize1';
     spinAgain = document.createElement('div');
     spinAgain.className = 'spin-again';
     
     if(selectedItem === 'aed200') {
        title.innerHTML = 'CONGRATULATIONS! <small>you have won</small> AED 200 VOUCHER';
        prizeImage.src = '../assets/images/voucher-200.webp';
        prizeImage.alt = 'Congratulations! you have won AED 200 VOUCHER';
        disclaimer.innerHTML = '<strong>Disclaimer:</strong> The e voucher will be sent to the registered email address after your uploaded receipt has been verified. If you do not receive a response within 72 hours, please consider your entry invalid.' ;
     } else if(selectedItem === 'aed100') {
        title.innerHTML = 'CONGRATULATIONS!<small>you have won</small> AED 100 VOUCHER';
        prizeImage.src = '../assets/images/voucher-100.webp';
        prizeImage.alt ='Congratulations! you have won AED 100 VOUCHER';
        disclaimer.innerHTML = '<strong>Disclaimer:</strong> The e voucher will be sent to the registered email address after your uploaded receipt has been verified. If you do not receive a response within 72 hours, please consider your entry invalid.' ;

    } else {
        title.innerHTML = 'CONGRATULATIONS!';
        const subtitle = document.createElement('small');
         subtitle.textContent = 'you have won a free Americana Recipe Book!';
        prizeImage.src = '../assets/images/recipe-book.webp';
        prizeImage.alt = 'Congratulations! you have won AED 100 VOUCHER';
        disclaimer.innerHTML = '' ;
        title.appendChild(subtitle); 
        spinAgaina = document.createElement('a');
        spinAgain.appendChild(spinAgaina);
        spinAgainimg = document.createElement('img');
        spinAgaina.className = 'spin-again mt-3 ';
        spinAgaina.href = 'spin.php?spinid=12'
        spinAgainimg.src = '../assets/images/spin-again.webp';
        spinAgaina.appendChild(spinAgainimg);

    }
    
    prizeDetails = [prizeImage, disclaimer, title, spinAgain];


    prizeDetails.forEach(element => {
        voucher.appendChild(element);
    });


     box.style.setProperty("transition", "all ease 5s");
     <?php if(isset($rotatingAngle)) { ?>
        box.style.transform = "rotate(<?php echo $rotatingAngle; ?>deg)";
        <?php } else { ?>
     box.style.transform = "rotate(<?php echo $randomValue; ?>deg)";
     <?php } ?>
     // box.style.transform = "rotate(9050deg)";
    //  element.classList.remove('animate');
     setTimeout(function(){
        //  element.classList.add("animate");
     }, 5000);
 
     setTimeout(function(){
        spinner.classList.add('hideNow')
        prize.classList.remove('hideNow')
         
     }, 5500)
     setTimeout(function(){
         box.style.setProperty("transition", "initial");
         box.style.transform = "rotate(90deg)";
     }, 6000)
 }
 
</script>