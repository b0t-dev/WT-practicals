<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="submit" name="readnum" value="Read From File">
        <input type="submit" name="rev" value="Write reverse of File">
    </form>
    <?php
    if(isset($_GET['readnum'])){
        $myfile=fopen("input.txt",'r') or die("Unable to open file");
        $n=fgets($myfile);
        echo "The number in the file is: $n";
        fclose($myfile);
    }
    if(isset($_GET['rev'])){
        $myfile=fopen("input.txt",'r') or die("Unable to open file");
        $n=fgets($myfile);
        $rev=strrev($n);
        $myfile2=fopen("output.txt",'w') or die("Unable to open file");
        fwrite($myfile2,$rev);
        echo "The reverse has been written to output.txt".$rev;
        fclose($myfile);
        fclose($myfile2);
    }
?>
</body>
</html>

<!DOCTYPE html> 
<html> 
<head> 
<title>Handle file</title> 
</head> 
<body> 
<h1>File Operations</h1> 
<form method="get"> 
Enter a Word to Search : <input type="text" name="val" id="val"> 
<br><br> 
<input type="submit" name="count" value="Display the Count of Words"> 
<input type="submit" name="occ" value="Search the Word"> 
<br><br><br> 
</form> 
<?php 
 if (isset($_GET['count'])){ 
   $file = fopen('sample.txt','r'); 
   $txt = fread($file, filesize('sample.txt')); 
   $count = str_word_count($txt); 
   echo "The Count of whole File Word is $count<br><br>"; 
   fclose($file); 
 } 
 
 if (isset($_GET['occ'])){ 
   $val = $_GET['val']; 
   $file = fopen('sample.txt','r'); 
   $txt = fread($file, filesize('sample.txt')); 
   if (strpos($txt, $val)){ 
     echo "The Word '$val' is Present in the file !<br><br>"; 
   } 
   else{ 
     echo "The Word '$val' is not Present in the file !<br><br>"; 
   } 
   fclose($file); 
 } 
?> 
</body>  
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
        Enter Employee Id: <input type="number" name="eid" id="">
        Enter Employee Name: <input type="text" name="name" id="">
        Enter Employee City: <input type="text" name="city" id="">
        Enter Employee Salary: <input type="number" name="sal" id="">
        <input type="submit" value="Submit" name="submit">
    
    </form>
    <?php
        if($_POST){
            $eid = $_POST['eid'];
            $name = $_POST['name']; 
            $city = $_POST['city'];
            $sal = $_POST['sal'];
            $val = "Employee Details: \n Employee Id: $eid \n Employee Name: $name \n Employee City: $city \n Employee Salary: $sal";
            $myfile = fopen('empdetails.txt','a');
            fwrite($myfile,$val);
            fclose($myfile);
        }
    ?>
</body>
</html>