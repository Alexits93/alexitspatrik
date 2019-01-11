<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ URL::to('css/cv.css?1') }}" rel="stylesheet" />
    <style>
        @page {
            size: 21cm 29.7cm;
            margin: 0;
        }
        html {
            margin: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: 'Roboto-Regular', sans-serif;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 16px;
            line-height: 20px;
            color: #2c2c2c;
            background: #dbe3fa;
        }
    </style>
</head>
<body>
    <footer>
        alexitspatrik.com &copy; <?php echo date("Y");?>
    </footer>
    <div id="cover">
        <ul>
            @foreach($social as $s)
                <li><span class="s-icon"><i class="{{ $s->icon }}"></i></span><span class="social-text"><small>{{ $s->link1 }}/</small>{{ $s->link2 }}</span></li>
            @endforeach
        </ul>
        <h1><span>Patrik</span> Alexits</h1>
        <h2>Full-Stack Web Developer</h2>
        <img src="{{ URL::to("/images/cover_photo.png") }}" alt="Alexits Patrik" title="Alexits Patrik" />
    </div>
    <div id="about">
        <div class="data-card">
            <div class="top"><h3>Personal data</h3></div>
            <div class="card-content">
                <ul>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>name:</span> {{ $settings->fullname }}</li>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>date of birth:</span> {{ date('d.m.Y', strtotime($settings->date_of_birth)) }},<br/>{{ $settings->place_of_birth }}</li>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>phone number:</span> {{ $settings->phone }}</li>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>email address:</span> {{ $settings->email }}</li>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>location:</span> {{ $settings->location }}</li>
                </ul>
            </div>
        </div>
        <div class="data-card">
            <div class="top"><h3>Language</h3></div>
            <div class="card-content">
                <ul>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>English:</span> Professional working proficiency (with State Accredited Language Examination)</li>
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>German:</span> Limited working proficiency</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="education">
        <h2>Studies, <span class="bold-text">education</span></h2>
        <div class="data-card">
            <div class="card-content">
                <span class="card-date">2007-2011</span>
                <p class="bold-text">Handler Nándor Secondary School, Sopron, Hungary</p>
                <span class="italic-text">Information Technologies</span>
            </div>
        </div>
        <div class="data-card">
            <div class="card-content">
                <span class="card-date">2011-2012</span>
                <p class="bold-text">Handler Nándor Secondary School, Sopron, Hungary</p>
                <span class="italic-text">National Qualification Register, Web/Multimedia Management and Webmaster</span>
            </div>
        </div>
        <div class="data-card">
            <div class="card-content">
                <span class="card-date">2014-2017</span>
                <p class="bold-text">University of West Hungary</p>
                <span class="italic-text">Approved programme of vocational higher education, Business Information Technologist Assistant</span>
            </div>
        </div>
    </div>
    <div class="page-break"></div>
    <div class="block">
        <div id="experience">
            <h2>Professional <span class="bold-text">experience</span></h2>
            <div class="card-holder">
                <div class="data-card">
                    <div class="card-content">
                        <span class="card-date">2015.05-2017.01</span>
                        <p class="bold-text">Self employed at IT-Sopron</p>
                        <ul>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Experience in handling stressful situations</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Experience with business management</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Experience with Clients</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-holder">
                <div class="data-card">
                    <div class="card-content">
                        <span class="card-date">2017.01-2017.04</span>
                        <p class="bold-text">Web developer at Master Partner Kft.</p>
                        <ul>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />customizing LG Signage framework</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />working with custom PHP frameworks, sitebuilding</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Project Management with Asana</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-holder">
                <div class="data-card">
                    <div class="card-content">
                        <span class="card-date">2017.06-2018.12</span>
                        <p class="bold-text">Full-Stack Web Developer at Voov Kft.</p>
                        <ul>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />maintaining or support the development of web applications/websites.</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />50+ projects (with management software - Active Collab)</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />working together with the designer team</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />front-end, sitebuild (HTML5, CSS3, SCSS, Javascript, JQuery, AJAX, Bootstrap, Photoshop, Zeplin etc.)</li>
                            <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />back-end (Laravel, PHP, MySQL, Custom PHP frameworks, Core PHP)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="knowledge">
            <h2>Known <span class="bold-text">technologies</span></h2>
            <div class="data-card">
                <div class="card-content">
                    <p class="bold-text">Back-end</p>
                    <ul>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Professional work proficiency with Laravel</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Proficient with MySQL, PHP</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Experience in custom PHP frameworks</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Participated in more than 20 Laravel or custom PHP framework projects</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Capable to implement packages into projects</li>
                    </ul>
                </div>
            </div>
            <div class="data-card">
                <div class="card-content">
                    <p class="bold-text">Front-end</p>
                    <ul>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Professional work proficiency with Bootstrap, CSS Flexbox</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Proficient with css3, scss, html5, js, jquery, ajax, Blade templating language</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Experience in customizing bootstrap, css templates</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Participated in more than 20 sitebuild projects</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Capable to sitebuild from PSD</li>
                    </ul>
                </div>
            </div>
            <div class="data-card">
                <div class="card-content">
                    <p class="bold-text">Worktools</p>
                    <ul>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Photoshop, Zeplin (limited work proficiency)</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Git, npm, composer (limited work proficiency with GitHub, Laravel-mix)</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />NexusFont, FontSquirrel</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />Active Collab (Project management)</li>
                        <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" />PhpStorm, NetBeans (2+ years experience)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
