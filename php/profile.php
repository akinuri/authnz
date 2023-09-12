<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "dashboard",
            [
                "title" => "John Doe",
            ],
            ob_get_clean(),
        );
    });
?>

<?= component("content-header", [
    "title" => "John Doe",
    "breadcrumbs" => [
        ["users.php", "Users"],
        ["profile.php", "John Doe"],
    ],
    "actions" => [],
]) ?>

<?= component("entity-tabs", [
    "items" => [
        ["profile.php", "Info"],
        ["user-roles.php", "Roles"],
        ["user-permissions.php", "Permissions"],
    ],
]) ?>

<div class="bg-white rounded shadow p-4">
    
    <form
        autocomplete="off"
        class="flex flex-col gap-3 w-fit"
        method="post"
        action="profile.php"
        >
        <input
            class="px-2 py-1 border rounded border-slate-300 w-60"
            type="text"
            name="display_name"
            placeholder="name"
            value="John Doe"
            />
        <input
            class="px-2 py-1 border rounded border-slate-300 w-60"
            type="email"
            name="email"
            placeholder="email"
            value="johndoe@example.com"
            />
        <input
            class="px-2 py-1 border rounded border-slate-300 w-full"
            type="password"
            name="password"
            placeholder="password"
            value=""
            />
        <div class="flex gap-2 justify-between">
            <?= component("button-secondary", [
                "type" => "reset",
                "text" => "Reset",
            ]) ?>
            <?= component("button-primary", [
                "type" => "submit",
                "text" => "Save",
            ]) ?>
        </div>
    </form>
    
</div>