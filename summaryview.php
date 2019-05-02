<h2><?= $title ?></h2>

<html>

<!-- View for showing the booking summary after they put their credit card in -->


<br><br>
<?php

$a=array('1A','1B','1C','1D','2A','2B','2C','2D','3A','3B','3C','3D','4A','4B','4C','4D',
'5A','5B','5C','5D','6A','6B','6C','6D','7A','7B','7C','7D','8A','8B','8C','8D','9A','9B','9C',
'9D','10A','10B','10C','10D','11A','11B','11C','11D','12A','12B','12C','12D','13A','13B',
'13C','13D','14A','14B','14C','14D','15A','15B','15C','15D','16A','16B','16C','16D','17A',
'17B','17C','17D','18A','18B','18C','18D','19A','19B','19C','19D',
'20A','20B','20C','20D','21A','21B','21C','21D','22A','22B','22C','22D','23A','23B','23C',
'23D','24A','24B','24C','24D','25A','25B','25C','25D','26A','26B','26C','26D','27A','27B',
'27C','27D','28A','28B','28C','28D','29A','29B','29C','29D','30A','30B','30C','30D');

// Loop
$randIndex = array_rand($a);

// output the value for the random index
echo count($a);

echo 'You are flying from <b>'.
     $city_from. '</b><br>'.
     ' to <b>'.
     $city_to.   '</b><br><br>'.
     'You have booked for <b>'.
     $passengers.'</b>'.
     ' passengers,<br><br> Your seat numbers are <br><p2>';

$chosenSeats = array();

if($passengers > 0)
{
    for($i=0; $i < $passengers; ++$i)
    {
        if($randIndex > 117)
            $randIndex = 110;
        array_push($chosenSeats, $a[$randIndex + $i]);
        echo '<br>'.$chosenSeats[$i];
    }
}
     
    echo '</p2><br><br>Your flight departs at '.
         $time.'<br>';
?>


</html>
