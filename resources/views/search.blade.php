
@section('search')


    <!-- ================================================== BREADCRUMBS ================================================== -->
    <section>

        <div class="breadcrumbs">

            <div class="container">
                <div class="row">

                    <div class="breadcrumbs-content clearfix">

                        <div class="page-title">
                            <h4>@lang('labels.automobiliu_sarasas')</h4>
                            <a href="pradzia">
                                <span class="icon-home"></span>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </section>
    <!-- ================================================== END BREADCRUMBS ============================================== -->


 <!-- ================================================== MAIN SEARCH ================================================== -->
    <section>

        <div class="main-search">
            <div class="container">
                <div class="row">

                    <!-- quick search -->
                    <form method="" action="">
                        <fieldset>

                            <!-- quick search fields -->
                            <div class="quick-search-fields" data-appear-animation="slideInLeft">
                                <div class="ten columns clearfix">

                                    <!-- select input -->
                                    <div class="two columns">
                                        <div class="select-input">
                                            <select>
                                                <option value="" selected="selected">@lang('labels.marke')</option>
                                                <option value="acura">Acura</option>
                                                <option value="alfa_romeo">Alfa Romeo</option>
                                                <option value="aston_martin">
                                                    <span>Aston Martin</span>
                                                </option>
                                                <option value="audi">Audi</option>
                                                <option value="bentley">Bentley</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- .select input -->

                                    <!-- select input -->
                                    <div class="two columns">
                                        <div class="select-input">
                                            <select>
                                                <option value="" selected="selected">@lang('labels.modelis')</option>
                                                <option value="acura">155</option>
                                                <option value="alfa_romeo">156S</option>
                                                <option value="aston_martin">156 JTD</option>
                                                <option value="audi">Brera</option>
                                                <option value="bentley">159 JTD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- .select input -->

                                    <!-- select input -->
                                    <div class="two columns">
                                        <div class="select-input">
                                            <select>
                                                <option value="" selected="selected">@lang('labels.kaina')</option>
                                                <option value="acura">$0 - $10.000</option>
                                                <option value="alfa_romeo">$10.000 - $20.000</option>
                                                <option value="aston_martin">$20.000 - $40.000</option>
                                                <option value="audi">$40.000 - $50.000</option>
                                                <option value="audi">$50.000 +</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- .select input -->

                                    <!-- select input -->
                                    <div class="two columns">
                                        <div class="select-input">
                                            <select>
                                                <option value="" selected="selected">@lang('labels.rida')</option>
                                                <option value="acura">0mi - 5.000mi</option>
                                                <option value="alfa_romeo">5.000mi - 10.000mi</option>
                                                <option value="aston_martin">10.000min - 50.000mi</option>
                                                <option value="audi">50.000mi - 100.000mi</option>
                                                <option value="audi">100.000mi - 150.000mi</option>
                                                <option value="audi">150.000mi +</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- .select input -->

                                    <!-- select input -->
                                    <div class="two columns">
                                        <div class="select-input">
                                            <select>
                                                <option value="" selected="selected">@lang('labels.kondicija')</option>
                                                <option value="acura">New</option>
                                                <option value="acura">Used</option>
                                                <option value="alfa_romeo">Perfect</option>
                                                <option value="aston_martin">Good</option>
                                                <option value="audi">Damaged</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- .select input -->

                                    <!-- select input -->
                                    <div class="two columns">
                                        <div class="select-input">
                                            <select>
                                                <option value="" selected="selected">@lang('labels.metai')</option>
                                                <option value="alfa_romeo">2010</option>
                                                <option value="aston_martin">2011</option>
                                                <option value="audi">2012</option>
                                                <option value="bentley">2013</option>
                                                <option value="bentley">2014</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- .select input -->

                                </div>
                            </div>
                            <!-- .quick search fileds -->

                        </fieldset>
                    </form>
                    <!-- .Quick Search -->


                </div>
            </div>
        </div>

    </section>
    <!-- ================================================== END MAIN SEARCH ================================================== -->

@stop