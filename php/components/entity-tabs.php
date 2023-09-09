<section class="mb-4 flex justify-between items-center">
    
    <div>
        <?php foreach ($items ?? [] as $item) { ?>
        <a
            class="text-sm px-2 py-1 rounded bg-blue-300/40 border border-blue-300/40 hover:bg-blue-300/60 active:bg-blue-300/80"
            href="<?= $item[0] ?>"
            ><?= $item[1] ?></a>
        <?php } ?>
    </div>
    
</section>