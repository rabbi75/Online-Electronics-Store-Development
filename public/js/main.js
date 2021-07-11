
$(document).ready(function(){
  $(".product-carousel").owlCarousel({
  	items:1,
  	loop:true,
  	// navText:['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
  	autoplay:true,
  	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }

  });
});

$(document).ready(function(){
  $(".vediogame-carousel").owlCarousel({
  	items:6,
  	//loop:true,
    nav:true,
  	navText:['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
  	responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:4,
        },
        1000:{
            items:5,
        }
    }

  });
});


$(document).ready(function(){
  $(".Shirtproduct-carousel").owlCarousel({
  	items:6,
  	//loop:true,
    nav:true,
    navText:['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
  	responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:4,
        },
        1000:{
            items:6,
        }
    }

  });
});



// For sectect payment method

$(document).ready(function(){
  $("#payments").change(function(){
    $payment_method = $("#payments").val();
    if ($payment_method == "cash_in") {
      $("#payment_cash_in").removeClass('hidden');
      $("#payment_bkash").addClass('hidden');
      $("#payment_rocket").addClass('hidden');
      $("#transaction_id").addClass('hidden');
    }else if ($payment_method == "bkash") {
      $("#payment_bkash").removeClass('hidden');
      $("#payment_cash_in").addClass('hidden');
      $("#payment_rocket").addClass('hidden');
      $("#transaction_id").removeClass('hidden');
    }else if ($payment_method == "rocket") {
      $("#payment_rocket").removeClass('hidden');
      $("#payment_bkash").addClass('hidden');
      $("#payment_cash_in").addClass('hidden');
      $("#transaction_id").removeClass('hidden');
    }
  });
});


// ____Product Details______

      var productImg = document.getElementById("productImg");
      var smallImg = document.getElementsByClassName("small-img");

      smallImg[0].onclick = function()
      {
        productImg.src = smallImg[0].src;
      }
      smallImg[1].onclick = function()
      {
        productImg.src = smallImg[1].src;
      }
      smallImg[2].onclick = function()
      {
        productImg.src = smallImg[2].src;
      }
      smallImg[3].onclick = function()
      {
        productImg.src = smallImg[3].src;
      }
