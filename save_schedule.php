<?php 
if(isset($_POST['save'])){ 
    session_start();
    $dbc = mysqli_connect("localhost","root","");
    mysqli_select_db($dbc, "clinic_reservation");
    
    echo'<script>
        function submissionAlert() {
                alert("The item has been added.");
        }
        </script>';
    
    $allday = isset($allday);
    $user_id = $_SESSION['identifier'];  
    $user_name = $_POST['userName'];
    $user_gender = $_POST['radiostacked'];
    $user_email = $_POST['email'];
    $user_phoneNo = $_POST['phoneNo'];
    $preferred_date = strtotime($_POST['preferred_date']);
    $timestamp = date('Y-m-d', $preferred_date); 
    $preferred_time = strtotime($_POST['end_datetime']);
    $timestamp2 = date('h:i a', $preferred_time); 
    
    $query = "INSERT INTO booking_table (user_id, user_name, user_gender, user_email, user_phoneNo, preferred_date, preferred_time, status_id) VALUES ('$user_id' ,'$user_name', '$user_gender', '$user_email', '$user_phoneNo', '$timestamp', '$timestamp2', '1')";

    mysqli_query($dbc,$query);
    echo "<script> submissionAlert(); header('Location: timetable.php' );</script>";
    
}  
?>