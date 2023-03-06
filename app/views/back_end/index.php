<?php

include_once '../app/views/back_end/Layout/headder.php';

if (isset($_GET['error']))
{
    $error = $_GET['error'];
}
else
{
    $error = '';
}
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php include_once '../app/views/back_end/Layout/navbar.php'; ?>
        <?php include_once '../app/views/back_end/Layout/sidebar.php'; ?>
        <?php include_once '../app/views/back_end/dashboard.php'; ?>
        <?php include_once '../app/views/back_end/Layout/control-sidebar.php'; ?>
        <?php include_once '../app/views/back_end/Layout/footer.php'; ?>
    </div>

</body>
</html>