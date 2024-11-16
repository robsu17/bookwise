<form class="w-full flex space-x-2 mt-6">
    <input
        type="text"
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"
        placeholder="Pesquisar..."
        name="pesquisar"
    />
    <button type="submit">🔍</button>
</form>
<section class="flex flex-col sm:grid grid-cols-2 md:grid-cols-3 gap-4">
    <?php foreach ($livros as $livro): ?>
        <div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">imagem</div>
                <div>
                    <div class="font-semibold">
                        <a href="<?php echo 'livro?id='.$livro['id'] ?>" class="hover:underline">
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
