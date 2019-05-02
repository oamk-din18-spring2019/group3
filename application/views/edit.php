<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div>
    <?php echo form_open('Admin/updateFlight'); ?>
        <input type="hidden" name="new" value="1" />
        <input name="fid" type="hidden" value="<?php echo $data[0]->fid;?>" />
        <p><input type="text" name="city_from" placeholder="Enter Departure City" required value="<?php echo $data[0]->city_from;?>" /></p>
        <p><input type="text" name="city_to" placeholder="Enter Arrival City" required value="<?php echo $data[0]->city_to;?>" /></p>
        <p><input type="edit" name="time" placeholder="Enter Departure Time" required value="<?php echo $data[0]->time;?>" /></p>
        <p><input type="edit" name="artime" placeholder="Enter Arrival Time" required value="<?php echo $data[0]->artime;?>" /></p>
        <p><input type="number" name="price" placeholder="Enter Price" required value="<?php echo $data[0]->price;?>" /></p>
        <p><input name="submit" type="submit" value="Update" /></p>
    <?php echo form_close();?>
</div>
</div>

</body>
</html>