
<!-- include connection file -->
<?php

   $a=$_POST['nam'];
   $b=$_POST['email'];
   $c=$_POST['problem'];
   $doc=$_POST['radio'];
 $conn=new mysqli('localhost','root','','hospital');
 if($conn->connect_error)
 {
   die('connection failed :'.$conn->connect_error);
 }
 else
 {
 	$data=$conn->prepare("insert into appointment(name,email,problem,doctor)values(?,?,?,?)");
 	$data->db2_bind_param("ssss",$a,$b,$c,$doc);
 	$data->execute();
 	echo"registration successfully..";
 }

?>