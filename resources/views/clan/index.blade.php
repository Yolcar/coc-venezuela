@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/app.css') }}">
@endsection
@section('title')
    Clash of Clans
@endsection

@section('content')
    <!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->
    <div class="cblzbody-wrapper">
        <section>
            <div id="cbx-aboutus" class="cbx-section cbx-aboutus">
                <div class="cbx-inner">
                    <div class="container">
                        <div class="text-center cbx-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="cbx-heading">
                                        <h2 class="uppercase wow fadeInUp font-supercell">Acerca del Clan</h2>
                                        <hr noshade size="" width="" color="">
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="text-center">
                                                    <h1 class="font-supercell">Clan Nivel {{ $ClashAPI->clanLevel }}</h1>
                                                    <br>
                                                    <br>
                                                    <h1 class="font-supercell">Mensaje del Clan</h1>
                                                    <p>
                                                        {{ $ClashAPI->description }}
                                                    </p>
                                                </div>
                                            </div> <!--//.COL-->
                                            <div class="col-sm-5">
                                                <div class="about-img">
                                                    <img src="{{ $ClashAPI->badgeUrls->large }}" alt=""/>
                                                </div>
                                            </div> <!--//.COL-->
                                        </div> <!--//.ROW-->
                                    </div>
                                </div> <!--//.COL-->
                            </div> <!--//.ROW-->
                        </div> <!--//. CBX CONTENT CONTENT-->
                    </div> <!--//.CONAINER-->
                </div><!--//.CBX INNER-->
            </div><!--//.CBX SECTION -->
        </section><!-- *************  //SPECIAL FEATURE END ************* -->

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div id="lz-parallax" class="lz-section cbx-parallax clearfix">
                        <div class="cbx-overlay ">
                            <div class="container lz-wrapper">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="lz-parllax-inner ">
                                            <div class="lz-parllax-box lz-section-header">
                                                <h2 class="lz-brand-color font-supercell">Historial de Guerras</h2>
                                                <div id="chart-div"></div>
                                                @piechart('Grafico', 'chart-div')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!--//.cbx-overlay-->
                    </div>
                </div>
            </div><!-- container fluid -->
        </section>

        <!-- TEAM SECTION START -->
        <section>
            <div id="cbx-team" class="cbx-section cbx-team">
                <div class="cbx-team-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="cbx-heading text-center">
                                    <h2 class="uppercase wow fadeInUp font-supercell">Miembros</h2>
                                    <hr noshade size="" width="" color="">
                                    <p class=" wow flipInY font-supercell">Actualmente hay {{ $ClashAPI->members }} miembros.</p>
                                </div>
                            </div>
                        </div><!-- //ROW Our Team Header -->
                        <div class="row">
                            @foreach($ClashAPI->memberList as $member)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="cbx-single-team text-center">
                                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <!-- font content -->
                                            <div class="front cbx-font-side">
                                                <div class="font-single-img text-center">
                                                    <img class="img-circle" src="{{ $member->league->iconUrls->small }}" alt="Team Image">
                                                </div>
                                                <div class="font-single-text text-center">
                                                    <h3>#{{ $member->clanRank }} {{ $member->name }}</h3>
                                                    @if($member->role == "admin")
                                                        <h4>Veterano</h4>
                                                    @elseif($member->role == "leader")
                                                        <h4>Lider</h4>
                                                    @elseif($member->role == "coLeader")
                                                        <h4>Colider</h4>
                                                    @else
                                                        <h4>Miembro</h4>
                                                    @endif
                                                    <p>{{ $member->league->name }}</p>
                                                </div>
                                            </div> <!-- //font content -->
                                            <!-- back content -->
                                            <div class="back cbx-back-side">
                                                <div class="text-center">
                                                        <h3>Nivel: </h3>{{ $member->expLevel }}
                                                        <h3>Copas: </h3>{{ $member->trophies }}
                                                        <h3>Donaciones: </h3>{{ $member->donations}}
                                                        <h3>Donaciones Recibidas: </h3>{{ $member->donationsReceived }}
                                                </div>
                                            </div><!-- //back content -->
                                        </div>
                                    </div>
                                </div> <!--//single team -->
                            </div> <!--//single team main col 3-->
                            @endforeach
                        </div> <!--//single team main row-->
                    </div> <!--//CONTAINER-->
                </div> <!--//INNER-->
            </div> <!--//SECTION-->
        </section> <!-- //New Team Section 24.12.2014  -->
        <!-- End Your site ******* or ******* application content here -->
    </div><!-- lzbbones-body end here -->
@endsection