<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "dashboard",
            [
                "title" => "Dashboard",
            ],
            ob_get_clean(),
        );
    });
?>

<div class="flex gap-4 text-lg">
    
    <div class="bg-white rounded shadow p-4 grow flex justify-between">
        <span>Users</span>
        <span>0</span>
    </div>
    
    <div class="bg-white rounded shadow p-4 grow flex justify-between">
        <span>Roles</span>
        <span>0</span>
    </div>
    
    <div class="bg-white rounded shadow p-4 grow flex justify-between">
        <span>Permissions</span>
        <span>0</span>
    </div>
    
    <div class="bg-white rounded shadow p-4 grow flex justify-between">
        <span>Settings</span>
        <span>0</span>
    </div>
    
</div>
