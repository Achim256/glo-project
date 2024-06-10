<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
</head>
<body>
<form action="register.php" method="post" onsubmit="return validateForm()">
  <h1>Registration Form</h1>

  <div class="form-group">
    <label for="Names">Names:</label>
    <input type="text" class="form-control" name="Names" placeholder="Enter your Full names" id="Names" required><br><br>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email address" id="email" required><br><br>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password" id="password" required minlength="8"><br><br>
  </div>

  <button> submit</button><br><br>
</form>

<script>
function validateForm() {
  // Add your validation logic here
  // Example: Check email format with a regular expression
  var email = document.getElementById('email').value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Invalid email format!");
    return false;
  }
  // You can add similar checks for password strength, name format, etc.
  return true;
}
</script>
</body>
</html>