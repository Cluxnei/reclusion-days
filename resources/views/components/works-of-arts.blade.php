<section id="works-of-arts" class="wrapper style2 spotlights">
    @foreach($worksOfArts as $workOfArt)
        <section>
            <a href="{{ route('work-of-art', $workOfArt->slug) }}" class="image">
                <img data-image="{{ $workOfArt->photo }}" src="{{ asset($workOfArt->getPlaceholder()) }}" alt="{{ $workOfArt->title }}" data-position="center center" />
            </a>
            <div class="content">
                <div class="inner">
                    <h2>{{ $workOfArt->title }}</h2>
                    <h4>{{ $workOfArt->author }} - {{ $workOfArt->technique }}</h4>
                    <p>{{ $workOfArt->description }}</p>
                    <ul class="actions">
                        <li>
                            <a href="{{ route('work-of-art', $workOfArt->slug) }}" class="button">
                                @lang('messages.learn-more')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    @endforeach
</section>
