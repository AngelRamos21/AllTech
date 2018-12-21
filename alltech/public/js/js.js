$(document).ready(function() {


  $('.status-box').keyup(function() {
    var postLength = $(this).val().length;
    var charactersLeft = 140 - postLength;
    $('.counter').text(charactersLeft);

    if (charactersLeft < 0) {
      $('.public').addClass('disabled');
        $('.public').attr("disabled", true);
    }

    else if (charactersLeft == 140) {
      $('.public').addClass('disabled');
    }

    else {
      $('.public').removeClass('disabled');
      $('.public').attr("disabled", false);

    }
  });

  $('.public').addClass('disabled');

});
