@props(['title' => '', 'subtitle' => ''])
<div class="card card-sm border-0" style="border-radius: 8px;">
    <div class="card-body d-flex align-items-center">
        <span {{ $attributes->merge(['class' => 'text-white stamp mr-3', 'style' => 'border-radius: 8px;']) }}>
            {{ $slot }}
        </span>
        <div class="mr-3 lh-sm">
            <div class="strong">
                {{ $title }}
            </div>
            <div class="text-muted">{{ $subtitle }}</div>
        </div>
    </div>
</div>
