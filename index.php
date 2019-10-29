<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login/login.php");
  }
//  include("js/notes.php")

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shoelace-css/1.0.0-beta16/shoelace.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>(<a href="index.php?logout='1'" style="color: red;">logout</a> )</p>
		
        <div class="container">

            <h1>Voice Controlled Notes</h1>
            <p class="page-description">A tiny app that allows you to take notes by recording your voice</p>

            <h3 class="no-browser-support">Sorry, Your Browser Doesn't Support the Web Speech API. Try Opening This Demo In Google Chrome.</h3>

            <div class="app"> 
                <h3>Add New Note</h3>
                <div class="input-single">
                    <textarea id="note-textarea" placeholder="Create a new note by typing or using voice recognition." rows="6"></textarea>
                </div>         
                <button id="start-record-btn" title="Start Recording">Start Recognition</button>
                <button id="pause-record-btn" title="Pause Recording">Pause Recognition</button>
				<button id="save-note-btn" type="Submit" title="Save Note">Save Note</button>   
                <p id="recording-instructions">Press the <strong>Start Recognition</strong> button and allow access.</p>
                
                <h3>My Notes</h3>
                <ul id="notes">
                    <li>
                        <p class="no-notes">You don't have any notes.</p>
                    </li>
                </ul>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="js/script.js"></script> 

    <?php endif ?>
</div>
		
</body>
</html>
