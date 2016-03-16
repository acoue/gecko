$(document).ready(function(){
	
	$('.colorTexte').each( function() {
        
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            defaultValue: $(this).attr('data-defaultValue') || '',
            format: $(this).attr('data-format') || 'hex',
            keywords: $(this).attr('data-keywords') || '',
            inline: $(this).attr('data-inline') === 'true',
            letterCase: $(this).attr('data-letterCase') || 'lowercase',
            opacity: $(this).attr('data-opacity'),
            position: $(this).attr('data-position') || 'bottom left',
            change: function(value, opacity) {
                if( !value ) return;
                if( opacity ) value += ', ' + opacity;
                if( typeof console === 'object' ) {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
	
	
	
	/* Formulaire Engagement */
	$( "#date_engagement" ).datepicker();
    //Validation des formulaires
    $.validate({
        form : '#Inscription_form'
    });
    $.validate({
        form : '#add_inscription_form'
    });
    
	
	/*
	 * Test du mot de passe
	 * */
	$('#pass1, #pass2').on('keyup', function(e) {
		
	     if($('#pass1').val() != '' && $('#pass2').val() != '' && $('#pass1').val() != $('#pass2').val()) {
	    	 $('#messagePwdDifferent').removeClass().addClass('alert alert-danger').html('Les 2 valeurs ne correspondent pas ! ');
	    	 return false;
	     }
	     // Must have capital letter, numbers and lowercase letters
	     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");

	     // Must have either capitals and lowercase letters or lowercase and numbers
	     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	     if (strongRegex.test($(this).val())) {
            // If reg ex matches strong password
            $('#messagePwd').removeClass().addClass('alert alert-mdp-success').html('');
	     } else if (mediumRegex.test($(this).val())) {
            // If medium password matches the reg ex
            $('#messagePwd').removeClass().addClass('alert alert-mdp-warning').html('');
	     } else {
            // If password is ok
            $('#messagePwd').removeClass().addClass('alert alert-mdp-danger').html('');
	     }
        
	     return true;
	});
	
	$('#password').on('keyup', function(e) {		
	     
	     // Must have capital letter, numbers and lowercase letters
	     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	     // Must have either capitals and lowercase letters or lowercase and numbers
	     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	     if (strongRegex.test($(this).val())) {
           // If reg ex matches strong password
           $('#messagePwd').removeClass().addClass('alert alert-mdp-success').html('');
	     } else if (mediumRegex.test($(this).val())) {
           // If medium password matches the reg ex
           $('#messagePwd').removeClass().addClass('alert alert-mdp-warning').html('');
	     } else {
           // If password is ok
           $('#messagePwd').removeClass().addClass('alert alert-mdp-danger').html('');
	     }
       
	     return true;
	});


});





/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood{at}iinet.com.au),
			  StÃ©phane Nahmani (sholby@sholby.net),
			  StÃ©phane Raimbault <stephane.raimbault@gmail.com> */
(function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define([ "../jquery.ui.datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
}(function( datepicker ) {
	datepicker.regional['fr'] = {
		closeText: 'Fermer',
		prevText: 'Précédent',
		nextText: 'Suivant',
		currentText: 'Aujourd\'hui',
		monthNames: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin',
			'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
		monthNamesShort: ['janv.', 'fevr.', 'mars', 'avril', 'mai', 'juin',
			'juil.', 'aout', 'sept.', 'oct.', 'nov.', 'dec.'],
		dayNames: ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'],
		dayNamesShort: ['dim.', 'lun.', 'mar.', 'mer.', 'jeu.', 'ven.', 'sam.'],
		dayNamesMin: ['D','L','M','M','J','V','S'],
		weekHeader: 'Sem.',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	datepicker.setDefaults(datepicker.regional['fr']);

	return datepicker.regional['fr'];

}));