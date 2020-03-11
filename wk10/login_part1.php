<h1>Weak Password</h1>
<form method="post" action="login_part1.php">
 <label>Password</label>
 <input type="password" name="password">
 <br/>
 <input type="submit" name="submit_btn">
</form>

<?php 

    if(isset($_POST['submit_btn'])){
        $pass = $_POST["password"];
        validate($pass);
    }
    function validate($pass){
        $is_valid = false;
        $valid_passwords = [
            "123456",
            "123456789",
            "qwerty",
            "password",
            "111111",
            "12345678",
            "abc123",
            "1234567",
            "password1",
            "12345"
        ];
        foreach($valid_passwords as $password){
            if($password == $pass){
                $is_valid = true;
                echo "Succesfully authenticated";
            }
        }
        if(!$is_valid){
            echo "Incorrect password";
        }
    }


?>