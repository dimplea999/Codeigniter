<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Sheena Shrestha</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>                
      
      <div class=" col-md-9 col-lg-9 "> 
        <table class="table table-user-information">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
          </tr>
        </thead>
          <tbody>

          <?php 
            $data ='';     
            for ($i=0; $i < count($adminResult); $i++) { 
              
              $data .= "<tr>
                    <td>".$adminResult[$i]->m_name."</td>
                    <td>".$adminResult[$i]->m_addr."</td>
                    <td>".$adminResult[$i]->m_city."</td>
                    <td>
                  <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#EditModal' onclick='showData(".$adminResult[$i]->m_id.");' >edit</button>

                    </td>
                    </tr>";
            }

            echo $data;
          ?>
          </tbody>
        </table>
              
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/app.js"></script>
<script type="text/javascript">
  
function showData(userId)
{
    $.ajax({
        type: "POST",
        dataType: 'json',
        data: {userId:userId },
        url: "<?php echo base_url()?>"+"getUserWiseData; ",
        success: function (data) {  
           console.log(data);
        },
        error: function (e) {

        }
    });
}
</script>

<!-- Modal -->
<div id="EditModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <table class="table table-user-information">
          <tbody>
            <tr>
              <td>Name:</td>
              <td><input type="text" name="m_name" value="<?= $adminResult->m_name?>"></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><input type="text" name="m_addr" value="<?= $adminResult->m_addr?>"></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input type="text" name="m_city" value="<?= $adminResult->m_city?>"></td>
            </tr>           
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="saveData();">Submit</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
