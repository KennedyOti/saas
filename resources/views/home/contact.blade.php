@extends('layouts.app')
@section('content')
<main class="_page">
    <section class="contact">
        <div class="contact__wrapper">
            <div class="contact__address">
                <div class="contact__block">
                    <p>
                        <b>Clearwater, FL</b><br />
                        14350 60th St North, Suite: 1441, 33760
                    </p>
                    <div class="contact__block-phone">
                        <a href="tel:267 626 2554">267 626 2554</a>
                    </div>
                </div>
                <div class="contact__block">
                    <p>
                        <b>Denver, CO</b><br />
                        8704 Yates Dr, ste 210, Westminster, CO 80031
                    </p>
                    <div class="contact__block-phone">
                        <a href="tel:303 736 2485">303 736 2485</a>
                    </div>
                </div>
                <div class="contact__block">
                    <p>
                        <b>Austin, TX</b><br />
                        9009 Mountain Ridge Dr, 200, Austin, TX 78759
                    </p>
                    <div class="contact__block-phone">
                        <a href="tel:512 551 2306">512 551 2306</a>
                    </div>
                </div>
            </div>
            <div class="contact__body">
                <div class="text__column">
                    <h1>SEND US A MESSAGE</h1>
                    <p>We seek to create long-term relationships built on results.</p>
                    <p>Tell us about your business goals and we will contact you.</p>
                    <h2>WHAT YOU GET</h2>
                    <ul>
                        <li>An email or phone call from one of our staffs.</li>
                        <li>A detailed explanation of your question.</li>
                        <li>An in-person meeting.</li>
                    </ul>
                </div>
                <div class="form__column">
                    <form class="contact__form">
                        <div class="contact__form-item">
                            <input class="contact__input" placeholder="Name" id="name" type="text" name="name"
                                required />
                            <!-- <label class="contact__label" for="name">Name</label> -->
                        </div>
                        <div class="contact__form-item">
                            <textarea class="contact__textarea" placeholder="Message" id="text" name="text"
                                required></textarea>
                            <!-- <label class="contact__label contact__label_textarea" for="text"> -->
                            <!-- Message
                  </label> -->
                        </div>
                        <div class="contact__form-item">
                            <input class="contact__input" placeholder="Phone" id="subject" type="text" name="subject"
                                required />
                            <!-- <label class="contact__label" for="subject">Phone</label> -->
                        </div>
                        <div class="contact__form-item">
                            <input class="contact__input" placeholder="E-mail" id="email" type="email" name="email"
                                required />
                            <!-- <label class="contact__label" for="email">E-mail</label> -->
                        </div>
                        <!-- <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p> -->
                        <button class="contact__btn" type="submit">
                            <span>Submit</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!--Footer-->
<footer class="footer" id="footer">
    <div class="footer__container">
        <div class="footer__content">
            <div class="footer__body">
                <div class="footer__left">
                    <span class="footer__logo _link" data-link=".wrapper">ideserp</span>
                </div>
                <div class="footer__right"><span class="footer__contacts">14350 60th St North, Suite: 1441</span><span
                        class="footer__contacts">Clearwater FL. 33760, USA</span><span class="footer__contacts">Tel :
                        (877)-247-1888</span></div>
            </div>
            <div class="footer__down"><span class="footer__copy">Copyright 2013 @ Advertising.media. All Rights
                    Reserved</span></div>
        </div>
    </div>
</footer>

<!--Popup-->
<div class="popup popup_popup">
    <div class="popup__content">
        <div class="popup__body">
            <div class="popup__top">
                <ul class="popup__list">
                    <li class="popup__item"><a class="popup__link" href="">Search Statistics</a></li>
                    <li class="popup__item"><a class="popup__link" href="">Registered Keywords</a></li>
                </ul>
                <span class="popup__close"></span>
            </div>
            <div class="popup__main">
                <div class="popup__inner">
                    <form class="popup__form">
                        <div class="popup__form-item"><label class="popup__form-label" for="search2"></label> <input
                                class="popup__form-input" id="search2" type="search" name="search"
                                placeholder="search" /></div>
                    </form>
                    <div class="popup__table-scroll">
                        <table class="popup__table">
                            <thead class="popup__table-header">
                                <tr class="popup__table-row popup__table-row--header">
                                    <th class="popup__table-title popup__table-title--first">Keywords</th>
                                    <th class="popup__table-title">Country</th>
                                    <th class="popup__table-title">Last</th>
                                    <th class="popup__table-title">Hits</th>
                                </tr>
                            </thead>
                            <tbody class="popup__table-body">
                                <tr class="popup__table-row">
                                    <td class="popup__table-date popup__table-date--first">Asd</td>
                                    <td class="popup__table-date">Romania</td>
                                    <td class="popup__table-date">16 minutes ago</td>
                                    <td class="popup__table-date">8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection