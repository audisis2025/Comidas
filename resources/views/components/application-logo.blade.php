@props(['class' => ''])

<img src="{{ asset('images/logo_comidas.jpg') }}" 
     {{ $attributes->merge(['class' => $class]) }} 
     alt="Logo Comidas"
     style="height: 2.5rem; width: auto;">