<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

  <h1>Sign Up</h1>

  <form action="action.php" method="post">
    <fieldset>
      <legend>Personal Information</legend>
      <label for='email'>Email:</label><br />
      <input name='email' type='email' placeholder='email' required><br />
      <label for='username'>Username:</label><br />
      <input name='username' type='text' placeholder='username' required><br />
      <label for='password'>Password:</label><br />
      <input name='password' type='password' placeholder='password' required><br />
      <label for='age'>Age:</label><br />
      <select name='age'>
        <?php
          for ($i = 1; $i <= 100; $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
        ?>
      </select>
    </fieldset>

    <fieldset>
      <legend>Gender</legend>
      <input name='gender' id='female' type='radio' value='female'>
      <label for='female'>Female</label>
      <input name='gender' id='male' type='radio' value='male'>
      <label for='male'>Male</label>
    </fieldset>

    <fieldset>
      <legend>Feedback</legend>
      <select name='mood'>
        <option value='happy'>:)</option>
        <option value='neutral'>:|</option>
        <option value='sad'>:(</option>
      </select> <br />
      <textarea rows=5 cols=30></textarea>
    </fieldset>

    <fieldset>
      <legend>Choose your selection</legend>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='submit'>
    </fieldset>
  </form>

<script src="main.js"></script>

</body>
</html>