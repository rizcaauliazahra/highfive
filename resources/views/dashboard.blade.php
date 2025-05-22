<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight text-center">
            {{ __('HELLO THERE...') }} <br>
            {{ __('WELCOME TO') }} <br> 
            {{ __('SHROOMATIC’S') }} <br>
            {{ __('WEBSITE') }} <br>
        </h2>
    </x-slot>
<div class="bg-custom flex justify-center  ">

    <div class="container flex justify-center">
       
        <div class="content ">
            <div class="card ">
                 {{-- <i class="fas fa-thermometer-half text-red-500 text-2xl"></i> --}}
                {{-- <div class="label">TEMP</div> --}}
                <i class="fa-solid fa-temperature-half text-2xl"></i>
                <div class="big-text">26°C</div>
                <small>Suhu Jamur</small>
            </div>
            <div class="card">
                {{-- <div class="label">HUMI</div> --}}
                <i class="fa-solid fa-water text-2xl"></i>
                <div class="big-text">45%</div>
                <small>Kelembaban Jamur</small>
            </div>
            <div class="card">
                {{-- <div class="label">SPRAYED</div> --}}
                <i class="fa-solid fa-wind text-2xl"></i>
                <div class="big-text">3X</div>
                <small>Penyiraman</small>
            </div>
            <div class="card">
                {{-- <div class="label">STATUS</div> --}}
                <i class="fa-solid fa-seedling text-2xl"></i>
                <div class="big-text">IDEAL</div>
                <small>Status</small>
            </div>
        </div>
    </div>
</div>
    <div class="footer">&copy; 2025 Shroomatic Highfive</div>

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
