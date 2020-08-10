<?php

$conn=mysqli_connect("localhost","root","","crud") or die("connection Unsuccessfull");

$sql="select * from student join studentclass where student.sclass=studentclass.cid";

$result=mysqli_query($conn,$sql) or die("query unsuccessfull");

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

echo $row['sid']." ".$row['sname']." ".$row['saddress']." ".$row['cname'];
echo "<br>";
}

}

mysqli_close($conn);
