
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <title>Lumino - Dashboard</title>
    <link href="http://localhost/licoreria/app/html/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/licoreria/app/html/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost/licoreria/app/html/css/datepicker3.css" rel="stylesheet">
    <link href="http://localhost/licoreria/app/html/css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<?php

include "header.php";



include "layout.php";

echo '<div id="case">';

include "vistas/".$_POST['vista'].".php";
echo "</div>";

?>




<script src="http://localhost/licoreria/app/html/js/case.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="http://localhost/licoreria/app/html/js/bootstrap.min.js"></script>
<script src="http://localhost/licoreria/app/html/js/chart.min.js"></script>
<script src="http://localhost/licoreria/app/html/js/chart-data.js"></script>
<script src="http://localhost/licoreria/app/html/js/easypiechart.js"></script>
<script src="http://localhost/licoreria/app/html/js/easypiechart-data.js"></script>
<script src="http://localhost/licoreria/app/html/js/bootstrap-datepicker.js"></script>
<script src="http://localhost/licoreria/app/html/js/custom.js"></script>



</body>
</html>