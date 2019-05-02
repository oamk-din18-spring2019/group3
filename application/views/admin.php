<?php 
/*if (isset($this->session->userdata['logged_in'])) {

$Email = ($this->session->userdata['logged_in']['EMAIL']);
} else {
header("location: login");
}

if (isset($this->session->userdata['message'])){
    $message = ($this->session->userdata['message']);
}*/
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
    background: linear-gradient(45deg, #49a09d, #5f2c82);
}
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
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
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

td, th {
    padding: 15px;
    background-color: rgba(255,255,255,0.2);
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
    width: 100px;
    height: 25px;
    background: black;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
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
    <a class="button" href="<?php echo 'flightForm'?>">Insert Flight</a>
</div>
<div class="container">
<?php
$result = $this->admin_database->flights();
echo '<table class="table table-hover"> <thead> <tr> <th>Departure city</th> <th>Arrival city</th> <th>Time</th> <th>price</th> <th>edit</th> <th>delete</th> </tr> </thead>';
if($result){
foreach($result->result() as $row) {
    echo "<tr>";
    echo "<td>" . $row->city_from . "</td>";
    echo "<td>" . $row->city_to . "</td>";
    echo "<td>" . $row->time . "</td>";
    echo "<td>" . $row->price . "</td>";
    echo "<td><a href=edit/".$row->fid.">edit</a></td>";
    echo "<td><a href=delete/".$row->fid.">delete</a></td>";
    echo "</tr>";
}}
echo "</table>";
?>
</div>
<div class="row">
    <a class="button" href="<?php echo base_url().'index.php/logout'?>">Logout</a>
</div>
<?php
if(isset($this->session->userdata['message'])){
    $this->session->unset_userdata('message');
}
?>
</body>
</html> 