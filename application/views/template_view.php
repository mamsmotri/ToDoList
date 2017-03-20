<html>
<head>
    <meta http-equiv="content-type" content="text/html; windows-1251"/>
    <title>Todo list</title>
    <meta charset="utf-8">
    <title>ToDoList</title>
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/jquery.dataTables.min.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="../../js/jquery-3.2.0.js" type="text/javascript"></script>
    <script src="../../js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="../../js/tether.min.js" type="text/javascript"></script>
    <script src="../../js/bootstrap.js" type="text/javascript"></script>

</head>
<body>
<div class="wrapper">
    <h1 style="float: left"><a href="/">Tasks</a></h1>

    <a style="float: right; padding-right: 1%;" href=
        <?
        if (!array_key_exists ('admin', $_SESSION)) {
            echo  '"/login"' . '>';
            echo "login";
        }
        else {
            echo  '"/login/logout"' . '>';
            echo "logout";
        }

        ?>
    </a>

    <div id="page">
        <div id="content">
            <div class="box">
                <?php include 'application/views/' . $content_view; ?>
            </div>
        </div>
    </div>
</div>
<div id="footer">

</div>
</body>
</html>