$.fn.portlet = function () {
  $("span").remove(".ui-icon, .ui-icon-minusthick .portlet-toggle");
  $( ".portlet" ).attr('class', "portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all");
        $(".portlet-header").attr('class', "portlet-header ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

        $( ".portlet-toggle" ).on( "click", function() {
          var icon = $( this );
          icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
          icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
        });
  $(document).ajaxComplete(function(){
    $("span").remove(".ui-icon, .ui-icon-minusthick .portlet-toggle");
    $( ".portlet" ).attr('class', "portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all");
          $(".portlet-header").attr('class', "portlet-header ui-widget-header ui-corner-all" )
          .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");

          $( ".portlet-toggle" ).on( "click", function() {
            var icon = $( this );
            icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
            icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
          });
  });
  $( ".column" ).sortable({
    connectWith: ".column",
    handle: ".portlet-header",
    cancel: ".portlet-toggle",
    placeholder: "portlet-placeholder ui-corner-all"
  });
}
