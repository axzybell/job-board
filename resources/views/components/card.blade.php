{{-- Merge additional classes passed when using the component. --}}
<article {{ $attributes->class(['rounded-md border border-slate-300 bg-white p-4 shadow-sm']) }}>
    {{ $slot }}
</article>
