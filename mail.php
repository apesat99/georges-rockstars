<?php
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $errorEmpty = false;
  $errorEmail = false;

  if (empty($name) || (empty($email) || (empty($message)) {
    echo "<span class='form-error'>Fill in all fields!</span>"
    $errorEmpty = true;
  }

  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='form-error'>Write a valid email!</span>"
    $errorEmpty = true;
  }

  else {
    "<span class='form-success'>Fill in all fields!</span>"
  }
}

else {
  echo "There was an error"
}
 ?>

<script>

  $("#name", "#email", "#message").removeClass("input-error");

  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";

  if (errorEmpty == true) {
    $("#name", "#email", "#message").addClass("input-error");
  }

  if (errorMail == true) {
    $("#email").addClass("input-error");
  }

  if (errorEmpty == false && errorMail == false) {
    $("#name", "#email", "#message").val("");
  }
</script>
