// Activate Google Prettify for pretty-printing code
jQuery(document).ready(function(){
  
  jQuery(".editEx").each(function(){
    jQuery(this).editExercice();
  });

  jQuery("#start-html-summary").click(function(){
    bootstro.start(".tourinspect",{
      nextButton: '<button class="btn btn-primary btn-mini bootstro-next-btn">Próximo <i class="icon-arrow-right"></i></button>',
      prevButton: '<button class="btn btn-primary btn-mini bootstro-prev-btn">Anterior <i class="icon-arrow-left"></i></button>',
      finishButton: '<button class="btn btn-mini btn-success bootstro-finish-btn">Entendi tudo! =]</button>',
      stopOnBackdropClick: false,
      stopOnEsc: false
    });
  });  
});
