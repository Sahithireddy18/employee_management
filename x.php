<?php
$connect =  mysqli_connect('localhost', 'root' , '', 'majorproject');
$query = "SELECT * FROM `empscores` ";
$result = mysqli_query($connect , $query);

//$resultCount=$result->num_rows;

$color = ['#dc7877','#9cbb73','#9ee2d9','#9f9ee2','#e29eba'];
$dept = ['individual performance','working experience','experience in current position','attitude','feedback'];
$people = array();
$row = mysqli_fetch_assoc($result);
//for($i=0;$i<5;$i++)
 {
    $people[0] = $row["individual_performance"];
    $people[1]= $row["working_exp"];
    $people[2]=$row["exp_inposition"];
    $people[3]=$row["attitude"];
    $people[4]=$row["feedback"];

}
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div id="chart_container">
      <div id="column-chart" class="chart-div" style="width: 100%; height: 500px;"></div>
    </div>
  </body>
</html>

<script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawColumnChart);
    function drawColumnChart() {
      var data = google.visualization.arrayToDataTable([
        ['dept','Population', { role: 'style' }, { role: 'annotation' }],
        <?php
        for($i=0;$i<5;$i++){
          ?>[<?php 
    
		echo "'".$dept[$i]."',".$people[$i].", '".$color[$i]."' , "."'".$people[$i]."' "
 ?>],  <?php } 
        ?>
        ]);


      var options = {
        title: "Number of People per Country",
        chartArea: {width: '60%' },
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("column-chart"));
      chart.draw(data, options);
  }
  </script>