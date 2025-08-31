
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proximamente- IMCS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
<div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-slate-50 to-white p-6">
<div class="max-w-3xl w-full text-center">
    <div class="mx-auto mb-6 h-16 w-16 rounded-2xl bg-slate-100 flex items-center justify-center shadow-sm">
        <!--<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-slate-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zM4.5 20h15M4.5 16h15M4.5 12h15" />
        </svg>-->
        <img src="https://scontent.fgye1-2.fna.fbcdn.net/v/t39.30808-6/240841969_1146485829210485_4557371010813413499_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=cSmvGh-j9ToQ7kNvwHbwXfy&_nc_oc=AdnGh3nI7diGK5cc7-CUNhaHPR_Ek2zvpVmw4-u92LQ8eNNAyQSNP26ceIEkLxfhJOM&_nc_zt=23&_nc_ht=scontent.fgye1-2.fna&_nc_gid=UbjwO2xbEgCD4NgMQGikHA&oh=00_AfUNJJyAOuVYaqHlAfXiHTBHTfkoar1hzOQ9gYJ-hMIDbg&oe=68A3FFE0" alt="">
    </div>

    <h1 class="text-5xl font-bold tracking-tight text-slate-800">Oops!...</h1>
    <p class="mt-2 text-lg text-slate-600">Página Temporalmente No Disponible</p>

    <div class="mt-6 space-y-3">
        <p class="text-xl font-semibold text-slate-800">
            Gracias por visitar nuestros cursos de ecografía
        </p>
        <p class="text-slate-600 leading-relaxed">
            Nos encontramos en etapa de retroalimentación. Cuéntanos tus inquietudes y sugerencias y sé parte de nuestros próximos cursos.
        </p>
        <p class="text-slate-500 text-sm">— IMCS</p>
    </div>

    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3">
        <a href="mailto:cursosdeecografia@gmail.com"
           class="inline-flex items-center gap-2 rounded-2xl px-5 py-3 shadow-sm bg-slate-900 text-white hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2">
            📩 Enviar sugerencia
        </a>

        <a href="{{ route('home')}}"
           class="inline-flex items-center gap-2 rounded-2xl px-5 py-3 bg-white text-slate-700 shadow-sm hover:bg-slate-50 border border-slate-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
            ⬅ Volver al inicio
        </a>
    </div>

    <div class="mt-10 text-xs text-slate-400">
        <span>Si crees que esto es un error, por favor <a href="mailto:cursosdeecografia@gmail.com" class="text-slate-700">contáctanos.</a></span>
    </div>
</div>
</div>
<x-app.footer></x-app.footer>
</body>
</html>

