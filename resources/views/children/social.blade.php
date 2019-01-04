<div id="social">
    <div class="container px-0">
        <ul class="d-flex justify-content-center align-items-center mb-0">
            @foreach($social as $s)
                <li data-aos="fade-right"><a href="{{ $s->target_url }}" class="link" target="_blank"><span class="s-icon"><i class="{{ $s->icon }}"></i></span><span class="social-text"><small>{{ $s->link1 }}/</small>{{ $s->link2 }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>