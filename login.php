<?php

    if(!empty($_POST['username'] ) && !empty($_POST['password'])){
        require_once 'dbConnect.php';
        $user = mysql_query("SELECT `nickname` , `id` FROM `users` WHERE `nickname` =". $_POST['username'] . "AND `password` = " .sha1($_POST['password']));

        if($user){
            $data = array();                 
            $data = mysql_fetch_assoc($user);
            session_start();
            $_SESSION['username'] = $data['nickname'];
            echo $_SESSION['username'];
        }
        else {
            echo "wrong password or username";
        }
    }
    else {
        echo "enter a username and a password";
    }
?>
<form action="index.php?page=login" method="post">
    <label>username:
        <input type="text" name="username" required/>
    </label>
    <label>password:
        <input type="password" name="password" required/>    
    </label>
    <input type="submit" value="login!" />
</form>
