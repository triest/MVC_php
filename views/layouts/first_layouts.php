<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <?
            var_dump($_SESSION);
            var_dump($_SESSION['auth_user']);

            if ($_SESSION['auth_user'] == "" || $_SESSION['auth_user'] == null) {
                ?>
                <a href="/login/">Login</a>
                <?
            }
        ?>
        <?php
            include($contentPage);
        ?>
    </div>
</div>
