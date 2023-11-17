<?php
include "connection.php";
session_start();

// variables
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$theatre = $_POST['theatre'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['time'];
$movieid = $_POST['movie_id'];
$total = $_POST['total_input'];
$count = $_POST['count_input'];
$selected_list = $_POST['selected_list'];
$selected_arr = preg_split ("/\,/", $selected_list); 

if ((!$_POST['submit'])) {
    echo "<script>alert('You are Not Suppose to come Here Directly');window.location.href='index.php';</script>";
}

if (isset($_POST['submit'])) {

    $qry = "INSERT INTO bookingtable(`movieID`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `bookingEmail`,`amount`, `seat`)VALUES ('$movieid','$theatre','$type','$date','$time','$fname','$lname','$mobile','$email','$total','$selected_list')";

    $result = mysqli_query($con, $qry);

    for ($x = 0; $x < count($selected_arr); $x++) {
        $seat_id = $selected_arr[$x];
        $qry = "UPDATE seattable SET $seat_id = 1;";
        $result = mysqli_query($con, $qry);
      }
}


// // QR Code
// 		include "phpqrcode/qrlib.php";
// 		QRcode::png("
// 		MovieID=$movieid,
// 		First Name=$fname,
// 		Last Name=$lname,
// 		Number=$mobile,
// 		Email=$email,
// 		date=$date,
// 		Theatre=$theatre,
// 		TYPE=$type,
// 		Time=$time,
//         Tickets=$count,
// 		amount=$total,
// 		", "verify.png ", "L", 5, 5);
// 		echo "<img src='verify.png' width='auto' height='120'>";
//         echo "Please take a screenshot of the QR code above for verification purposes.";


        // Send confirmation email
        $userEmail = $email;
        // Convert image to Base64
        // $imagePath = 'verify.png';
        // $imageData = base64_encode(file_get_contents($imagePath));
        // $imageSrc = 'data: '.mime_content_type($imagePath).';base64,'.$imageData;

        $movieQuery = "SELECT * FROM movieTable WHERE movieID = $movieid";
        $movieImageById = mysqli_query($con, $movieQuery);
        $row = mysqli_fetch_array($movieImageById);
        $movie_name = $row['movieTitle'];
        $emailContent = "
            Your booking has been confirmed!
            Here is the detail:
            
            Movie: $movie_name
            Date: $date
            Time: $time
            Theatre: $theatre
            Seat Number: $selected_list
            price:$total

            See you at Silver Village!
            
        ";

        // Define the email parameters
        $subject = "Your Booking has been confirmed";
        $message = $emailContent;
        $headers = "From: root@localhost\r\n";
        $headers .= "Reply-To: root@localhost\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Change to text/html

        // Send the email
        $mailSent = mail($userEmail, $subject, $message, $headers, '-root@localhost');

        // Notify user of success
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="_.js "></script>
</head>

<header></header>
<body>
    <div class="schedule-section">
    <h1>Congratulations! You have booked for your seats!</h1>
    <h2>Booking successfully placed and confirmation email sent!</h2>
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>
</html>
