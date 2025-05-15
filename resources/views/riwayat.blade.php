<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat') }}
        </h2>
    </x-slot>
<div class="bg-custom min-h-screen">


    {{-- <div class="container">
        <div class="sidebar">
            <h2>HELLO THERE...</h2>
            <p>WELCOME TO</p>
            <h1>SHROOMATIC’S</h1>
            <small>WEBSITE</small>
        </div> --}}
<table class="table table-bordered" style="background-color: #f8f4f0;">
    <tr>
        <th style="background-color: #6e543d; color: white;">Suhu</th>
        <th style="background-color: #6e543d; color: white;">Kelembapan</th>
        <th style="background-color: #6e543d; color: white;">Tanggal</th>
        <th style="background-color: #6e543d; color: white;">Jumlah Semprotan</th>
        <th style="background-color: #6e543d; color: white;">Sistem</th>
        {{-- <th style="background-color: #6e543d; color: white;">Jumlah Penyiraman</th>
        <th style="background-color: #6e543d; color: white;">Status</th> --}}
    </tr>
    {{-- <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama Mahasiswa</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr> --}}
    {{-- @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{$mahasiswas->firstItem()+$loop->index}}</td>
        <td>{{$mahasiswa->nim}}</td>
        <td>{{$mahasiswa->nama_lengkap}}</td>
        <td>{{$mahasiswa->tempat_lahir}}</td>
        <td>{{$mahasiswa->tgl_lahir}}</td>
        <td>{{$mahasiswa->email}}</td>
        <td>{{$mahasiswa->prodi}}</td>
        <td>{{$mahasiswa->alamat}}</td>
    </tr>
    @endforeach --}}
</table>
    {{-- <div class="footer">by Highfive</div> --}}

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

