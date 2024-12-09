<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
    </head>
    <body>
        <h2>Admin Registration Page</h2>
        <form action="" method = "post">
           <fieldset>
            <legend>Admin Information</legend>
            <table>
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" id="name" name="username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name = "password"></td>
                </tr>
                <tr>
                    <td>Select Gender</td>
                    <td><input type="radio" name= "gender" id= "gender" value = 'male'>Male</td>
                    <td><input type="radio" name="gender" id= "gender">Female</td>
                </tr>
                <tr>
                    <td>Select them</td>
                    <td><input type="checkbox" name="one">One</td>
                    <td><input type="checkbox" name ="two">Two</td>
                    <td><input type="checkbox" name="three">Three</td>
                </tr>
                <tr>
                    <td>Date of Birth: </td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td>Upload NID: </td>
                    <td><input type="file" name="file"></td>
                </tr>
            </table>
           </fieldset>
           <button type="submit" name="submit">Submit</button>
           <button type="reset" name ="reset">Reset</button>
        </form>

    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "Request method is post".'<br>';
        if(!empty($_POST['username']) || !empty($POST['password']))
        {
            if(!ctype_alpha($_POST['username']))
            {
                echo "User name must be Alphabitic<br>";
                //echo "Length of the string is :". strlen($_POST['username']). "<br>";
            }
            else if(strlen($_POST['password'])<=6)
            {
                echo "Password will grater then 6<br>";
            }
            else if(!isset($_POST['gender']))
            {
                echo "Select any Gender<br>";
            }
            else
            {
                $name = $_POST['username'];
                $json = array('Name'=> $_POST['username'],
                'Password'=> $_POST['password'],
                'Gender'=> $_POST['gender']);
                $jsonarray= json_encode($json, JSON_PRETTY_PRINT);
                file_put_contents("$name .reg_info.json",$jsonarray);
            }

            //print "User name is {$_POST['username'] }<br>";
        }
        else 
        {
            echo "Empty<br>";
        }
        
    }
    else
    {
        echo "Request method is Not POST";
    }
}

?>

<?php
$file = file_get_contents('reg_info.json');
$array = json_decode($file,true);
foreach($array as $key => $value)
{
    echo $key .':'.$value.'<br>';
}
?>