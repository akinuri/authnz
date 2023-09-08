<header class="bg-[hsl(215,50%,98%)] h-[var(--header-height)] ml-[var(--aside-width)] shadow px-4 py-2 flex items-center justify-between">
    
    <a
        href="#"
        class="p-1 rounded hover:bg-slate-200/50 active:bg-slate-200"
        id="aside-toggle"
        >
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
    
    <nav class="relative">
        <a
            href="#" class="px-3 py-2 rounded flex gap-1 items-center hover:bg-slate-200/50 active:bg-slate-200"
            data-dropdown-toggle="#header-user-nav"
            >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                    />
            </svg>
            <span>John Doe</span>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4 mt-1"
                >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
            </svg>
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
    
</header>