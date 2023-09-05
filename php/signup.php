<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200 text-slate-700">
    
    <main class="flex flex-col gap-4 items-center w-fit mx-auto mt-[10vh] mb-[20vh]">
        
        <a href="index.php" class="text-lg font-bold">AuthNZ</a>
        
        <form
            autocomplete="off"
            class="flex flex-col gap-3 w-fit bg-white/90 p-6 rounded-md shadow"
            method="post"
            action="signup.php"
            >
            <h1 class="text-sm font-bold border-b border-b-slate-300">Sign Up</h1>
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
            <div class="flex">
                <div class="flex flex-col grow items-start text-sm gap-1 pt-1">
                    <a href="reset-password.php" class="text-blue-700 hover:underline">Reset Password</a>
                    <a href="login.php" class="text-blue-700 hover:underline">Log In</a>
                </div>
                <div class="flex flex-col grow items-end">
                    <button
                        type="submit"
                        class="px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90"
                        >Sign Up</button>
                </div>
            </div>
        </form>
        
    </main>
    
</body>
</html>