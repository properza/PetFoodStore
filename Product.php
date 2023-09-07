<?php
session_start();
include('server.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must Login first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>
<?php $sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>


    <link rel="stylesheet" href="style.css">
    <link href="features.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <script src="PetFoodStore/js/bootstrap.bundle.min.js"></script>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                Pets Shop
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
                <li><a href="Product.php" class="nav-link px-2 link-secondary">Product</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Toys</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Healthy</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/60/60992.png" class="nav-link px-2 link-dark" alt="Bootstrap" width="33" height="33"></a> <span>0</span>
            </ul>

            <div class="col-md-3 text-end">
                <div class="col-md-3 text-end">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <p>
                            <strong><?php echo $_SESSION['username']; ?></strong>
                            <a href="index.php?logout='1'" style="color: red;"> Logout</a>
                        </p>
                    <?php endif ?>
                </div>
        </header>
    </div>

    <?php
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <form1 method="post" action="product.php?action=add&id=<?php echo $row['pro_id']; ?>">
            <div style="text-align: center;" class="container px-4 py-5" id="custom-cards">
                <?php
                if ($row['pro_id'] == 1) { ?>
                    <h2 class="pb-2 border-bottom">Cat Food</h2>
                <?php } elseif ($row['pro_id'] == 3) { ?>
                    <h2 class="pb-2 border-bottom">Dog Food</h2>
                <?php } ?>
                
                <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                    <div>
                        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?php echo $row['img']; ?>');">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <p class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"></p>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <small style="color:black"><?php echo $row['size']; ?></small>
                                </ul>
                            </div>
                        </div>
                        <p><?php echo $row['pro_name']; ?> </p>
                        <div style="text-align:center">
                            <button type="button" class="btn btn-primary">ใส่ตะกร้า</button>
                            <a>ราคา <?php echo $row['pro_price']; ?> บาท</a>
                        </div>
                    </div>
                </div>
            
            </div>
        </form1>
    <?php } ?>

    <!-- For  feature ubdate -->

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">Icon grid</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#cpu-fill"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#calendar3"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#home"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#toggles2"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#geo-fill"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
                    <use xlink:href="#tools"></use>
                </svg>
                <div>
                    <h3 class="fw-bold mb-0 fs-4">Featured title</h3>
                    <p>Paragraph of text beneath the heading to explain the heading.</p>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>