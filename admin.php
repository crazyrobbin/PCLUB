<?php
session_start();

if(!($_SESSION['name']))header('Location:http://localhost/PCLUB/PHP/admin/login.php');
global $name;
$name=$_SESSION['name'];
?>

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

<!--  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->

  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script>


</head>
<body>
<h1 class="subheader">Click on the button to edit or add on the website</h1>
<a href="http://localhost/PCLUB/PHP/admin/logout.php"  class="tiny button">Logout</a>


<div class="section-container auto" data-section>
  <section>
    <p class="title" data-section-title><a href="#panel1">Events</a></p>
    <div class="content" data-section-content>

<ul class="button-group">
  <li><a href="#" class="large button" data-reveal-id="addEvent">Add Events</a></li>
  <li><a href="#" class="large button" data-reveal-id="deleteEvent">Delete Current Events</a></li>
</ul>


    </div>
  </section>
  <section>
    <p class="title" data-section-title><a href="#panel2">Tutorials</a></p>
    <div class="content" data-section-content>


<ul class="button-group">
  <li><a href="#" class="large button" data-reveal-id="addTutorial">Add Tutorial files</a></li>
  <li><a href="#" class="large button" data-reveal-id="deleteTutorial">Delete Tutorials Files Events</a></li>
</ul>
    </div>
  </section>
    <section>
    <p class="title" data-section-title><a href="#panel3">Achievements</a></p>
    <div class="content" data-section-content>
<ul class="button-group">
  <li><a href="#" class="large button" data-reveal-id="addAchievement">Add Achievements</a></li>
  <li><a href="#" class="large button" data-reveal-id="deleteAchievement">Delete Achievements</a></li>
</ul>
    </div>
  </section>
</div>



<div id="addEvent" class="reveal-modal">
  <h2>Add Event</h2>
<form action="http://localhost/PCLUB/PHP/admin/addevent.php" method="POST" name="event" onsubmit="return validateEvent()">
  <fieldset>
    <legend>Event</legend>

    <div class="row">
      <div class="large-7 columns">
        <label>Enter Event Title</label>
        <input type="text" placeholder="Event Title" name="title">
      </div>
    </div>
     <div class="row">
      <div class="large-5 columns">
        <label>Enter Venue</label>
        <input type="text" placeholder="Event Venue" name="venue">
      </div>
      <div class="large-2 columns">
        <label>Enter Date</label>
        <input type="text" placeholder="Event Date" id="date" name="date">
      </div>


      <div class="large-3 columns">
        <label>Enter Month</label>
 <select name="month">
        <option>- Month -</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
</select>
      </div>

  </div>

<input type="submit" value="Add" class="button small">

  </fieldset>
</form>

</div>



<div id="deleteEvent" class="reveal-modal">
  <h2>Delete Event</h2>
  <h3 class="subheader">Do you want to delete current event</h3>
  <form action="http://localhost/PCLUB/PHP/admin/deleteevent.php" method="POST" name="event" onsubmit="return validateTutorial()">
<input type="submit" value="Yes" class="button large">
  <a class="close-reveal-modal">&#215;</a>
<a class="close-reveal-modal large button" style="top:150px;left:200px;width:100px;color:white">No</a>
</form>
  
</div>


<div id="addTutorial" class="reveal-modal">
  <h2 class="subheader">Add Tutorial</h2>
  <form action="http://localhost/PCLUB/PHP/admin/addTutorial.php" method="POST" name="event" onsubmit="return validateTutorial()">
  <fieldset>
    <legend>Tutorial</legend>

    <div class="row">
      <div class="large-7 columns">
        <label>Enter Tutorial Title</label>
        <input type="text" placeholder="Tutorial Title">
      </div>
    </div>
    

<input type="submit" value="Add" class="button small">

  </fieldset>
</form>

    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="deleteTutorial" class="reveal-modal">
  <h2 class="subheader">Tutorials Lists</h2>
<h3 class="subheader">Following are list of tutorials:</h3>
    <a class="close-reveal-modal">&#215;</a>
</div>



<div id="addAchievement" class="reveal-modal">
  <h2 class="subheader">Add Tutorial</h2>
  <form action="http://localhost/PCLUB/PHP/admin/addTutorial.php" method="POST" name="event" onsubmit="return validateTutorial()">
  <fieldset>
    <legend>Tutorial</legend>

    <div class="row">
      <div class="large-7 columns">
        <label>Enter Tutorial Title</label>
        <input type="text" placeholder="Tutorial Title">
      </div>
    </div>
    

<input type="submit" value="Add" class="button small">

  </fieldset>
</form>

    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="deleteAchievement" class="reveal-modal">
  <h2 class="subheader">Achievements Lists</h2>
<h3 class="subheader">Following are list of achievements:</h3>
    <a class="close-reveal-modal">&#215;</a>
</div>
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


</body>

  </html>