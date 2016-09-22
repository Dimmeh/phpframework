<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kwaliteit Schoenmakerij | De Leest</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Mobile style sheet -->
    <link rel="stylesheet" href="css/mediaQuerys.css">
</head>
<body>
    <div id="menuContainer">
        <div class="title">
            <h1>Kwaliteit Schoenmakerij</h1>
            <h3>De Leest</h3>
        </div>
        <a class="active" href="index.php">Home</a>
        <a href="wie-zijn-wij.php">Wie zijn wij?</a>
        <a href="wat-doen-we.php">Wat doen we?</a>
        <a href="reparatie.php">Reparatie</a>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="js/jquery-3.0.0.min.js" ></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>