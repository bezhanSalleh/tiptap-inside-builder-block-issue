<div class="flex items-center gap-6">
    <div class="text-5xl">
        @php
            echo match($title) {
                'robin' => '🐤',
                'ivy' => '🥀',
                'joker' => '🤡',
                default => '🦇'
            }
        @endphp
    </div>
    <div>
        <p>Name: {{ $title }}</p>
        <p style="color: {{ $color }};">Color: {{ $color }}</p>
        <p>Side: {{ $side ?? 'Good' }}</p>
    </div>
</div>
