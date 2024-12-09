<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "Request method is post".'<br>';
    if(isset($_POST['submit']))
    {
        echo "Submit is set";
        if(empty($_POST['username']))
        {
            echo "User name is". $_POST['username']."<br>";
        }
        else 
        {
            "EMPTY";
        }
        
    }
    else{
        echo "Submit is not set";
    }
}
else
{
    echo "Requested method is not post";
}
?>