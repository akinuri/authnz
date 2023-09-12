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