$.fn.fetch_data_base = function () {
		$.ajax({
				url: 'index.php/base/get_jobs_operations',
				type: 'POST',
				success:function(data){
					$('.column').html(data);
				}
		});
}

$(function(){
  $(this).fetch_data_base();
});
