<style>
  body {
    text-align: center;
    margin-top: 20vh;
  }
  p {
    display: block;
  }
}
</style>

<?php
  $date = date('g:ia jS F Y');
  $username = $_POST['username'];
  $email = $_POST['email'];

  echo "<p>Thank you for joining us.</p>";
  echo "<p>You now have membership! Your membership began at ".$date.".</p>";
  echo "<p>Your free trial membership will last until ";
  echo "<p>Your username is ".htmlspecialchars($username).".</p>";
  echo "<p>A verification email was sent to ".htmlspecialchars($email).".</p>";

  $outputstring = $date."\t Username: ".$username."\t Email: ".$email."\n";
  $fp = fopen("info.txt", 'ab');
  if (!$fp) {
    echo "<p>Sorry, I fucked something up.</p>";
    exit;
  }
  flock($fp, LOCK_EX);
  fwrite($fp, $outputstring, strlen($outputstring));
  flock($fp, LOCK_UN);
  fclose($fp);
  echo "<p>Information saved.</p>";
?>