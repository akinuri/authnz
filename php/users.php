<?php
    $GLOBALS["executionStartedAt"] = microtime(true);
    require_once "helpers.php";
    ob_start_onshutdown(function () {
        echo layout(
            "dashboard",
            [
                "title" => "Users",
            ],
            ob_get_clean(),
        );
    });
?>

<?= component("content-header", [
    "title" => "Users",
    "breadcrumbs" => [
        ["users.php", "Users"],
    ],
    "actions" => [
        ["add-user.php", "Add User"],
    ],
]) ?>

<div class="bg-white/90 rounded shadow p-6">
    
    <div class="flex gap-8 justify-between text-sm">
        
        <form
            method="get"
            action="users.php"
            autocomplete="off"
            class="flex gap-4"
            >
            
            <div class="flex gap-4">
                
                <div class="relative">
                    <button
                        type="button"
                        class="flex items-center gap-1 px-3 pr-2 h-8 rounded bg-slate-200/70 hover:bg-slate-300/70 active:bg-slate-300/90"
                        data-dropdown-toggle="#entities-filters"
                        >
                        <span>Filter</span>
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
                    </button>
                    <ul
                        id="entities-filters"
                        class="absolute left-0 p-2 bg-white rounded shadow min-w-full w-40 mt-1 border"
                        >
                        <li class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200 cursor-pointer opacity-50">
                            Name
                        </li>
                        <li class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200 cursor-pointer opacity-50">
                            Email
                        </li>
                        <li class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200 cursor-pointer opacity-50">
                            Status
                        </li>
                        <li class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200 cursor-pointer">
                            Created at
                        </li>
                        <li class="px-2 py-1 block w-full rounded hover:bg-slate-200/50 active:bg-slate-200 cursor-pointer">
                            Created by
                        </li>
                    </ul>
                </div>
                
                <div class="flex items-center h-8">
                    <span
                        class="px-2 bg-slate-100/80 border border-r-0 rounded rounded-tr-none rounded-br-none h-full flex items-center"
                        >Name</span>
                    <input
                        class="px-2 py-1 border border-slate-200 h-full rounded rounded-tl-none rounded-bl-none"
                        type="text"
                        name="name"
                        placeholder="John Doe"
                        value=""
                        />
                </div>
                
                <div class="flex items-center h-8">
                    <span
                        class="px-2 bg-slate-100/80 border border-r-0 rounded rounded-tr-none rounded-br-none h-full flex items-center"
                        >Email</span>
                    <input
                        class="px-2 py-1 border border-slate-200 h-full"
                        type="text"
                        name="email"
                        placeholder="johndoe@example.com"
                        value=""
                        />
                    <button
                        type="button"
                        class="px-1 flex items-center h-full border border-red-900/5 border-l-0 rounded rounded-tl-none rounded-bl-none cursor-pointer text-red-900/50 hover:text-red-900/60 bg-red-50 hover:bg-red-100/70 active:bg-red-100"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-3 h-3"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                                />
                        </svg>
                    </button>
                </div>
                
                <div class="flex items-center h-8">
                    <span
                        class="px-2 bg-slate-100/80 border border-r-0 rounded rounded-tr-none rounded-br-none h-full flex items-center"
                        >Status</span>
                    <select class="px-1 border h-full flex items-center" name="status">
                        <option value="" class="text-gray-400">&mdash;</option>
                        <option value="active">Active</option>
                        <option value="disabled">Disabled</option>
                    </select>
                    <button
                        type="button"
                        class="px-1 flex items-center h-full border border-red-900/5 border-l-0 rounded rounded-tl-none rounded-bl-none cursor-pointer text-red-900/50 hover:text-red-900/60 bg-red-50 hover:bg-red-100/70 active:bg-red-100"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-3 h-3"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                                />
                        </svg>
                    </button>
                </div>
                
            </div>
            
            <button
                type="submit"
                class="flex items-center px-3 h-8 rounded bg-slate-200/70 hover:bg-slate-300/70 active:bg-slate-300/90"
            >Search</button>
            
        </form>
        
        <div class="flex gap-2 h-8">
            <button
                class="flex items-center px-3 h-full rounded bg-slate-200/70 hover:bg-slate-300/70 active:bg-slate-300/90"
            >List</button>
            <button
                class="flex items-center px-3 h-full rounded bg-slate-200/70 hover:bg-slate-300/70 active:bg-slate-300/90"
            >Grid</button>
        </div>
        
    </div>
    
    <hr class="my-2 border-0">
    
    <style type="text/tailwindcss">
        @layer utilities {
            .cell-border :is(td, th) {
                @apply border;
            }
            .cell-px-2 :is(td, th) {
                @apply px-2;
            }
            .cell-py-1 :is(td, th) {
                @apply py-1;
            }
            .cell-border-slate-200 :is(td, th) {
                @apply border-slate-200;
            }
            .row-even-bg-slate-50 tr:nth-child(even) {
                @apply bg-slate-50;
            }
        }
        .hover\:row-bg-sky-100\/30 tr:hover :is(td, th) {
            /* @apply bg-sky-100; */
            --tw-bg-opacity: 0.3;
            background-color: rgb(224 242 254 / var(--tw-bg-opacity));
        }
    </style>
    
    <table class="w-full cell-border cell-px-2 cell-py-1 cell-border-slate-200">
        <thead>
            <tr class="font-medium bg-slate-100">
                <td>#</td>
                <td>
                    <div class="flex items-center gap-1">
                        <span>Name</span>
                        <button
                            class="p-1 rounded text-slate-400 hover:text-slate-500 active:text-slate-500 hover:bg-slate-200/80 active:bg-slate-300/50 mt-[1px]"
                            >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-3 h-3"
                                >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"
                                />
                            </svg>
                        </button>
                    </div>
                </td>
                <td>
                    <div class="flex items-center gap-1">
                        <span>Email</span>
                        <button
                            class="p-1 rounded text-slate-400 hover:text-slate-500 active:text-slate-500 hover:bg-slate-200/80 active:bg-slate-300/50 mt-[1px]"
                            >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-3 h-3"
                                >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 7.5L7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"
                                />
                            </svg>
                        </button>
                    </div>
                </td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody class="row-even-bg-slate-50 hover:row-bg-sky-100/30">
            <?php
                $users = [
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                    (object) ["name" => "John Doe", "email" => "johndoe@example.com"],
                ];
                $i = 0;
                foreach ($users ?? [] as $user) { ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                        <a
                            href="#"
                            class="text-xs px-2 py-1 rounded text-blue-900/70 hover:text-blue-900/80 bg-blue-100 hover:bg-blue-200/70 active:bg-blue-200/90"
                        >Edit</a>
                        <button
                            class="text-xs px-2 py-1 rounded text-red-900/70 hover:text-red-900/80 bg-red-100 hover:bg-red-200/70 active:bg-red-200/90"
                        >Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <div
        class="mt-4 flex justify-between items-center text-sm"
        >
        
        <div>85 records found.</div>
        
        <ul class="flex gap-2 items-center text-slate-700/80">
            <li>
                <a
                    href="#"
                    class="block px-2 py-1 rounded bg-slate-100 hover:bg-slate-200/60 active:bg-slate-200/80"
                    >First</a>
            </li>
            <li class="opacity-50">···</li>
            <li>
                <a
                    href="#"
                    class="block px-2 py-1 rounded bg-slate-100 hover:bg-slate-200/60 active:bg-slate-200/80"
                    >3</a>
            </li>
            <li>
                <a
                    href="#"
                    class="block px-2 py-1 rounded bg-slate-100 hover:bg-slate-200/60 active:bg-slate-200/80"
                    >4</a>
            </li>
            <li>
                <form
                    action="users.php"
                    autocomplete="off"
                    >
                    <select
                        name="page"
                        class="px-1 py-1 h-full rounded bg-slate-200 hover:bg-slate-300/60 active:bg-slate-300/80"
                        oninput="this.form.submit()"
                        >
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option selected>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                </form>
            </li>
            <li>
                <a
                    href="#"
                    class="block px-2 py-1 rounded bg-slate-100 hover:bg-slate-200/60 active:bg-slate-200/80"
                    >6</a>
            </li>
            <li>
                <a
                    href="#"
                    class="block px-2 py-1 rounded bg-slate-100 hover:bg-slate-200/60 active:bg-slate-200/80"
                    >7</a>
            </li>
            <li class="opacity-50">···</li>
            <li>
                <a
                    href="#"
                    class="block px-2 py-1 rounded bg-slate-100 hover:bg-slate-200/60 active:bg-slate-200/80"
                    >Last</a>
            </li>
        </ul>
        
        <form
            action="users.php"
            autocomplete="off"
            class="flex items-center h-7"
            >
            <span
                class="px-2 bg-slate-100/80 border border-r-0 rounded rounded-tr-none rounded-br-none h-full flex items-center"
                >Page size</span>
                <select
                    name="rows"
                    class="px-2 border border-slate-200 h-full rounded rounded-tl-none rounded-bl-none"
                    oninput="this.form.submit()"
                    >
                    <option selected>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                    <option>250</option>
                    <option>500</option>
                    <option>1000</option>
                    <option>All</option>
                </select>
        </form>
        
    </div>
    
</div>