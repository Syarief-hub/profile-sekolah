@extends('layouts.public')

@section('title', 'Semua Berita | SMA Negeri 1 Suwawa')

@section('content')
<div class="bg-primary/5 py-12 md:py-20 border-b border-primary/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-heading font-black text-slate-800 mb-4 tracking-tight">Semua Berita & Informasi</h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Dapatkan update terbaru seputar kegiatan, prestasi, dan pengumuman penting dari SMA Negeri 1 Suwawa.</p>
    </div>
</div>

<div class="py-16 md:py-24 bg-white min-h-[50vh]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-10">
                @foreach($articles as $article)
                <article class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 group flex flex-col h-full hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 transition duration-500">
                    <div class="relative h-64 overflow-hidden">
                        @if($article->thumbnail)
                            <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 group-hover:rotate-1 transition duration-700 ease-in-out">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($article->category ?? 'Berita') }}&color=7F9CF5&background=EBF4FF&size=400" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 group-hover:rotate-1 transition duration-700 ease-in-out">
                        @endif
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute top-5 left-5 bg-white text-slate-800 text-xs font-black px-4 py-2 rounded-full uppercase tracking-wider shadow-lg">
                            {{ $article->category ?? 'Update' }}
                        </div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-slate-500 text-sm mb-4 font-medium">
                            <i class="fa-regular fa-calendar-days text-primary"></i> {{ $article->date->translatedFormat('d F Y') }}
                        </div>
                        
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-slate-800 mb-4 group-hover:text-primary transition leading-snug line-clamp-3">
                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        
                        <p class="text-slate-500 text-base leading-relaxed line-clamp-3 mb-8 flex-grow">
                            {{ Str::limit(strip_tags($article->content), 120) }}
                        </p>
                        
                        <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm group-hover:text-emerald-800 transition uppercase tracking-widest mt-auto border-t border-slate-100 pt-6">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right-long text-xs transform group-hover:translate-x-2 transition duration-300"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

            <div class="mt-16 flex justify-center">
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-slate-50 rounded-3xl border border-slate-100">
                <div class="inline-flex w-20 h-20 bg-white rounded-full items-center justify-center text-slate-300 text-4xl shadow-sm mb-4">
                    <i class="fa-regular fa-newspaper"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-700 mb-2">Belum Ada Berita</h3>
                <p class="text-slate-500">Saat ini belum ada berita atau informasi yang dipublikasikan.</p>
                <a href="{{ url('/') }}" class="inline-block mt-6 px-6 py-2.5 bg-primary text-white rounded-full font-semibold hover:bg-emerald-700 transition">Kembali ke Beranda</a>
            </div>
        @endif
        
    </div>
</div>
@endsection
