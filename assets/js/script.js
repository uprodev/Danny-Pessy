jQuery(document).ready(function(){
  $('.video_home').click(function(){

    var url = $(this).attr('data-url')
    $.fancybox.open({
      src: url,
      type: 'video'
    });


  })


  $('.contact-me__list input').change(function(){
    var i = $(this).val();
    $('[data-form]').hide();
    $('[data-form="'+i+'"]').show();
  })
})
