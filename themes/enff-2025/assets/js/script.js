$(document).ready(function(){

  $('ul.sub-menu').css({"visibility":"hidden"});

  // for news menu, show + hide submenu
  $("#menu-item-30").mouseenter(function(){
    // $("ul.sub-menu").css({"visibility":"visible"});
    $("#menu-item-50843, #menu-item-41, #menu-item-40").css({"visibility":"visible"});
  });
  $("#menu-item-30").mouseleave(function(){
    $("#menu-item-50843, #menu-item-41, #menu-item-40").css({"visibility":"hidden"});
  });

  // for program menu, show + hide submenu
  $("#menu-item-50841").mouseenter(function(){
    // $("ul.sub-menu").css({"visibility":"visible"});
    $("#menu-item-31, #menu-item-50842").css({"visibility":"visible"});
  });
  $("#menu-item-50841").mouseleave(function(){
    $("#menu-item-31, #menu-item-50842").css({"visibility":"hidden"});
  });

  //add unique ID to same class name
  var i = 1;
  $('.sub-menu').each(function() {
    var customID = 'sub-menu-' + String(i)
    $(this).attr('id', customID)
    i++;
    console.log(this)
  });
  
  //  -----
  //  =update 2025-06-23
  //  Commented out since it didn't work very well with the new style updates
  // $(document).on("mousewheel", function() {
  //   if($('.content-section').scrollTop() > 400){
  //       $('footer').show(400);
  //   } else {
  //       $('footer').hide(300);
  //   }
  // });

    // $(document).on("mousewheel", function() {
    //   if($('.content-section').scrollTop() > 600){
    //       $('.menu-button').css({"background-color":"#8071b3"});
    //       $('ul.sub-menu').css({"visibility":"visible"});
    //     } else {
    //       $('.menu-button').css({"background-color":"yellow"});
    //       $('ul.sub-menu').css({"visibility":"hidden"});
    //     }
    // });

    $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9), .latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12), .latest-edition li:nth-child(13), .latest-edition li:nth-child(14), .latest-edition li:nth-child(15)').hide();
    $('#btn-prev-1, #btn-next-2, #btn-prev-2, #btn-next-3, #btn-prev-3, #btn-next-4, #btn-prev-4').hide();

    $("#btn-next-1").click(function(){
      $('#btn-next-1').hide();
      $('#btn-next-2, #btn-prev-1').show();
      $('.latest-edition li:nth-child(1), .latest-edition li:nth-child(2), .latest-edition li:nth-child(3)').hide();
      $('.latest-edition li:nth-child(13)').hide();
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
      $('.latest-edition li:nth-child(13)').hide();
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
      $('#btn-prev-3, #btn-next-4').show();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').hide();
      $('.latest-edition li:nth-child(13)').hide();
      $('.latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12)').show();
    });

    $("#btn-prev-3").click(function(){
      $('#btn-prev-3, #btn-next-4').hide();
      $('#btn-prev-2, #btn-next-3').show();
      $('.latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12)').hide();
      $('.latest-edition li:nth-child(7), .latest-edition li:nth-child(8), .latest-edition li:nth-child(9)').show();
    });

    $("#btn-next-4").click(function(){
      $('#btn-next-4').hide();
      $('#btn-prev-4').show();
      $('.latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12)').hide();
      $('.latest-edition li:nth-child(13), .latest-edition li:nth-child(14), .latest-edition li:nth-child(15)').show();
    });

    $("#btn-prev-4").click(function(){
      $('#btn-prev-4').hide();
      $('#btn-prev-3, #btn-next-4').show();
      $('.latest-edition li:nth-child(13), .latest-edition li:nth-child(14), .latest-edition li:nth-child(15)').hide();
      $('.latest-edition li:nth-child(10), .latest-edition li:nth-child(11), .latest-edition li:nth-child(12)').show();
    });

});


//  -------------------------
//  2025 ENFF theme update

jQuery(document).ready(function($) {

    //  -----
    //  Toggle  
    
    $('.toggle').on('click', function(e) {
      e.preventDefault();
      $(this).closest('nav').toggleClass('is-open');
    });
  
});
