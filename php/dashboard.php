<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "dashboard",
            [
                "title" => "Dashboard",
            ],
            ob_get_clean(),
        );
    });
?>

<div class="bg-white/25 rounded shadow h-96 p-4">
    <span class="opacity-50">Dashboard</span>
</div>
