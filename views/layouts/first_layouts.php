<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <?

            if ($_SESSION['auth_user'] == "" || $_SESSION['auth_user'] == null) {
                ?>
                <a href="/login/">Login</a>
                <?
            } else {
                ?>
                <a href="/login/logout">Log out</a>
                <?
            }
        ?>
        <?php
            include($contentPage);
        ?>
    </div>
</div>
