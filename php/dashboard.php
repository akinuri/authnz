<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200 text-slate-700 [--header-height:4rem] [--aside-width:300px]">
    
    <header class="bg-[hsl(215,50%,98%)] h-[var(--header-height)] ml-[var(--aside-width)] shadow px-4 py-2 flex items-center justify-between">
        
        <a href="#" class="p-1 rounded hover:bg-slate-200/50 active:bg-slate-200">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-7 h-7"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
            </svg>
        </a>
        
        <nav>
            <a href="#" class="bg-slate-200 px-2 py-1 block w-48 h-8 rounded"></a>
        </nav>
        
    </header>
    
    <aside class="bg-[hsl(215,50%,99%)] w-[var(--aside-width)] fixed h-[100vh] left-0 top-0 shadow z-10 p-4 flex flex-col gap-4">
        
        <a href="index.php" class="text-xl font-bold p-2 block w-fit mx-auto">AuthNZ</a>
        
        <nav>
            <ul class="flex flex-col gap-1">
                <li>
                    <a
                        href="dashboard.php"
                        class="px-2 py-1 block w-full rounded bg-sky-100/50 text-sky-800 hover:bg-sky-200/30 active:bg-sky-200/50"
                        >Dashboard</a>
                </li>
                <li>
                    <a href="users.php" class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200">Users</a>
                </li>
                <li>
                    <a href="roles.php" class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200">Roles</a>
                </li>
                <li>
                    <a href="settings.php" class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200">Settings</a>
                </li>
            </ul>
        </nav>
        
    </aside>
    
    <main class="ml-[var(--aside-width)] p-6 min-h-[20vh] mb-[20vh]">
        
        <div class="bg-white/25 rounded shadow h-96"></div>
        
    </main>
    
</body>
</html>