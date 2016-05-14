<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php


require_once "../app/init.php";

$app  = new App;

?>

<div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Contact Us</h4>
            </div>
            <div class="modal-body">
                If you have any inquiries complaints
                or suggestions, keep it to yourselves.
                You should be happy we are offering you
                our services..
            </div>
            <div class="modal-footer">
                <button class="btn btn-default">close</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
