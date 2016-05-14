<?php

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if($uri == '/xenon/public/signup'){
?>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a href="http://xenonbank.com" class="navbar-brand">Xenon Bank |</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse navHeaderCollapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://localhost/xenon/public/">HOME</a> </li>
                        <li><a href="#contact" data-toggle="modal" >CONTACT US</a> </li>
                        <li><a href="#" >ABOUT US</a> </li>
                    </ul>
                </div>
            </div>
        </div><br>


    <?php } else {?>
<div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <a href="#" class="navbar-brand">Xenon Bank |</a>
                <div class="signupForm">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse navHeaderCollapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" >HOME</a> </li>
                        <li><a href="http://localhost/xenon/public/signup">SIGNUP</a></li>
                        <li><a href="#contact" data-toggle="modal" >CONTACT US</a> </li>
                        <li><a href="#" >ABOUT US</a> </li>
                    </ul>
                </div>
            </div>
        </div><br>





<?php } ?>

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
