<?php
require_once("inc/header.php");
?>
<!-- body -->

<div class="col-md-12 text-center">
    <h2>Hi Mr Samih Habbani, welcom to your profile!</h2>
</div>

<div class="card col-md-4">
    <img src="img/avatar_male.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Samih Habbani</h5>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">Samih@gmail.com</li>
        <li class="list-group-item text-center">16 rue veille du temple</li>
        <li class="list-group-item text-center">75006 Paris</li>
    </ul>
</div>

<div class="col-md-4">
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center"><b>My orders</b></li>
        <li class="list-group-item text-center">
            <p>Order n°02 from the 2023-01-20</p>
            <a href="#" class="badge badge-primary">In progress</a>
        </li>
        <li class="list-group-item text-center">
            <p>Order n°03 from the 2023-01-24</p>
            <a href="#" class="badge badge-success">Sent</a>
        </li>
    </ul>

    <ul class="list-group list-group-flush mt-5">
        <li class="list-group-item text-center"><b>All my orders</b></li>
        <li class="list-group-item text-center">
            <p>Order n°01 from the 2023-01-02</p>
            <a href="#" class="badge badge-success">Sent</a>
        </li>
    </ul>
</div>

<?php
require_once("inc/footer.php");
?>