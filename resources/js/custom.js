  $(document).ready(function(){
    $('button').mouseover(function () {
        $(this).addClass('red')



      });
      $('button').mouseleave(function () {
        $(this).delay(500).removeClass('red')



      });
  });
