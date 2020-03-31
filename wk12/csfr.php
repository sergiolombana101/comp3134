<?php 
    if(isset($_POST['submit_btn'])){
        $message = '';
        $username = $_POST["username"];
        $pass = $_POST["password"];

        if($username == 'host' && $pass == 'pass'){
            $message = "Succesfully authenticated";
        }else{
            $message = "Invalid credentials";
        }
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
