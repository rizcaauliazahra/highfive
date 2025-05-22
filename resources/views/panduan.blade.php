<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panduan') }}
        </h2>
    </x-slot>
<div class="bg-custom min-h-screen">


 
<body>
   {{-- <div class="py-12"> --}}
    
        <div class="flex flex-col items-center bg-white min-h-screen py-8 mt-10 ">
            {{-- <p class="text-amber-900 font-mono mb-4 pl-6">
                    Selamat datang di halaman panduan sistem monitoring suhu dan kelembapan untuk budidaya jamur tiram.
                    Panduan ini akan membantu Anda memahami fungsi dari setiap bagian di dalam website.
                </p> --}}
                <div class="flex justify-center items-center space-x-4">
                    <img src="{{ asset('images/jamur_tiram.png') }}" alt="Jamur Tiram" width="300">
                    <img src="{{ asset('images/logojamurtiram-removebg-preview.png') }}" alt="Jamur Tiram 3" width="300">
                    <img src="{{ asset('images/jamurtiram2.png') }}" alt="Jamur Tiram 2" width="300">
                    

                </div>
            
            <div class="bg-white shadow-sm sm:rounded-lg p-6 ">
                

                <div class="space-y-3">
                    <div  class="bg-white shadow-lg rounded-3xl p-6 text-justify"> 
                     
                        <h3 class="text-amber-900 font-bold text-2xl text-center font-mono font-bold">Jamur Tiram</h3>
                        <br>
                        <p class="text-amber-900 text-justify font-mono">Jamur tiram (Pleurotus ostreatus) adalah jenis jamur yang termasuk dalam kelompok jamur pangan dan banyak dibudidayakan karena memiliki nilai gizi tinggi serta rasa yang enak. Nama “tiram” diambil dari bentuk tudungnya yang menyerupai cangkang kerang tiram. Jamur ini tumbuh secara alami di batang kayu lapuk, namun kini banyak dibudidayakan menggunakan media seperti serbuk gergaji, jerami, atau limbah pertanian lainnya. Menampilkan data suhu dan kelembapan secara real-time. Anda bisa memantau kondisi ruangan jamur saat ini dengan grafik dan nilai yang terus diperbarui. Jamur tiram (Pleurotus ostreatus) adalah jenis jamur yang termasuk dalam kelompok jamur pangan dan banyak dibudidayakan karena memiliki nilai gizi tinggi serta rasa yang enak. Nama “tiram” diambil dari bentuk tudungnya yang menyerupai cangkang kerang tiram. Jamur ini tumbuh secara alami di batang kayu lapuk, namun kini banyak dibudidayakan menggunakan media seperti serbuk gergaji, jerami, atau limbah pertanian lainnya. Menampilkan data suhu dan kelembapan secara real-time. Anda bisa memantau kondisi ruangan jamur saat ini dengan grafik dan nilai yang terus diperbarui.</p>
                    </div>
                    
                </div>

                <hr class="my-6">

                
            </div>
        </div>
    </div>
</body>

    <style>
        body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background-color: #e8b78f;
  color: #5a3e2b;
}


.navbar .menu a {
  margin-left: 20px;
  text-decoration: none;
  color: white;
  font-weight: bold;
}

.container {
    /* justify-content: center;
  display: flex;
  padding: 40px;
  gap: 40px; */
  padding: 10px;
  gap: 40px;
  display: flex;
  align-items: center;
  
  text-align: center;
  
  
}

.welcome {
  flex: 1;
}

/* .card-container {
  flex: 2;
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
} */

/* .card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  width: 200px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
} */

.card h1 {
  font-size: 48px;
  margin: 0;
  color: black;
}

.card p {
  font-size: 24px;
  font-style: italic;
  color: #aaa;
  margin: 10px 0;
}

table {
            border-collapse: collapse;
            width: 100%; /* Menyesuaikan lebar tabel */
            text-align: center;
            
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            
        }
.card small {
  font-weight: bold;
}
    </style>
</x-app-layout>

