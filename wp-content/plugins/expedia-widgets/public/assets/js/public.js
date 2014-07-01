(function ( $ ) {
$(document).ready(function(){
    
    $('.dest-list').on('click','.dest-header', function() {
    
    var position = $(this).position();

    if ($(this).hasClass('tours')){
      $(this).parent().find('.dest-body').css( { left: position.left, top: position.top - 625 } );	
    }
    else{
      $(this).parent().find('.dest-body').css( { left: position.left, top: position.top + 125} ); 
    }  
    $(this).parent().find('.dest-body').toggle();

       if ($(this).parent().find('.dest-body').css('display') == 'none') {
          $(this).find('.accordion-toggle i').removeClass().addClass('fa fa-angle-down');

     	}else {
          $(this).find('.accordion-toggle i').removeClass().addClass('fa fa-angle-up');
          $('.dest-body').not($(this).parent().find('.dest-body')).hide();
     	}
    });

    $('body').on('click','#home' , function(e) {
      if ($(e.target).parents('#dest-feed').length == 0){
        $('.dest-body').hide();
      }
    });
});

}(jQuery));