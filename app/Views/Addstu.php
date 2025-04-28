
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
        #container{
            width:100%;
        }
        #book{
            width:500px;
            background-color:white;
            border:2px solid whitesmoke;
            padding:1em;
            text-align:center;
            margin:auto;
        }
        table{
            margin:auto;
            text-align:center;
        }
        td{
            font-weight:bold;
            padding:1em;

        }

        button{
            width:100px;
            padding:0.5em;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="stu">
            <?php echo session()->getFlashdata("message"); ?>
            <?php echo session()->getFlashdata("error"); ?>
            <h1>Add Books</h1>
            <form action="/stu/add" method="post">
                <table>
                    <tr>
                        <td><label for="">fristname</label></td>
                        <td><input type="text" placeholder='firstname' name="firstname"></td>
                    </tr>       
                      <tr>
                        <td><label for="">lastname</label></td>
                        <td><input type="text" placeholder='lastname' name="lastname"></td>
                    </tr>        
                     <tr>
                        <td><label for="">email</label></td>
                        <td><input type="email" placeholder='email' name="email"></td>
                    </tr>      
                    
                    <tr>
                        <td><label for="">semester</label></td>
                        <td><input type="number" placeholder='semester' name="semester"></td>
                    </tr>    
                       <tr>
                        <td><label for="">gender</label></td>
                        <td><input type="gender" placeholder='gender' name="gender"></td>
                    </tr>    
                    <tr>
                        <td><label for="">phonenumber</label></td>
                        <td><input type="number" placeholder='phonenumber' name="phonenumber"></td>
                    </tr>  
                    
                    
                    
                    
                </table>
                <button>Add book</button>
            </form>
        </div>
    </div>
</body>
</html>