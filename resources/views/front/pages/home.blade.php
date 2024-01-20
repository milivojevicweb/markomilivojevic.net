@extends('layouts.template')

@section('title')
Web Developer
@endsection('title')

@section('ogImage')
{{asset('images/ogImg.webp')}}
@endsection('ogImage')

@section('centar')

    <div id="slider">
        <div class="wrapper">
            <div id="sliderContent">
                <div id="sliderText">
                    <h1>Marko Milivojevic</h1>
                    <p>Specializing in web application development. I leverage innovative solutions in both coding and design to create a seamless and advanced digital experience.</p>
                    <div id="sliderLink">
                        <a class="homeButton backgroundButton" target="_self" rel="follow" href="{{url('/projects')}}">Projects</a>
                        <span class="homeButton noBackgroundButton" id="buttonBenefits">Development</span>
                    </div>
                    <div id="mouse"></div>
                </div>

            </div>

        </div>
    </div>

    <div class="wrapper">
        <div id="partnersLogo">
            <p>Trusted by</p>
            <img src="{{asset('images/tr.webp')}}" alt="partners"/>
        </div>
    </div>

    <div class="container">
        <div class="wrapper">
            <div id="tabHomeContact">
                <div class="stars0"></div>
                <div class="stars"></div>
                <div class="stars2"></div>
                <div class="stars3"></div>
                <h1>Interested in working together?</h1>
                <a target="_self" rel="follow" href="{{url('/projects')}}"><p class="homeLink link"> More projects <i class="fa fa-chevron-right arrow"></i></p></a>
            </div>
            <div id="tabHomeContactSmallContainer" class="tabHome">
                <a target="_self" rel="follow" href="{{url('/contact')}}" class="tabContactSmall">
                    <div class="tabSmallText">
                        <h2>Contact me</h2>
                        <p>If you want to collaborate on a project with me, contact me.</p>
                    </div>
                    <img class="tabContactSmallImgFirst" src="{{asset('images/smallFirst.webp')}}" alt="Contact" />
                </a>

                <a target="_self" rel="follow" href="{{url('/about')}}" class="tabContactSmall" >
                    <div class="tabSmallText">
                        <h2>About Marko</h2>
                        <p>Learn more about me and my story</p>
                    </div>
                    <img class="myPhoto" src="{{asset('images/marko.webp')}}" alt="About" />
                </a>
            </div>
        </div>
    </div>


    <div class="container2">
        <div class="wrapper">
            <div class="homeHeader">
                <h2>What my clients&nbsp;say.</h2>
            </div>
            <div class="headerPadding">
                <div class="homeContainer">
                    <div class="aboutCard">
                        <div class="cardMain">
                            <img src="{{asset('images/lazarriorovic.webp')}}" alt="Lazar Riorovic"/>
                            <p>Marko excelled throughout our collaboration on the project. His expertise and efficient communication set him apart as a top professional. Excellent work, and we will certainly collaborate again!</p>
                        </div>
                        <div class="cardFooter">
                            <div class="cardFooterText">
                                <p>Lazar Riorovic</p>
                                <p>Owner</p>
                            </div>
                            <div class="cardFooterLogo">
                                <img src="{{asset('images/deepAqua.webp')}}" alt="Deep aqua"/>
                            </div>
                        </div>
                    </div>

                    <div class="aboutCard">
                        <div class="cardMain">
                            <img src="{{asset('images/bogdanpostic.webp')}}" alt="Bogdan Postic"/>
                            <p>Working with Marko was a true pleasure. His ability to quickly understand needs and deliver quality content highlighted him as an exceptional partner. We highly recommend Marko's services!</p>
                        </div>
                        <div class="cardFooter">
                            <div class="cardFooterText">
                                <p>Bogdan Postic</p>
                                <p>Owner</p>
                            </div>
                            <div class="cardFooterLogo">
                                <img src="{{asset('images/3dream.webp')}}" alt="3Dream"/>
                            </div>
                        </div>
                    </div>

                    <div class="aboutCard">
                        <div class="cardMain">
                            <img src="{{asset('images/nikolasekulicslika.webp')}}" alt="Nikola Sekulic"/>
                            <p>Collaborating with Marko on the app was amazing. His attention to detail and innovative approach led to outstanding results. We eagerly look forward to more projects with this skilled partner!</div>
                        <div class="cardFooter">
                            <div class="cardFooterText">
                                <p>Nikola Sekulic</p>
                                <p>Owner</p>
                            </div>
                            <div class="cardFooterLogo ns">
                                <img src="{{asset('images/nikolaSekulic.webp')}}" alt="Nikola Sekulic"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container3" id="benefits">
        <div class="wrapper">
            <div class="homeHeader">
                <h2>Your <span class="linearText">ultimate</span> web partner.</h2>
            </div>
            <div class="tabHome tabHomeFirst">
                <div class="tab2">
                    <div class="smallTab">
                        <p class="tabBigText">4+</p>
                        <p class="tabSmallText">happy clients</p>
                    </div>
                    <div class="smallTab">
                        <p class="tabBigText">1 years</p>
                        <p class="tabSmallText">experience</p>
                    </div>
                    <div class="smallTab">
                        <p class="tabBigText">10+</p>
                        <p class="tabSmallText">successful projects</p>
                    </div>
                    <div class="smallTab">
                        <p class="tabBigText">100%</p>
                        <p class="tabSmallText">professional</p>
                    </div>
                </div>
                <div class="tab2 tabDesign tabBigRight">
                    <h2 class="tabBigText">Working at the intersection of design and code.</h2>
                    <p class="tabSmallText">With experience in web development, I emphasize effective design, focusing on meticulous attention to detail. Bid farewell to communication challenges with developers who may lack a discerning eye for design. Trust a seasoned professional with the skills, experience, and unwavering enthusiasm to bring your vision to life with precision.</p>
                </div>
            </div>

            <div class="tabHome tabDesign">
                <div id="middleTab">
                    <p class="tabBigText">Impressive animations.</p>
                    <p class="tabSmallText">Specializing in refined micro-interactions and intricate, impactful animations, I excel in transforming conceptual visions into sophisticated, delightful user experiences with precision and professionalism.</p>
                <p></p>
                </div>
                <div id="middleImageTab">
                    <video id="videoAnimation" autoplay loop muted playsinline>
                        <source src="{{asset('images/sajtAnimacija.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>

            <div id="tabCodeSeo" class="tabHome tabMargin">
                <div id="smallLeftTab" class="tab2 tabDesign paddingRightZero">
                    <p class="tabBigText">Clean, efficient code.</p>
                    <div id="imageBox">
                        <img  src="{{asset('images/cv.webp')}}" alt="Programming Languages" />
                    </div>
                </div>
                <div id="smallRightTab" class="tab2 tabDesign paddingRightLeftZero">
                    <p class="tabBigText bigTextPadding">Best performance.</p>

                    <div id="seoTab">
                        <div id="borderLine"></div>
                        <img  src="{{asset('images/seo.webp')}}" alt="Seo" />
                    </div>
                </div>
            </div>

            <div id="tabResponsive" class="tabHome tabMargin">
                <div id="responsiveTabLeft" class="tab2 tabDesign">
                    <p class="tabBigText">Responsive development.</p>
                    <p class="responsiveText">It should be a standard today, but it is often neglected and not given enough attention.</p>
                    <img id="leftResponsive" class="responsiveImage " src="{{asset('images/leftResponsive.webp')}}" alt="Responsive development">
                </div>
                <div id="responsiveTabRight" class="tab2 tabDesign">
                    <p class="tabBigText">Administration dashboard.</p>
                    <p class="responsiveText">It is possible to manage the entire content on the website through the admin panel.</p>
                    <img id="rightResponsive" class="responsiveImage " src="{{asset('images/rightResponsive.webp')}}" alt="Admin Panel">
                </div>
            </div>

        </div>
    </div>


    <div id="googleSecurity">
        <div class="wrapper">
            <div class="homeHeader">
                <h2>Why is your website the best?</h2>
            </div>
            <div id="tabGoogleSecurity" class="tabHome tabHomeFirst">
                <div class="homeTab">
                    <p class="homeTabHeader" id="google"><span class="blue">G</span><span class="red">o</span><span class="yellow">o</span><span class="blue">g</span><span class="green">l</span><span class="red">e</span> will favor your new website.</p>
                    <p class="homeTabText">Give your SEO a boost with fine level controls over meta tags, markup, redirects and indexing rules.</p>
                    <img src="{{asset('images/seo-graph.svg')}}" alt="seo"/>
                </div>
                <div class="homeTab">
                    <p class="homeTabHeader" id="google">Security is guaranteed.</p>
                    <p class="homeTabText">Securing an online environment, each website is enhanced with advanced security protocols, adopting a proactive stance against potential cyber threats and attacks to ensure a protected digital experience.</p>
                    <i id="lock" class="fa fa-lock"></i>
                </div>
                <div id="tabBestSite">
                    <div id="bestLeft">
                        <p class="homeTabHeader">Your Website Is Your Business.</p>
                        <p class="homeTabText">A good website is crucial for boosting your business. Regardless of the excellence of the products and services you offer, a professional design instills trust in visitors and motivates them to become loyal customers.</div>
                    <div id="bestRight">
                        <ul>
                            <li><div class="faContact"><i class="fa fa-check"></i></div><span>Quality content</span></li>
                            <li><div class="faContact"><i class="fa fa-check"></i></div><span> Navigation and functionality</span></li>
                            <li><div class="faContact"><i class="fa fa-check"></i></div><span> Attractive design</span></li>
                            <li><div class="faContact"><i class="fa fa-check"></i></div><span> A good website is a fast website</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection('centar')

@section('javascript')
@parent
    <script type="text/javascript" src="{{asset('js/homeMenu.js')}}"></script>
@endsection('javascript')
