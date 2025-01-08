<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukraine War Hub</title>
    <!-- Bootsrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="stylesheet.css" rel="stylesheet">
</head>

<body>
    <?php
    include 'parts/header.php';
    ?>
    <div style="height: 1px; background-color: white"></div>

    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'news':
                include 'pages/news.php';
                break;
            case 'donations':
                include 'pages/donations.php';
                break;
            case 'rellinks':
                include 'pages/rellinks.php';
                break;
            case 'warcrimedb':
                include 'pages/warcrimedb.php';
                break;
            default:
                include 'pages/home.php';
                break;
        }
    } else {
        include 'pages/home.php';
    }
    ?>
    <!-- Bootsrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>