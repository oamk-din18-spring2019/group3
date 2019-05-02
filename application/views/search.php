<h2><?= $title ?></h2>

<html>

<!-- View for letting the customer search for a flight -->

<br>
From:<br>

<select id="s_from">
            <?php 
            for($i=0; $i<count($cityfrom); ++$i)
            {
              echo '<option value="'.$cityfrom[$i]->city_from.'">'.$cityfrom[$i]->city_from.'</option>';
            }
            ?>
</select>

<br><br>
To:<br>

<select id="s_to">
            <?php 
            for($i=0; $i<count($cityto); ++$i)
            { 
              echo '<option value="'.$cityto[$i]->city_from.'">'.$cityto[$i]->city_to.'</option>';
            }
            ?>
</select>
<br><br>
Number of passengers:<br>
<select id="s_num">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
</select>

<br><br><br>
<button type="button" onclick="confirmSearch()">Go</button>


<!-- when button is clicked, we redirect the page to something like flights/helsinki/oulu -->

<script type="text/javascript">
    function confirmSearch()
    {
        var from = document.getElementById("s_from");
        var from_string = from.options[from.selectedIndex].text;
        var to = document.getElementById("s_to");
        var to_string = to.options[to.selectedIndex].text;
        var nop = document.getElementById("s_num");
        var nop_string = nop.options[nop.selectedIndex].text;
        if(from_string == to_string)
        {
            alert("You selected the same place for both fields, please choose different places");
        }
        else
        {
            var current_url = window.location.href;
            var new_url = 'Flights/' + from_string + '/' + to_string + '/' + nop_string + '/';
            if(current_url.includes("Search/"))
                current_url = current_url.replace("Search/index", new_url);
            else
                current_url = current_url.replace("Search/index", new_url);
            window.location.href = current_url;
        }
    }
</script>

</html>