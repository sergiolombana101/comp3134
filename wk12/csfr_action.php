<?php 

    $confirmation_post = '';
    if(isset($_POST['submit_btn'])){
        $message = '';
        $username = $_POST["username"];
        $pass = $_POST["password"];
        $confirmation_post = $_POST["confirmation"];

        if($username == 'host' && $pass == 'pass'){
            $message = "Succesfully authenticated";
        }else{
            $message = "Invalid credentials";
        }
    }

    session_start();
    $confirmation_get = $_SESSION['confirmation'];
    if($confirmation_get == $confirmation_post && $confirmation_get != '' && $confirmation_post != ''){
        echo "Values are equal";
    } 

?>


<form method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username"><br>
        <label for="password">Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit_btn" value="Submit"><br>
        <div class="splash_msg"><?php echo $message; ?></div>
</form>
