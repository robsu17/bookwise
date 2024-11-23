<?php
/**
 * @var $livro Livro
 */
?>

<div class=" p-2 rounded border-stone-800 border-2 bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        <div>
            <div class="font-semibold">
                <a href="<?php echo 'livro?id='.$livro->id ?>" class="hover:underline">
                    <?php echo $livro->titulo; ?>
                </a>
            </div>
            <div class="text-xs italic">
                <?php echo $livro->autor; ?>
            </div>
            <div class="text-xs italic">🌟🌟🌟🌟🌟</div>
        </div>
    </div>
    <div class="text-sm">
        <?php echo $livro->descricao; ?>
    </div>
</div>