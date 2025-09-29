<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST'>
        Enter the Number: <input type="number" name="factorial" id="" placeholder="Enter a number">
        <input type="submit" value="Submit" name="submit"> 
    </form>
    <?php
    if($_POST){
        $number=$_POST['factorial'];
        $fact=1;
        for($i=1;$i<=$number;$i++){
            $fact=$fact*$i;
        }
        echo "The factorial of $number is $fact";
    }
    ?>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <form action="" method="POST">
        Enter the number: <input type="number" name="fibo" id="" placeholder="Enter a number">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if($_POST){
            $number=$_POST['fibo'];
            $n1=0;
            $n2=1;
            echo 'Fibonacci Series:';
            for($i=0;$i<$number;$i++){
                echo $n1.' ';
                $n3=$n1+$n2;
                $n1=$n2;
                $n2=$n3;
            }
            echo 'Fibonacci Series Ended';
        }
    ?>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <title>Sum of N numbers</title>
</head>
<body>
    <form action="" method='POST'>
        Enter the Number: <input type="number" name="number" placeholder='Enter the Number' id="">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if($_POST){
        $n=(int)$_POST['number'];
        $sum=0;
        for($i=1;$i<=$n;$i++){
            $sum=$sum+$i;
        }
        echo "The sum of first $n natural numbers is $sum";
    }
    ?>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Student Info</title>
</head>
<body>
    <form action="" method="post">
        Enter Name<input type="text" name="name" placeholder="Enter Name" id="" required>
        Enter Age<input type="number" name="age" placeholder="Enter Age" id="" required>
        Enter Address<input type="text" name="address" placeholder="Enter Address" id="" required>
        Enter Email<input type="email" name="email" placeholder="Enter Email" id="" required>
        Enter Marks<input type="number" name="marks" placeholder="Enter Marks" id="" required>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if($_POST){
        $name=$_POST['name'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $marks=$_POST['marks'];
        echo "Student Info:<br>";
        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "Address: $address <br>";
        echo "Email: $email <br>";
        echo "Marks: $marks <br>";
    }
    ?>
</body>
</html> -->

