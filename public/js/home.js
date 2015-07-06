$(function() {

	$(document).on("click", "#sendOrder", function() {	
		email = $('#email_order').val();
		codigo = $('#codigo_order').val();
		address = $('#address_order').val();
        if(email != "" && codigo != "" && address != ""){
			$.ajax({ 
		    	type: 'GET', 
		    	url: $('#base_url').val()+'/sendOrder/'+email+'/'+codigo+'/'+address,
		    	dataType: 'json',
		    	success: function (data) {
		    		$('#form-send').hide();
		    		$('#require_alert').addClass('hide');
		    		$('#success_alert').removeClass('hide');
					$('#success_alert').show();
		    	}
			});  
		}else{
			$('#require_alert').removeClass('hide');
			$('#require_alert').show();
		}     
	});

	$(document).on("click", ".color_opt", function() {	
		id = $(this).attr('data-id');
		$('#image_index3').removeClass('hide');
		image = $(this).attr('data-src');
		url = $('#base_url').val()+'/uploads/options/'+image;
        if($('#id_user').val() != ' 0 '){
			$.ajax({ 
		    	type: 'GET', 
		    	url: $('#base_url').val()+'/getSaveSelection/'+id+'/'+$('#id_user').val(),
		    	dataType: 'json',
		    	success: function (data) {
					$('#image_index2').attr('src',url);
					$('#image_index3').addClass('hide');
		    	}
			});  
		}else{
				$('.login-required').fadeIn('slow');
				setTimeout(function(){ $('.login-required').hide("slow"); }, 4000);
				$('#image_index2').attr('src',url);   
				$('#image_index3').addClass('hide');
		}      
	});

    $(".subcat").on('click', function(){
        id = $(this).attr('data-id');
		$.ajax({ 
		    type: 'GET', 
		    url: $('#base_url').val()+'/getOptions/'+id,
		    dataType: 'json',
		    success: function (data) {
				$('.info').remove();
				div_options = $('#li_color').clone();
				div_options.find('.color_option').removeClass('hide');
				div_options.find('.color_option').addClass('info');
				div_options.attr('id','');
		        $.each(data, function(index, element) {
		        	div_options.find('.color_opt').attr('data-src',element.image);
		        	div_options.find('.color_opt').attr('data-id',element.id);
					div_options.find('.color_opt').attr('style','background-color:'+element.color+';');
					div_options.find('.name_color').text(element.name);
					$('#hide_color').after( div_options.html() );
		        });
		    }
		});        
	});
	
	$(document).on("click", ".btn_options", function() {	
        id = $(this).attr('data-id');
        if($('#id_user').val() != ' 0 '){
			$.ajax({ 
		    	type: 'GET', 
		    	url: $('#base_url').val()+'/getSaveSelection/'+id+'/'+$('#id_user').val(),
		    	dataType: 'json',
		    	success: function (data) {
					url = $('#base_url').val()+'/uploads/options/'+data;
					$('#image').attr('src',url);
		    	}
			});  
		}else{
				$('.login-required').fadeIn('slow');
				setTimeout(function(){ $('.login-required').hide("slow"); }, 4000);
				$.ajax({ 
			    	type: 'GET', 
			    	url: $('#base_url').val()+'/getImage/'+id,
			    	dataType: 'json',
			    	success: function (data) {
						url = $('#base_url').val()+'/uploads/options/'+data;
						$('#data_image').attr('src',url);
			    	}
				});    
		}      
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
		    	switch(val) {
				    case '1':
				        $('#image_index1').attr('src', $('#base_url').val()+'/uploads/step_one/blanco.png');
				        break;
				    case '2':
				        $('#image_index1').attr('src', $('#base_url').val()+'/uploads/step_one/negro.png');
				        break;
				    case '3':
				        $('#image_index1').attr('src', $('#base_url').val()+'/uploads/step_one/dorado.png');
				        break;
				    case '4':
				        $('#image_index1').attr('src', $('#base_url').val()+'/uploads/step_one/plateado.png');
				        break;
				    default:
				        $('#image_index1').attr('src', $('#base_url').val()+'/uploads/step_one/blanco.png');
				}
		    	$('.option-step1').removeClass('btn-success').addClass('btn-default');
				btn.removeClass('btn-default').addClass('btn-success');
				$('#step-one').click();
		    }
			});
		}else{
			$('.login-required').fadeIn('slow');
			setTimeout(function(){ $('.login-required').hide("slow"); }, 4000);
			$('#step-one').click();
		}
		
	});

	$(document).on('click', '.option-step2', function(){
		var val = $(this).attr('data-id');
		var btn = $(this);
		var id_user = 0;
		if($('#id_user').val() != ' 0 '){
			id_user = $('#id_user').val();
			$.ajax({ 
		    type: 'GET', 
		    url: $('#base_url').val()+'/step_two/'+val+'/'+id_user,
		    dataType: 'json',
		    success: function (data) {
		    	switch(val) {
				    case '0':
				        $('#image_index2').attr('src', $('#base_url').val()+'/uploads/options/textura.jpg');
				        $('#cat0').click();
				        break;
				    case '1':
				        $('#image_index2').attr('src', $('#base_url').val()+'/uploads/options/lisa.jpeg');
				        $('#cat1').click();
				        break;
				    case '2':
				        $('#image_index2').attr('src', $('#base_url').val()+'/uploads/options/calado.jpg');
				        $('#cat2').click();
				        break;
				    default:
				        $('#image_index2').attr('src', $('#base_url').val()+'/uploads/step_one/lisa.jpeg');
				        $('#cat0').click();
				}
		    	$('.option-step2').removeClass('btn-success').addClass('btn-default');
				btn.removeClass('btn-default').addClass('btn-success');
				$('#step-two').click();
		    }
			});
		}else{
			$('.login-required').fadeIn('slow');
			setTimeout(function(){ $('.login-required').hide("slow"); }, 4000);
			$('#step-two').click();
		}
	});
});