$(function(){
	$('.mycomand').on('submit', function(e) {
		e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
		var $this = $(this);
		var text = $('#input').val();

		if(text === '') {
			alert('Les champs doivent êtres remplis');
		} else {
			$.ajax({
				url: $this.attr('action'),
				type: $this.attr('method'),
				data: $this.serialize(),
				dataType: 'json', // JSON
				success: function(json) {
					/* if(json.reponse === 'ok') {
						alert('Tout est bon');
					} else {
						alert('Erreur : '+ json.reponse);
					} */


					$('.res').html(json.reponse);


				}
			});
		}
	});
});