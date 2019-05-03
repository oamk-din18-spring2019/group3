<!DOCTYPE HTML>
<style>
    .navbar-inverse {
        background-color:lightblue;
    }
    .yo {
        color:black;
    }
    .navbar-brand {
        color:black;
    }
</style>
<html>
    <head>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <title>TAKI Airways</title>
</head>
<?php $this->load->helper('url'); ?>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Search/index/">TAKI Airways</a>
            </div>
            <div id="navbar">
                <ul class="nav navbar-nav">
                    <li><a class="yo" href= "<?php echo base_url(); ?>">Log out</a></li>
                    <li><a class="yo" href= "<?php echo base_url(); ?>index.php/Users/user/">Account</a></li>
                </ul>
            </div>
        </div>
    </nav>