$(document).ready(
    function() {
	var count = 0;	
	var quizprogress = 0;
	var progress = 0;
	var howmanyquestions = $("#jquiz > li").length;
	
	// $('#jquiz li div.nav a').attr('href', '#'+ $(this).parent()
        // .parent().next().attr('id'));
        
	$('.tabbable li:first-child').addClass('active');

	var $tabs = $('.tabbable li');

	$('#prevtab')
            .on('click', 
                function() {
	            $tabs
                        .filter('.active')
                        .prev('li')
                        .find('a[data-toggle="tab"]')
                        .tab('show');
	        });

	$('#nexttab')
            .on('click', 
                function() {
	            $tabs
                        .filter('.active')
                        .next('li')
                        .find('a[data-toggle="tab"]')
                        .tab('show');
	        });
	// the function for a clicked item

        $("#jquiz li ul > li")
            .click(
                function(){	
		    if(!($(this).parent("ul").hasClass("answered"))) {
			// removes unanswered class and adds 
                        // answered class so they cannot change answer
			$(this).parent("ul").addClass("answered");
			
			// runs if they clicked the incorrect answer
			if(!($(this).hasClass("correct"))) {
			    // puts strike-through wrong answer 
                            // and makes their answer red for incorrect
			    $(this).addClass("wronganswer");
			    $(this)
                                .siblings(".correct")
                                .addClass("realanswer");
			    // animate explanation & add styling depending on
                            // answer 
			    $(this)
                                .parent()
                                .parent()
                                .children("div.explanation")
                                .prepend('<p>Errado :(</p>');
			    $(this)
                                .parent()
                                .parent()
                                .children("div.explanation")
                                .addClass("wrongbox");
			    $(this)
                                .parent()
                                .parent()
                                .children("div.explanation")
                                .fadeTo(500, 1);
			}
			
			// runs if they clicked the correct answer
			if($(this).hasClass("correct")) {
			    //adds one to quiz total correct tally
			    count++;
			    // makes correct answer green
			    $(this).addClass("correctanswer");
			    // animate explanation & add styling depending on
                            // answer 
			    $(this)
                                .parent()
                                .parent()
                                .children("div.explanation")
                                .prepend('<p>Yey, tá certo!</p>');
			    $(this)
                                .parent()
                                .parent()
                                .children("div.explanation")
                                .addClass("rightbox");
			    $(this)
                                .parent()
                                .parent()
                                .children("div.explanation")
                                .fadeTo(750, 1);
			}

			progress = $('ul.answered').length;
			quizprogress = Math
                            .round((progress * 100) / howmanyquestions);
			
			$("#quiz-total")
                            .css('width',quizprogress+'%')
                            .html(progress+'/'+howmanyquestions);
                        
			if ($('ul.answered').length == howmanyquestions) {
			    $('#jquizremarks').fadeIn('slow');
			    $('#jquiztotal').html('Você acertou ' + count + 
                                                  'de ' + howmanyquestions + 
                                                  'questões.');
			}
		    }
	        });
    });