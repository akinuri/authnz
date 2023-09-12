<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "auth",
            [
                "title" => "Log In",
            ],
            ob_get_clean(),
        );
    });
?>

<form
    autocomplete="off"
    class="flex flex-col gap-3 w-fit bg-white/90 p-6 rounded-md shadow"
    method="post"
    action="login.php"
    >
    <h1 class="text-sm font-bold border-b border-b-slate-300">Log In</h1>
    <?= component("input", [
        "type" => "email",
        "class" => "w-60",
        "name" => "name",
        "placeholder" => "email",
        "autofocus" => "",
    ]) ?>
    <div class="flex flex-col gap-2 items-start">
        <?= component("input", [
            "type" => "password",
            "class" => "w-60",
            "name" => "password",
            "placeholder" => "password",
        ]) ?>
        <label class="text-sm flex items-center gap-1">
            <input type="checkbox" name="remember_me" class="-mt-[1px]" />
            <span>Remember Me</span>
        </label>
    </div>
    <div class="flex">
        <div class="flex flex-col grow items-start text-sm gap-1 pt-1">
            <?= component("anchor", [
                "href" => "reset-password.php",
                "text" => "Reset Password",
            ]) ?>
            <?= component("anchor", [
                "href" => "signup.php",
                "text" => "Sign Up",
            ]) ?>
        </div>
        <div class="flex flex-col grow items-end">
            <?= component("button-primary", [
                "type" => "submit",
                "text" => "Log In",
                "formaction" => "dashboard.php", // temp
            ]) ?>
        </div>
    </div>
</form>