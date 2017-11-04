
@section('search')


<!-- ================================================== BREADCRUMBS ================================================== -->
<section>

    <div class="breadcrumbs">

        <div class="container">
            <div class="row">

                <div class="breadcrumbs-content clearfix">

                    <div class="page-title">
                        <h4>@lang('labels.automobiliu_sarasas')</h4>
                        <a href="/">
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
                                        <select name="forma" onchange="location = this.value;">
                                        <option selected>@lang('labels.marke')</option>
                                            @foreach((new \App\Helpers\FooterHelper)->aktyviosMarkes() as $marke)
                                            <option value="\automobiliai\marke\{{$marke}}">{{$marke}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- .select input -->

                                <!-- select input -->
                                <div class="two columns">
                                    <div class="select-input">
                                        <select name="forma" onchange="location = this.value;">
                                            <option value="" selected="selected">@lang('labels.modelis')</option>
                                            @foreach((new \App\Helpers\FooterHelper)->aktyvusModeliai() as $modelis)
                                            <option value="\automobiliai\modelis\{{$modelis}}">{{$modelis}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- .select input -->

                                <!-- select input -->
                                <div class="two columns">
                                    <div class="select-input">
                                        <select name="forma" onchange="location = this.value;">
                                            <option value="" selected="selected">@lang('labels.kaina')</option>
                                            <option value="\automobiliai\kaina\1">0€ - 5.000€</option>
                                            <option value="\automobiliai\kaina\2">5.000€ - 10.000€</option>
                                            <option value="\automobiliai\kaina\3">10.000€ - 15.000€</option>
                                            <option value="\automobiliai\kaina\4">15.000€ - 20.000€</option>
                                            <option value="\automobiliai\kaina\5">20.000€ +</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- .select input -->

                                <!-- select input -->
                                <div class="two columns">
                                    <div class="select-input">
                                        <select name="forma" onchange="location = this.value;">
                                            <option value="" selected="selected">@lang('labels.standartas')</option>
                                            <option value="\automobiliai\standartas\1">Euro 1</option>
                                            <option value="\automobiliai\standartas\2">Euro 2</option>
                                            <option value="\automobiliai\standartas\3">Euro 3</option>
                                            <option value="\automobiliai\standartas\4">Euro 4</option>
                                            <option value="\automobiliai\standartas\5">Euro 5</option>
                                            <option value="\automobiliai\standartas\6">Euro 6</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- .select input -->

                                <!-- select input -->
                                <div class="two columns">
                                    <div class="select-input">
                                        <select name="forma" onchange="location = this.value;">
                                            <option value="" selected="selected">@lang('labels.metai')</option>
                                            @foreach((new \App\Helpers\FooterHelper)->aktyvusMetai() as $metai)
                                            <option value="\automobiliai\metai\{{$metai}}">{{$metai}}</option>
                                            @endforeach
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