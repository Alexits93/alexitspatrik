<footer>
    <div class="top d-flex justify-content-center align-items-center mb-40">
        <img src="{{ URL::to('/images/logo.png') }}" class="logo" alt="Alexits Patrik" title="Alexits Patrik" data-aos="fade-down"/>
        <a href="{{ route('home') }}" class="logo-text f-white custom" data-aos="fade-up">alexitspatrik</a>
    </div>
    <p class="mb-20" data-aos="fade-right">Copyright &copy; AlexitsPatrik. All right reserved.</p>
    <p class="mb-20" data-aos="fade-left" data-aos-offset="100">Design by Melinda Hujber, site by Alexits Patrik</p>
    <ul>
        @foreach(\App\Models\Page::get() as $page)
            <li><a href="{{ URL::to($page->slug) }}" class="custom">{{ $page->title }}</a></li>
        @endforeach
    </ul>
</footer>

{{ Html::script(mix('/js/app.js')) }}

@stack('scripts')