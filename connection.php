<?php
require_once("inc/header.php");
?>
<!-- body -->
<div class="col-md-12 text-center">
    <h3>Get connected to access your profile!</h3>
</div>
<div class="col-md-5">
    <form method="" action="">
        <div class="form-group">
            <label for="pseudo"><b>Pseudo:</b></label>
            <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Enter your pseudo">
        </div>
        <div class="form-group">
            <label for="password"><b>Password:</b></label>
            <input type="password" class="form-control" id="password" placeholder="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-dark">Connection</button>
    </form>
</div>

<?php
require_once("inc/footer.php");
?>