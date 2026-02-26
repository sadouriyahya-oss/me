<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "sadouri";

$connection = mysqli_connect($host, $username, $password, $db);

if(!$connection){
    echo ("فشل الاتصال: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retype_password = $_POST['password2'];

    // التحقق من كلمة المرور
    if($password !== $retype_password){
        die("كلمة المرور غير متطابقة!");
    }

    // تشفير كلمة المرور
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (first_name, last_name, gender, email, password) 
              VALUES ('$first_name','$last_name','$gender','$email','$hashed_password')";

    if(mysqli_query($connection, $query)){
        echo "تم التسجيل بنجاح!";
    } else {
        echo "خطأ: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>