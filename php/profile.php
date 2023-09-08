<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200 text-slate-700 [--header-height:4rem] [--aside-width:300px]">
    
    <?php include "partials/header.php" ?>
    
    <?php include "partials/aside.php" ?>
    
    <main class="ml-[var(--aside-width)] p-6 min-h-[20vh] mb-[20vh]">
        
        <div class="bg-white rounded shadow">
            
            <form
                autocomplete="off"
                class="flex flex-col gap-3 w-fit p-6 rounded-md"
                method="post"
                action="profile.php"
                >
                <h1 class="text-sm font-bold border-b border-b-slate-300">My Profile</h1>
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
                <div class="flex flex-col grow items-end">
                    <button
                        type="submit"
                        class="px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90"
                        >Save</button>
                </div>
            </form>
            
        </div>
        
    </main>
    
    <script src="assets/global.js"></script>
    
</body>
</html>