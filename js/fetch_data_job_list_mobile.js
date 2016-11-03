$.fn.fetch_data_mobile= function () {
    $.ajax({
        url: 'mobile_display_jobs',
        type: 'POST',
        success:function(data){
          $('#patinentFlow').append(data);
        }
    });
}

$(function(){
  $(this).fetch_data_mobile();
});
