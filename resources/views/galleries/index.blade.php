@extends('layouts.public')

@section('title', 'Galeri Foto & Video | SMA Negeri 1 Suwawa')

@section('content')
<div class="bg-primary/5 py-12 md:py-20 border-b border-primary/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-black text-slate-800 mb-4 tracking-tight">Galeri Kegiatan</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Momen-momen berharga dan dokumentasi kegiatan pembelajaran, ekstrakurikuler, serta acara di SMA Negeri 1 Suwawa.</p>
    </div>
</div>

<div class="py-16 md:py-24 bg-slate-50 min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($galleries->count() > 0)
            <div class="columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6">
                @foreach($galleries as $gallery)
                <div class="break-inside-avoid relative overflow-hidden rounded-3xl shadow-sm hover:shadow-xl group border border-white cursor-pointer transition-all duration-300 bg-white">
                    <img src="{{ Storage::url($gallery->url) }}" alt="{{ $gallery->event_name }}" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 rounded-3xl flex flex-col justify-end p-6">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <span class="inline-block px-3 py-1 bg-primary text-white text-[10px] font-bold rounded-full mb-3 uppercase tracking-wider">{{ $gallery->type ?? 'Photo' }}</span>
                            <h4 class="text-white font-bold text-lg mb-1 leading-snug drop-shadow-md">{{ $gallery->event_name }}</h4>
                            @if($gallery->description)
                                <p class="text-slate-300 text-sm line-clamp-3 leading-relaxed">{{ $gallery->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-16 flex justify-center">
                {{ $galleries->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-3xl border border-slate-100 shadow-sm">
                <div class="inline-flex w-24 h-24 bg-slate-50 rounded-full items-center justify-center text-slate-300 text-5xl mb-6">
                    <i class="fa-regular fa-images"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-700 mb-3">Belum Ada Media</h3>
                <p class="text-slate-500 max-w-md mx-auto">Galeri kegiatan sekolah saat ini masih kosong atau belum ada media yang diunggah.</p>
                <a href="{{ url('/') }}" class="inline-flex mt-8 px-8 py-3 bg-primary text-white rounded-full font-bold hover:bg-emerald-700 transition shadow-sm hover:shadow-md transform hover:-translate-y-0.5">Kembali ke Beranda</a>
            </div>
        @endif
        
    </div>
</div>
@endsection
