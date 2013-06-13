<html>
<head>
  <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Welcome to P-Club</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />
 <link rel="stylesheet" href="css/index.css" />
  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/app.css" />

  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script>

</head>
<div class="row" id="b1">
  <div class="large-6 columns">Pclub</div>

  <div class="large-5 large-offset-1 columns"><a href="#" data-reveal-id="myModal">Login</a></div>

</div>
<div id="sticky-anchor"></div>
<div id="sticky">
<ul class="button-group radius even-6">
  <li><a href="#" class="button success ">Tutorial</a></li>
  <li><a href="#" class="button success  ">Projects</a></li>
  <li><a href="#" class="button success ">Achivements</a></li>
  <li><a href="#" class="button success ">Contact</a></li>
  <li><a href="#" class="button success ">Forum</a></li>
  <li><a href="#" class="button success ">Online Judge</a></li>
</ul>

</div>
<div style="width:70%;">
<ul data-orbit>
  <li>
<img src="img/i1.jpg">
    <div class="orbit-caption">ACM ICPC</div>
  </li>
  <li>
<img src="img/i2.jpg">
    <div class="orbit-caption">Microsoft Appathone</div>
  </li>
  <li>
<img src="img/i3.jpg">
    <div class="orbit-caption">Lectures</div>
  </li>
    <li>
<img src="img/i4.jpg">
    <div class="orbit-caption">Imagine Cup</div>
  </li>
</ul>
</div>

<div class="row">
  <div class="small-6 large-2 columns"><b>Events</b><br><hr>
    <div class="panel callout radius">

Up comming events
</div>
  </div>
  <div class="small-6 large-7 columns">
    P-Club is one of the oldest club of IIT Kanpur. It is run by students of <b>IIT Kanpur</b>. It is responsible for various activities of Programming held in campus and also develope programming culture in the campus.
  </div>
  <div class="small-12 large-3 columns">Rank of Online judge
  </div>
</div>


<hr>







<div id="t">This is test</div>

<div id="myModal" class="reveal-modal">
<form>
  <fieldset>
    <legend>Login to continue</legend>

    <div class="row">
      <div class="large-6 columns">
        <label>Login Id</label>
        <input type="text" placeholder="Enter login Id">
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
        <label>Password</label>
        <input type="password" placeholder="Enter your password">
      </div>
    </div>
    <button>Login</button>
  </fieldset>
</form>
  <a class="close-reveal-modal">&#215;</a>
</div>







 <script type="text/javascript">
jQuery(document).ready(function(){
   $("#t").click(function(event){
     $("#t").text("robbin");
   });
});



function sticky_relocate() {
  var window_top = $(window).scrollTop();
  var div_top = $('#sticky-anchor').offset().top;
  if (window_top > div_top) {
    $('#sticky').addClass('stick');
  } else {
    $('#sticky').removeClass('stick');
  }
}

$(function() {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
});
  </script>
   <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
</html>