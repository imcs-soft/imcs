<section class="brands-section py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold text-center mb-8">Nuestros Partners</h2>
        <div class="flex flex-wrap items-center justify-center gap-8">
            <img src="https://cdn.brandfetch.io/aquasonicgel.com/w/512/h/116/logo?c=1id51mGI8cRheFZaF_5" alt="AquasonicGel" class="brand-logo w-32 h-auto">
            <img src="{{ asset('assets/images/chison.png') }}" alt="Chison" class="brand-logo w-32 h-auto">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Samsung_Medison_logo.svg/250px-Samsung_Medison_logo.svg.png" alt="Samsung Mediso" class="brand-logo w-32 h-auto">
            <img src="{{ asset('assets/images/parker.png') }}" alt="Parker" class="brand-logo w-32 h-auto">
            <img src="{{ asset('assets/images/cdmdg.png') }}" alt="Colegio De Medicos de Guayas" class="brand-logo w-20 h-auto">
        </div>
    </div>
</section>

@push('styles')
    <style>
        .brands-section {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(4px);
        }

        .brand-logo {
            filter: grayscale(100%) opacity(0.6);
            transition: filter 0.3s ease, opacity 0.3s ease, transform 0.3s ease;
            cursor: pointer;
        }

        .brand-logo:hover {
            filter: grayscale(0%) opacity(1);
            transform: scale(1.05);
        }
    </style>
@endpush
