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

<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
    background-image: url("http://images4.fanpop.com/image/photos/19900000/SunSet-sunsets-and-sunrises-19955166-2560-1600.jpg");  background-position: center; background-repeat: no-repeat;  height: 100%  
}
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70%;
}

thead {
    th {
        background-color: #55608f;
    }
}

table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,1.6);
}

td, th {
    padding: 15px;
    background-color: rgba(100,110,200,0.3);
    color: #fff;
}

th {text-align: left;}

.table-hover thead tr:hover th, .table-hover tbody tr:hover td {
    background-color:  rgba(255,255,255,0.4);
}

.message{
    color:#EC80FF;
    text-align: center;
}
.button{
    display: block;
    width: 150px;
    height: 20px;
    background:#f5f5f5 ;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: black;
    margin-bottom: 10px;
    
}
.row{
    float: right;
    margin-right: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
</head>
<body>
   
<div class="message">
    <p><?php if(isset($message)){ echo $message; } ?></p>
</div>

<div class="row">
    <a class="button" href="<?php echo base_url().'index.php/logout'?>">Logout</a>
</div>
<div class="container">
    <br><br>
    <div style="color: #f5f5f5">
<?php
echo "<center> <h1> TAKI Airways Administrator Page </h1> </center> </div>";

$result = $this->admin_database->flights();
echo '<table class="table table-hover"> <thead> <tr> <th>Departure City</th> <th>Arrival City</th> <th>Departure Time</th> <th>Arrival Time</th> <th>Price</th> <th>Edit</th> <th>Delete</th> </tr> </thead>';
if($result){
foreach($result->result() as $row) {
    echo "<tr>";
    echo "<td>" . $row->city_from . "</td>";
    echo "<td>" . $row->city_to . "</td>";
    echo "<td>" . $row->time . "</td>";
    echo "<td>" . $row->artime . "</td>";
    echo "<td>" . $row->price . "</td>";
    echo "<td><a href=edit/".$row->fid.">EDIT</a></td>";
    echo "<td><a href=delete/".$row->fid.">DELETE</a></td>";
    echo "</tr>";
}}
echo "</table>";
?>
</div>
<div class="row">
    <a class="button" href="<?php echo 'flightForm'?>">Insert Flight</a>
</div>
<?php
if(isset($this->session->userdata['message'])){
    $this->session->unset_userdata('message');
}
?>
</body>
</html> 