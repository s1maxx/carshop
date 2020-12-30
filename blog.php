<?php require_once "config.php" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once "head.php" ?>

    <title><?php echo $blog['blog'] ?></title>
</head>

<body class="body_hide">

    <?php require_once "header.php" ?>

    <!--Navigator start-->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumbs-main <?php echo $_SESSION['lang'] ?>">
                <ol class="breadcrumb">
                    <li><a href="index.php"><?php echo $lang['home'] ?></a></li>
                    <li class="active"><?php echo $lang['blog'] ?></li>
                </ol>
            </div>
        </div>
    </div>
    <!--Navigator end-->

    <!--headtext-start-->
    <div class="text-center" style="height:400px">
        <br><br><br><br><br><br>
        <div class="container">
            <div>
                <h2><b><?php echo $blog['temp'] ?></b></h2>
            </div>
        </div>
    </div>
    <!--headtext-end-->

    <?php require_once "footer.php" ?>
</body>

</html>