$(document).ready(function(){
  $('.rate-book').on('click','.unchecked-star', function(){
    var rate = $(this).attr('data-star');
    $('.big-star:lt('+rate+')').addClass('checked-star').removeClass('unchecked-star');
  });

  $('.rate-book').on('mouseover','.unchecked-star',function(){
    var rate = $(this).attr('data-star');
    //alert(rate);
    $('.big-star:lt('+rate+')').addClass('checked-star');
  });

  $('.rate-book').on('mouseleave','.unchecked-star',  function(){
    $('.unchecked-star').removeClass('checked-star');
  });
});
