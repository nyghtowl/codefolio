<?php
if ($_SERVER['PHP_SELF'] == '/dashboard.php') {
    $home = true;
}
?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">
                <img style="height:30px" src="img/codefolio_logo.png" />
            </a>

            <div class="nav-collapse">
                <ul class="nav">
                    <li <?php if ($home) : ?>class="active"<?php endif ?>><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>