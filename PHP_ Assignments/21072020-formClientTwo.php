<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style type="text/css">
      body {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: bold;
      }

      h2 {
        text-align: center;
        padding: 0;
      }

      table {
        margin: auto;
        margin-top: 20px;
        border: 2px solid blue;
      }

      td {
        padding-right: 25px;
        padding-bottom: 15px;
      }

      textarea {
        resize: none;
      }
    </style>
  </head>
  <body>
    <h2>Registration Form</h2>
    <form class="" action="21072020-formServerTwo.php" method="post">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
          <td>Fees</td>
          <td><input type="text" name="fees" value="15220" readonly></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" value=""></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="confirmPassword" value=""></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
          </td>
        </tr>
        <tr>
          <td>Country</td>
          <td>
            <select class="" name="country">
              <option value="India">India</option>
              <option value="Bhutan">Bhutan</option>
              <option value="China">China</option>
              <option value="Nepal">Nepal</option>
              <option value="Pakistan">Pakistan</option>
              <option value="Russia">Russia</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Syria">Syria</option>
              <option value="Iran">Iran</option>
              <option value="Iraq">Iraq</option>
              <option value="US">US</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Qualification</td>
          <td>
            <input type="checkbox" name="qualification[]" value="10th">10th
            <input type="checkbox" name="qualification[]" value="12th">12th
            <input type="checkbox" name="qualification[]" value="other">Others
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="address" rows="8" cols="22"></textarea></td>
        </tr>
        <tr>
          <td><input type="submit" name="register" value="Register"></td>
          <td><input type="reset" name="cancel" value="Cancel"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
