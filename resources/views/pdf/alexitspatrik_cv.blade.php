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
                    <li><img src="{{ URL::to('/images/card_content_bullet.png') }}" /><span>nationality:</span> {{ $settings->nationality }}</li>
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
    </div>
</body>
</html>
