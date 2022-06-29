<?php
        include('./dbinit.php');
        $query="select * from old_member union select * from new_member";
        $result=mysqli_query($conn,$query);
          
?>       
<html>  
        <head>
        <title> printM </title>
        </head>
        <body>
                <table border="1">
                 <tr> <td>이름</td>
                        <td>학교</td>
                        <td>학과</td>
                        <td>성별</td>
                        <td>입학년도</td>
                        <td>이메일</td>
                        <td>전화번호</td>
<td>생일</td>
                        <td>학년</td>
                        <td>학점</td>
                 </tr>
                <?php
                        while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>";
                        echo $row['Name'];
                        echo" </td>";
                        echo "<td>";
                        echo $row['School'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['Major'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['Gender'];
echo "</td>";
                        echo "<td>";
                        echo $row['EnterYear'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['Email'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['Phone'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['Birth'];
                        echo "</td>";
                        echo "<td>";
                        echo $row['Grade'];
                        echo "</td>";
                        echo "<td>";
 echo $row['Score'];
                        echo "</td>";
                        echo "</tr>";
                        }
                ?>
                </table>
        </body>
</html>
