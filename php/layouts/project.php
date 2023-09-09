<?php
    require_once __DIR__ . "/../helpers.php";
    ob_start_onshutdown(function () use ($title, $bodyClass) {
        echo layout(
            "document",
            [
                "title"       => $title ?? null,
                "bodyClass"   => $bodyClass ?? null,
                "headScripts" => [
                    "https://cdn.tailwindcss.com",
                ],
                "bodyScripts" => [
                    "assets/global.js",
                ],
            ],
            ob_get_clean(),
        );
    });
?>
<?= $content ?? null ?>