
@extends('layouts.master')

@section('content')
<!-- ================================================== TESTIMONIALS ================================================== -->
<section>
    <div class="container">
        <div class="row space-top medium">
            <div class="map" data-appear-animation="bounceIn">

            </div>
        </div>
    </div>



</section>

<!-- ================================================== END TESTIMONIALS ================================================== -->

<!-- ================================================== BY OR RESERVE =========================================== -->
<section>

    <div class="space-bottom">
        <div class="container">
            <div class="row" data-appear-animation="bounceIn">

                <div class="twelve columns alpha">

                    <div class="promo">

                        <div class="form">
                            <h3><b>@lang('labels.susisiekite_su_mumis')</b>
                            </h3>
                            <h4>@lang('tekstai.susisiekite_su_mumis')</h4>
                            <div class="send_result"></div>
                            <form class="contactform" method="post" action="contact_process.php">
                                <fieldset>
                                    <div class="six columns alpha">

                                        <div class="input">
                                            <input type="text" placeholder="@lang('labels.vardas')" name="name"/>
                                        </div>

                                        <div class="input">
                                            <input type="text" placeholder="@lang('labels.el_pastas')" name="email" />
                                        </div>
                                        <div class="input">
                                            <input type="text" placeholder="@lang('labels.telefonas')" name="phonenumber"/>
                                        </div>
                                    </div>
                                    <div class="six columns">
                                        <div class="textarea">
                                            <textarea placeholder="@lang('labels.zinute')" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="twelve columns alpha">
                                        <div class="input-submit">
                                            <input type="submit" value="@lang('labels.siusti')" class="submitform" />
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="four columns alpha" data-appear-animation="slideInLeft">
                    <h4>
                        <span class="icon-map2"></span><b>Belgrade Business</b>
                    </h4>
                    <p>
                        <span class="icon-clock"></span>Mon - Fri: 9am -5pm</p>
                        <p>
                            <span class="icon-location"></span>1234 Belgrade, Srpski Pogled, RS 94043, Serbia
                        </p>
                        <p>
                            <span class="icon-phone"></span>+321 123 4567</p>
                            <p>
                                <span class="icon-support"></span>info@example.com</p>
                            </div>

                            <div class="four columns" data-appear-animation="bounceIn">
                                <h4>
                                    <span class="icon-map2"></span><b>Paris Business</b>
                                </h4>
                                <p>
                                    <span class="icon-clock"></span>Mon - Fri: 9am -5pm</p>
                                    <p>
                                        <span class="icon-location"></span>1234 Belgrade, Srpski Pogled, RS 94043, Serbia
                                    </p>
                                    <p>
                                        <span class="icon-phone"></span>+321 123 4567</p>
                                        <p>
                                            <span class="icon-support"></span>info@example.com</p>
                                        </div>


                                        <div class="four columns" data-appear-animation="slideInRight">
                                            <h4>
                                                <span class="icon-map2"></span><b>New York Business</b>
                                            </h4>
                                            <p>
                                                <span class="icon-clock"></span>Mon - Fri: 9am -5pm</p>
                                                <p>
                                                    <span class="icon-location"></span>1234 Belgrade, Srpski Pogled, RS 94043, Serbia
                                                </p>
                                                <p>
                                                    <span class="icon-phone"></span>+321 123 4567</p>
                                                    <p>
                                                        <span class="icon-support"></span>info@example.com</p>
                                                    </div>


                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                </section>

                                <!-- ================================================== dark OR RESERVE ============================================= -->
                                @stop