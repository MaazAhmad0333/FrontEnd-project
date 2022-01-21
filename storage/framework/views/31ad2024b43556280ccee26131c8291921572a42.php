<!DOCTYPE html>

<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>
        Gallery Page
    </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/gallery.css')); ?>">


    <body>

        <nav>
            <div class="logo">
                <h1 class="animated infinite heartBeat">Cafe Bar</h1>
            </div>
            <div class="menu">
                <a href="<?php echo e(route('index')); ?>">Home</a>
                <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
                <a href="https://www.facebook.com/dewheels.cafe/">About</a>
                <a href="<?php echo e(route('contact')); ?>">Contact</a>
            </div>
        </nav>



        <div class="container-fluid m-1 p-4 ">
            <div class="row ">


                <!--Burger  -->
                <div class="box1 text-center  m-0 p-0  col-md-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="image/burger.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Burgers</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span> </p>
                            <a href="#" class="btn  shadow ">Detail</a>
                        </div>
                    </div>
                </div>
                <!--Pizza  -->
                <div class="box2  text-center  m-0 p-0  col-md-3">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="image/pizza.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Burgers</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Cake -->
                <div class="box3 text-center  m-0 p-0   col-md-3">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="image/cake.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Burgers</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Cofee -->
                <div class="box4 text-center col-md-3 m-0 p-0  ">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="IMAGE/cofee.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Cofee</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Cream Shake -->
                <div class="box5 text-center col-md-3 mt-5 p-0  ">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="IMAGE/milkShake.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Cream Shake</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Strawberry Shake -->
                <div class="box6 text-center col-md-3 mt-5 p-0  ">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="IMAGE/strawberry.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Burgers</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Frozen Margarita -->
                <div class="box7 text-center col-md-3 mt-5 p-0  ">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="IMAGE/margarita.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Frozen Margarita</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="box8 text-center col-md-3 mt-5 p-0  ">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="image/food1.jpg" class="card-img-top" alt="reload">
                        <div class="card-body">
                            <h5 class="card-title">Burgers</h5>
                            <p class="card-text">Give it a <span style="color: Green;">Try</span></p>
                            <a href="#" class="btn shadow ">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\FrontEnd\laravel\resources\views/gallery.blade.php ENDPATH**/ ?>