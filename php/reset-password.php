<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "auth",
            [
                "title" => "Reset Password",
            ],
            ob_get_clean(),
        );
    });
?>

<form
    autocomplete="off"
    class="flex flex-col gap-3 w-fit bg-white/90 p-6 rounded-md shadow"
    method="post"
    action="reset-password.php"
    >
    <h1 class="text-sm font-bold border-b border-b-slate-300">Reset Password</h1>
    <?= component("input", [
        "type" => "email",
        "class" => "w-60",
        "name" => "name",
        "placeholder" => "email",
        "autofocus" => "",
    ]) ?>
    <div class="flex">
        <div class="flex flex-col grow items-start text-sm gap-1 pt-1">
            <?= component("anchor", [
                "href" => "login.php",
                "text" => "Log In",
            ]) ?>
            <?= component("anchor", [
                "href" => "signup.php",
                "text" => "Sign Up",
            ]) ?>
        </div>
        <div class="flex flex-col grow items-end">
            <?= component("button-primary", [
                "type" => "submit",
                "text" => "Request Reset Link",
            ]) ?>
        </div>
    </div>
</form>