// Đánh giá sao
$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Cảm ơn bạn đã đánh giá " + ratingValue + " stars.";
    }
    else {
        msg = "Cảm ơn bạn đã đánh giá" + ratingValue + " stars.";
    }
    responseMessage(msg);
    $('input#rating_start').val(ratingValue);
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
// Giỏ hàng
function AddCart(id){
      $.ajax({
        url:'cart/add/'+id,
        type:'GET',
      }).done(function(response){
        Command: toastr["success"]("Thêm mới giỏ hàng thành công")
        toastr.options = {
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": 300,
          "hideDuration": 1000,
          "timeOut": 5000,
          "extendedTimeOut": 1000,
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        console.log(response);
        $(".glyphicon-shopping-cart").empty();
        $(".glyphicon-shopping-cart").html(response);
        $(".glyphicon-shopping-cart").html($('.cart').html());
      });
    };
// Banner
 $(document).ready(function(){
        var heroSlider = $('.owl-carousel');
        heroSlider.owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayTimeout:5000,
        autoplayHoverPause: true,
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag:false,
        touchDrag:true,
        pullDrag:false,
        freeDrag:false,
        dots:true,
        autoplay:true,
        responsive: {
        0: {
        items: 1
        },
        600: {
        items: 1
        },
        1000: {
        items: 1
        }
        }
      });
      heroSlider.on("changed.owl.carousel", function(event){
      var item = event.item.index-2;
      $('h1, p').removeClass('fadeInUp');
      $('a').removeClass('zoomIn');
      $('.owl-item').not('.cloned').eq(item).find('h1, p').addClass(' fadeInUp');
      $('.owl-item').not('.cloned').eq(item).find('a').addClass(' zoomIn');
      })
      });

