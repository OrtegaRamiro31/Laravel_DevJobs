<div>
    <a 
        class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50"
        href="{{ asset('storage/cv/' . $candidato->cv) }}"
        target="_blank"
        rel="noreferrer noopener"
        wire:click="enviarEmail"
        >Ver CV</a>
</div>