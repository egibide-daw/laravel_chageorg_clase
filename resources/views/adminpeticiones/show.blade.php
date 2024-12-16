@extends('layouts.admin')

@section('content')
    <div data-maincontent-principal="true" data-qa="page-content" class="corgi__sc-10n87q0-0 kSFjpy">
    <main data-maincontent="true" class="corgi__sc-10n87q0-0 cRHwTT">
        <div data-testid="details-container" data-font="new" class="corgi-1cb7mqm">
            <div class="corgi-1ef51h8">
                <div class="corgi-1svhamf">
                    <div class="corgi-16s2e1e">
                        <div class="corgi-lgbo0i">
                            <h1 data-qa="petition-title" class="corgi-bvdt4s">{{$peticion->titulo}}</h1>
                        </div>
                    </div>
                </div>
                <div class="corgi-1pgc411">
                    <div class="corgi-16pyxyr">
                        <div class="corgi-1enpueb">
                            <picture>

                                <source
                                    srcset="{{asset("/peticiones/".$peticion->files()->first()->name)}}"
                                    media="(max-width: 768px)"><img fetchpriority="high" id="petition-photo" alt=""
                                                                    class="corgi-1ghzbjy"
                                                                    src="{{asset("/peticiones/".$peticion->files()->first()->name)}}"
                                                                    width="100%"></picture><span style="font-size: 0px;"></span>
                        </div>
                        <div class="corgi-ikgh0c">
                            <div class="corgi-6xvg1u">
                                <div class="corgi-16s2e1e">
                                    <div class="corgi-lgbo0i">
                                        <h1 data-qa="petition-title" class="corgi-bvdt4s">{{$peticion->titulo}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="corgi-6xvg1u">
                            <hr role="presentation" class="corgi-1475tgj">
                        </div>
                        <div class="corgi-ikgh0c">
                            <div class="corgi-17ydvro">
                                <div class="corgi-2jsnvv"><img
                                        src="//assets.change.org/photos/6/wa/iw/VxWaIwbeBdicrBg-48x48-noPad.jpg?1642453777"
                                        alt="" class="corgi-cr23v" width="48" height="48">
                                    <div class="corgi-1virxrr"><span class="corgi-1t3hr2n"><a href="/u/163800174"
                                                                                              data-testid="user-profile-page-link" target="_blank"
                                                                                              class="corgi-pocswm">{{$peticion->user->name}}</a> ha iniciado esta
                                        petición dirigida a <a href="/decision-makers/santander" target="_blank"
                                                               class="corgi-pocswm"><span>{{$peticion->destinatario}}</span></a> y <button
                                                class="corgi-1ft07br">7 otros/as</button></span></div>
                                </div>
                            </div>
                            <div data-qa="description-content" class="corgi-lgbo0i">
                                <div class="corgi-13ruqhr">
                                    <p><strong>{{$peticion->descripcion}}</strong></p>
                                </div>
                                <div role="progressbar" aria-label="Barra de progreso" aria-valuemin="0" aria-valuemax="100"
                                     aria-valuenow="91" class="corgi-110xwrq">
                                    <div class="corgi-svkl9h">
                                        <div class="corgi-1u1064n"></div>
                                    </div>
                                    <div class="corgi-7e9def"></div>
                                </div>
                                <div class="corgi-1aa4dmu">
                                    <div class="corgi-cck4cx"><img
                                            src="//assets.change.org/photos/5/it/zq/TQiTZqjgnSzlnqh-48x48-noPad.jpg?1643739629"
                                            alt="" class="corgi-1kp4tv9" width="48" height="48"><span
                                            title="Manuel Rico / Fernando Flores" class="corgi-1oy7s3i">Manuel Rico /
                                        Fernando Flores</span></div>
                                    <div class="corgi-nkx49o"><span class="corgi-1uua0ww"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7a2.5 2.5 0 0 0 0 5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z">
                                            </path>
                                        </svg></span><span title="136.534 firmantes" class="corgi-1cxcpr4"><span
                                                aria-hidden="true">{{$peticion->firmantes}}</span>
                                        <div class="corgi-e48ox1">{{$peticion->firmantes}} firmantes</div>
                                    </span></div>
                                </div>
                                <div class="corgi-1aa4dmu">
                                    <a href="{{route('peticiones.firmar',$peticion->id)}}"
                                       class="js-header-login link link-stealth" onclick="event.preventDefault(); document.getElementById('firma-id').submit();">Firma esta petición</a>
                                    <form id="firma-id" action="{{route('peticiones.firmar',$peticion->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="corgi-1ef51h8">
            <hr role="presentation" class="corgi-wwhruy"><span style="font-size: 0px;">

            </span>
        </div>
    </main>
    </div>

    <a class="link-block border-rounded hide-overflow bg-brighter mbl"
       href="/p/uber-eats-paguen-justamente-el-kilometraje-a-los-riders-ya-basta-de-explotaci%C3%B3n-ubereats-es-ubereatsyabasta?source_location=petitions_browse">
        <div class="row">
            <div class="col-xs-12 col-sm-4 prn">
                <div class="visible-xs">
                    <div overflow="hidden" class="fe__sc-10n87q0-0 fe__sc-1aimp2k-0 syhHr kaHCgJ">
                        <div class="fe__sc-102tfft-0 dtbuth fe__sc-143abb1-0 bpTcEY">
                            <div class="fe__sc-102tfft-1 dfLAVt"></div>
                            <div class="fe__sc-102tfft-2 dIayJD"></div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs">
                    <div overflow="hidden" class="fe__sc-10n87q0-0 fe__sc-1aimp2k-0 syhHr kaHCgJ">
                        <div class="fe__sc-102tfft-0 dtbuth fe__sc-143abb1-0 dnUzBF">
                            <div class="fe__sc-102tfft-1 gnbJjG"></div>
                            <div class="fe__sc-102tfft-2 dIayJD"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="pam">
                    <div class="hide-overflow" style="height: 106px; max-height: none;">
                        <div>
                            <h4 class="mtn">{{$peticion->titulo}}</h4>
                            <p class="mtxxs">Mi nombre es Mario y llevo más de un a<span>…
                                    <!-- --> <span class="link type-weak">Leer más</span></span></p>
                        </div>
                    </div>
                    <div class="mtm">
                        <div class="gradient-thermometer">
                            <div class="bg-light-gray type-m fit-finish-thermometer-bg border-rounded-circle">
                                <div class="gradient-thermometer-fill fit-finish-thermometer-fill-height display-inline-block"
                                     style="width:84.56133333333334%;transition-duration:0"></div>
                                <div class="arrow-right-fit-finish display-inline-block position-relative"></div>
                            </div>
                        </div>
                    </div>
                    <p class="type-s ptxxs"><span><strong>{{$peticion->firmantes}} personas han firmado</strong> <span
                                class="type-weak">de un objectivo de 75.000 firmas</span></span></p>
                </div>
            </div>
        </div>
    </a>

@endsection
