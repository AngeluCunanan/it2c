<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals Activity 1</title>
    <style>
        body{
            background-image: linear-gradient(to bottom, #00008B, maroon, white);
        }

        #form{
            background-color: white;
            width:50%;
            border-radius: 50px;
            margin: 250px auto;
            padding:50px;
        }

        @media screen and (max-width: 570px){
            #form {
            width: 65%;
            margin-left:none;
            padding:40px;
            }
        }
        h1{
            font-family: Times;
        }
    </style>
</head>
<body>
    <div id="form">
        <center><h1>MY SIMPLE CRUD</h1></center>
        <form name="form" action="add.php" onsubmit="return isvalid()" method="POST">
            <a href="add.php" ><button style = "font-size : 20px; font-family: Times">Add</button></a><br><br>
            <center><table style = "font-size : 18px; font-family : Times New Roman" border="2" width="550">
            <tr align="center" bgcolor="#dddddd";>
                <td>Thumbnail</td>
                <td>Title</td>
                <td>Year</td>
                <td>Rating</td>
                <td colspan="2">Action</td>
            </tr>
            <?php
            $data = $db->retrieve("film");
            $data = json_decode($data, 1);
            
            if(is_array($data)){
                foreach($data as $id => $film){
                    echo "<tr>
                    <td><img src='{$film['thumbnail']}'></td>
                    <td>{$film['title']}</td>
                    <td>{$film['year']}</td>
                    <td>{$film['rating']}</td>
                    <td><a href='edit.php?id=$id'>Edit</a></td>
                    <td><a href='delete.php?id=$id'>Delete</a></td>
                </tr>";
                }
            }
            ?>
            </table>
        </center>
        </form>
    </div>
</body>
</html>