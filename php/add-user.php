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
        <input
            class="px-2 py-1 border rounded border-slate-300 w-60"
            type="text"
            name="display_name"
            placeholder="name"
            />
        <input
            class="px-2 py-1 border rounded border-slate-300 w-60"
            type="email"
            name="email"
            placeholder="email"
            />
        <input
            class="px-2 py-1 border rounded border-slate-300 w-full"
            type="password"
            name="password"
            placeholder="password"
            />
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