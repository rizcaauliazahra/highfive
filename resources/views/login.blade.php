<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Shroomatic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-[#D2A47D] h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-lg max-w-sm w-full">
        <h2 class="text-3xl font-bold text-center mb-4 text-[#5C3D2E]">SHROOMATIC LOGIN</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-[#5C3D2E] font-bold mb-2">Email</label>
                <input type="email" name="email" required class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C3D2E]">
            </div>
            <div class="mb-4">
                <label class="block text-[#5C3D2E] font-bold mb-2">Password</label>
                <input type="password" name="password" required class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C3D2E]">
            </div>
            <button type="submit" class="w-full bg-[#5C3D2E] text-white py-2 rounded-md hover:bg-[#4b3124] transition">Login</button>
        </form>
        <p class="mt-4 text-center text-sm text-[#5C3D2E]">Belum punya akun? <a href="{{ route('register') }}" class="font-bold">Daftar disini</a></p>
    </div>
</body>
</html>
