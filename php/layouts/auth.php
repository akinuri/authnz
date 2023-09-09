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
        
        <?= $content ?? null ?>
        
    </div>
    
</main>