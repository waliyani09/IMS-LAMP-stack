<div id="analytics">
<?php
    $conn=mysqli_connect("localhost","netuser","4it3lq@YAHOO","salon");
    $query = "SELECT * from customer;";
    if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    $result = mysqli_query($conn,$query);//Fetching the data from customer table
    
    $service_performed = array();
    //$total_entries = mysqli_query($conn,"SELECT COUNT(*) FROM customer");
    /**********************WHAT AM I DOING HERE************************
    1. Get the count of total number of orders in the customer table.
    2. Make an array called service_performed with five indexes. Initialize every value to zero.
    3. Now iterate through this table and which ever service id comes up, increment the corresponding array index.
    4. Create a pie chart to show the percentage of what kind of service is being performed.
    5. The most used inventory can be calculated as follows:
        a. The most count in service_performed array will have the sku's from service table.
        b. The products used in them will be most used product.
        c. Similarly, you can create the least used products.
    *******************************************************************/
    while($row = mysqli_fetch_array($result))
    {
        $current_service = $row['serviceid'];
        $index = $current_service-1;
        $service_performed[$index]++;
    }
    
    //So, far we have two arrays one has names, and the other has amount of times the services are performed.
    
    mysqli_close($conn);

?>


<div id="piechart" style="width: 900px; height: 500px;"></div>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var eyebrow_threading = <?php echo $service_performed[0]; ?>;
        var eyebrow_waxing =    <?php echo $service_performed[1]; ?>;
        var facial = <?php echo $service_performed[2]; ?>;
        var eyelash_extension = <?php echo $service_performed[3]; ?>;
        var print_receipt = <?php echo $service_performed[4]; ?>;
        var data = google.visualization.arrayToDataTable([
          ['Service Name', '# of times requested'],
          ['Eyebrow Threading', eyebrow_threading],
          ['Eyebrow Waxing',    eyebrow_waxing],
          ['Facial',            facial],
          ['Eyelash Extension', eyelash_extension],
          ['Print receipt',     print_receipt]
        ]);

        var options = {
          title: 'Legend of services'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
        //////////////////////////////////////////////////////
   
  

  
    </script>
</div>