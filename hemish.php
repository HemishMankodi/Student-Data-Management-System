    <?php

$host="localhost";

$user="root";

$password="";

$db="charusat";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['username'];

    $pass = $_POST['password'];

    $sql="select * from user where username='".$name."' AND password='".$pass."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);
  
    if($row["usertype"]=="student")
    {
        header("location:studenthome.php");
    }
 
    else if($row["usertype"]=="admin")
    {
        header("location:adminhome.php");
    }
    else{
        echo "username or password do not match";
    }
    
}
?>