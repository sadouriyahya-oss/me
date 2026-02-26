<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "sadouri";

$connection = mysqli_connect($host, $username, $password, $db);

if(!$connection){
    die("فشل الاتصال: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // البحث عن المستخدم
    $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connection, $query);

    if($result && mysqli_num_rows($result) > 0){
        $user_data = mysqli_fetch_assoc($result);

        // التحقق من كلمة المرور
        if(password_verify($password, $user_data['password'])){
            echo "تم تسجيل الدخول بنجاح!";
            // هنا يمكنك عمل جلسة (session) وتحويل المستخدم لصفحة أخرى
            // session_start();
            // $_SESSION['userid'] = $user_data['id'];
            // header("Location: profile.php");
            // exit;
        } else {
            echo "كلمة المرور غير صحيحة!";
        }
    } else {
        echo "البريد الإلكتروني غير موجود!";
    }
}

mysqli_close($connection);
?>