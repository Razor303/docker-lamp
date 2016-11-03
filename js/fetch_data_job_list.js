
  $.fn.fetch_data = function () {
      $.ajax({
          url: 'index.php/requestform/display_jobs',
          type: 'POST',
          success:function(data){
            $('.column').html(data);

          }
      });
  }

  $(function() {
    $(this).fetch_data();
    $(this).portlet();
  });
