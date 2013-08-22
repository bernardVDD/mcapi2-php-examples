<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title_for_layout; ?> | MC API PHP Wrapper Example</title>
    <?php echo $this->Html->css('bootstrap.min'); ?>
</head>
<body>
<div class="container">
    <div class="navbar" style="margin-top:20px;">
        <div class="navbar-inner">
            <a class="brand" href="/">MC API PHP Example</a>
            <ul class="nav">
                <li><a href="/lists">Lists</a></li>
                <li><a href="/reports">Reports</a></li>
            </ul>
        </div>
    </div>

    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>

</div>
</body>
</html>

