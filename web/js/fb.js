/* подключение библиотек Facebook */

    window.fbAsyncInit = function() {
      // init the FB JS SDK
      FB.init({
        appId      : '430171637047688', // App ID from the App Dashboard
        status     : true, // check the login status upon init?
        cookie     : true, // set sessions cookies to allow your server to access the session?
        xfbml      : true  // parse XFBML tags on this page?
      });

      // Additional initialization code such as adding Event Listeners goes here
      FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            $('#token').val(response.authResponse.userID);
            $('#token').val( response.authResponse.accessToken);
            $('#forward').submit();
        } 
     },true);

    };

    // Load the SDK's source Asynchronously
    (function(d, debug) {
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
       ref.parentNode.insertBefore(js, ref);
     } (document, /*debug*/ true));