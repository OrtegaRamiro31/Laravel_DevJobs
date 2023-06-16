<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($vacantes as $vacante)
    <div class="p-6 text-gray-900">
        <div>
            <a href="#" class="text-xl font-bold">
                {{ $vacante->titulo }}
            </a>
        </div>
    </div>
        
    @endforeach

</div>