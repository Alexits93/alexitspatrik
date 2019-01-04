@extends('layouts.app')

@section('content')
    <div class="cover">
        <div class="container d-md-flex align-items-center">
            <div>
                <h1 data-aos="fade-right" data-aos-delay="200"><span>Patrik</span> Alexits</h1>
                <h2 data-aos="fade-left" data-aos-delay="400">Full-Stack Web Developer</h2>
            </div>
            <img src="{{ URL::to("/images/cover_photo.png") }}" class="cover-photo" alt="Alexits Patrik" title="Alexits Patrik" data-aos="fade-left"/>
        </div>
    </div>
    <div id="about">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-up">About <span class="f-blue bold-text">me</span></h2>
            <a  href="#about" id="goDown" data-aos="zoom-in" data-aos-delay="6000   "></a>
            <div class="row w-lg-790 mx-lg-auto">
                <div class="col-12 col-md-6" data-aos="fade-right">
                    <div class="data-card">
                        <div class="top d-flex align-items-center px-20"><h3>Personal data</h3></div>
                        <div class="card-content py-40 px-20">
                            <ul>
                                <li><span>name:</span> Patrik Alexits</li>
                                <li><span>date of birth:</span> 21.01.1993,<br/>Sopron, Hungary</li>
                                <li><span>phone number:</span> 003620/2696159</li>
                                <li><span>email address:</span> info@alexitspatrik.com</li>
                                <li><span>nationality:</span> hungarian</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-left" data-aos-delay="350">
                    <div class="data-card">
                        <div class="top d-flex align-items-center px-20"><h3>Language</h3></div>
                        <div class="card-content py-40 px-20">
                            <ul>
                                <li><span>English:</span> Professional working proficiency (with State Accredited Language Examination)</li>
                                <li><span>German:</span> Limited working proficiency</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="education">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-down">Studies, <span class="f-blue bold-text">education</span></h2>
            <div class="row mb-40">
                <div class="col-12 col-md-4" data-aos="fade-up">
                    <div class="data-card">
                        <div class="card-content">
                            <span class="card-date">2007-2011</span>
                            <p class="bold-text">Handler Nándor Secondary School, Sopron, Hungary</p>
                            <span class="italic-text">Information Technologies</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="data-card">
                        <div class="card-content">
                            <span class="card-date">2011-2012</span>
                            <p class="bold-text">Handler Nándor Secondary School, Sopron, Hungary</p>
                            <span class="italic-text">National Qualification Register, Web/Multimedia Management and Webmaster</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="data-card">
                        <div class="card-content">
                            <span class="card-date">2014-2017</span>
                            <p class="bold-text">University of West Hungary</p>
                            <span class="italic-text">Approved programme of vocational higher education, Business Information Technologist Assistant</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" data-aos="fade-up"><a href="#" class="button button-blue">Certificate view</a></div>
        </div>
    </div>
    <div id="experience">
        <div class="container px-0 py-80">
            <h2 class="text-center f-white mb-55" data-aos="fade-down">Professional<br/> <span class="bold-text">experience</span></h2>
            <div class="timeline" data-aos="fade-up">
                <div class="line"></div>
                <div class="grid w-lg-790 mx-lg-auto">
                    <div class="card-holder">
                        <span class="card-number">1</span>
                        <div class="data-card">
                            <div class="card-content">
                                <span class="card-date">2015.05-2017.01</span>
                                <p class="bold-text">self employed at IT-Sopron</p>
                                <ul>
                                    <li>Experience in handling stressful situations</li>
                                    <li>Experience with business management</li>
                                    <li>Experience with Clients</li>
                                </ul>
                                <span class="italic-text">Used technologies: HTML5, CSS3, PHP, Bootstrap, Javascript, JQuery</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-holder">
                        <span class="card-number">2</span>
                        <div class="data-card">
                            <div class="card-content">
                                <span class="card-date">2016.06-2017.01</span>
                                <p class="bold-text">trainee at Hungarian Post</p>
                                <ul>
                                    <li>trainee at West Hungarian Regional Directorate General</li>
                                    <li>optimization and analyzation of delivery routes, systems</li>
                                    <li>creating financial statements with MS Excel</li>
                                    <li>creating presentations with MS PowerPoint</li>
                                    <li>analyzing routes with</li>
                                </ul>
                                <span class="italic-text">Used technologies: HTML5, CSS3, PHP, Bootstrap, Javascript, JQuery</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-holder">
                        <span class="card-number">3</span>
                        <div class="data-card">
                            <div class="card-content">
                                <span class="card-date">2017.01-2017.04</span>
                                <p class="bold-text">web developer at Master Partner Kft.</p>
                                <ul>
                                    <li>customizing LG Signage framework</li>
                                    <li>working with custom PHP frameworks, sitebuilding</li>
                                    <li>Project Management with Asana</li>
                                </ul>
                                <span class="italic-text">Used technologies: HTML5, CSS3, PHP, Bootstrap, Javascript, JQuery</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-holder">
                        <span class="card-number">4</span>
                        <div class="data-card">
                            <div class="card-content">
                                <span class="card-date">2017.06-2018.12</span>
                                <p class="bold-text">Full-Stack Web Developer at Voov Kft.</p>
                                <ul>
                                    <li>maintaining or support the development of web applications/websites.</li>
                                    <li>50+ projects (with management software - Active Collab)</li>
                                    <li>working together with the designer team</li>
                                    <li>front-end, sitebuild (HTML5, CSS3, SCSS, Javascript, JQuery, AJAX, Bootstrap, Photoshop, Zeplin etc.)</li>
                                    <li>back-end (Laravel, PHP, MySQL, Custom PHP frameworks, Core PHP)</li>
                                </ul>
                                <span class="italic-text">Used technologies: HTML5, CSS3, PHP, Bootstrap, Javascript, JQuery</span>
                            </div>
                        </div>
                    </div>
                    <div class="gutter-sizer"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="knowledge">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-down">Known <span class="f-blue bold-text">technologies</span></h2>
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-up">
                    <div class="data-card">
                        <div class="card-content">
                            <div class="circle-top worktools"></div>
                            <h3 class="text-center mb-20">Back-end</h3>
                            <ul>
                                <li>Professional work proficiency with Laravel</li>
                                <li>Proficient with MySQL, PHP</li>
                                <li>Experience in custom PHP frameworks</li>
                                <li>Participated in more than 20 Laravel or custom PHP framework projects</li>
                                <li>Capable to implement packages into projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="data-card">
                        <div class="card-content">
                            <div class="circle-top worktools"></div>
                            <h3 class="text-center mb-20">Front-end</h3>
                            <ul>
                                <li>Professional work proficiency with Bootstrap, CSS Flexbox</li>
                                <li>Proficient with css3, scss, html5, js, jquery, ajax, Blade templating language</li>
                                <li>Experience in customizing bootstrap, css templates</li>
                                <li>Participated in more than 20 sitebuild projects</li>
                                <li>Capable to sitebuild from PSD</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="data-card">
                        <div class="card-content">
                            <div class="circle-top worktools"></div>
                            <h3 class="text-center mb-20">Worktools</h3>
                            <ul>
                                <li>Photoshop, Zeplin (limited work proficiency)</li>
                                <li>Git, npm, composer (limited work proficiency with GitHub, Laravel-mix)</li>
                                <li>NexusFont, FontSquirrel</li>
                                <li>Active Collab (Project management)</li>
                                <li>PhpStorm, NetBeans (2+ years experience)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-down">Portfolio, <span class="f-blue bold-text">references</span></h2>
            <div class="row">
                @foreach($portfolio as $p)
                    <div class="col-12 col-md-6 col-lg-4 mb-20 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="data-card">
                            <div class="img-holder" style="background-color: {{ $p->color_code }}"><a href="#"><img src="{{ URL::to($p->pic_path) }}" alt="{{ $p->title }}" title="{{ $p->title }}" width="{{ $p->img_width }}"/></a></div>
                            <div class="card-content py-40 px-20 text-center {{ strtolower($p->title) }}">
                                <h3><a href="http://www.halzona.hu" class="custom" target="_blank">{{ $p->title }}</a></h3>
                                <p>{{ $p->subtitle }} @if($p->collaboration)<span class="bold-text">{{ $p->collaboration }}</span>@endif</p>
                                <span class="italic-text">{{ $p->description }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="activities">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-down">Leisure activities, <span class="f-blue bold-text">hobbies</span></h2>
            <div class="row">
                <div class="col-12 col-md-4" data-aos="fade-right">
                    <div class="data-card">
                        <div class="card-content">
                            <div class="circle-top football"></div>
                            <h3 class="text-center mb-20">Freestyle Football</h3>
                            <p>Participated in 2 Open World Championships, 1 Open European Championship and in several other competitions</p>
                            <p>Head Judge in 2 National Championships</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-right" data-aos-delay="200">
                    <div class="data-card">
                        <div class="card-content">
                            <div class="circle-top gaming"></div>
                            <h3 class="text-center mb-20">Gaming</h3>
                            <p>I mostly play story-driven single player games, but sometimes I play with my friends online on my PS4.</p>
                            <p>I collect physical copies and game relics</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-right" data-aos-delay="400">
                    <div class="data-card">
                        <div class="card-content">
                            <div class="circle-top coding"></div>
                            <h3 class="text-center mb-20">Coding</h3>
                            <ul class=" text-left mb-0">
                                <li>reading news about IT/programming trends</li>
                                <li>keeping myself up-to-date in used technologies</li>
                                <li>active member on Stackoverflow</li>
                                <li>active member in several facebook groups</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container px-0 py-80">
            <h2 class="text-center" data-aos="fade-down">Contact, <span class="f-blue bold-text">message me</span></h2>
            <div class="row" data-aos="fade-up">
                <div class="col-12">
                    {{ Form::open() }}
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('subject', 'Subject') }}
                        {{ Form::text('subject', null) }}
                    </div>
                    <div class="form-group mb-40">
                        {{ Form::label('message', 'Message') }}
                        {{ Form::textarea('message', null) }}
                    </div>
                    <div class="form-group text-center mb-0">
                        {{ Form::submit('Send message', ['class' => 'button button-blue']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    @include('children.social')
@endsection