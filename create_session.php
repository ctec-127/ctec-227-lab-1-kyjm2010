<?php 
    session_start();
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['role'] = 'Admin';

    if(isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views'] + 1;
        echo "<p>" . $_SESSION['views'] . "</p>";
        echo "<p>" . $_SESSION['browser'] . "</p>";
        echo "<p>" . $_SESSION['role'] . "</p>";
    } else {
        $_SESSION['views'] = 0;
    }

   


?>
  <a href="read_session.php">Read Session</a>
  <br>
  <a href="destroy_session.php">Destroy Session</a>
  <br>
  <a href="destroy_all_sessions.php">Destroy All Sessions</a>