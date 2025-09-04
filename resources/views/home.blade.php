<x-app-layout>

    <x-home.hero  />

    <br>
    <br>
    <br>
    <br>

    <x-home.feature />

    <br>
    <br>
    <br >

    <x-home.cta />

    <br>
    <br>
    <br>

    <x-home.courses :courses="$courses"/>

    <br>
    <br>
    <br>

    <x-home.reviews :reviews="$reviews"/>

    <br>
    <br>
    <br>

    @push('scripts')
        <script>
            document.addEventListener('keyup', function (e) {
                console.log("Tecla presionada:", e.key,  " Código:", e.keyCode);
                if ((e.key === 'PrintScreen' || e.keyCode === 44) ||
                    (e.key === 'S' && e.keyCode === 82) ||
                    (e.key === 'Shift' && e.keyCode === 16) ||
                    (e.key === 'Meta' && e.keyCode === 91)
                ) {
                    return false;
                }
            });
        </script>
    @endpush

</x-app-layout>
