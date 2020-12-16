 <?php
    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['Name']  = ($_POST['Name']);
        $_SESSION['Email'] = ($_POST['Email']);
        $_SESSION['Password'] = ($_POST['Password']);
    }

    $host = 'localhost';
    $dbname = 'login_detail';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } 
      catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Name = isset($array['Name']) ? $array['Name'] : '';
  $Name = isset($array['Email']) ? $array['Email'] : '';
  $Name = isset($array['Password']) ? $array['Password'] : '';

  if(empty($name) || empty($email) || empty($message)) {
    $status = "All fields are compulsory.";
  } else {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Please enter a valid email";
    } 
    else {

      $sql = "INSERT INTO login_detials (Name, Email, Password) VALUES (:Name, :Email, :Password)";

      $stmt = $pdo->prepare($sql);

      $stmt->execute(['Name' => $Name, 'Email' => $Email, 'Password' => $Password]);
    }

    $conn->exec($sql);
    echo "New record created successfully";
    } 

$conn = null;
  }

?>

<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <link rel = "stylesheet" href = "styles.css">
</head>
<body>
    <p id="welcome"> 
        Hello, Welcome !! 
    </p>
    
    <form action="" method="post">
      <fieldset align = "Center" id = "box">   
        <label> Name: </label>
        <input type = "text" placeholder="Enter Full-Name"/> <br/>
        <label> Email: </label>
        <input type = "text" placeholder="Enter Email"/> <br/>
        <label> Password: </label>
        <input type = "password" placeholder="Enter Password"/> <br/> 
        <button> Submit: </button>
        </fieldset>
    </form> 

        
</body>
</html>