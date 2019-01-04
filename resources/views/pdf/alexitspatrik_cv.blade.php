<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ URL::to('css/cv.css') }}" rel="stylesheet" />
</head>
<body>
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
                    <li><span>name:</span> {{ $settings->fullname }}</li>
                    <li><span>date of birth:</span> {{ date('d.m.Y', strtotime($settings->date_of_birth)) }},<br/>{{ $settings->place_of_birth }}</li>
                    <li><span>phone number:</span> {{ $settings->phone }}</li>
                    <li><span>email address:</span> {{ $settings->email }}</li>
                    <li><span>nationality:</span> {{ $settings->nationality }}</li>
                </ul>
            </div>
        </div>
        <div class="data-card">
            <div class="top"><h3>Language</h3></div>
            <div class="card-content">
                <ul>
                    <li><span>English:</span> Professional working proficiency (with State Accredited Language Examination)</li>
                    <li><span>German:</span> Limited working proficiency</li>
                </ul>
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
</body>
</html>
