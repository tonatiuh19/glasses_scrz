<?php
function visitors($section){
    if (!isset($servername)) {
        require_once('cnn.php');
    }
    require_once('mob/Mobile_Detect.php');
    date_default_timezone_set('America/Mexico_City');
    $today = date("Y-m-d H:i:s");
    $detect = new Mobile_Detect();
    if ($detect->isMobile()){
        $mobile = 1;
    }
    else {
        $mobile = 0;
    }
    $sql = "INSERT INTO visitors (section, is_mobile, date)
    VALUES ('$section', '$mobile', '$today')";
    
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>