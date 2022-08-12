{{-- create a navbar using tailwindcss --}}
<nav class="flex items-center justify-between flex-wrap bg-red-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a href="{{ url('/') }}" class="font-semibold text-xl tracking-tight">
            {{ "Racipe" }}
        </a>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            
            
        </div>
        <div>
            <a href="{{ url('/') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-4 lg:mt-0">
                Ingradients
            </a>
            <a href="{{ url('/') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-red-500 hover:bg-white mt-4 lg:mt-0">
                Racipes
            </a>
        </div>
    </div>