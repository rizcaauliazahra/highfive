<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="bg-custom min-h-screen">

    <div class="container">
        <div class="sidebar">
            <h2>HELLO THERE...</h2>
            <p>WELCOME TO</p>
            <h1>SHROOMATIC’S</h1>
            <small>WEBSITE</small>
        </div>

        <div class="content">
            <div class="card">

                <div class="label">TEMP</div>
                <div class="big-text">26°C</div>
                <small>Suhu Jamur</small>
            </div>
            <div class="card">
                <div class="label">HUMI</div>
                <div class="big-text">45%</div>
                <small>Kelembaban Jamur</small>
            </div>
            <div class="card">
                <div class="label">SPRAYED</div>
                <div class="big-text">3X</div>
                <small>Telah disiram</small>
            </div>
            <div class="card">
                <div class="label">STATUS</div>
                <div class="big-text">IDEAL</div>
                <small>Status</small>
            </div>
        </div>
    </div>
</div>
    <div class="footer">by Highfive</div>

    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            margin: 0;
            background-color: #e4b38f;
            color: #3a2a19;
        }
        .navbar {
            background-color: #725c44;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            color: white;
        }
        .navbar a {
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
            color: white;
        }
        .navbar .active {
            text-decoration: underline;
        }
        .container {
            display: flex;
            padding: 2rem;
        }
        .sidebar {
            width: 30%;
            padding-right: 2rem;
            
        }
        .content {
            width: 70%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        .bg-custom {
    background-color: #e4b38f; /* Ubah dengan warna yang Anda inginkan */
}
        .card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            position: relative;
        }
        .card .big-text {
            font-size: 3rem;
            font-weight: bold;
        }
        .card .label {
            position: absolute;
            top: 1rem;
            left: 1rem;
            font-size: 4rem;
            color: #ccc;
            font-weight: bold;
            opacity: 0.3;
        }
        .card small {
            font-style: italic;
            display: block;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
        .footer {
            position: fixed;
            bottom: 10px;
            left: 10px;
            font-size: 0.8rem;
        }
    </style>
</x-app-layout>
