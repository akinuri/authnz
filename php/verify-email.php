<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-200 text-slate-700">
    
    <main class="flex flex-col gap-4 items-center w-fit mx-auto mt-[10vh] mb-[20vh]">
        
        <a href="index.php" class="text-lg font-bold">AuthNZ</a>
        
        <form
            autocomplete="off"
            class="flex flex-col gap-3 w-fit bg-white/90 p-6 rounded-md shadow"
            method="post"
            action="send-verification-email.php"
            >
            <h1 class="text-sm font-bold border-b border-b-slate-300">Verify Email</h1>
            <p class="bg-slate-100 rounded px-2 py-1">Click the link that was sent to your email address.</p>
            <div class="flex">
                <button
                    class="px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90"
                    >Log Out</button>
                <div class="flex flex-col grow items-end">
                    <button
                        type="submit"
                        class="px-3 py-1 rounded bg-blue-200 hover:bg-blue-300/70 active:bg-blue-300/90"
                        >Resend Verification Email</button>
                </div>
            </div>
        </form>
        
    </main>
    
</body>
</html>