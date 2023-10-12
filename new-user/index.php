<?php
// include 'include/autoload.php';
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = "HOME";

include 'include/header.php';
include 'include/navbar.php';
?>

</div>
<div class="container py-5">
    
    <div class=" row flex justify-center gap-4">

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-3">[user name]</h5>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Barter</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>


                <a href="#" class="btn btn-primary flex justify-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View More Details</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">[user name]</h5>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Rent</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                <i class="fa-solid fa-calendar-days"></i>
                <span>[FROM DATE] - [TO DATE]</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>

                <a href="#" class="btn btn-primary flex justify-center">View More Details</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">[user name]</h5>
                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Trade</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>
                <a href="#" class="btn btn-primary flex justify-center">View More Details</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">[user name]</h5>
                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Barter</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>
                <a href="#" class="btn btn-primary flex justify-center">View More Details</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">[user name]</h5>
                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Barter</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>
                <a href="#" class="btn btn-primary flex justify-center">View More Details</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">[user name]</h5>
                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Barter</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>
                <a href="#" class="btn btn-primary flex justify-center">View More Details</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="../image/himaya.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">[user name]</h5>
                <div class="card-text mb-3">
                    <i class="fa-solid fa-location-arrow mr-3"></i>
                    <span>Location of Item</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-phone"></i>
                    <span>09123456789</span>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-list"></i>
                    <span>Category</span>

                    <div class="card-text mt-1" style="margin-left: 12px">
                        <i class="fa-regular fa-circle-dot ml-4"></i>
                        <span>Barter</span>
                    </div>
                </div>

                <div class="card-text mb-3">
                    <i class="fa-solid fa-peso-sign"></i>
                    <span>100.00</span>
                </div>
                <a href="#" class="btn btn-primary flex justify-center">View More Details</a>
            </div>
        </div>

    </div>
</div>

<div class="container py-5">


</div>

<div class="container py-5">
    <div class="row p-0">

    </div>
</div>

<div class="container py-5">

    <div class="row py-5 text-center">

    </div>


</div>

<?php
include '../include/modal/more.php';
include 'include/footer.php';
?>