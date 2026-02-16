@extends('main_master')

@section('content')

@section('title')
Brecht Tankoua | Portfolio
@endsection
<div class="main-content-wrapper container"><br>
    <ul class="breadcrumb-navigation">
        <li><a href="/">Accueil</a></li>
        <li><a href="#">Categorie</a></li>
        <li>{{ $category->name }}</li>
    </ul>
    <div class="row">
        <div class="col-12 col-lg-8 pe-lg-4">
            <section class="resume-experience-section resume-section">
                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3">
                    <img src="{{ asset($category->image) }}" class="me-3" width="30px" height="30px" alt="">{{ $category->name }}
                </h3>
                <div class="resume-timeline position-relative">
                    @foreach ($projects as $project)
                        <article class="resume-timeline-item position-relative pb-4">
                            <div class="resume-timeline-item-header mb-2">
                                <div class="resume-position-meta d-flex justify-content-between mb-3">
                                    <div class="resume-position-time">{{ $project->start_date }} | {{ $project->end_date }}</div>
                                    <a style="color: rgb(45, 44, 44)" href="{{ $project->url }}" class="mbldis resume-company-name">{{ $project->url }}</a>
                                </div>
                                <div class="d-flex flex-wrap me-3">
                                    <h3 class="resume-position-title mb-1 me-3">{{ $project->name }}</h3>
                                    @php
                                        $project_tools = explode(',', $project->tool_path);
                                    @endphp
                                    <div class="d-flex p-tool overflow-hidden">
                                        @foreach($project_tools as $key => $tool)
                                            @if ($key == 8)
                                                @break
                                            @endif
                                            <div class="item me-1">
                                                <img src="{{ asset($tool) }}" alt="portofolio-skill">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!--//resume-timeline-item-header-->
                            <a href="{{ url('project/'.$project->id.'/detail') }}">

                                    <img class="project-img" src="{{ asset($project->image1) }}" style="width:100%;:auto;max-height:325px;border-radius: 5px;" />

                            </a><hr>
                            <div class="resume-timeline-item-desc mt-2">
                                <div class="project-desc">
                                    {!! $project->desc1 !!}
                                </div>
                                <div class="text-center p-3">
                                    <div class="buttons"><a href="{{ url('project/'.$project->id.'/detail') }}"> VOIR PLUS </a></div>
                                </div>
                            </div><!--//resume-timeline-item-desc-->
                        </article><!--//resume-timeline-item-->
                    @endforeach
                    @if (count($projects) == 0)
                        <p class="text-center text-danger">AUCUN PROJET DISPONIBLE</p>
                    @endif
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
