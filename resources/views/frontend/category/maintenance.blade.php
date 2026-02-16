@extends('main_master')

@section('content')

@section('title')
Brecht Tankoua | Portfolio
@endsection
<div class="main-content-wrapper container"><br>
    <ul class="breadcrumb-navigation">
        <li><a href="/">Accueil</a></li>
        <li><a href="#">Categorie</a></li>
        <li><a href="{{url('/category/'.$category->id.'/'.$category->slug)}}">{{ $category->name }}</a></li>
    </ul>
    <div class="row">
        <div class="col-12 col-lg-8 pe-lg-4">
            <section class="resume-experience-section resume-section">
                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
                    <img src="{{ asset($category->image) }}" class="me-3" width="30px" height="30px" alt="">{{ $category->name }}
                </h3>
                <div class="resume-timeline position-relative">
                    <p>La maintenance logicielle des ordinateurs est un ensemble d&#39;activit&eacute;s visant &agrave; assurer le bon fonctionnement, la s&eacute;curit&eacute; et la performance des logiciels install&eacute;s sur les ordinateurs. Voici une description d&eacute;taill&eacute;e des t&acirc;ches impliqu&eacute;es dans la maintenance logicielle des ordinateurs :</p>

                    <p>T&acirc;ches de maintenance pr&eacute;ventive</p>

                    <p>1. Mise &agrave; jour des logiciels : mise &agrave; jour des logiciels pour corriger les erreurs, am&eacute;liorer les performances et ajouter de nouvelles fonctionnalit&eacute;s.<br />
                    2. Mise &agrave; jour des correctifs de s&eacute;curit&eacute; : mise &agrave; jour des correctifs de s&eacute;curit&eacute; pour prot&eacute;ger les logiciels contre les vuln&eacute;rabilit&eacute;s et les attaques malveillantes.<br />
                    3. V&eacute;rification des mises &agrave; jour automatiques : v&eacute;rification que les mises &agrave; jour automatiques sont activ&eacute;es pour les logiciels qui le permettent.<br />
                    4. Nettoyage des fichiers temporaires : nettoyage des fichiers temporaires pour lib&eacute;rer de l&#39;espace disque et am&eacute;liorer les performances.</p>

                    <p>T&acirc;ches de maintenance corrective</p>

                    <p>1. D&eacute;pannage des probl&egrave;mes logiciels : d&eacute;pannage des probl&egrave;mes logiciels pour identifier et r&eacute;soudre les causes des erreurs.<br />
                    2. R&eacute;installation des logiciels : r&eacute;installation des logiciels pour r&eacute;soudre les probl&egrave;mes de configuration ou de compatibilit&eacute;.<br />
                    3. Suppression des logiciels malveillants : suppression des logiciels malveillants pour prot&eacute;ger les donn&eacute;es et les syst&egrave;mes.<br />
                    4. R&eacute;cup&eacute;ration des donn&eacute;es : r&eacute;cup&eacute;ration des donn&eacute;es pour restaurer les fichiers et les donn&eacute;es importantes.</p>

                    <p>T&acirc;ches de maintenance pr&eacute;visionnelle</p>

                    <p>1. Analyse des performances : analyse des performances pour identifier les goulots d&#39;&eacute;tranglement et les opportunit&eacute;s d&#39;am&eacute;lioration.<br />
                    2. Planification des mises &agrave; niveau : planification des mises &agrave; niveau pour les logiciels et les syst&egrave;mes pour assurer la compatibilit&eacute; et les performances.<br />
                    3. &Eacute;valuation des risques : &eacute;valuation des risques pour identifier les vuln&eacute;rabilit&eacute;s et les menaces potentielles.<br />
                    4. D&eacute;veloppement de plans de reprise : d&eacute;veloppement de plans de reprise pour assurer la continuit&eacute; des activit&eacute;s en cas de d&eacute;faillance ou de catastrophe.</p>

                    <p>En r&eacute;sum&eacute;, la maintenance logicielle des ordinateurs implique un ensemble de t&acirc;ches pr&eacute;ventives, correctives et pr&eacute;visionnelles pour assurer le bon fonctionnement, la s&eacute;curit&eacute; et la performance des logiciels install&eacute;s sur les ordinateurs.</p>

                </div><!--//resume-timeline-->
            </section><!--//resume-experience-section-->
        </div><!--//col-8-->
        <div class="col-12 col-lg-4 ps-lg-4">
            @include('frontend.navbar')
        </div>
        <!--//col-side-->
    </div>
</div><!--//row-->
@endsection