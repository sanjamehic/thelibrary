<!DOCTYPE html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- Stylesheet CSS for custom styles-->
<link rel="stylesheet" type="text/css" href="app.css">


<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,600&display=swap" rel="stylesheet">


<title>
    The Public Library
</title>

</head>

<style>
 ul.nav li.dropdown:hover > ul.dropdown-menu {
        overflow: visible;
    }

    p#error {
        color: red;
  }

    a:hover {
        text-decoration: none;
        color: rgb(5, 5, 5)
    }
    .nav-link {
        color: rgb(5, 5, 5)
    }
    .nav-link:hover {
        transform: scale(1.05);
    }

    .btn-secondary:active {
        text-decoration: none;
        background-color: rgb(203, 35, 35)
    }

    a {
        text-decoration: none;
        color: grey
    }
    div.gallery {
        border: 1px solid #ccc;
    }

    .gallery:hover {
        transform: scale(1.05);
        transition: 0.2 all;
    }


    div.desc {

        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .label.btn-outline-secondary {
        border-color: #873538;
        color: black;
    }


    .label.btn-check:active+.btn, .btn-check:checked+.btn, .btn.show, .btn:active .label.btn-outline-secondary:hover, .btn-outline-secondary:hover{
        background-color: #ED1C24;
        border-color: #ED1C24;
        color: white

    }
    .btn-outline-secondary, .btn-group {
        font-size: 13px;
    }


    @media only screen and (max-width: 700px) {
        .responsive {
        width: 49.99999%;
        margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
        width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
    body {
        font-family: 'Open Sans', sans-serif;

    }

    nav {
        font-size: 15px;
    }

    .img-thumbnail {
        padding:0%
    }
    input::placeholder {
    font: 14px/3 sans-serif;
    opacity: 0.5;
    color:#AFB2B3;

    }
    .flex-container {
    display: flex;
    flex-direction: row;
    }

    .flex-item-left {
        flex: 60%;
    }

    .flex-item-right {
        flex: 40%;
    }

    /* Responsive layout - makes a one column layout instead of a two-column layout */
    @media (max-width: 800px) {
    .flex-container {
        flex-direction: column;
    }

    }
    .pagination, .pagination-active, .page-item:ac{
        background-color: #ed1c24;
        border-color:#ed1c24;

    }

    .alert {
        color:white;
    }
</style>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("myDropdown");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
</script>


<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<header>

</header>

<div class="d-flex justify-content-center">
    <div class="row">
        <div class="col-md-12">
            <x-nav />
        </div>
    </div>
</div>

<hr>

<body>

     <!-- Main content -->

    <div class="px-5">

        <div class="container-fluid">
            <div class="mb-3 ">
                {{$slot}}
            </div>

        </div>

        <!--Footer-->

        <footer id="newsletter" class=" col-md-12 mt-2">

            <div class="card text-center bg-light p-3">
                <div class="card-body ">
                    <img id="newsletter-img" src="\Images\Icons\Newsletter.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                    <h5 class="card-title">Subscribe to our newsletter</h5>
                    <form class="container mt-3">
                        <input class="form-control mb-3" type="search" aria-label="Subscribe">
                        <x-button>
                            Subscribe
                        </x-button>
                    </form>
                </div>
            </div>

            <p><small> Copyright &copy; 2022 Sanja</small></p>
        </footer>
    </div>

<!-- Success message add it later -->

</body>
</html>
