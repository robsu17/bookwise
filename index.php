<?php
require 'dados.php';
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-950 text-stone-200">
<header class=" bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
        <div class="font-bold text-xl tracking-wide">Book Wise</div>
        <ul class="flex space-x-4 font-bold">
            <li><a href="/" class="text-lime-500">Explorar</a></li>
            <li><a href="/meus-livros.php" class="hover:underline">Meus livros</a></li>
        </ul>
        <ul>
            <li><a href="/login" class="hover:underline">Fazer Login</a></li>
        </ul>
    </nav>
</header>

<main class="mx-auto max-w-screen-lg space-y-6 px-4 mb-6">
    <form class="w-full flex space-x-2 mt-6">
        <input
                type="text"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"
                placeholder="Pesquisar..."
                name="pesquisar"
        />
        <button type="submit">🔍</button>
    </form>

    <!-- Lista de livros -->

    <section class="flex flex-col sm:grid grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Livros -->
        <?php foreach ($livros as $livro): ?>
            <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div>
                        <div class="font-semibold">
                            <a href="<?php echo 'livro.php?id='.$livro['id'] ?>" class="hover:underline">
                                <?php echo $livro['title']; ?>
                            </a>
                        </div>
                        <div class="text-xs italic">
                            <?php echo $livro['author']; ?>
                        </div>
                        <div class="text-xs italic">🌟🌟🌟🌟🌟</div>
                    </div>
                </div>
                <div class="text-sm">
                    <?php echo $livro['description']; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>
