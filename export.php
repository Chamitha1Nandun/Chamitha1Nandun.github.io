<?php
$conn=mysqli_connect("localhost","root","19950901","loginsystem");
$output='';
if(isset($_POST["export"])){
    
    $sql="SELECT * FROM users ORDER BY user_id DESC";
    $result= mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0)
    {
        $output .= '<table class="table" border="1"> <tr><th>Id</th><th>User Type</th><th>First Name</th><th>last Name</th><th>User Name</th><th>Gender</th><th>Email</th><th>Password</th><th>Permanent Address</th></tr>';
    
        while ($row = mysqli_fetch_array($result))
        {
            $output .= '<tr><td>'.$row["user_ID"].'</td><td>'.$row["user_type"].'</td><td>'.$row["first_name"].'</td><td>'.$row["last_name"].'</td><td>'.$row["user_name"].'</td><td>'.$row["gender"].'</td><td>'.$row["email"].'</td><td>'.$row["password"].'</td><td>'.$row["address"].'</td></tr>';
        }
    }
    $output .= '</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=download.xls");
    echo $output;
}
?>