<?php
require_once __DIR__ . "/../helpers.php";
$defNavLinkStyle = "hover:bg-slate-200/50 active:bg-slate-200";
$curNavLinkStyle = "bg-sky-100/50 text-sky-800 hover:bg-sky-200/30 active:bg-sky-200/50";
?>
<aside class="bg-[hsl(215,50%,99%)] w-[var(--aside-width)] fixed h-[100vh] left-0 top-0 shadow z-10 p-4 flex flex-col gap-4">
    
    <a href="index.php" class="text-xl font-bold p-2 block w-fit mx-auto">AuthNZ</a>
    
    <nav>
        <ul class="flex flex-col gap-1">
            <li>
                <a
                    href="dashboard.php"
                    class="<?= htmlClass(
                        "px-2 py-1 block w-full rounded",
                        isCurrentURL("/dashboard.php") ? $curNavLinkStyle : $defNavLinkStyle,
                    ) ?>"
                    >Dashboard</a>
            </li>
            <li>
                <a
                    href="users.php"
                    class="<?= htmlClass(
                        "px-2 py-1 block w-full rounded",
                        isCurrentURL("/users.php") ? $curNavLinkStyle : $defNavLinkStyle,
                    ) ?>"
                    >Users</a>
            </li>
            <li>
                <a
                    href="roles.php"
                    class="<?= htmlClass(
                        "px-2 py-1 block w-full rounded",
                        isCurrentURL("/roles.php") ? $curNavLinkStyle : $defNavLinkStyle,
                    ) ?>"
                    >Roles</a>
            </li>
            <li>
                <a
                    href="settings.php"
                    class="<?= htmlClass(
                        "px-2 py-1 block w-full rounded",
                        isCurrentURL("/settings.php") ? $curNavLinkStyle : $defNavLinkStyle,
                    ) ?>"
                    class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200"
                    >Settings</a>
            </li>
            <hr class="opacity-75">
            <li>
                <a
                    href="verify-email.php"
                    class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200 text-slate-300"
                    >Verify Email</a>
            </li>
        </ul>
    </nav>
    
</aside>