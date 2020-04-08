<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="getusers_1.php">
        <input type="text" name="firstname">
        <input type="submit" value="Search" name="search_btn">
    </form>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Email</td>
                <td>Firstname</td>
                <td>Lastname</td>
                <td>Active</td>
            </tr>
        </thead>
        <tbody>
        <?php 

            if(isset($_GET['search_btn'])){
                $firstname = $_GET['firstname'];
                db_query($firstname);
                

            }



        ?>
        </tbody>
    </table>
    
</body>
</html>

<?php 

            function db_query($firstname){
                $db_username = "admin";
                $db_password = "pass";
                $database = "comp3134";
                $hostname = "127.0.0.1";
                $results = 'No results';

                $conn = new mysqli($hostname, $db_username, $db_password, $database);

            
                $query = "SELECT * FROM users WHERE `firstname` = '$firstname'";
                $results = $conn->query($query);

                if ($results->num_rows > 0) {
                    // output data of each row
                    while($row = $results->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["user_id"]."</td>";
                        echo "<td>".$row["username"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["firstname"]."</td>";
                        echo "<td>".$row["lastname"]."</td>";
                        echo "<td>".$row["active"]."</td>";
                        echo "</tr>";                   //echo "id: " . $row["user_id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    }
                }
                $conn->close();

            }
?>


