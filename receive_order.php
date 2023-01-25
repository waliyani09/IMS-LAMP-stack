<form action="" method="post">
    <?php

    $conn=mysqli_connect("localhost","netuser","4it3lq@YAHOO","salon");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($conn,"SELECT * FROM product");
    echo "<div id='left_recieve_order'>";
    echo "<table border='1'>
    <tr>
    <th>SKU</th>
    <th>Product Name</th>
    <th>Suggested order quantity</th>
    <th>Ordered quantity</th>
    </tr>";
    $i = 1;
    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['sku'] . "</td>";
        echo "<td>" . $row['pName'] . "</td>";
        $soq = ceil($row['par']-$row['qoh']);
        echo "<td>" . max(0,$soq) . "</td>";
        if($i<=10){
            echo "<td><input onkeyup = \"getProductqty(this.value, 'oq$i')\" type=\"text\" id=\"oq$i\" name=\"$i\"></td>";
        }else{
            echo "<td><input type=\"submit\" name=\"submit\" value=\"Submit Order\"></td>";
        }
        
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    echo "</div>";
    mysqli_close($conn);

?>
</form>
<br>
<br>
<br>
<br>
<?php
        
if (isset($_POST["submit"])){
    receive_order();
    update_inventory();
    echo "<script>window.location='index.php';</script>";
}
function receive_order(){
$conn=mysqli_connect("localhost","netuser","4it3lq@YAHOO","salon");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "INSERT INTO `storeorder` ( `soq1`, `soq2`, `soq3`, `soq4`, `soq5`, `soq6`, `soq7`, `soq8`, `soq9`, `soq10`) VALUES ( '$_POST[1]', '$_POST[2]', '$_POST[3]', '$_POST[4]', '$_POST[5]', '$_POST[6]', '$_POST[7]', '$_POST[8]', '$_POST[9]', '$_POST[10]')";
$result = mysqli_query($conn,$query);//The order record here is created into the storeorder database
mysqli_close($conn);
}
function update_inventory(){
$conn=mysqli_connect("localhost","netuser","4it3lq@YAHOO","salon");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
    $i=1;
    while($i<=10){
        $query="UPDATE product SET qoh=qoh+'$_POST[$i]' WHERE sku=$i;";
        $result=mysqli_query($conn,$query);
        $i++;
    }
mysqli_close($conn);

}
?>

<script>
function getProductqty(input, id){
    if(isNaN(input)){
        document.getElementById(id).value = "";
        alert("Wrong data format entered");
        return false;
    }
}
</script>