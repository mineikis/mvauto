	<!-- ================================================== TOP FOOTER ================================================== -->
    <section>
        <div class="dark-promo">
            <div class="container">
                <div class="row">
                    <div class="promo dark">
                        <h1 data-appear-animation="flipInX">{{Config::get('constants.telefonas')}}</h1>
                        <h4 data-appear-animation="flipInX">{{Config::get('constants.adresas')}}
                            <br />
                            <b>{{Config::get('constants.el_pastas')}}</b></h4>
                            <div class="button-wrap"> <a href="#" class="button dark medium" data-appear-animation="flipInX">@lang('labels.susisiekite_su_mumis')</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================== TOP FOOTER ================================================== -->

        <!-- ================================================== FOOTER WITH WIDGETS ================================================== -->
        <section class="space-top-and-bottom small">
            <div class="footer">
                <div class="container">
                    <div class="row">

                        <!-- text widget -->
                        <div class="three columns alpha">
                            <div class="widget" data-appear-animation="slideInLeft">

                            </div>
                        </div>
                        <!-- .text widget -->

                        <!-- text widget -->
                        <div class="three columns alpha">
                            <div class="widget" data-appear-animation="slideInLeft">
                                <h4><b>@lang('labels.apie')</b> {{Config::get('constants.imones_pav')}}</h4>
                                <p>@lang('tekstai.apie_mus_1')
                                    <br />
                                    <br />@lang('tekstai.apie_mus_2')<a href="#"></a>  <!-- Read more &raquo;-->
                                </p>
                            </div>
                        </div>
                        <!-- .text widget -->

                        <!-- pick car widget -->
                        <div class="three columns">
                            <div class="widget" data-appear-animation="bounceIn">
                                <h4><b>@lang('labels.issirinkite') </b>@lang('labels.automobili')</h4>
                                <p>@lang('tekstai.isirinkite_automobili')</p>
                                <div class="light-select-input">
                                    <select>
                                        <option selected>@lang('labels.pagal_marke')</option>
                                        @foreach($aktyviosMarkes as $marke)
                                        <option>{{$marke}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="light-select-input">
                                    <select>
                                        <option selected>@lang('labels.pagal_tipa')</option>
                                        <option>Alpha Romeo</option>
                                        <option>Austin</option>
                                        <option>BMW</option>
                                        <option>Honda</option>
                                        <option>Toyota</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- .pick car widget -->

                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================== FOOTER WITH WIDGETS ================================================== -->

        <!-- ================================================== BOTTOM FOOTER ================================================== -->
        <footer>
            <div class="bottom-footer clearfix;">
                <div class="container">
                    <div class="row">
                        <div class="six columns">
                            <div class="copyrights">
                                <p>&copy; {{Config::get('constants.teises')}}</p>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="footer-navigation">
                                <ul class="clearfix">
                                   <li><a href="pradzia">@lang('labels.pradzia')</a> 
                                   </li>
                                   <li><a href="automobiliai">@lang('labels.automobiliai')</a> 
                                   </li>
                                   <li><a href="kontaktai">@lang('labels.kontaktai')</a> 
                                   </li>
                                    <!-- 
                                    <li><a href="apiemus">@lang('labels.apiemus')</a> 
                                    </li> 
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================================================== BOTTOM FOOTER ================================================== -->
