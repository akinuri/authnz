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
        <?php foreach ($actions ?? [] as $action) {
            echo component("anchor-button-primary", [
                "href" => $action[0],
                "text" => $action[1],
                "class" => "bg-blue-300/70 hover:bg-blue-300/90 active:bg-blue-400/60",
            ]);
        } ?>
    </div>
    
</section>