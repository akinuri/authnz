<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "auth",
            [
                "title" => "Sign Up",
            ],
            ob_get_clean(),
        );
    });
?>

<form
    autocomplete="off"
    class="flex flex-col gap-3 w-fit bg-white/90 p-6 rounded-md shadow"
    method="post"
    action="signup.php"
    >
    <h1 class="text-sm font-bold border-b border-b-slate-300">Sign Up</h1>
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
    <div class="flex">
        <div class="flex flex-col grow items-start text-sm gap-1 pt-1">
            <?= component("anchor", [
                "href" => "reset-password.php",
                "text" => "Reset Password",
            ]) ?>
            <?= component("anchor", [
                "href" => "login.php",
                "text" => "Log In",
            ]) ?>
        </div>
        <div class="flex flex-col grow items-end">
            <?= component("button-primary", [
                "type" => "submit",
                "text" => "Sign Up",
            ]) ?>
        </div>
    </div>
</form>