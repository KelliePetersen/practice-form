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

<div class="header">
  <h1>Sign Up</h1>
  <label for="search">Not what you're looking for? Search the website:</label>
  <input type="search" name="search">
  <input type="submit" name="searchbutton" value="Search">
  <hr>
</div>


  <form action="action.php" method="post" class="form">
    <fieldset>
      <legend>Personal Information</legend>
      <label for='username'>Username:</label><br />
      <input name='username' id="username" type='text' placeholder='username' maxlength="22" required autofocus><br />
      <label for='password'>Password:</label><br />
      <input name='password' id="password" type='password' placeholder='password' maxlength="16" required><br />
      <label for='email'>Email:</label><br />
      <input name='email' id="email" type='email' placeholder='email' required><br />
      <label for="phone">Phone Number:</label><br />
      <input type="tel" placeholder="phone number"><br />
      <label for="bday">Birthday:</label><br />
      <input type="date" name="bday"><br />
      <label for="birthday">Date of Birth:</label><br />
      <input type="number" name="day" min="1" max="31" placeholder="1">
      <input type="number" name="month" min="1" max="12" placeholder="1">
      <input type="number" name="year" min="1900" max="2018" placeholder="2000"><br />
      <label for='phpbirthday'>PHP Date of Birth:</label><br />
      <select name="phpday" id="phpday">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
        ?>
      </select>
      <select name="phpmonth" id="phpmonth">
        <?php
          for ($i = 1; $i <= 12; $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
        ?>
      </select>
      <select name="phpyear" id="phpyear">
        <?php
          for ($i = 1900; $i < date("Y"); $i++) {
            echo "<option value=".$i.">".$i."</option>";
          }
          echo "<option value=".date("Y")." selected>".date("Y")."</option>";
        ?>
      </select>
    </fieldset>

    <fieldset>
      <legend>Country</legend>
      <label for="countrycode">Country code:</label>
      <input type="text" name="countrycode" pattern="[A-Za-z]{3}" title="Three letter country code">
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
      <legend>Dates</legend>
      <label for="past">Enter a date before the year 2000:</label><br />
      <input type="date" name="past" max="1999-12-31"><br />
      <label for="present">Enter a date after the year 2010:</label><br />
      <input type="date" name="present" min="2010-01-02"><br />
    </fieldset>

    <fieldset>
      <legend>Uploads</legend>
      <input type="file" name="file" multiple>
    </fieldset>

    <fieldset>
      <legend>Feedback</legend>
      <select name='mood'>
        <option value='happy'>:)</option>
        <option value='neutral'>:|</option>
        <option value='sad'>:(</option>
      </select> <br />
      <textarea name="message" rows=6 cols=50>Let us know what you think.</textarea><br />
      <label for="recommend">How likely are you to recommend us?</label><br />
      <input type="range" name="recommend" min="0" max="5">
    </fieldset>

    <fieldset>
      <legend>Interests</legend>
      <input type='checkbox' checked>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'>
      <input type='checkbox'><br />
      <label for="color">Favorite Color:</label><br />
      <input type="color" name="color">
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
    <input type="reset" id="reset" value="RESET">
  </form>

<script src="main.js"></script>

</body>
</html>