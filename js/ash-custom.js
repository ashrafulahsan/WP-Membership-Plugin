 $('.carousel').carousel({
      pause: true,
      interval: false
  });
  




jQuery(document).ready(function($) {
    
    $(function(){
        
      $('#ash-arist-button').click(function(){
        $('#ash-indicator').show();  
      });  
      $('#ash_last_back').click(function(){
        $('#ash-indicator').hide();  
      });     
             
      $('.ash-right').click(function(){
        if($(this).attr('href') === ''){
          $('#plz-select').fadeIn('slow', function () {
            $(this).delay(1000).fadeOut('slow');
          });
        }
      });
      
    
      $('.ash_errors').fadeIn('slow', function () {
        $(this).delay(5000).fadeOut('slow');
      });
      
      $("#ash-submit-button").prop('disabled', true);   

      $('#ash-tc-cb').change(function(){
          if($(this).is(':checked')){
            $("#ash-submit-button").prop('disabled', false);        
          }
      });
    });
    
    
    
    
  $('.ash-pre-href input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href").attr('href', '#myCarousel');
    }
  });
  
  $('.ash-pre-href-2 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_2").attr('href', '#myCarousel');
    }
  });
  
    $('.ash-pre-href-3 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_3").attr('href', '#myCarousel');
    }
  });
  
    $('.ash-pre-href-4 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_4").attr('href', '#myCarousel');
    }
  });
  
    $('.ash-pre-href-5 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_5").attr('href', '#myCarousel');
    }
  });
  
    $('.ash-pre-href-6 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_6").attr('href', '#myCarousel');
    }
  });
 
  $('.carousel-body .ash-pre-href-7 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_7").attr('href', '#myCarousel');
    }
  });
  
    $('.carousel-body .ash-pre-href-8 input[type="radio"]').change(function(){
    if ($(this).is(':checked'))
    {
      $("#ash_personality_href_8").attr('href', '#myCarousel');
    }
  }); 
  
});