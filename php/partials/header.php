<header class="bg-[hsl(215,50%,98%)] h-[var(--header-height)] ml-[var(--aside-width)] shadow px-4 py-2">
    
    <div class="container mx-auto flex items-center justify-between h-full">
        
        <a
            href="#"
            class="p-1 rounded hover:bg-slate-200/50 active:bg-slate-200"
            id="aside-toggle"
            >
            <?= component("icons/bars-3", ["class" => "w-7 h-7"]) ?>
        </a>
        
        <nav class="relative">
            <a
                href="#"
                class="px-3 py-2 rounded flex gap-1 items-center hover:bg-slate-200/50 active:bg-slate-200"
                data-dropdown-toggle="#header-user-nav"
                >
                <?= component("icons/user-circle") ?>
                <span>John Doe</span>
                <?= component("icons/chevron-down", ["class" => "w-4 h-4 mt-1"]) ?>
            </a>
            <nav id="header-user-nav" class="absolute right-0 p-2 bg-white rounded shadow min-w-full w-40 mt-1" hidden>
                <ul>
                    <li>
                        <a href="dashboard.php" class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200">Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.php" class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200">Profile</a>
                    </li>
                    <li>
                        <a href="logout.php" class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200">Log Out</a>
                    </li>
                </ul>
            </nav>
        </nav>
        
    </div>
    
</header>