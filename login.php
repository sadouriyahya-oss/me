<?php include ("calsses/connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SadouriYahya | Log in</title>
</head>
<style>
    #di{
        height: 100px;
        background-color: #3c5a99;
        color: white;
        padding: 4px;
    }
    #signup{
        background-color: green;
        width:70px;
        text-align: center;
        padding: 4px;
        border-radius: 4px;
        float: right;
    }
    #central_menu{
        background-color: white;
        width: 800px;
        margin: auto;
        margin-top: 50px;
        padding: 10px;
        padding-top: 50px;
        text-align: center;
        font-weight: bold;
    }
    #text{
        height: 40px;
        width: 300px;
        border-radius: 4px;
        border: solid 1px #888;
        padding: 4px;
        font-size: 14px;
    }
    #button{
        width: 300px;
        height: 40px;
        border-radius: 4px;
        border: 4px;
        background-color: darkred;
        color: white;
    }
</style>
<body style="font-family: tahoma;background-color: #e9ebee;">
    <div id="di">
        <div style="font-size: 40px;">SadouriYahya</div>
        <div id="signup">signup</div>
    </div>

    <div id="central_menu">
        log in to my website
        <br><br>

        <!-- النموذج -->
        <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Email" id="text"><br><br>
            <input type="password" name="password" placeholder="Password" id="text"><br><br>
            <input type="submit" id="button" value="log in"><br><br>
        </form>
    </div>
</body>
</html>