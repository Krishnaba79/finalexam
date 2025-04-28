<?php 

    include("Header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #displaybook{
            margin-left:100px;
            text-align:center;
        }
        td{
            padding:1em;
            text-align:center;
        }
        table{
            padding:1em;
            margin:auto;
            text-align:center;
        }
    </style>
</head>
<body>
        <div id="displaystu">
            <h1>All Books</h1>
        <table>
        <tr>
            <th>fristname</th>
            <th>lastname</th>
            <th>email</th>
            <th>semester</th>
            <th>gender</th>
            <th>phonenumber</th>
        </tr>

        <?php 
            foreach ($data as $data) {
        ?>
        <tr>
            <td><?php echo $data["firstname"]; ?></td>
            <td><?php echo $data["lastname"]; ?></td>
            <td><?php echo $data["email"]; ?></td>
            <td><?php echo $data["semester"]; ?></td>
            <td><?php echo $data["gender"]; ?></td>
            <td><?php echo $data["phonenumber"]; ?></td>
            <td><a href="/delete/stu/<?php echo $data["name"]; ?>">Delete</a></td>
            <td><a href="/updatestu/<?php echo $data["name"]; ?>">Edit</a></td>
        </tr>
        <?php }?>
    </table>
        </div>
</body>
</html>