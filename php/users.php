<?php require_once "helpers.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200 text-slate-700 [--header-height:4rem] [--aside-width:300px]">
    
    <?php include "partials/header.php" ?>
    
    <?php include "partials/aside.php" ?>
    
    <main class="ml-[var(--aside-width)] p-6 min-h-[20vh] mb-[20vh]">
        
        <?= component("content-header", [
            "title" => "Users",
            "breadcrumbs" => [
                ["users.php", "Users"],
            ],
            "actions" => [
                ["add-user.php", "Add User"],
            ],
        ]) ?>
        
        <div class="bg-white rounded shadow h-96 p-4">
            
        </div>
        
    </main>
    
    <script src="assets/global.js"></script>
    
</body>
</html>