$(document).ready(function(e){
	$('#submit-btn').click(function(){
		var name = $('#inputName').val();
		var email = $('#inputEmail').val();
		var gender = $('#inputGender').val();
		var comm = $('#inputComm').val();
		var password = $('#inputPassword').val();

		$.ajax({
			type 	:'POST',
			data 	:(name:name, email:email, gender:gender, comm:comm, password:password),
			url 	:"insert.php", 									//php file where data is processed
			success	: function(res){
				alert(res);
			}
		})

	})
})