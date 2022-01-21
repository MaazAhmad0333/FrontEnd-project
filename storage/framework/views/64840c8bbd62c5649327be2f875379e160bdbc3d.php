<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/contact-style.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="text/javascript" href="contact.js">
    <script>
        function showMessage() {
            alert("You message has successfully delivered.");
        }
    </script>
</head>

<body>
    <div class="container ">
        <div class="contact-box bg-success shadow">
            <div class="left">
                <img src="IMAGE/contact.jpg" width="100%" alt="reload" style="background-repeat: no-repeat; background-size: cover; z-index: 2;">
                <img src="IMAGE/open.jpg" width="100%" height="400px" alt="reload" style="background-repeat: no-repeat; background-size: cover; z-index: 1;">>
            </div>
            <div class="right">
                <h2>Contact Us</h2>
                <input type="text" class="field" placeholder="Your Name">
                <input type="text" class="field" placeholder="Your Email">
                <input type="text" class="field" placeholder="Phone">
                <textarea placeholder="Message" class="field"></textarea>
                <button onclick="showMessage()" id="send" class="btn btn-secondary shadow"> Send </button>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\FrontEnd\laravel\resources\views/contact.blade.php ENDPATH**/ ?>