
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
            <h1>Add stu</h1>
          
            <form action="<?=base_url('/update/stu/'.$data['name']) ?>" method="post">
                <table>
                    <tr>
                        <td><label for="">Student name</label></td>
                        <td><input type="text" placeholder='firstname' name="firstname" value=<?php print_r($data["stuname"]); ?>></td>
                    </tr>       
                      <tr>
                        <td><label for="">lastname</label></td>
                        <td><input type="text" placeholder='lastname' name="lastname" value=<?php print_r($data["lastname"]);?>></td>
                    </tr>        
                     <tr>
                        <td><label for="">email</label></td>
                        <td><input type="text" placeholder='email' name="email" value=<?php print_r($data["email"]);?>></td>
                    </tr>      
                    
                    <tr>
                        <td><label for="">semester</label></td>
                        <td><input type="text" placeholder='semester' name="semester" value=<?php print_r($data["semester"]);?>></td>
                    </tr>    
                       <tr>
                        <td><label for="">gender</label></td>
                        <td><input type="gender" placeholder='gender' name="gender" value=<?php print_r($data["gender"]);?>></td>
                    </tr>    
                    
                    
                    
                    
                </table>
                <button>update stu</button>
            </form>
        </div>
    </div>
</body>
</html>


