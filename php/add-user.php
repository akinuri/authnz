<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "dashboard",
            [
                "title" => "Add User",
            ],
            ob_get_clean(),
        );
    });
?>

<?= component("content-header", [
    "title" => "Add User",
    "breadcrumbs" => [
        ["users.php", "Users"],
        ["add-user.php", "Add User"],
    ],
    "actions" => [],
]) ?>

<div class="bg-white rounded shadow p-4">
    
    <form
        autocomplete="off"
        class="flex flex-col gap-3 w-fit"
        method="post"
        action="add-user.php"
        >
        <?= component("input", [
            "class" => "w-60",
            "name" => "display_name",
            "placeholder" => "name",
            "autofocus" => "",
        ]) ?>
        <?= component("input", [
            "type" => "email",
            "class" => "w-60",
            "name" => "name",
            "placeholder" => "email",
        ]) ?>
        <?= component("input", [
            "type" => "password",
            "class" => "w-60",
            "name" => "password",
            "placeholder" => "password",
        ]) ?>
        <div class="flex gap-2 justify-between">
            <?= component("anchor-button-secondary", [
                "href" => "users.php",
                "text" => "Cancel",
            ]) ?>
            <?= component("button-primary", [
                "type" => "submit",
                "text" => "Save",
            ]) ?>
        </div>
    </form>
    
</div>