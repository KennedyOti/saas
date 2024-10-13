@extends('layouts.app')
@section('content')
<main class="page">
    <div class="main__content">
        <h1 class="main__title">Make your own way</h1>
        <img class="bck__img" src="{{asset('assets/images/bck-img.jpeg')}}" alt="background" />

        <a class="main__watch" href=""></a>
    </div>
    <div class="intro__section">
        <div class="intro__text">
            <div class="intro__title">
                <h2>We’re a trusted growth partner to millions of everyday entrepreneurs.</h2>
            </div>
            <div class="intro__p">
                <p>GoDaddy is the world’s largest services platform for entrepreneurs around the globe. We’re on a
                    mission to empower our worldwide community of 20+ million customers — and entrepreneurs everywhere —
                    by giving them all the help and tools they need to grow online.</p>
            </div>
        </div>
        <div class="banners">
            <img class="banner__image" src="{{asset('assets/images/banner_sh1.png')}}" alt="background" />
            <img class="banner__image" src="{{asset('assets/images/banner_sh4.png')}}" alt="background" />
            <img class="banner__image" src="{{asset('assets/images/banner_sh3.png')}}" alt="background" />
            <img class="banner__image" src="{{asset('assets/images/banner_sh2.png')}}" alt="background" />
        </div>

        <div class="whatwedo">
            <div class="whatwedo__text">
                <p>What We Do</p>
                <h2>We champion entrepreneurs by delivering the perfect help and tools for their journey.</h2>
                <p>GoDaddy is the place folks come to name their idea, create a compelling brand and a great looking
                    website, attract customers with digital and social marketing, and manage their work. Where no tool
                    alone will do, we give direct one-on-one guidance with a human connection.</p>
            </div>
            <div class="whatwedo__images">
                <img class="whatwedo__img" src="{{asset('assets/images/present1-img.png')}}" alt="background" />
                <img class="whatwedo__img" src="{{asset('assets/images/present2-img.png')}}" alt="background" />
                <img class="whatwedo__img" src="{{asset('assets/images/present3-img.png')}}" alt="background" />
            </div>
            <div class="whatwedo__text">
                <p>What We’ve Done</p>
                <h2>These humble brag numbers prove what can be done by pulling together and working hard.</h2>
            </div>
            <div class="whatwedo__power">
                <div class="module svg__module">
                    <div class="svg__div">
                        <img class="whatwedo__svg" src="{{asset('assets/images/house.svg')}}" alt="background" />
                    </div>
                    <div class="module__text svg__text">
                        <h3>14</h3>
                        <p>Our 14 offices dot the globe from Seattle to Belgrade.</p>
                    </div>
                </div>
                <div class="module svg__module">
                    <div class="svg__div">
                        <img class="whatwedo__svg" src="{{asset('assets/images/arrow.svg')}}" alt="background" />
                    </div>
                    <div class="module__text svg__text">
                        <h3>80m</h3>
                        <p>We empower 20 million+ everyday entrepreneurs.</p>
                    </div>
                </div>
                <div class="module svg__module">
                    <div class="svg__div">
                        <img class="whatwedo__svg" src="{{asset('assets/images/road.svg')}}" alt="background" />
                    </div>
                    <div class="module__text svg__text">
                        <h3>80m</h3>
                        <p>Our customers trust us with their 80 million+ domain names.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="new__section">
            <div class="dev__section">
                <div class="first__section">
                    <div class="text__section">
                        <p>Our Team</p>
                        <h3>Our leadership team humbly and passionately dedicates itself to unleashing the collective
                            power of everyday entrepreneurs.</h3>
                    </div>
                </div>
                <div class="second__section">
                    <div class="person">
                        <div class="person__img">
                            <img class="person__img" src="{{asset('assets/images/user_1.png')}}" alt="background" />
                        </div>
                        <div class="person__text">
                            <div class="person__name">
                                <h2>Mike McMahon</h2>
                            </div>
                            <div class="person__funtion">
                                <p>CEO</p>
                            </div>
                            <div class="person__description">
                                <p>SAP veteran with 20 over years industry experience. I am all out on a mission to
                                    teach SAP to new students in the easiest way possible. Come and join me.</p>
                            </div>
                        </div>
                    </div>
                    <div class="person">
                        <div class="person__img">
                            <img class="person__img" src="{{asset('assets/images/user_2.png')}}" alt="background" />
                        </div>
                        <div class="person__text">
                            <div class="person__name">
                                <h2>Josh Densen</h2>
                            </div>
                            <div class="person__funtion">
                                <p>VP of Product Development</p>
                            </div>
                            <div class="person__description">
                                <p>I enjoy developing SAP training videos for newbies. Stop worrying about SAP
                                    complexity and join hand with us. Our videos are the new way to learn SAP.</p>
                            </div>
                        </div>
                    </div>
                    <div class="person">
                        <div class="person__img">
                            <img class="person__img" src="{{asset('assets/images/user_3.png')}}" alt="background" />
                        </div>
                        <div class="person__text">
                            <div class="person__name">
                                <h2>Andrew Figurelli</h2>
                            </div>
                            <div class="person__funtion">
                                <p>VP of Business Development</p>
                            </div>
                            <div class="person__description">
                                <p>Business development is my passion. I meet SAP students everyday and understand their
                                    challenges. The more we can understand the challenges the better we can fine tune
                                    our training videos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our__team">
            <div class="color__section"></div>
            <div class="team__text">
                <h3>Our Team Members</h3>
                <p></p>
            </div>
            <div class="team__person">
                <div class="module module__prs">
                    <div class="person__img team__prs">
                        <img class="person__img team__prs" src="{{asset('assets/images/person1.jpg')}}"
                            alt="background" />
                    </div>
                    <div class="module__text">
                        <h3>Mario Speedwagon</h3>
                        <p>Accountant-auditor</p>
                    </div>
                </div>
                <div class="module module__prs">
                    <div class="person__img team__prs">
                        <img class="person__img team__prs" src="{{asset('assets/images/person2.jpg')}}"
                            alt="background" />
                    </div>
                    <div class="module__text">
                        <h3>Peter Cruiser</h3>
                        <p>Vice President</p>
                    </div>
                </div>
                <div class="module module__prs">
                    <div class="person__img team__prs">
                        <img class="person__img team__prs" src="{{asset('assets/images/person3.jpg')}}"
                            alt="background" />
                    </div>
                    <div class="module__text">
                        <h3>Anna Sthesia</h3>
                        <p>Sales Manager</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="highfive">
            <div class="svg__div">
                <img class="whatwedo__svg" src="{{asset('assets/images/highfive.svg')}}" alt="background" />
            </div>
            <div class="module__text highfive__text">
                <h3>Make your way with us.</h3>
                <p>Join the team.</p>
            </div>
        </div>
        <div class="footer">
            <div class="signup">
                <div class="email__signup">
                    <p class="signup__text">Sign up for alerts</p>
                    <input class="email__input" type="text" placeholder="Your email" />
                    <button type="button" class="btn btn-light signup__btn">SUBMIT</button>
                </div>
                <div class="call__action">
                    <p>We love taking your call.</p>
                    <h3>GoDaddy guides</h3>
                </div>
            </div>
            <div class="info__div">
                <p>Prices exclude tax. ICANN fees included</p>
            </div>
            <div class="info__links">
                <div class="info__link">
                    <p class="footer__title">Support</p>
                    <ul class="footer__links">
                        <li class="footer__link">About Us</li>
                        <li class="footer__link">Contact Us</li>
                        <li class="footer__link">Investor Relations</li>
                    </ul>
                </div>
                <div class="info__link">
                    <p class="footer__title">Support</p>
                    <ul class="footer__links">
                        <li class="footer__link">About Us</li>
                        <li class="footer__link">Contact Us</li>
                        <li class="footer__link">Investor Relations</li>
                    </ul>
                </div>
                <div class="info__link">
                    <p class="footer__title">Support</p>
                    <ul class="footer__links">
                        <li class="footer__link">About Us</li>
                        <li class="footer__link">Contact Us</li>
                        <li class="footer__link">Investor Relations</li>
                    </ul>
                </div>
                <div class="info__link">
                    <p class="footer__title">Support</p>
                    <ul class="footer__links">
                        <li class="footer__link">About Us</li>
                        <li class="footer__link">Contact Us</li>
                        <li class="footer__link">Investor Relations</li>
                    </ul>
                </div>
                <div class="info__link">
                    <p class="footer__title">Support</p>
                    <ul class="footer__links">
                        <li class="footer__link">About Us</li>
                        <li class="footer__link">Contact Us</li>
                        <li class="footer__link">Investor Relations</li>
                    </ul>
                </div>
                <div class="info__link">
                    <p class="footer__title">Support</p>
                    <ul class="footer__links">
                        <li class="footer__link">About Us</li>
                        <li class="footer__link">Contact Us</li>
                        <li class="footer__link">Investor Relations</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p class="copyright__text">© 2021 GoDaddy Operating Company, LLC. All Rights Reserved.</p>
                <ul class="copyright__links">
                    <li>Legal</li>
                    <li>Privacy Policy</li>
                    <li>Advertising Prefernces</li>
                    <li>Cookies</li>
                </ul>
            </div>
        </div>
    </div>
</main>
@endsection