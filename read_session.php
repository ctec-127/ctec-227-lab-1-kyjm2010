<!-- On the read_session.php page do the following:

- Ensure that your page starts with a session_start()
- Create PHP code to read and display the session variables.
- At the bottom of the page place 3 links:
  - A link to the create_session.php page
  - A link to the destroy_session.php page
  - A link to the destroy_all_session.php page
- Test that the session variables are being set by going back to the create_session.php page and reloading it a couple of times.
- Then go back to the read_session.php page to ensure that they are being updated. -->

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