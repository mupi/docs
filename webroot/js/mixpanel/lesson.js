// Setting  mixpanel variable
var mixpanel = window.mixpanel;

if(mixpanel){
  var mp_trackLessonClick = function(){
    mixpanel.identify(window.user_info.email);
    mixpanel.track(
      "Accessed lesson content",
      {
        "course": window.course,
        "lesson": window.lesson,
        "topic" : window.location.hash
      }
    );
  }
}