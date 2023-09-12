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
    <input
        class="px-2 py-1 border rounded border-slate-300 w-60"
        type="email"
        name="email"
        placeholder="email"
        />
    <div class="flex">
        <div class="flex flex-col grow items-start text-sm gap-1 pt-1">
            <a href="login.php" class="text-blue-700 hover:underline">Log In</a>
            <a href="signup.php" class="text-blue-700 hover:underline">Sign Up</a>
        </div>
        <div class="flex flex-col grow items-end">
            <?= component("button-primary", [
                "type" => "submit",
                "text" => "Request Reset Link",
            ]) ?>
        </div>
    </div>
</form>