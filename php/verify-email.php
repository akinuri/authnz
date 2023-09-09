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
    <div class="flex">
        <button
            type="submit"
            class="px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90"
            formaction="logout.php"
            >Log Out</button>
        <div class="flex flex-col grow items-end">
            <button
                type="submit"
                class="px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90"
                >Resend Verification Email</button>
        </div>
    </div>
</form>