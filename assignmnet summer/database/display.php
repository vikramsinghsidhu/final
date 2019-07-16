<html>
    <body>
        <table border="1">
            <tr>
                <td>S.NO.</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>EDIT</td>
                <td>DELETE</td>
            </tr>
            <?php
            $sql="select * from req";
            $result=$conn->query($sql);
            
            while($row = $result->fetch_assoc())
            {
                $id=$row['id'];
                $name=$row['fname'];
                $email=$row['email'];
            }
            ?>
            <tr>
                <td><?php echo $id; ?> </td>
                <td><?php echo $name; ?> </td>
                <td><?php echo $email; ?> </td>
                <td><a href="#">edit </a></td>
                <td><a href="#">delete </a></td>
            </tr>
        </table>
    </body>
</html>