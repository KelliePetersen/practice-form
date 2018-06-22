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
      <input name='email' id="email" type='email' placeholder='email' required><br />
      <label for='username'>Username:</label><br />
      <input name='username' id="username" type='text' placeholder='username' required><br />
      <label for='password'>Password:</label><br />
      <input name='password' id="password" type='password' placeholder='password' required><br />
      <label for='birthday'>Date of Birth:</label><br />
      <select name="day" id="day">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
        ?>
      </select>
      <select name="month" id="month">
        <?php
          for ($i = 1; $i <= 12; $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
        ?>
      </select>
      <select name="year" id="year">
        <?php
          for ($i = 1900; $i < date("Y"); $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
          echo "<option value=".date("Y")." selected>".date("Y")."</option>";
        ?>
      </select>
    </fieldset>

    <fieldset>
      <legend>Gender</legend>
      <input name='gender' id='female' type='radio' value='female'>
      <label for='female'>Female</label>
      <input name='gender' id='male' type='radio' value='male'>
      <label for='male'>Male</label>
      <input name='gender' id='other' type='radio' value='other'>
      <label for='other'>Other</label>
    </fieldset>

    <fieldset>
      <legend>Feedback</legend>
      <select name='mood'>
        <option value='happy'>:)</option>
        <option value='neutral'>:|</option>
        <option value='sad'>:(</option>
      </select> <br />
      <textarea name="message" rows=6 cols=50>Let us know what you think.</textarea>
    </fieldset>

    <fieldset>
      <legend>Interests</legend>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
    </fieldset>

  <fieldset>
    <legend>Browser</legend>
    <input list="browsers" name="browser">
    <datalist id="browsers">
      <option value="Internet Explorer">
      <option value="Firefox">
      <option value="Chrome">
      <option value="Opera">
      <option value="Safari">
    </datalist>
  </fieldset>
  
  <fieldset>
    <legend>Confirmation</legend>
    <select name="confirmation" id="confirmation" size="3" multiple>
      <option value="email">Email</option>
      <option value="print">Print</option>
      <option value="sms">SMS</option>
    </select>
  </fieldset>

  <input type='submit' value="Apply">
  </form>

<script src="main.js"></script>

</body>
</html>