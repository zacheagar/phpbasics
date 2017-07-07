<center><h1 style='color:blue;font-size:25px;font-weight:lighter;'>BASIC PHP FORM </h1>
<form action="index.php" method="GET">
 Name:<br><input type="text" name="name" size="6"><br>
 Age:<br><input type="text" name= "age" size="6"><br><br>
 <input type="submit" value="Submit">
 </form>
 </center>
<?php 
 $name = $_GET['name'];
 $age = $_GET['age'];

if(isset($name)&&isset($age)){
 if(isset($name) &&isset($age)){
echo 'My name is'.' '.$name.''.'<br>and my current age is'.$age;
}else echo 'Please fill out entirely!';
}

?>