{{-- Merge additional classes passed when using the component. --}}
<div {{ $attributes->class(['rounded-md border border-slate-300 bg-white p-4 shadow-sm']) }}>
    {{ $slot }}
</div>
