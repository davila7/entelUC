$(function() {
    $(".subcat").on('click', function(){
        id = $(this).attr('data-id');
		$.ajax({ 
		    type: 'GET', 
		    url: $('#base_url').val()+'/getOptions/'+id,
		    dataType: 'json',
		    success: function (data) {
				$('.msg').html('');
				$('.info').remove();
				div_options = $('#div_options').clone();
				div_options.find('.btn_options').removeClass('hide');
				div_options.find('.btn_options').addClass('info');
				div_options.attr('id','');
		        $.each(data, function(index, element) {
					url = $('#base_url').val()+'/img/icons/'+element.icon;
					div_options.find('.img_options').attr('src',url);
					div_options.find('.btn_options').attr('data-id',element.id);
					div_options.find('.text_options').html('<br>'+element.name);
					$('#hide_opt').after( div_options.html() );
		        });
		    }
		});        
	});
	
	$(document).on("click", ".btn_options", function() {	
        id = $(this).attr('data-id');
		$.ajax({ 
		    type: 'GET', 
		    url: $('#base_url').val()+'/getImage/'+id,
		    dataType: 'json',
		    success: function (data) {
				url = $('#base_url').val()+'/uploads/options/'+data;
				$('#data_image').attr('src',url);
		    }
		});        
	});

	$(document).on('click', '.option-step1', function(){
		var val = $(this).attr('data-id');
		var btn = $(this)
		var id_user = 0;
		if($('#id_user').val() != ' 0 '){
			id_user = $('#id_user').val();
			$.ajax({ 
		    type: 'GET', 
		    url: $('#base_url').val()+'/step_one/'+val+'/'+id_user,
		    dataType: 'json',
		    success: function (data) {
		    	$('.option-step1').removeClass('btn-success').addClass('btn-default');
				btn.removeClass('btn-default').addClass('btn-success');
				$('#step-one').click();
		    }
			});
		}else{
			alert('Debe iniciar sesión para guardar los datos.');
			$('#step-one').click();
		}
		
	});

	$(document).on('click', '.option-step2', function(){
		var val = $(this).attr('data-id');
		var btn = $(this)
		var id_user = 0;
		if($('#id_user').val() != ' 0 '){
			id_user = $('#id_user').val();
			$.ajax({ 
		    type: 'GET', 
		    url: $('#base_url').val()+'/step_two/'+val+'/'+id_user,
		    dataType: 'json',
		    success: function (data) {
		    	$('.option-step2').removeClass('btn-success').addClass('btn-default');
				btn.removeClass('btn-default').addClass('btn-success');
				$('#step-one').click();
		    }
			});
		}else{
			alert('Debe iniciar sesión para guardar los datos.');
			$('#step-one').click();
		}
		
	});

	$(document).on('click', '.option-step2', function(){
		$('#step-two').click();
	});
});