<?php 
if (!isset($_SESSION["username"]) || (isset($_SESSION["Is_admin"]) || $_SESSION["is_admin"!="1"])){
    ?>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="display-1 text-danger">401</h1>
            <h2 class="mb-3">Unauthorized Access</h2>
            <p class="lead">Sorry, you're not authorized to view this page</p>
            <a href="login.html" class="btn btn-primary">Go to login</a>
</div>
</div>
<?php exit; }?>