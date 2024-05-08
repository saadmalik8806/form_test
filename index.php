<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
  $full_name = $_POST['full_name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact_form (full_name, number, email, subject, message)
  VALUES ('$full_name', '$number', '$email', '$subject', '$message')";

  if ($conn->query($sql) === TRUE) {
      // echo "";
      ?>
<script>
  alert("Thank You!");
</script>

      <?php
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form with php</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form-style-5">
    <form action="" method="POST">
      <fieldset>
        <input type="text" name="full_name" placeholder="Your Full Name *">
        <input type="Number" name="number" placeholder="Your Phone Number *">
        <input type="email" name="email" placeholder="Your Email *">
        <input type="text" name="subject" placeholder="Subject *">
        <textarea name="message" placeholder="Type Your Message"></textarea>
      </fieldset>
      
      <input type="submit" name="submit" value="Apply" />
    </form>
  </div>


</body>

</html>