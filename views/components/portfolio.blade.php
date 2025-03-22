@php
    if ($_SERVER['REQUEST_URI'] === '/') 
    {
        $jsonContent = file_get_contents('././services/portfolio.json');
        $content = json_decode($jsonContent, true);
    } else {
        $jsonContent = file_get_contents('././services/portfolio-en.json');
        $content = json_decode($jsonContent, true);
    }
@endphp

<section class="portfolio">
    @foreach ( $content['portfolio']['list'] as $list)
        <article class="contents scroll-effect">
            <div class="thumbnail">
                <img src="././dist/images/{{ $list['image'] }}" alt="{{ $list['title'] }}" class="ease-in-out">
            </div>                
            <div class="content">
                <div class="texts">
                    <h4 class="tag">
                        {{ $list['tag'] }}
                    </h4>
                    <h2 class="title">
                        {{ $list['title'] }}
                    </h2>
                    <p class="description">
                        {{ $list['description'] }}
                    </p>
                    <div class="links">
                        @if($list['github'])
                            <a href="{{ $list['github'] }}" target="_blank" class="icon github blue"></a>
                        @endif 
                        @if($list['behance'])
                            <a href="{{ $list['behance'] }}" target="_blank" class="icon behance blue"></a>
                        @endif      
                        @if($list['figma'])
                            <a href="{{ $list['figma'] }}" target="_blank" class="icon figma blue"> </a>
                        @endif     
                     
                        @if($list['cta-link'])
                            <a href="{{ $list['cta-link'] }}" target="_blank" rel="noopener noreferrer" class="button read-more blue">
                                {{ $list['cta-label'] }}
                            </a>
                        @endif                         
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</section>