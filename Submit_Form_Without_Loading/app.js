
//SENDING DATA BY AJAX
$(document).ready(function(){
	$('#Send_btn').click(function(e){
	   e.preventDefault(); 
	   var email = $('input[name=email]').val();
	   var name = $('input[name=name]').val(); 
	   if(email=='')
	   {
			$('#messages').html('<p style="color:red;">Email id Required! </p>'); 
			
			setTimeout(function()
			{
				$('#messages').html('');
			  
			},1000); 
	   }
	   else
	   {  
	   /* Submit form data using ajax*/
	  
	   $.ajax({ url: "backend.php", method: 'post', data: $('#registration_form').serialize(),
	   
	   beforeSend : function(){
		$('#messages').html('<br><span class="spinner-border fast"  style="width: 2rem; height: 2rem;color:green;"  role="status"></span>');
	  },
	 
	   success: function(Response)
	   { 
		   	 
					$('#messages').html(Response)
					$("#registration_form")[0].reset();
			 
				setTimeout(function()
				{
					$('#messages').html('');
				  
				},20000); 
		  }
		 
					
				  
		  
	   });
	}
	    
	   
	});
});