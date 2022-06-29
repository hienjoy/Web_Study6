<?php
        include('./dbinit.php');
        $name=$_POST['name'];
        $age=$_POST['age'];
        $query="insert into test_table (name,age) values ('$name','$age')";
        if($result = mysqli_query($conn,$query)){
                while($row=mysqli_fetch_array($result)){
                        print_r($row);
                        echo "<br>";
                }
        }
?>
<html>
        <head>
        <title> ex1 </title>
        </head>
        <body>
                <form action="" method="post">
                        <input type="text" name="name"/>
                        <input type="text" name="age"/>
                        <input type="submit"/>
                </form>
        </body>
</html>
