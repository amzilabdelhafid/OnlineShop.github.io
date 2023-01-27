<?php
require_once("inc/header.php");
?>
<!-- body -->
<div class="col-md-12">
    <a href="#" class="badge badge-danger">Empty shooping cart</a>

    <table class="table my-5">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Black t-shirt</td>
                <td>
                    <form action="">
                        <select class="custom-select" id="exampleFormControlSelect1">

                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </form>
                </td>
                <td>99$</td>
                <td><img src="img/black_t-shirt.png" alt="Black t-shirt" style="width: 50px;"></td>
                <td><a href="#">Delete</a></td>
            </tr>
            <tr>
                <td colspan="5" class="text-right"><b>Total amount: </b>99$</td>
            </tr>
        </tbody>
    </table>
    <a href="index.php" class="badge badge-dark">Go back to t-shirt category</a>
    <div class="d-flex justify-content-end col-md-12">
        <form action="">
            <input type="submit" value="Pay" class="btn btn-outline-secondary">
        </form>
    </div>
</div>


<?php
require_once("inc/footer.php");
?>