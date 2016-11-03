  $.fn.fetch_tabs_content = function () {
    $.ajax({
        url: 'index.php/requestform/nav_form',
        type: 'POST',
        success:function(data){
          $('#tabs').html(data);
              tabs = $( "#tabs" ).tabs({


          });
          tabs.find( ".ui-tabs-nav" ).sortable({
            axis: "x",
            stop: function() {
              tabs.tabs( "refresh" );
            }
          });

          $('#tabs').on('tabsload', function(event, ui){
            var data = {},
                value = "",
                that = $('.subTabs');
                that.each(function(index, value) {
                  that = $(this),
                  id = 'id',
                  value = that.attr('id');
                  var subtabs = $('#' + value).tabs({

                  });
                    console.log(value);
                });

            $(this).validateFormSend();
            $(this).fetch_data();
            $(this).portlet();
          });
        }
    });
  }

  $(function(){
    $(this).fetch_tabs_content();
  });

  //subtabs.find( ".ui-tabs-nav" ).sortable({
    //axis: "x",
    //stop: function() {
      //subtabs.tabs( "refresh" );
    //}
  //});
