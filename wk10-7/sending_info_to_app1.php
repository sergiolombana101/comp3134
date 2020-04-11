<form method="get" action="sending_info_to_app1.php">
 <input name="q" placeholder="Enter Text">
 <br/>
 <input type="submit" name="submit" value="Go">
</form>

<?php

    if(count($_GET) > 0){
        print_r($_GET);
    }

    if(isset($_GET['submit'])){
        print("Form values: "+ $_GET['q']);
    }

?>