<?php 


include "head.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);
 echo " Hello World!";
 
 $connection = ssh2_connect('gem-machine-a', 22);
echo "tt".$connection;
echo ssh2_auth_password($connection, 'gemdbusr', 'Piwanu72');
//
echo ssh2_scp_send($connection, '/local/filename', '/home/dbspool/data/int2r', 0644);

 ?>
 
 <div class="container">
  
 <form>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  
  <div class="form-group">
  <input class="form-control input-lg" type="text" placeholder=".input-lg">
<input class="form-control" type="text" placeholder="Default input">
<input class="form-control input-sm" type="text" placeholder=".input-sm">

<select class="form-control input-lg">...</select>
<select class="form-control">...</select>
<select class="form-control input-sm">...</select>
  </div>
  
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
<?php
include "foot.htm";
?>