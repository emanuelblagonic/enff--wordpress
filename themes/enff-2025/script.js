$(document).ready(function(){

  $('ul.sub-menu').css({"visibility":"hidden"});

//     $("#menu-item-30").mouseenter(function(){
//       $("ul.sub-menu").css({"visibility":"visible"});
//     });
//     $("header").mouseleave(function(){
//       $("ul.sub-menu").css({"visibility":"hidden"});
//     });
// 
//     $(document).on("mousewheel", function() {
//       if($('.content-section').scrollTop() > 400){
//           $('footer').show(400);
//       } else {
//           $('footer').hide(300);
//       }
//     });

    $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9), .latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12), .latest-edition li:nth-child(13)').hide();
    $('#btn-prev-1, #btn-next-2, #btn-prev-2, #btn-next-3, #btn-prev-3, #btn-next-4, #btn-prev-4').hide();

    $("#btn-next-1").click(function(){
      $('#btn-next-1').hide();
      $('#btn-next-2, #btn-prev-1').show();
      $('.latest-edition li:nth-child(1), .latest-edition li:nth-child(2), .latest-edition li:nth-child(3)').hide();
      $('.latest-edition li:nth-child(4), .latest-edition li:nth-child(5), .latest-edition li:nth-child(6)').show();
    });

    $("#btn-prev-1").click(function(){
      $('#btn-prev-1, #btn-next-2').hide();
      $('#btn-next-1').show();
      $('.latest-edition li:nth-child(1), .latest-edition li:nth-child(2), .latest-edition li:nth-child(3)').show();
      $('.latest-edition li:nth-child(4), .latest-edition li:nth-child(5), .latest-edition li:nth-child(6)').hide();
    });

    $("#btn-next-2").click(function(){
      $('#btn-next-2').hide();
      $('#btn-next-3, #btn-prev-2').show();
      $('.latest-edition li:nth-child(4), .latest-edition li:nth-child(5), .latest-edition li:nth-child(6)').hide();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').show();
    });

    $("#btn-prev-2").click(function(){
      $('#btn-prev-2, #btn-next-3').hide();
      $('#btn-next-2').show();
      $('.latest-edition li:nth-child(4), .latest-edition li:nth-child(5), .latest-edition li:nth-child(6)').show();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').hide();
    });

    $("#btn-next-3").click(function(){
      $('#btn-next-3').hide();
      $('#btn-prev-3').show();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').hide();
      $('.latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12)').show();
    });

    $("#btn-prev-3").click(function(){
      $('#btn-prev-3').hide();
      $('#btn-prev-2, #btn-next-4').show();
      $('.latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12)').hide();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').show();
    });

    $("#btn-next-4").click(function(){
      $('#btn-next-4').hide();
      $('#btn-prev-3').show();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').hide();
      $('.latest-edition li:nth-child(13)').show();
    });

});
