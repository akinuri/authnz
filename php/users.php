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
    
    <form
        method="get"
        action=""
        autocomplete="off"
        class="flex gap-2 mb-4"
        >
        <input
            class="px-2 py-1 border rounded border-slate-300 grow"
            type="text"
            name="name"
            placeholder="name"
            value=""
            />
        <button
            class="text-sm px-3 py-2 rounded bg-slate-200/70 hover:bg-slate-300/70 active:bg-slate-300/90"
        >Search</button>
    </form>
    
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
                <td>Name</td>
                <td>Email</td>
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
                            class="text-xs px-2 py-1 rounded bg-blue-200/70 hover:bg-blue-300/70 active:bg-blue-300/90"
                        >Edit</a>
                        <button
                            class="text-xs px-2 py-1 rounded bg-red-200/70 hover:bg-red-300/70 active:bg-red-300/90"
                        >Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>