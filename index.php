<html>
<script type="text/javascript">

// global for passing to the checkout/ page
var dep;

    function printInfo(cfrom, cto, timeDep, timeArr, price, passengers)
    {
        var summarytext = 'You have chosen to fly from <b>' + cfrom + '</b> to <b>' + cto + '</b>.<br><br>'
         + 'Your flight departs at <b>' + timeDep + '</b> and arrives at <b>' + (parseInt(timeDep)+parseInt(timeArr)) + '.</b><br><br>'
         + 'You are booking for <b>' + passengers + '</b> passengers.<br><br>'
         + 'The price is €<b>' + passengers*price + '</b>.';
        document.getElementById('p1').innerHTML = summarytext;

        document.getElementById('cfm_btn').style.display = "block";
        document.getElementById('cfm_btn').innerHTML = "Proceed to checkout";

        dep = timeDep;
    }

    function checkout()
    {
        // redirect url to payment page
        var current_url = window.location.href;
        var new_url = 'checkout/';
        current_url = current_url.replace("flights/", new_url);
        current_url += dep + '/';
        window.location.href = current_url;
    }
</script>
<?php

// View for listing the flights for the customer to choose from

if($times === FALSE)
{
    echo 'Error: Bad args in flight model<br><br>'; // should never execute now because
}                                                  // we redirect the url to /search/
                                                  // if there are bad arguments
else if(count($times) < 1)
{
    echo 'Sorry, there are no available flights going that route.<br><br>';
    // Todo: make a back button to search again
}

else
{
    ?>
    <h2><?= $title ?></h2>
    
    <?php
    for($i=0; $i<count($times); ++$i)
    {
        echo '<button type="button" onclick="printInfo(\''. $method.'\',\''. $arg.'\',\''. $times[$i].'\',\'200\',\''. $prices[$i].'\',\''. $passengers .'\')">'; 
        
        echo $method . ' to ' . $arg . ' departs at ' . $times[$i] . ' and costs €'. $prices[$i];
        echo '</button><br><br>';
    }
}
?>

<p id="p1"></p> <br>
<button id="cfm_btn" style="display:none" onclick="checkout()"></button> <br>

</html>