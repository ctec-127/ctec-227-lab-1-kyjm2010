<?php 
    session_start();
    echo "<p>" . $_SESSION['views'] . "</p>";
    echo "<p>" . $_SESSION['browser'] . "</p>";
    echo "<p>" . $_SESSION['role'] . "</p>";

?>

<a href="create_session.php">Create Session</a>
  <br>
  <a href="destroy_session.php">Destroy Session</a>
  <br>
  <a href="destroy_all_sessions.php">Destroy All Sessions</a>