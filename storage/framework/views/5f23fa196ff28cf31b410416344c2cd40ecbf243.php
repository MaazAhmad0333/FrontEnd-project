<!DOCTYPE html>
<html>

<head>
    <title>Cafe</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <header>

        <nav>
            <div class="logo">
                <h1 class="animated infinite heartBeat">Cafe Bar</h1>
            </div>
            <div class="menu">
                <a href="#">Home</a>
                <a href="<?php echo e(route('gallery')); ?>">Gallery</a>
                <a href="https://www.facebook.com/dewheels.cafe/">About</a>
                <a href="<?php echo e(route('contact')); ?>">Contact</a>
            </div>
        </nav>
        <main>
            <section>
                <h3>Welcome to CAFE </h3>
                <h1>We Serve<span class="change_content"> </span></h1>
                <a href="https://www.facebook.com/CafeDistrict17" class="btnone">Learn more</a>
                <a href="<?php echo e(route('login')); ?>" class="btntwo">SignUp Here</a>
            </section>
        </main>

    </header>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\FrontEnd\laravel\resources\views/index.blade.php ENDPATH**/ ?>