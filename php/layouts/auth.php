<?php
    require_once __DIR__ . "/../helpers.php";
    ob_start_onshutdown(function () use ($title) {
        echo layout(
            "project",
            [
                "title"     => $title ?? null,
                "bodyClass" => "bg-slate-200 text-slate-700",
            ],
            ob_get_clean(),
        );
    });
?>

<main class="mt-[10vh] mb-[20vh]">
    
    <div class="container mx-auto">
        
        <div class="flex flex-col gap-4 items-center w-fit mx-auto">
            
            <a href="index.php" class="text-lg font-bold">AuthNZ</a>
            
            <?= $content ?? null ?>
            
        </div>
        
    </div>
    
</main>