<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<table border="1" style="margin-top:30px;margin-left:50px;text-align:center">
<col width="100">
<col width="150">
  <tr>
  <th>Consignment number</th>
  <th>Pdf file</th>
  </tr>
  <?php
  include("connection.php");


   $sql="SELECT cons_number, shipment_file_mf FROM shipment_manufacturer";
   
   $result_set=mysqli_query($conn,$sql);
  
   while($row=mysqli_fetch_array($result_set))
   {
    ?>
      <form method="POST" action="DisplayShipPdf.php">
      <tr>
          
      <td><input type="text" value="<?php echo $row['cons_number'] ?>" name="consnum" style="border:none; background-color:white; text-align:center;" size="15" readonly></td>
          <td><input style="width:100%;text-align:center;" class="btn btn-dark" type="submit" value="Download" name="download"></td>                   
      </tr> 
   </form>
          <?php
   }
   
   mysqli_close($conn);
   ?>
  </table>


