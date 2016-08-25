//  <!--stiky header-->
if ($(window).width() >= 768) {
    // Create a clone of the menu, right next to original.
    $('.off-mobile-stiky').addClass('original').clone().insertAfter('.off-mobile-stiky').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','10').removeClass('original').hide();

    scrollIntervalID = setInterval(stickIt, 10);


    function stickIt() {

      var orgElementPos = $('.original').offset();
      orgElementTop = orgElementPos.top;               

      if ($(window).scrollTop() >= (orgElementTop)) {
        // scrolled past the original position; now only show the cloned, sticky element.

        // Cloned element should always have same left position and width as original element.     
        orgElement = $('.original');
        coordsOrgElement = orgElement.offset();
        leftOrgElement = coordsOrgElement.left;  
        widthOrgElement = orgElement.css('width');
        $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
        $('.original').css('visibility','hidden');
      } else {
        // not scrolled past the menu; only show the original menu.
        $('.cloned').hide();
        $('.original').css('visibility','visible');
      }
    } 

}
    
    
 $('#cat_top_cont_FyyThF_right_arr').unbind('click');   
//<!--END stiky header-->

//scroll to id
  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

//end scroll to id