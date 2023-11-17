<!DOCTYPE html>
<html lang="en">
<?php
include "connection.php";
session_start();

// variables
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$mobile = $_POST['pNumber'];
$theatre = $_POST['theatre'];
$type = $_POST['type'];
$date = $_POST['date'];
$time = $_POST['hour'];

$movieid = $_POST['movie_id'];
$movieQuery = "SELECT * FROM movieTable WHERE movieID = $movieid";
$movieImageById = mysqli_query($con, $movieQuery);
$row = mysqli_fetch_array($movieImageById);

$seatQuery = "SELECT * FROM seatTable";
$seatID = mysqli_query($con, $seatQuery);
$seat = mysqli_fetch_array($seatID);

$order = "ARVR" . rand(10000, 99999999);
$cust  = "CUST" . rand(1000, 999999);

//sessions
// $_SESSION['ORDERID'] = $order;


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Select seat for <?php echo $row['movieTitle']; ?> Now</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="_.js "></script>
</head>

<body style="background-color:#000;">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>BOOK YOUR SEAT</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                echo '<img src="' . $row['movieImg'] . '" alt="">';
                ?>
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
        <div class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>GENGRE</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTORS</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="seating-form-container">
                <div class="row">
                    <div class="seat"></div>
                    <small style="margin-right:15px;margin-left:5px;">Available</small>
                    <div class="seat selected"></div>
                    <small style="margin-right:15px;margin-left:5px;">Selected</small>
                    <div class="seat sold"></div>
                    <small style="margin-left:5px;">Sold</small>
                </div>
                <div class="seat_container">
                    <div class="screen_container">
                        <div class="screen"></div>
                    </div>
                    <div class="row">
                        <?php
                        if ($seat['seat1']){
                            echo '<div class="seat sold" id="seat1"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat1"></div>';
                        }
                        if ($seat['seat2']){
                            echo '<div class="seat sold" id="seat2"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat2"></div>';
                        }
                        if ($seat['seat3']){
                            echo '<div class="seat sold" id="seat3"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat3"></div>';
                        }
                        if ($seat['seat4']){
                            echo '<div class="seat sold" id="seat4"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat4"></div>';
                        }
                        if ($seat['seat5']){
                            echo '<div class="seat sold" id="seat5"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat5"></div>';
                        }
                        if ($seat['seat6']){
                            echo '<div class="seat sold" id="seat6"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat6"></div>';
                        }
                        if ($seat['seat7']){
                            echo '<div class="seat sold" id="seat7"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat7"></div>';
                        }
                        if ($seat['seat8']){
                            echo '<div class="seat sold" id="seat8"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat8"></div>';
                        }
                        ?>
                    </div>
                    <div class="row">
                    <?php
                        if ($seat['seat9']){
                            echo '<div class="seat sold" id="seat9"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat9"></div>';
                        }
                        if ($seat['seat10']){
                            echo '<div class="seat sold" id="seat10"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat10"></div>';
                        }
                        if ($seat['seat11']){
                            echo '<div class="seat sold" id="seat11"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat11"></div>';
                        }
                        if ($seat['seat12']){
                            echo '<div class="seat sold" id="seat12"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat12"></div>';
                        }
                        if ($seat['seat13']){
                            echo '<div class="seat sold" id="seat13"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat13"></div>';
                        }
                        if ($seat['seat14']){
                            echo '<div class="seat sold" id="seat14"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat14"></div>';
                        }
                        if ($seat['seat15']){
                            echo '<div class="seat sold" id="seat15"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat15"></div>';
                        }
                        if ($seat['seat16']){
                            echo '<div class="seat sold" id="seat16"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat16"></div>';
                        }
                        ?>
                    </div>
                    <div class="row">
                    <?php
                        if  ($seat['seat17']){
                            echo '<div class="seat sold" id="seat17"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat17"></div>';
                        }
                        if ($seat['seat18']){
                            echo '<div class="seat sold" id="seat18"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat18"></div>';
                        }
                        if ($seat['seat19']){
                            echo '<div class="seat sold" id="seat19"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat19"></div>';
                        }
                        if ($seat['seat20']){
                            echo '<div class="seat sold" id="seat20"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat20"></div>';
                        }
                        if ($seat['seat21']){
                            echo '<div class="seat sold" id="seat21"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat21"></div>';
                        }
                        if ($seat['seat22']){
                            echo '<div class="seat sold" id="seat22"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat22"></div>';
                        }
                        if ($seat['seat23']){
                            echo '<div class="seat sold" id="seat23"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat23"></div>';
                        }
                        if ($seat['seat24']){
                            echo '<div class="seat sold" id="seat24"></div>'; 
                        }else{
                            echo '<div class="seat" id="seat24"></div>';
                        }
                        ?>
                    </div>
                    <p class="text">You have selected <span id="count">0</span> seat for a price of $<span id="total">0</span>
                    </p>
                    <form action="check.php" method="POST">
                        <input type="hidden" name="first_name" value="<?php echo $fname; ?>">
                        <input type="hidden" name="last_name" value="<?php echo $lname; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
                        <input type="hidden" name="theatre" value="<?php echo $theatre; ?>">
                        <input type="hidden" name="type" value="<?php echo $type; ?>">
                        <input type="hidden" name="date" value="<?php echo $date; ?>">
                        <input type="hidden" name="time" value="<?php echo $time; ?>">
                        <input type="hidden" name="movie_id" value="<?php echo $movieid; ?>">
                        <input type="hidden" id="count_input" name="count_input" value = 0>
                        <input type="hidden" id="total_input" name="total_input" value = 0>
                        <input type="hidden" id="selected_list" name="selected_list" value = []>
                        <center>
                        <button type="submit" value="save" name="submit" class="form-btn">Book a seat!</button>
                    </center>
                    </form>
                    <script src="scripts/seat.js"></script>
                </div>
        </div>
    </div>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>