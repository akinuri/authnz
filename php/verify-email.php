<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "auth",
            [
                "title" => "Verify Email",
            ],
            ob_get_clean(),
        );
    });
?>

<form
    autocomplete="off"
    class="flex flex-col gap-3 w-fit bg-white/90 p-6 rounded-md shadow"
    method="post"
    action="send-verification-email.php"
    >
    <h1 class="text-sm font-bold border-b border-b-slate-300">Verify Email</h1>
    <p class="bg-slate-100 rounded px-2 py-1">Click the link that was sent to your email address.</p>
    <div class="flex justify-between">
        <?= component("button-secondary", [
            "type" => "submit",
            "text" => "Log Out",
            "formaction" => "logout.php",
        ]) ?>
        <?= component("button-primary", [
            "type" => "submit",
            "text" => "Resend Verification Email",
        ]) ?>
    </div>
</form>