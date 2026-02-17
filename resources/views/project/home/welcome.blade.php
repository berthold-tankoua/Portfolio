@extends('main_master')

@section('content')
@section('title')
    Brecht Tankoua | Portfolio
@endsection

<div class="main-content style-fullwidth section-onepage">

    <div class="tf-container w-6">

        <div class="wrap-section">
            <div class="row">
                <div class="col-lg-4">
                    <div class="user-bar style-1 text-center">
                        <div class="box-author mb_12">
                            <div class="img-style mb_16">
                                <img decoding="async" loading="lazy" src="{{ asset($about->about_img) }}" width="314"
                                    height="314" alt="feature post">
                            </div>
                            <div class="info">
                                <div class="name font-2 text_white mb_8">Brecht Tankoua</div>
                                <div
                                    class="text-label text-uppercase fw-6 text_primary-color font-3 mb_16 letter-spacing-1">
                                    Développeur Web & IA</div>
                                <a href="mailto:brtankoua@gmail.com"
                                    class="hover-underline-link text_white text-body-2 mb_4">brtankoua@gmail.com</a>
                                <p class="text-caption-2 text_secondary-color font-3">
                                    {{ $about->address }}
                                </p>
                            </div>
                        </div>
                        <ul class="list-icon d-flex justify-content-center">
                            <li><a href="{{ $about->linkeldin_link }}" class="icon-LinkedIn"></a></li>
                            <li> <a href="{{ $about->gitlab_link }}" class="icon-GitHub"></a></li>
                            <li><a href="{{ $about->facebook_link }}" class="icon-X"></a></li>
                        </ul>
                    </div><br>

                </div>
                <div class="col-lg-8">
                    <!-- section-about -->
                    <div id="about" class="section-about style-1 section ">
                        <div class="heading-section mb_45">
                            <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_32">
                                A Propos
                            </div>
                            <div class="title-border-shape">
                                <h4 class="animationtext clip "> Salut, je suis <span
                                        class="tf-text s1 cd-words-wrapper text_primary-color">
                                        <span class="item-text is-visible">Développeur Web</span>
                                        <span class="item-text is-hidden">Concepteur d'agent IA</span>
                                        <span class="item-text is-hidden">Marketeur Digital Meta</span>
                                    </span> </h4>
                                <div class="shape">
                                    <span class="shape-1"></span>
                                    <span class="shape-2"></span>
                                    <span class="shape-3"></span>
                                    <span class="shape-4"></span>
                                </div>
                                <div class="line">
                                    <span class="line-horizontal horizontal-1"></span>
                                    <span class="line-horizontal horizontal-2"></span>
                                    <span class="line-vertical vertical-1"></span>
                                    <span class="line-vertical vertical-2"></span>
                                </div>
                            </div>
                        </div>
                        <h1 class="title mb_16 split-text effect-blur-fade h4">
                            Backend | Frontend | Agent IA | SEO | Devops
                        </h1>
                        <div class="text_muted-color font-3 mb_43 split-text split-lines-transform">
                            {!! $about->desc1 !!}
                        </div>
                        <div class="wrap-counter tf-grid-layout md-col-3">
                            <div class="counter-item bs-light-mode">
                                <div class="counter-number h2 text_white mb_7">
                                    <div class="odometer" data-number="{{ $about->exp_count }}">
                                        {{ $about->exp_count }}
                                    </div>
                                    <span class="sub">+</span>
                                </div>
                                <p class="text-body-1 text_muted-color font-3">D'expérience en IT</p>
                                <div class="item-shape">
                                    <img src="images/item/small-comet.webp" loading="lazy" decoding="async"
                                        alt="item">
                                </div>
                            </div>
                            <div class="counter-item bs-light-mode">
                                <div class="counter-number h2 text_white mb_7">
                                    <div class="odometer" data-number="{{ $about->proj_count }}">
                                        {{ $about->proj_count }}</div>
                                    <span class="sub">+</span>
                                </div>
                                <p class="text-body-1 text_muted-color font-3">Clients Satisfaits</p>
                                <div class="item-shape">
                                    <img src="images/item/small-comet.webp" loading="lazy" decoding="async"
                                        alt="item">
                                </div>
                            </div>
                            <div class="counter-item bs-light-mode">
                                <div class="counter-number h2 text_white mb_7">
                                    <div class="odometer" data-number="{{ $about->hcust_count }}">
                                        {{ $about->hcust_count }}</div>
                                    <span class="sub">+</span>
                                </div>
                                <p class="text-body-1 text_muted-color font-3">Projets Terminés</p>
                                {{-- <div class="item-shape">
                                    <img src="images/item/small-comet.webp" loading="lazy" decoding="async"
                                        alt="item">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- End section-about -->
                    <div class="counter-item bs-light-mode  mt-5 w-100 ">
                        <div class="info">
                            <div class="name font-2 text_white mb-4">Compétences</div>
                        </div>
                        <div class="list-icons d-flex  cursor-pointer "
                            style="overflow-x: scroll;width: 100%; padding-bottom: 10px;">
                            <div title="PHP"><img src="{{ asset('upload/skills/1794217278408413.png') }}"
                                    alt="image" width="30px" height="30px" style="margin: 10px;cursor:pointer;">
                            </div>
                            <div title="Laravel"><img src="{{ asset('upload/skills/1794217189325281.png') }}"
                                    alt="image" width="30px" height="30px" style="margin: 10px;cursor:pointer;">
                            </div>
                            <div title="Bootstrap"><img src="{{ asset('upload/skills/1794217322879346.png') }}"
                                    alt="image" width="30px" height="30px" style="margin: 10px;cursor:pointer;">
                            </div>
                            <div title="Vuejs"><img src="{{ asset('upload/skills/1794217805784333.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="IA"><img src="{{ asset('upload/skills/1846653782352044.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="PWA"><img src="{{ asset('upload/skills/1821402864701050.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Javascript"><img src="{{ asset('upload/skills/1794217521134374.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Css"><img src="{{ asset('upload/skills/1794217351642580.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="HTML"><img src="{{ asset('upload/skills/1794217464578210.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Aws"><img src="{{ asset('upload/skills/1857258320482256.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Git"><img src="{{ asset('upload/skills/1857258344083463.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="MySql"><img src="{{ asset('upload/skills/1794217565856740.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Api"><img src="{{ asset('upload/skills/1794217546197747.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Linux"><img src="{{ asset('upload/skills/1857258827130950.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Meta"><img src="{{ asset('upload/skills/1794217726185141.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                            <div title="Test unitaire"><img src="{{ asset('upload/skills/1794217845985882.png') }}"
                                    alt="image" width="30px" height="30px"
                                    style="margin: 10px;cursor:pointer;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section-portfolio-->
        <div class="container">
            <div id="portfolio" class="section-portfolio style-1 spacing-5 section" s>
                <div class="heading-section mb_42">
                    <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_34">
                        Portfolio
                    </div>
                    <h3 class="text_white fw-5  split-text effect-blur-fade">Mes Projets </h3>
                </div>
                <div class="tab-slide  mb_32">
                    <ul class="menu-tab d-flex align-items-center" role="tablist">
                        <li class="item-slide-effect"></li>
                        <li class="nav-tab-item active" role="presentation">
                            <a href="#all" class="text-button tab-link fw-6 active font-3"
                                data-bs-toggle="tab">Mes Projets</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-tab-item" role="presentation">
                                <a href="#{{ $category->slug }}" class="text-button tab-link fw-6 font-3"
                                    data-bs-toggle="tab">{{ $category->name }}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="all" role="tabpanel">
                        <div class="row">
                            @foreach ($projects as $project)
                                <article class="col-md-6 mb-4">
                                    <div class="p-2 mb-2 text-white">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <a href="{{ url('project/' . $project->id . '/detail') }}"
                                                class="mb-2 me-4 h6">{{ $project->name }} </a>
                                            @php
                                                $tools = $project->tool_path;
                                                $project_tools = explode(',', $tools);
                                            @endphp
                                            <div class="d-flex p-tool overflow-hidden mb-2">
                                                @foreach ($project_tools as $key => $tool)
                                                    <div class="item me-4">
                                                        <img src="{{ asset($tool) }}" alt="portofolio-skill"
                                                            width="23" height="23">
                                                    </div>
                                                    @if ($key == 8)
                                                        @php
                                                            break;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <div class="text-white mbl-date">{{ $project->start_date }} |
                                                {{ $project->end_date }}</div>
                                            <a href="{{ $project->url }}"
                                                class="mbldis resume-company-name text-white">{{ $project->url }}</a>
                                        </div>
                                    </div><!--//resume-timeline-item-header-->

                                    <a href="{{ url('project/' . $project->id . '/detail') }}" class="containers"
                                        style="border-radius: 5px; height: 280px; width: 100%;">
                                        <img class="project_img"
                                            style="border-radius: 5px; height: 280px; width: 100%; object-fit:fill;"
                                            src="{{ asset($project->image1) }}" alt="project image" />
                                        <div class="overlay"></div>
                                    </a><br>
                                </article><br><!--//resume-timeline-item-->
                            @endforeach
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <div class="tab-pane" id="{{ $category->slug }}" role="tabpanel">
                            @php
                                $category_projects = App\Models\Project::where('category_id', $category->id)
                                    ->orderBy('top', 'DESC')
                                    ->limit(4)
                                    ->get();
                            @endphp
                            <div class="row">
                                @foreach ($category_projects as $project)
                                    <article class="col-md-6 mb-4">
                                        <div class="p-2 mb-2 text-white">
                                            <div class="d-flex flex-wrap align-items-center mb-3">
                                                <a href="{{ url('project/' . $project->id . '/detail') }}"
                                                    class="mb-2 me-4 h6">{{ $project->name }} </a>
                                                @php
                                                    $tools = $project->tool_path;
                                                    $project_tools = explode(',', $tools);
                                                @endphp
                                                <div class="d-flex p-tool overflow-hidden mb-2">
                                                    @foreach ($project_tools as $key => $tool)
                                                        <div class="item me-4">
                                                            <img src="{{ asset($tool) }}" alt="portofolio-skill"
                                                                width="23" height="23">
                                                        </div>
                                                        @if ($key == 8)
                                                            @php
                                                                break;
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="text-white mbl-date">{{ $project->start_date }} |
                                                    {{ $project->end_date }}</div>
                                                <a href="{{ $project->url }}"
                                                    class="mbldis resume-company-name text-white">{{ $project->url }}</a>
                                            </div>
                                        </div><!--//resume-timeline-item-header-->

                                        <a href="{{ url('project/' . $project->id . '/detail') }}">
                                            <img class="project_img"
                                                style="border-radius: 5px; height: 280px; width: 100%; object-fit: fill;"
                                                src="{{ asset($project->image1) }}" alt="project image" />
                                            <div class="overlay"></div>
                                        </a><br>
                                    </article><br><!--//resume-timeline-item-->
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- section-resume-->
            <div id="resume" class="section-resume style-1 pb-0 spacing-4 section">
                <div class="heading-section mb_47">
                    <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_30">
                        Education
                    </div>
                    <h3 class="text_white fw-5 split-text effect-blur-fade">Education & Formation</h3>
                </div>
                <div class="effect-line-hover">
                    <div class="wrap-education-item area-effect  scrolling-effect effectTop">
                        <span class="point"></span>
                        <div class="education-item">
                            <div class="content">
                                <h5 class="font-4 mb_4"><a href="#contact" class="link">Licence genie logiciel</a>
                                </h5>
                                <span class="text-body-1 font-3">Universite de Yaounde 1</span>
                            </div>
                            <div class="date text-caption-1 text_white font-3">
                                2017 - 2022
                            </div>
                        </div>
                    </div>
                    @foreach ($formations as $item)
                        <div class="wrap-education-item area-effect  scrolling-effect effectTop">
                            <span class="point"></span>
                            <div class="education-item">
                                <div class="content">
                                    <h5 class="font-4 mb_4"><a href="#contact"
                                            class="link">{{ $item->name }}</a>
                                    </h5>
                                    <span class="text-body-1 font-3">{{ $item->place }}</span>
                                </div>
                                <div class="date text-caption-1 text_white font-3">
                                    {{ $item->duration }}
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- End section-resume -->
            <!-- section-service -->
            <div id="services" class="section-service section spacing-5">
                <div class="heading-section mb_43">
                    <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_33">
                        Services
                    </div>
                    <h3 class="text_white fw-5  split-text effect-blur-fade">Mess services</h3>
                </div>
                @foreach ($services as $key => $item)
                    <div class="service-item area-effect scrolling-effect effectBottom">
                        <div class="content-inner d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center content">
                                <span class="number text-label text_muted-color font-3">0{{ $key + 1 }}/</span>
                                <h5 class="text_white font-4"><a href="#contact"
                                        class="link">{{ $item->name }}</a>
                                </h5>
                            </div>
                            <a href="#contact" class="btn-arrow"><i class="icon-ArrowRight"></i></a>

                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End section-service -->

            <!-- section-testimonial-->
            <div id="testimonial" class="section-testimonial style-1 section spacing-5 sw-layout">
                <div class="heading-section mb_43 d-flex align-items-end justify-content-between">
                    <div>
                        <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_30">
                            Temoignages
                        </div>
                        <h3 class="text_white fw-5  split-text effect-blur-fade">Avis des clients</h3>
                    </div>
                    <div class="wrap-sw-button d-flex gap_12 ">
                        <div class="sw-button nav-prev-layout">
                            <i class="icon-CaretLeft"></i>
                        </div>
                        <div class="sw-button nav-next-layout ">
                            <i class="icon-CaretRight"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper " data-preview="2" data-destop="2" data-tablet="2" data-mobile="1"
                    data-space-lg="12" data-space-md="12" data-space="12">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item area-effect">
                                <div class="icon">
                                    <i class="icon-quote"></i>
                                </div>
                                <p class="text-body-2 text_white mb_21">"Très satisfaite du travail réalisé. En plus du
                                    développement du site, Brecht a mis en place une stratégie marketing efficace (Meta
                                    Ads, optimisation des visuels et ciblage précis). Nous avons constaté une
                                    augmentation notable des commandes en ligne."</p>
                                <div class="athor">
                                    <h5 class="name text_white mb_4 font-4"> <a href="#" class="link">Crostel
                                            Tchinda</a>
                                    </h5>
                                    <span class="text-label text-uppercase text_primary-color font-3">Commercant</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item area-effect">
                                <div class="icon">
                                    <i class="icon-quote"></i>
                                </div>
                                <p class="text-body-2 text_white mb_21">"Travailler avec Brecht a été une excellente
                                    expérience. Il a conçu un site web moderne et professionnel qui reflète parfaitement
                                    mon image d’agent immobilier. Le design est élégant, rapide et adapté aux mobiles.
                                    J’ai déjà reçu des retours positifs de mes clients."</p>
                                <div class="athor">
                                    <h5 class="name text_white mb_4 font-4"> <a href="#"
                                            class="link">Gides</a>
                                    </h5>
                                    <span class="text-label text-uppercase text_primary-color font-3">CEO
                                        Agent Immobilier</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item area-effect">
                                <div class="icon">
                                    <i class="icon-quote"></i>
                                </div>
                                <p class="text-body-2 text_white mb_21">"Nous avons confié notre marketing Meta
                                    (Facebook et Instagram) à Brecht et les résultats ont été très positifs. Il a mis en
                                    place des campagnes publicitaires ciblées qui nous ont permis d’augmenter
                                    significativement les demandes d’inscription."</p>
                                <div class="athor">
                                    <h5 class="name text_white mb_4 font-4"> <a href="#"
                                            class="link">Bertrand claude</a>
                                    </h5>
                                    <span class="text-label text-uppercase text_primary-color font-3">
                                        Auto Ecole</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End section-testimonial -->

            <!-- section-pricing-->
            <div id="pricing" class="section-pricing flat-animate-tab spacing-5 section">
                <div class="heading-section mb_42">
                    <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_30">
                        Tarifs
                    </div>
                    <h3 class="text_white fw-5  split-text effect-blur-fade">Mes Tarifs</h3>
                </div>
                <div class="tab-slide  mb_32">
                    <ul class="menu-tab d-flex align-items-center" role="tablist">
                        <li class="item-slide-effect"></li>
                        <li class="nav-tab-item active" role="presentation">
                            <a href="#standard-plan" class="text-button tab-link fw-6 active font-3"
                                data-bs-toggle="tab">Plan Gratuit</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#premium-plan" class="text-button tab-link fw-6 font-3"
                                data-bs-toggle="tab">Plan Premium</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="standard-plan" role="tabpanel">
                        <div class="pricing-item style-1 bs-light-mode area-effect">
                            <h4 class="title">Gratuit</h4>
                            <ul class="list-check d-grid gap_8">
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8"><i
                                        class="icon-check"></i>Audit simple gratuit</li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8"><i
                                        class="icon-check"></i>Conseil personnalisé</li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8"><i
                                        class="icon-check"></i>Devis gratuit
                                </li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8"><i
                                        class="icon-check"></i>Service client réactif</li>
                            </ul>
                            <div class="wrap-pricing">
                                <h3 class="text_white d-flex align-items-center gap_4 mb_20">$0 <span
                                        class="text-caption-1 text-caption-1 text_muted-color">/mois</span>
                                </h3>
                                <a href="#contact" class="tf-btn style-1 animate-hover-btn">
                                    <span>
                                        Démarrer !
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="premium-plan" role="tabpanel">
                        <div class="pricing-item style-1 bs-light-mode area-effect">
                            <h4 class="title">Premium
                            </h4>
                            <ul class="list-check d-grid gap_8">
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8">
                                    <i class="icon-check"></i>Développement Web sur mesure (backend & frontend)
                                </li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8">
                                    <i class="icon-check"></i>Intégration de solutions IA (chatbot, automatisation)
                                </li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8">
                                    <i class="icon-check"></i>Stratégie marketing digitale (Meta Ads & pubs)
                                </li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8">
                                    <i class="icon-check"></i>Optimisation SEO & performance technique
                                </li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8">
                                    <i class="icon-check"></i>Analyse des données & besoins
                                </li>
                                <li class="text-body-1 text_white font-3 d-flex align-items-center gap_8">
                                    <i class="icon-check"></i>Support prioritaire 7j/7
                                </li>

                            </ul>
                            <div class="wrap-pricing">
                                <h3 class="text_white d-flex align-items-center gap_4 mb_20">$20 <span
                                        class="text-caption-1 text-caption-1 text_muted-color">/heure</span>
                                </h3>
                                <a href="#contact" class="tf-btn style-1 animate-hover-btn">
                                    <span>
                                        Démarrer !
                                    </span>
                                </a>
                            </div>
                            <div class="item-shape spotlight">
                                <img src="images/item/small-comet.webp" loading="lazy" decoding="async"
                                    alt="item">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End section-pricing -->

            <!-- section-contact-->
            <div id="contact" class="section-contact style-1 section spacing-6">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="heading-section mb_44">
                            <div class="tag-heading text-uppercase text-label font-3 letter-spacing-1 mb_33">
                                Contact
                            </div>
                            <div class="title mb_40">
                                <h3 class="text_white fw-5 animationtext clip">
                                    Construisons <br><span class="tf-text s1 cd-words-wrapper text_primary-color">
                                        <span class="item-text is-visible">Votre site web</span>
                                        <span class="item-text is-hidden">Votre stratégie digitale</span>
                                        <span class="item-text is-hidden">Vos agents IA</span>
                                    </span>

                                </h3>

                                <p class="text_white title fw-5">Travaillons ensemble pour développer votre business
                                </p>

                            </div>
                            <div class="heading-title">
                                <div class="mb_12">
                                    <h4 class="text_white fw-4 mb_4"><a href="#"
                                            class="hover-underline-link link">{{ $about->email }}</a></h4>
                                    <p class="text-caption-2 text_secondary-color font-3">Basé à
                                        {{ $about->adress }}
                                    </p>
                                </div>
                                <ul class="list-icon d-flex justify-content-center">
                                    <li><a href="{{ $about->linkedin_link }}" class="icon-LinkedIn"></a></li>
                                    <li> <a href="{{ $about->gitlab_link }}" class="icon-GitHub"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form class="form-contact bs-light-mode">
                            <div class="d-grid gap_24  mb_24">
                                <fieldset class="">
                                    <input id="name" type="text" placeholder="Votre nom" name="name"
                                        tabindex="2" aria-required="true" required="">
                                </fieldset>
                                <fieldset class="">
                                    <input class="" type="email" placeholder="Votre email" name="email"
                                        tabindex="2" value="" id="email" aria-required="true"
                                        required="">
                                </fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-select" name="subject" id="subject"
                                            style="background: transparent; color: #888585; border: 1px solid #555; padding: 10px; border-radius: 5px;font-size: 16px;"
                                            aria-required="true" required="">
                                            <option value="">Sélectionnez un plan</option>
                                            <option value="plan_gratuit">Plan gratuit</option>
                                            <option value="plan_premium">Plan premium</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" name="service" id="service"
                                            style="background: transparent; color: #888585; border: 1px solid #555; padding: 10px; border-radius: 5px;font-size: 16px;"
                                            aria-required="true" required="">
                                            <option value="">Sélectionnez un service</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->name }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <fieldset>
                                    <textarea id="message" class="" rows="4" placeholder="votre Message..." tabindex="2"
                                        aria-required="true" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="button-submit">
                                <button class="tf-btn style-1 animate-hover-btn" type="submit">
                                    <span>
                                        Envoyer !
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="font-3 text_secondary-color text-center">© 2025 Brecht Tankoua. All Rights Reserved.</p>
            </div>
            <!-- End section-contact -->

        </div>
        <!-- End section-portfolio -->

    </div>

    <div class="right-bar style-1 d-flex flex-column align-items-center">
        <ul class="list-icon menu-option d-flex flex-column gap_8">
            <!-- <li>
                        <div class="toggle-switch-mode"><i class="icon-Sun"></i></div>
                    </li>
                    <li><a data-bs-toggle="offcanvas" href="#setting-menu" role="button" aria-controls="setting-menu"><i
                                class="icon-GearSix"></i></a></li> -->
        </ul>
    </div>

</div>
@endsection
