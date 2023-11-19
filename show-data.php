<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <!-- My CSS file -->
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="header-container">
                <div class="logo col-4 col-md-8 ms-5">
                    <img src="logo.png" alt="Your Logo" class="img-fluid">
                </div>
                <div class="col-10 col-md-4 text-center">
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">Home</a>
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">About US</a>
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">Contact US</a>
                    <a href="show-data.php" class="text-decoration-none border bg-info rounded text-dark px-2 py-1 ">Show Data</a>
                </div>
            </div>
        </div>
    </header>


    <section class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1 class="display-6 text-center">
                            <b>Fatch Data From Databae in PHP</b>
                        </h1>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <td> <b>Serial Number</b> </td>
                                        <td> <b>First Name</b> </td>
                                        <td> <b>Last Name</b> </td>
                                        <td> <b>Mobile Number</b> </td>
                                        <td> <b>Email</b> </td>
                                        <td> <b>Message</b> </td>      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include('data_fetch.php'); ?>
                                </tbody>
                            </table>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>