
var mixpanel = window.mixpanel;
if(mixpanel){
  mixpanel.name_tag(window.user_info.name);
  mixpanel.people.set_once({ // 1 year cookie
    "$email"   : window.user_info.email,
    "$username": window.user_info.email,
    "$name"    : window.user_info.name,
    "$created" : window.user_info.created,
    "id"       : window.user_info.id
  });
  mixpanel.register_once({ // 1 year cookie
    "Email"   : window.user_info.email,
    "Name"    : window.user_info.name,
    "Created" : window.user_info.created,
    "Id"      : window.user_info.id
  });

  mixpanel.identify(window.user_info.email);
}