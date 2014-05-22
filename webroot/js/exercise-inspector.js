jQuery(document).ready(function() {
  var highlight = function(evt){
    var elements;
    if (document.all) { // IE
      element = evt.OriginalTarget;
    } else{ // not IE
      element = evt.target;
    }    
    // set the border around the element
    // element.style.borderWidth = '1px';  
    // element.style.borderStyle = 'dashed';
    // element.style.borderColor = '#333';
    element.style.background = 'rgba(120,120,120,0.6)';

    // showCode(evt);
  }


  var unHighlight = function(evt){
    jQuery(evt.target).removeAttr('style');
  }

  // FIXME
  var showCode = function(evt){
    var selection = jQuery(evt.target.outerHTML).removeAttr("style")[0].outerHTML;
    var encoded = $("<div/>").text(selection).html();

    jQuery(evt.target)
      .closest(".inspector-container").find(".code-clicked")
      .html(prettyPrintOne(encoded, null, false));
    return false;
  }

   jQuery(".toinspect > *").on("mouseover", highlight);
   jQuery(".toinspect > *").on("mouseout", unHighlight);   
   jQuery(".toinspect > *").on("click", showCode);


  jQuery(".toinspect > *").each(function(){
    var html = $("<div/>").append(jQuery(this).clone()).html();
    var encoded = $("<div/>").text(html).html();
    jQuery(".code").html(prettyPrintOne(encoded, null, true));
  });
});

