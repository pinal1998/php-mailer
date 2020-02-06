<?php


$connection = mysqli_connect("localhost","root","","akashtechnolab");

if ($_POST)
{
    $cat_name=$_POST['cat_name'];
    $image=$_POST['image'];
    $query=mysqli_query($connection," insert into tbl_category(cat_name,image)values('{cat_name}','{image}')")
            or die (mysqli_error($connection));
if ($query)
{
    echo "<script>alert ('Record inserted');</script>";
}
}
?>
<html>
    <body>
    <center>
        <form method="post">
            <table border="2">
                <tr>
                    <td>Category name</td>
                    <td><input type="text" name="cat_name"></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="text" name="image"></td>
                    
        
                </tr>
                <tr>
                    <td><input type="submit">
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>

