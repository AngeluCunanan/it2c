<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
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

         @media screen and (max-width: 570px) {
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
         <center><h1> MY SIMPLE CRUD</h1></center>
         <a href="index.php"><button style = "font-size : 20px;  font-family : times">Back</button></a><br><br>
   
         <form method="post" action="action_add.php">

               <center><table style = "font-size : 22px; font-family : Times" border="0" width="200">
               <tr>
                  <td>Title</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Times" type="text" name="title"></td>
               </tr>
               <tr>
                  <td>Thumbnail</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Times" type="file" name="thumbnail"></td>
               </tr>
               <tr>
                  <td>Year</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Times" type="text" name="year"></td>
               </tr>
               <tr>
                  <td>Rating</td>
                  <td>:</td>
                  <td><input style = "font-size : 18px; font-family : Times" type="text" name="rating"></td>
               </tr>
            </table><br><br>
            <center><input style = "font-size : 18px" type="submit" value="Save"></center>
         </form>
    </div>
</body>
</html>