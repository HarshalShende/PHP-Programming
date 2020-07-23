 <?php
echo "Request";echo '<br>';

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST['fname'];echo '<br>';
echo $_REQUEST['age'];echo '<br>';echo '<br>';

echo "Get";echo '<br>';
 echo "<pre>";
 print_r($_GET);
 echo "</pre>";
 echo $_GET['fname'];echo '<br>';echo '<br>';

 echo "post";echo '<br>';
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";
 echo $_POST['age'];echo '<br>';echo '<br>';