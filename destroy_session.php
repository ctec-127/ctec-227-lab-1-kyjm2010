<?php 
    session_start();
    unset($_SESSION['views']);
    unset($_SESSION['browser']);
    unset($_SESSION['role']);
?>

<a href="create_session.php">Create Session</a>
  <br>
  <a href="read_session.php">Read Session</a>
  <br>
  <a href="destroy_all_sessions.php">Destroy All Sessions</a>
