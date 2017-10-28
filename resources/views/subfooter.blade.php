
@section('subfooter')
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
                            <div class="button-wrap"> <a href="/kontaktai" class="button dark medium" data-appear-animation="flipInX">@lang('labels.susisiekite_su_mumis')</a> 
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

                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================== FOOTER WITH WIDGETS ================================================== -->

@stop