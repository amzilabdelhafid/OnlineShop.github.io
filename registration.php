<?php
require_once("inc/header.php");
?>
<!-- body -->

<div class="col-md-10">
    <form method="" action="" class="form-row">
        <div class="form-group col-md-6">
            <label for="pseudo"><b>Pseudo:</b></label>
            <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo" placeholder="Enter your pseudo">
        </div>

        <div class="form-group col-md-6">
            <label for="password"><b>Password:</b></label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>

        <div class="form-group col-md-3">
            <label for="lastName"><b>Last Name:</b></label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter your Last Name">
        </div>

        <div class="form-group col-md-3">
            <label for="firstName"><b>First Name:</b></label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter your First Name">
        </div>

        <div class="form-group col-md-3">
            <label for="email"><b>Email:</b></label>
            <input type="email" class="form-control" id="email" placeholder="Enter your Email">
        </div>

        <div class="form-group col-md-3">
            <label for="sexe"><b>Sexe:</b></label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="sexeM" value="Male" checked>
                <label class="form-check-label" for="sexeM">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexe" id="sexeF" value="Female">
                <label class="form-check-label" for="sexeF">
                    Female
                </label>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="address"><b>Address:</b></label>
            <input type="text" class="form-control" id="address" placeholder="Enter your Address">
        </div>

        <div class="form-group col-md-6">
            <label for="city"><b>City:</b></label>
            <input type="text" class="form-control" id="city" placeholder="Enter your City">
        </div>

        <div class="form-group col-md-6">
            <label for="postalCode"><b>Postal Code:</b></label>
            <input type="text" class="form-control" id="postalCode" placeholder="Enter your Postal Code">
        </div>

        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-dark">Create my account</button>
        </div>
        
    </form>
</div>

<?php
require_once("inc/footer.php");
?>