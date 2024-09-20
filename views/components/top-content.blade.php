@php
    $jsonContent = file_get_contents('././services/top-content.json');
    $content = json_decode($jsonContent, true);
@endphp

<section class="top-content">
    <article class="main-card">
        <div class="contents">
            <div class="thumbnail">
                <img src="././library/images/{{ $content['main-card']['image'] }}" alt="{{ $content['main-card']['title'] }}" class="ease-in-out">
            </div>
            <div class="content">
                <div class="texts">
                    <h4 class="tag">
                        {{ $content['main-card']['tag'] }}
                    </h4>
                    <h2 class="title">
                        {{ $content['main-card']['title'] }}
                    </h2>
                    <p class="description">
                        {{ $content['main-card']['description'] }}
                    </p>
                    <div class="links">
                        <a href="{{ $content['main-card']['github'] }}" target="_blank" class="icon github"></a>
                        <a href="{{ $content['main-card']['cta-link'] }}" target="_blank" rel="noopener noreferrer" class="button read-more white">
                            {{ $content['main-card']['cta-label'] }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="skills">
        <h2 class="title">
            {{$content['skill']['title']}}
        </h2>
        <h3 class="subtitle">
            {{$content['skill']['skills-title']}}
        </h3>
        <ul class="list">
            @foreach ( $content['skill']['skills'] as $list)
                <li>{{ $list }}</li>
            @endforeach
        </ul>
    </article>
</section>