@extends('main_master')

@section('content')
@section('title')
    Brecht Tankoua | Portfolio
@endsection

<div class="main-content style-fullwidth section-onepage">

    <div class="tf-container">

        <!-- section-portfolio-->
        <div class="container">
            <div id="portfolio" class="section-portfolio style-1 section">
                <div class="heading-section mb_42">
                    <h1 class="text_white fw-5  split-text effect-blur-fade h4">Mes Projets </h1>
                </div>
                <div class="tab-slide  mb_32">
                    <ul class="menu-tab d-flex align-items-center" role="tablist">
                        <li class="item-slide-effect"></li>
                        <li class="nav-tab-item active" role="presentation">
                            <a href="#all" class="text-button tab-link fw-6 active font-3" data-bs-toggle="tab">Mes
                                Projets</a>
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
                                <article class="col-md-6 mb-4 mb-4 mt-4">
                                    <div class="p-2 mb-2 text-white">
                                        <div class="d-flex flex-wrap align-items-center mb-1">
                                            <a href="{{ url('project/' . $project->id . '/detail') }}"
                                                class="mb-2 me-4 h6">{{ $project->name }} </a>
                                            @php
                                                $project_tools = explode(',', $project->tool_path);
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
                                                class="mbldis resume-company-name">{{ $project->url }}</a>
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
                                    <article class="col-md-6 mb-4 mt-2">
                                        <div class="p-2 mb-2 text-white">
                                            <div class="d-flex flex-wrap align-items-center mb-1">
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
            <div class="section-contact style-1 section spacing-6">
                <div class="button-submit" style="display: flex; justify-content: center;">
                    <a href="" class="tf-btn style-1 animate-hover-btn">
                        <span>
                            Afficher tous les projets !
                        </span>
                    </a>
                </div>
            </div>

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
                <div class="swiper " data-preview="2" data-destop="2" data-tablet="2" data-mobile="1" data-space-lg="12"
                    data-space-md="12" data-space="12">
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
                        <form class="form-contact bs-light-mode" method="POST"
                            action="{{ route('add.contact.store') }}">
                            @csrf
                            <div class="d-grid gap_24  mb_24">
                                <fieldset class="">
                                    <input id="name" type="text" placeholder="Votre nom" name="name"
                                        tabindex="2" aria-required="true" required="">
                                </fieldset>
                                <fieldset class="">
                                    <input class="" type="email" placeholder="Votre email" name="email"
                                        tabindex="2" id="email" aria-required="true" required="">
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
                                    <textarea id="message" name="message" class="" rows="4" placeholder="votre Message..."
                                        tabindex="2" aria-required="true" required=""></textarea>
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
            </div>
            <!-- End section-contact -->
            <!-- section-contact-->
            <div id="resume" class="section-contact style-1 section spacing-6">
                <div class="button-submit" style="display: flex; justify-content: center;">
                    <a href="https://drive.google.com/file/d/1ZxPwlSlxf8VEejr83onpOeiRqc6jWygf/view?usp=sharing"
                        class="tf-btn style-1 animate-hover-btn">
                        <span>
                            Télécharger CV !
                        </span>
                    </a>
                </div>
            </div>
            <!-- End section-contact -->
            <p class="font-3 text_secondary-color text-center">© 2025 Brecht Tankoua. All Rights Reserved.</p>
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
