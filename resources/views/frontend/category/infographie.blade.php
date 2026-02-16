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
                <div class="resume-timeline position-relative ">
                    <div class="text-center">
                        <a class="btn btn-outline-primary " target="_blank" href="https://drive.google.com/drive/folders/105P3Q3ZPNGB-78bdbeEsP7UqgpANw8fC?usp=sharing">Cliquer pour consulter mes Realisations</a>
                    </div>
                 
                  <br>
                  <div>
                    <p>Infographe sp&eacute;cialis&eacute; en cr&eacute;ation d&#39;affiches publicitaires avec Photoshop</p>

<p>Je suis un infographe exp&eacute;riment&eacute; avec une passion pour la cr&eacute;ation d&#39;affiches publicitaires attrayantes et efficaces. Je me sp&eacute;cialise dans la conception d&#39;affiches publicitaires pour les r&eacute;seaux sociaux et les campagnes publicitaires, en utilisant uniquement Photoshop.</p>

<p>Mes comp&eacute;tences :</p>

<p>- Conception d&#39;affiches publicitaires pour les r&eacute;seaux sociaux (Facebook, Instagram, Twitter, LinkedIn, etc.)<br />
- Cr&eacute;ation d&#39;affiches publicitaires pour les campagnes publicitaires<br />
- Utilisation avanc&eacute;e de Photoshop pour la cr&eacute;ation d&#39;affiches publicitaires<br />
- Connaissance des meilleures pratiques pour la cr&eacute;ation d&#39;affiches publicitaires<br />
- Exp&eacute;rience dans la cr&eacute;ation d&#39;affiches publicitaires pour diverses industries (e-commerce, services, sant&eacute;, etc.)</p>

<p>Mes services :</p>

<p>- Conception d&#39;affiches publicitaires pour les r&eacute;seaux sociaux<br />
- Cr&eacute;ation d&#39;affiches publicitaires pour les campagnes publicitaires<br />
- R&eacute;daction de textes pour les affiches publicitaires (facultatif)</p>

<p>Mon objectif :</p>

<p>Mon objectif est de cr&eacute;er des affiches publicitaires qui vous aident &agrave; atteindre vos objectifs de marketing et &agrave; renforcer votre pr&eacute;sence en ligne. Je suis passionn&eacute; par la cr&eacute;ation d&#39;affiches publicitaires qui captivent l&#39;attention et inspirent l&#39;engagement.</p>

                  </div>
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