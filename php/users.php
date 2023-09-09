<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "dashboard",
            [
                "title" => "Users",
            ],
            ob_get_clean(),
        );
    });
?>

<?= component("content-header", [
    "title" => "Users",
    "breadcrumbs" => [
        ["users.php", "Users"],
    ],
    "actions" => [
        ["add-user.php", "Add User"],
    ],
]) ?>

<div class="bg-white rounded shadow h-96 p-4">
    
</div>