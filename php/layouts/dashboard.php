<?php
    require_once __DIR__ . "/../helpers.php";
    ob_start_onshutdown(function () use ($title) {
        echo layout(
            "project",
            [
                "title"     => $title ?? null,
                "bodyClass" => "bg-slate-200 text-slate-700 [--header-height:3rem] [--aside-width:200px]",
            ],
            ob_get_clean(),
        );
    });
?>

<?php include __DIR__ . "/../partials/header.php" ?>

<?php include __DIR__ . "/../partials/aside.php" ?>

<main class="ml-[var(--aside-width)] p-6 min-h-[20vh] mb-[20vh]">
    
    <div class="container mx-auto">
        
        <?= $content ?? null ?>
        
    </div>
    
</main>