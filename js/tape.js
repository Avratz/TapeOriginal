$(function() {

  $('.nav a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({ scrollTop: target.offset().top - "0"}, 1000);
        return false;
      }
    }
  });
});
$(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});

  var visible = false;
$(".boxfq").on("click", function(){
  if (visible == false) {
    $(this).css('background-color', '#0D809B');
     $("p", this).show();
     visible = true;
  }else{
    $(this).css('background-color', '#0AADD9');
     $("p", this).hide();
     visible = false;
  }
});

$(".cer-rec").hover(function() {
    $(this).css('background-color', '#0AADD9');
    $("h3", this).css('color', '#FFF');
    $(".col-md-2", this).css('border-right', 'solid 2px #FFF');
},
function() {
  $(this).css('background-color', '#eaeaea');
  $("h3", this).css('color', '#555');
  $(".col-md-2", this).css('border-right', 'solid 2px #333');

});
