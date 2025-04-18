@extends('frontpage.layouts.main')
@section('container')
{{-- Header --}}
@include('frontpage.layouts.header')
<style>
    body {
        background-image: url('https://i.pinimg.com/originals/3e/cb/88/3ecb88f8efcf5aab9479c06d0dd4cd08.jpg'); /* Gambar dari link Pinterest */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .bg-overlay {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .bg-overlay:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .bg-overlay h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #343a40;
        margin-bottom: 20px;
    }

    .bg-overlay h4 {
        font-size: 1.2rem;
        color: #6c757d;
    }

    .bg-overlay p {
        font-size: 1.1rem;
        color: #495057;
        line-height: 1.6;
    }

    .list-group-item {
        background-color: #f8f9fa;
        border: none;
        padding: 12px;
        font-size: 1.1rem;
        color: #343a40;
    }

    .list-group-item strong {
        font-weight: 600;
        color: #007bff;
    }

    .list-group-item:hover {
        background-color: #e2e6ea;
        cursor: pointer;
    }

    /* Add responsiveness */
    @media (max-width: 768px) {
        .bg-overlay {
            padding: 30px;
        }

        .bg-overlay h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="container mt-5">
    <div class="text-center mb-4 text-dark">
        <h1 class="fw-bold">Project Tugas Akhir SBD 2025</h1>
        <h4 class="text-muted">by @Kelompok 29</h4>
    </div>

    <div class="bg-overlay shadow">
        <p class="fs-5 text-dark">
            Project web ini merupakan Tugas Akhir Praktikum Sistem Basis Data di Program Studi Teknik Komputer Universitas Diponegoro. 
            Website ini dibuat oleh sekelompok 8 orang praktikan angkatan 2022, yaitu:
        </p>

        <ul class="list-group list-group-flush fs-5">
            <li class="list-group-item text-dark">1. Salsabila Alya Rizquna — <strong>21120122120033</strong></li>
            <li class="list-group-item text-dark">2. Asmarani Intan Prawesti — <strong>21120122120014</strong></li>
            <li class="list-group-item text-dark">3. Ery Utami — <strong>21120122130054</strong></li>
            <li class="list-group-item text-dark">4. Safira Septiandika Salsabila — <strong>21120122140147</strong></li>
            <li class="list-group-item text-dark">5. Arif Rahmatullah — <strong>21120122120002</strong></li>
            <li class="list-group-item text-dark">6. Muhammad Raka Insan Mahendra — <strong>21120122130040</strong></li>
            <li class="list-group-item text-dark">7. Muhammad Zein Al Kautsar Nugroho — <strong>21120122140151</strong></li>
            <li class="list-group-item text-dark">8. Dhanu Satria Atmaja — <strong>21120122140127</strong></li>
        </ul>
    </div>
</div>

{{-- Footer --}}
@include('frontpage.layouts.footer')

@endsection
