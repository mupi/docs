// Create closure.
(function( $ ) {
  jQuery.fn.editExercice = function() {
    // Editor elements
    var exc_edt = this.find(".exercise .editor");
    var ans_edt = this.find(".answer .editor");

    // Render elements
    var exc_rdr = this.find(".exercise .render");
    var ans_rdr = this.find(".answer .render");

    // Answer element
    var answer = this.find(".answer");

    // Button to render exercise
    var exc_rdr_btn = this.find(".exercise .render_btn");
    var show_answer = this.find(".exercise .show-answer-btn");

    // If everything is set
    if(exc_edt && ans_edt && exc_rdr && ans_rdr && exc_rdr_btn){
      // Ace editors
      var ace_exc_edt = cfgAceEditor(exc_edt[0], false);
      var ace_ans_edt = cfgAceEditor(ans_edt[0], true);

      // If editors were successfully rendered
      if(ace_exc_edt && ace_ans_edt){
        // Bind button to render exercise and show the response button
        bind_render(ace_exc_edt, exc_rdr, exc_rdr_btn, show_answer);

        // Bind button to show answer
        bind_show_answer(show_answer, answer);

        // Render answer
        render(ace_ans_edt, ans_rdr);
      }
    }
  };

  var cfgAceEditor = function(editor, readonly){
    var ace_ed = new ace.edit(editor);

    if(ace_ed){
      ace_ed.setTheme("ace/theme/monokai");
      ace_ed.getSession().setMode("ace/mode/html");
      ace_ed.getSession().setTabSize(2);
      ace_ed.getSession().setUseWorker(false);
      ace_ed.setFontSize(18);

      if(readonly){
        ace_ed.setReadOnly(true);
      }
    }
    return ace_ed;
  };

  var render = function(source, target){
    target.html(source.getValue());
  };

  var bind_render = function(source, target, button, show_answer_btn){
    button.on('click', 
              function(){
                  render(source, target);
                  show_answer_btn.show();
                  render_alive();
              });
  };
     
  var render_alive = function(){
      jQuery('.render a').click(
          function(){
              if(jQuery(jQuery(this).attr("href")).length > 0){
                  jQuery(this).fadeOut().fadeIn();
              }
              return false;
          });
  };
     
     
  var bind_show_answer = function(button, element){
      button.on('click', function(){
                    element.show();
                    //                  var toScroll = element.position().top + jQuery(".wizard-content").position().top;
                    //                  jQuery('.wizard-content').animate({scrollTop: toScroll}, 300);
                });
  };
 })( jQuery );


