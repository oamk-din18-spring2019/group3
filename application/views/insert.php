<!DOCTYPE html>
<html>
<head>
    <title>Flight Booking</title>
</head>
<body>
<div>
    <h3>Flight Form</h3>
    <?php echo form_open('Admin/insertNewFlight'); ?>
        <p><input type="text" name="city_from" placeholder="Enter Departure City" required /></p>
        <p><input type="text" name="city_to" placeholder="Enter Arrival City" required/></p>
        <p><input type="time" name="time" placeholder="Enter Departure Time" required/></p>
        <p><input type="time" name="artime" placeholder="Enter Arrival Time" required/></p>
        <p><input type="number" name="price" placeholder="Enter Price" required/></p>
        <p><input name="submit" type="submit" value="Submit" /></p>
    <?php echo form_close();?>
</div>
</body>
</html>