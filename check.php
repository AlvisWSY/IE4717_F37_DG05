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
if (!$count) {
    echo "<script>alert('No seat selected');window.history.go(-2);</script>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Check Out</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="_.js "></script>
</head>

<body style="background-color:#000;">
    <div class="checking-panel">
    <center>
        <br><br>
        <h1>Checkout List </h1>
        <br><br>
            <table border="1" style="text-align: center;">
                <tbody>
                    <tr>
                        <th>S.No</th>
                        <th>Label</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><label>SEAT</label></td>
                        <td><?php echo $selected_list; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><label>NAME</label></td>
                        <td><?php echo $fname . " " . $lname; ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><label>No. of SEAT</label></td>
                        <td>
                            <?php echo $count; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><label>THEATRE</label></td>
                        <td>
                            <?php echo$theatre; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><label>TYPE</label></td>
                        <td>
                            <?php echo $type; ?>
                        </td>
                    <tr>
                        <td>6</td>
                        <td><label>TOTAL PRICE</label></td>
                        <td>
                            <?php echo $total; ?>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
            <form method="post" action="final.php">
            <input type="hidden" name="first_name" value="<?php echo $fname; ?>">
                        <input type="hidden" name="last_name" value="<?php echo $lname; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
                        <input type="hidden" name="theatre" value="<?php echo $theatre; ?>">
                        <input type="hidden" name="type" value="<?php echo $type; ?>">
                        <input type="hidden" name="date" value="<?php echo $date; ?>">
                        <input type="hidden" name="time" value="<?php echo $time; ?>">
                        <input type="hidden" name="movie_id" value="<?php echo $movieid; ?>">
                        <input type="hidden" id="count_input" name="count_input" value="<?php echo $count; ?>">
                        <input type="hidden" id="total_input" name="total_input" value="<?php echo $total; ?>">
                        <input type="hidden" id="selected_list" name="selected_list" value ="<?php echo $selected_list; ?>">
            <button value="Book Now!" type="submit" onclick="" type="button" name="submit" class="btn btn-danger">Book Now!</button>
            <button value="Back"onclick="window.history.go(-2); return false;">Back</button>
    </center>
</div>
</body>
</html>