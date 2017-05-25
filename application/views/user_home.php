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
          <tbody>
            <tr>
              <td>Name:</td>
              <td><?= $result->m_name?></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><?= $result->m_addr?></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><?= $result->m_city?></td>
            </tr>
          </tbody>
        </table>
                
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Edit</button>                
      </div>
    </div>
  </div>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
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
              <td><input type="text" name="m_name" value="<?= $result->m_name?>"></td>
            </tr>
            <tr>
              <td>Address:</td>
              <td><input type="text" name="m_addr" value="<?= $result->m_addr?>"></td>
            </tr>
            <tr>
              <td>City:</td>
              <td><input type="text" name="m_city" value="<?= $result->m_city?>"></td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  
  function saveData()
  {
    alert('sucess');
  }
</script>
</body>
</html>
