@props(['route', 'routeGroup' => null, 'icon', 'label'])

@php
    $isActive = request()->routeIs($route) || ($routeGroup && request()->routeIs($routeGroup));
@endphp

<a href="{{ route($route) }}" 
   class="w-full flex items-center gap-4 px-4 py-3.5 rounded-2xl font-bold transition-all duration-300 {{ $isActive ? 'bg-primary text-white shadow-lg shadow-primary/20 scale-[1.02]' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-800' }}">
    <div class="w-8 h-8 rounded-xl flex items-center justify-center transition-colors {{ $isActive ? 'bg-white/20' : 'bg-white shadow-sm border border-slate-200 group-hover:bg-transparent group-hover:border-transparent' }}">
        <i class="{{ $icon }} {{ $isActive ? 'text-white' : 'text-slate-400' }}"></i>
    </div>
    <span class="text-sm tracking-wide">{{ $label }}</span>
    
    @if($isActive)
        <div class="ml-auto w-1.5 h-1.5 rounded-full bg-white shadow-[0_0_8px_rgba(255,255,255,0.8)]"></div>
    @endif
</a>
