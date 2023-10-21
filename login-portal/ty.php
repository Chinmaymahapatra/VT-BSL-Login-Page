<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Confirmation Page</title>
  <style>
    /* Same CSS styles as your registration form */
    body {
      background-image: url('plant.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }

    .form-container {
      backdrop-filter: blur(10px);
      width: 600px;
      text-align: center;
      padding: 20px;
      border-radius: 15px;
      font-family: 'Poppins', sans-serif;
      color: white;
      font-size: 16px;
      background-color: rgba(0, 0, 0, 0.6);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      margin-bottom: 20px;
      position: relative;
      border: 1px solid white;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    /* Additional style for the confirmation message */
    .confirmation-message {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* Style for an attractive icon */
    .icon {
      font-size: 80px;
      color: #4CAF50;
      /* Green color */
    }

    /* Style for the application number */
    .application-number {
      position: absolute;
      top: 10px;
      left: 10px;
      color: white;
      font-weight: bold;
      font-size: 18px;
    }

    .logout-button {
      background-color: rgb(199, 38, 38);
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      color: white;
      font-weight: bold;
      position: absolute;
      top: 10px;
      right: 10px;
    }

    .logout-button a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  function generateApplicationNumber()
  {
    // Prefix for the application number (e.g., "100000")
    $prefix = "100000";

    // Generate a random number (you can customize the range as needed)
    $randomNumber = mt_rand(100, 999);

    // Combine the elements to create the application number
    $applicationNumber = $prefix . $randomNumber;

    return $applicationNumber;
  }

  // Example usage:
  $applicationNumber = generateApplicationNumber();
  echo "<div class='application-number'>Application Number: $applicationNumber</div>";

  // Now, you can insert $applicationNumber into the database along with other form data.
  ?>
  <div class="form-container">
    <i class="icon fa fa-check-circle"></i>
    <div class="confirmation-message">
      Congratulations!
      <br>
      Your information has been safely planted in our database.
      <br>
      We'll nurture it with care.
    </div>
  </div>
  <div class="logout-button-container">
    <div class="logout-button">
      <a href="login.php">Logout</a>
    </div>
  </div>
</body>

</html>
