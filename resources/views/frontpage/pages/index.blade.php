@extends('frontpage.layouts.main')

@section('container')
{{-- Header --}}
@include('frontpage.layouts.header')

{{-- Section --}}
<div class="content">
    <section class="py-5 mt-5" style="position: relative; height: 400px;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row justify-content-center align-items-center" style="position: relative; z-index: 1;">
                <!-- Teks Utama -->
                <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 bg-dark bg-opacity-50 rounded-3 shadow-lg">
                        <h1 
                            class="display-4 fw-bolder text-white mb-4 interactive-heading" 
                            style="font-size: 2.5rem; transition: all 0.3s ease-in-out;"
                            onmouseover="this.style.transform='scale(1.03)'; this.style.color='#00d4ff';"
                            onmouseout="this.style.transform='scale(1)'; this.style.color='white';"
                        >
                            Masuk sebagai tamu, pulang sebagai teman. Kami hadir untuk memberikan lebih dari sekadar potongan rambut.
                        </h1>
                        <p 
                            class="lead fw-normal text-white-50 mb-0" 
                            data-aos="fade-up" 
                            data-aos-delay="300" 
                            style="font-size: 1.25rem; transition: color 0.3s ease-in-out;"
                            onmouseover="this.style.color='white';"
                            onmouseout="this.style.color='rgba(255,255,255,0.5)';"
                        >
                            Ka-Chow!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gambar Sebagai Background -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('https://suksescorp.co.id/wp-content/uploads/2025/01/Captain-barbershop-banner-3.jpg'); background-size: cover; background-position: center; opacity: 0.3; z-index: 0;"></div>
    </section>
</div>

{{-- Footer --}}
@include('frontpage.layouts.footer')

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init(); // Initialize AOS
</script>

@endsection
