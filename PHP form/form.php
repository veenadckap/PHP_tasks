<!DOCTYPE html>
<head>
<title>Registration Form</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="main_container">
      <div class="container">
        <div class="title">Registration</div>
        <div class="content">
        <form action="" name="register" method="post" onsubmit="return validateForm()">
          <div class="user-details">
            <div class="input-box">
              <span class="details">First Name</span>
              <input type="text" placeholder="Enter your name" id="first_name" name="first_name" >
            </div>
            <div class="input-box">
              <span class="details">Last Name</span>
              <input type="text" placeholder="Enter your last name" id="last_name" name="last_name" >
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="email" placeholder="Enter your email" id="email" name="email" >
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="tel" placeholder="Enter your phone number" id="phone_number" name="phone_number" >
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" placeholder="Enter your password" id="password" name="password" >
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="password" placeholder="Confirm your password" id="confirm_password" name="confirm_password" >
            </div>
            <div class="input-box">
              <span class="details">Address</span>
              <textarea placeholder="Enter your address" cols="46" rows="5" id="address" name="address"></textarea>
            </div>
            <div class="input-box">
              <span class="details">DOB</span>
              <input type="date" id="dob" name="dob" >
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register">
           
                      </div>
        </form>
        <div class="display">
           <a href="display.php"><button>Show data</button></a> 
        </div>
      </div>
    </div>
  </div> 

  <script>
    function validateForm() {
      var firstName = document.getElementById("first_name").value;
      var lastName = document.getElementById("last_name").value;
      var email = document.getElementById("email").value;
      var phoneNumber = document.getElementById("phone_number").value;
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirm_password").value;
      var address = document.getElementById("address").value;
      var dob = document.getElementById("dob").value;

      if (firstName.trim() === "") {
          alert("First name is not filled");
          return false;
      }
      if (lastName.trim() === "") {
          alert("Last name is not filled");
          return false;
      }
      if (email.trim() === "") {
          alert("Email is not filled");
          return false;
      }
      if (phoneNumber.trim() === "") {
          alert("Phone number is not filled");
          return false;
      }
      if (password.trim() === "") {
          alert("Password is not filled");
          return false;
      }
      if (confirmPassword.trim() === "") {
          alert("Confirm password is not filled");
          return false;
      }
      if (address.trim() === "") {
          alert("Address is not filled");
          return false;
      }
      if (dob.trim() === "") {
          alert("Date of birth is not filled");
          return false;
      }
      if (password !== confirmPassword) {
          alert("Passwords do not match");
          return false;
      }

      return true;
      location.href='display.php';
    }
    
  </script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    // Validate first name
    $first_name = $_POST['first_name'];
    if (empty($first_name)) {
        $errors[] = "First name is required";
    }

    // Validate last name
    $last_name = $_POST['last_name'];
    if (empty($last_name)) {
        $errors[] = "Last name is required";
    }

    // Validate email
    $email = $_POST['email'];
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validate phone number
    $phone = $_POST['phone_number'];
    if (empty($phone)) {
        $errors[] = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Invalid phone number format";
    }

    // Validate password
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (empty($password) || empty($confirm_password)) {
        $errors[] = "Password and confirm password are required";
    } elseif ($password != $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    // Validate address
    $address = $_POST['address'];
    if (empty($address)) {
        $errors[] = "Address is required";
    }

    // Validate date of birth
    $dob = $_POST['dob'];
    if (empty($dob)) {
        $errors[] = "Date of birth is required";
    }

    if (empty($errors)) {
              $servername = "localhost";
        $username = "dckap";
        $password = "Dckap2023Ecommerce";
        $dbname = 'register_form';

      
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

     
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone_number'];
        $pass = $_POST['password'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];

        $insert_query = "INSERT INTO user_details (firstname, lastname, email, phone_number, user_password, user_address, DOB) 
                        VALUES ('$first_name', '$last_name', '$email', '$phone', '$pass', '$address', '$dob')";

        if ($conn->query($insert_query) === TRUE) {
          
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }

        $conn->close();
        
    } else {
      
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
}

?>

</body>
</html>
