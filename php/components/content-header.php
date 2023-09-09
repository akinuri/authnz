<section class="mb-3 px-1 flex justify-between items-center">
    
    <div>
        <nav class="text-xs">
            <ul class="flex gap-2">
                <?php for ($i = 0; $i < count($breadcrumbs); $i++) {
                    $breadcrumb = $breadcrumbs[$i] ?>
                <li>
                    <a class="text-blue-700 hover:underline" href="<?= $breadcrumb[0] ?>"><?= $breadcrumb[1] ?></a>
                </li>
                <?php if ($i != count($breadcrumbs) - 1) { echo "<li>/</li>"; } ?>
                <?php } ?>
            </ul>
        </nav>
        <h1 class="text-lg font-bold"><?= $title ?? "Untitled Page" ?></h1>
    </div>
    
    <div>
        <?php foreach ($actions ?? [] as $action) { ?>
        <a
            class="text-sm px-3 py-2 rounded bg-blue-300 hover:bg-blue-400/70 active:bg-blue-400/90"
            href="<?= $action[0] ?>"
            ><?= $action[1] ?></a>
        <?php } ?>
    </div>
    
</section>