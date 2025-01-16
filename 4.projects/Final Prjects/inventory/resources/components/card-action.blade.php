@props(['title' => '', 'url' => ''])

<div class="card rounded-lg border-0">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-actions">
            <form action={{ $url }} method="GET">
                <div class="input-icon">
                    <input type="text" value="{{ request()->search }}" name="search" class="form-control"
                        placeholder="Search...">
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div {{ $attributes->merge(['class' => '']) }}>
        {{ $slot }}
    </div>
</div>
