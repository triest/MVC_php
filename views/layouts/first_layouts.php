<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <?
            echo "auth_user: " . var_dump($_SESSION["auth_user"]);
            global $userauth;
            if($userauth==null){
                ?>
                    <a href="/login/">Войдите</a>
        <?
            }
        ?>
        <?php
            include($contentPage);
        ?>
    </div>
</div>
