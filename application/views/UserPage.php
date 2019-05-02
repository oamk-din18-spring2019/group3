<?php 
if (isset($this->session->userdata['logged_in'])) {

$Email = ($this->session->userdata['logged_in']['Email']);
} else {
header("location: login");
}

if (isset($this->session->userdata['message'])){
    $message = ($this->session->userdata['message']);
}
?>
<!doctype <!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php   
        $result = $this->user_database->get_user_info($Email);
        //print_r($result);
        //for($i=0; $i<count($result); ++$i)
        echo 'First Name : '. $result[0]['FNAME'];
        echo '<br>Last Name  : '. $result[0]['LNAME'];
        echo '<br>Address : '.$result[0]['ADDRESS'];
        echo '  Postal Code : '.$result[0]['PCODE'];
        echo '<table> <thead> <tr> <th>Departure city</th> <th>Arrival city</th> <th>Departure Time</th> <th>Arrival Time</th> <th>price</th> </tr> </thead>';
        $result2 = $this->user_database->get_booked_flight($result[0]['UID']);
                foreach ($result2 as $row) {
                        $result3 = $this->admin_database->getFlightdata($row['fid']);
                        if($result3 == false)
                                echo '<br>hi'. $result3 . '<br>';
                        $result4 = $result3->result_array();
                        echo "<tr>";
                        echo "<td>" . $result4[0]['city_from']. "</td>";
                        echo "<td>" . $result4[0]['city_to']. "</td>";
                        echo "<td>" . $result4[0]['time']. "</td>";
                        echo "<td>" . $result4[0]['artime']. "</td>";
                        echo "<td>" . $result4[0]['price']*$row['numberOfSeats']. "</td>";
                        echo "</tr>";   
                }
        

?>
</body>
</html>
