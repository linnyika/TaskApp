<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Form</title>
</head>
<body style="font-family: Arial, sans-serif; background: lightblue; margin: 0; padding: 0;">

  <div style="max-width: 360px; margin: 80px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 10px darkblue;">
    <h2 style="text-align: center; color: navy; margin-bottom: 20px;">Sign Up</h2>

    <form action="plugins/PHPMailer/mail.php" method="post">
      
      <label for="name" style="display: block; margin-bottom: 6px; color: darkslateblue; font-weight: bold;">Name</label>
      <input type="text" id="name" name="name" required 
             style="width: 100%; padding: 10px; border: 1px solid steelblue; border-radius: 5px; margin-bottom: 18px;">

      <label for="email" style="display: block; margin-bottom: 6px; color: darkslateblue; font-weight: bold;">Email</label>
      <input type="email" id="email" name="email" required 
             style="width: 100%; padding: 10px; border: 1px solid steelblue; border-radius: 5px; margin-bottom: 22px;">

      <button type="submit" 
              style="width: 100%; padding: 12px; background: dodgerblue; border: none; border-radius: 5px; color: white; font-size: 16px; cursor: pointer;">
        Sign Up
      </button>

    </form>
  </div>

</body>
</html>
