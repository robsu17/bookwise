<?php
http_response_code($code);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página não encontrada!</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-950 flex justify-center items-center h-screen">
<div class="text-stone-200">
    <h1 class="text-7xl font-semibold text-center mb-6">
       Error <?php echo $code?>
    </h1>
    <?php if ($code == 404): ?>
        <h3 class="text-center text-xl">Página não encontrada!</h3>
    <?php endif; ?>
</div>
</body>
</html>