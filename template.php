<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $pageTitle; ?></h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=product">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=contact">Contact</a>
            </li>
        </ul>
    </nav>

    <main>
        <?php echo $pageContent; ?>
    </main>

    <footer>
        &copy; <?php echo date('Y'); ?> hussein's website 
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
