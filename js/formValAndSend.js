  var $departId = "",
      $subId = "";

  $.fn.validateFormSend = function () {


   $( "#tabs" ).tabs({
      activate : function (event,ui) {
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
      }
  });

  $( ".subtabs" ).tabs({
     activate : function (event,ui) {
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
     }
 });

	$('form[class=mannual-request-form]').on('submit', function(form) {
  $('td > input[name=department].hidden-input').val($departId);
  $('td > input[name=sub_department].hidden-input').val($subId);
    form.preventDefault();

		$('form[class=mannual-request-form]').validate({
      rules: {
        action: {
        required: true
        },
        from_location: {
        required: true
        },
        to_location: {
        required: true
        },
        transport: {
        required: true
        },
        rae: {
        required: true,
        minlength: 6,
        integer: true
        },
        infectionRisk: {
        required: true
        },
        breachTime: {
        required: true
        },
        requested_by: {
        required: true,
        minlength: 2,
        lettersonly: true
        }
      },
      messages: {
        action: {
        required: ' Please Select An Action...'
        },
        from_location: {
        required: ' Please Select A From Location... '
        },
        to_location: {
        required: ' Please Select A To Location...'
        },
        transport: {
        required: ' Please select A Mode Of Transport...'
        },
        rae: {
        required: ' Please Enter A RAE Number...',
        integer: ' Please Check The RAE Number...'
        },
        infectionRisk: {
          required: ' Please Choose yes Or NO...'
        },
        breachTime: {
          required: ' Please Enter A Breach time...'
        },
        requested_by: {
          required: ' Please Enter Your Name...'
        }
      },
      highlight: function(element, error) {
      $(element).closest('.control-group').removeClass('success').addClass('error');
      },
      unhighlight: function(element, error) {
      $(element).closest('.control-group').removeClass('error').addClass('success');
      },
      success: function(element, error) {
      $(element).closest('.control-group').addClass('valid');
      },
      errorPlacement: function(error, element) {
      error.appendTo( element.parent("td").next("td") );
      },
			// JQuery's awesome submit handler.
			submitHandler: function(form) {
        var that = $('form[class=mannual-request-form]'),
            data = {};

        that.find('[name]').each(function(index, value) {
          var that = $(this),
              name = that.attr('name'),
              value = that.val();
              data[name] = value;
        });

        $.ajax({
            url: 'index.php/requestform/jobs',
            type: 'POST',
            data: data,
            success:function(data){

                $("#message").html(data);
                $("#outer-logo-container").removeClass("outer-logo-container-closed")
                .addClass("outer-logo-container-open").delay(5500).queue(function(next){
                  $("#outer-logo-container").removeClass("outer-logo-container-open")
                  .addClass("outer-logo-container-closed");
                  next();
                  $(this).fetch_data();
                  $(this).portlet();
                });
            }
        });
			}
		});
	});
};

$(function(){

});
