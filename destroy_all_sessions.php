<!-- On the destroy_all_session.php page do the following:

- Ensure that your page starts with a session_start().
- Write PHP code to destroy the entire user session using session_destory().
- At the bottom of the page place 3 links:
  - A link to the create_session.php page
  - A link to the read_session.php page
  - A link to the destroy_session.php page
  - Go to the create_session.php page to ensure that the session variables are set.
- Go to the read_session.php page to ensure that the variables were in fact destroyed.
- Now click on the link to the destroy_all_session.php to destroy the session.
- Go back to the read page and observe what has happened. -->
<?php 
    session_start();
    session_destroy();
?>

<a href="create_session.php">Create Session</a>
  <br>
  <a href="read_session.php">Read Session</a>
  <br>
  <a href="destroy_session.php">Destroy Sessions</a>