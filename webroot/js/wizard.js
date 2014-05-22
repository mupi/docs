/*
 * TODO: Create a real plugin
 */

jQuery(document).ready(function(){
  if(window.location.hash)
    changePane(jQuery("#lesson-steps > .steps > li[data-target='"+window.location.hash+"']"));
  else{
    changePane(jQuery("#lesson-steps > .steps > li:first"));
  }
});

jQuery(".wizard-content .step-pane a[href^='#'].link-step").click(function(e){
  e.preventDefault();
  changePane(jQuery("#lesson-steps > .steps > li[data-target='"+jQuery(this).attr("href")+"']"));
});

jQuery("#lesson-steps > .steps > li").not(".active").click(function(e){
  e.preventDefault();
  changePane(jQuery(this));
});

var activate = function(e) {
  e.addClass("active").removeClass("past");
  window.location.hash = e.attr("data-target");
};

var deactivate = function(e) {
  e.removeClass("active");
};

var activateUntil = function(el) {
  el.children("span.badge").addClass("badge-success");
  el.nextAll("li, .chevron").removeClass("active past");
  el.prevAll("li, .chevron").removeClass("active past");
  el.prevAll("li, .chevron").addClass("past");
  el.prevAll("li").children("span.badge").addClass("badge-success");
  el.nextAll("li").children("span.badge").removeClass("badge-success");
  activate(el);
};

var changePane = function(el){
  activateUntil(el);
  showPane(el);
};

var showPane = function(el) {
  var step = el.attr("data-target");

  // Track topic access for mixpanel
  if(window.mixpanel) mp_trackLessonClick();

  jQuery(".step-pane").removeClass("active");
  jQuery(step).addClass("active");
  // jQuery(".wizard-content").mCustomScrollbar("scrollTo","top");


};

