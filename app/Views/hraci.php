<!doctype html>
<html lang="cs">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Karty vedle sebe — Tailwind</title>
    <link rel="stylesheet" href="node_modules/flag-icons/css/flag-icons.min.css">
    <link rel="stylesheet" href="src/output.css">

</head>

<body class="bg-gray-100">
    <?php include 'pages/header.php'; ?>


    <!-- Rodič je GRID -->
    <div class="max-w-6xl mx-auto mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <?php include 'pages/cards.php'; ?>
    </div>


</body>

</html>