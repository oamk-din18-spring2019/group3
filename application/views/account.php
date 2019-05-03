<html>
<?php

if (isset($this->session->userdata['logged_in'])) {
    $Email = ($this->session->userdata['logged_in']['Email']);
    } else {
    header("");
    }

?>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://localhost/group3/index.php/Account/index'); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="profile">
<?php




echo "<center> <h1> Hello Mr.<b id='welcome'><i>" . $Email . "</i> !</b> </h1> </center>";
echo "<br/>";
echo "<center> <h2>Welcome to your Account Page </h2> </center>";

echo "<center> <h3> You can view all your booked flight details from here </h3></center> ";
echo "<br/>";
echo "<br/>";

?>

<button class=button id="logout">Logout</button>

</div>
<br/>
</body>
</html>