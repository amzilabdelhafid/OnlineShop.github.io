<?php
require_once("inc/header.php");
?>
<!-- body -->

<div class="card col-md-4">
    <img src="img/black_t-shirt.png" class="card-img-top" alt="black_t-shirt">
    <div class="card-body">
        <h5 class="card-title">black t-shirt</h5>
        <p class="card-text">Some quick example text.</p>
    </div>
</div>

<div class="col-md-4">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Category: t-shirt</li>
        <li class="list-group-item">Color: black</li>
        <li class="list-group-item">Size: S</li>
        <li class="list-group-item">Price: 99$</li>

        <form action="">
            <li class="list-group-item">
                <label>Quntity</label>
                <select class="custom-select" id="exampleFormControlSelect1">
                    <option>Choose Quntity</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </li>
            <input class="btn btn-outline-secondary mt-5 w-100" type="submit" disabled value="Add to cart">
        </form>
    </ul>

</div>

<?php
require_once("inc/footer.php");
?>