@extends('main_master')

@section('content')
@section('title')
    Portfolio | Projet
@endsection
<div class="main-content-wrapper">
    <div class="container">

        <div class=" mx-auto rounded-2"><br><br>
            <nav aria-label="breadcrumb mt-3 text-white">
                <div class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="/">Accueil</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ url('category/' . $project->category->id . '/' . $project->category->slug) }}">
                            {{ $project->category->name }}
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="#">projet</a>
                    </li>

                    <li class="breadcrumb-item text-white" aria-current="page">
                        {{ $project->name }}
                    </li>

                </div>
            </nav>
            <br>
            <div class="p-1">
                <div class="row">
                    <div class="col-12 col-lg-8 pe-lg-4">

                        <section class="resume-experience-section resume-section">

                            <div class="resume-timeline position-relative">

                                <article class="resume-timeline-item position-relative pb-3">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-wrap align-items-center me-3">
                                            <h1 class="resume-position-title mb-1 me-3 h4">{{ $project->name }} </h1>
                                            @php
                                                $tools = $project->tool_path;
                                                $project_tools = explode(',', $tools);
                                            @endphp
                                            <div class="d-flex p-tool overflow-hidden">
                                                @foreach ($project_tools as $tool)
                                                    <div class="item me-2">
                                                        <img src="{{ asset($tool) }}" width="22px" height="22px"
                                                            alt="portofolio-skill">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!--//resume-timeline-item-header-->

                                    <div style="border-radius: 5px;">
                                        <img class="project-img" src="{{ asset($project->image1) }}" alt=""
                                            style="width: 100%;height:auto;max-height:325px;border-radius: 5px;" />
                                    </div>
                                    <br>
                                    <div class="resume-timeline-item-desc text-white">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h2 class="h6">{{ $project->sub }} </h2>
                                            <a href="{{ $project->url }}"
                                                class="resume-company-name ">{{ $project->url }}</a>
                                        </div>
                                        {!! $project->desc1 !!}
                                        <div class="mt-2" style="border-radius: 5px;">
                                            <img class="project-img" src="{{ asset($project->img_perf) }}"
                                                alt=""
                                                style="width: 100%;height:auto;max-height:325px;border-radius: 5px;" />
                                        </div>
                                        <div class="resume-timeline-item-desc" style="line-height: 22px">
                                            <hr>
                                            <h3 class="h4">{{ $project->title3 }} </h3>
                                            {!! $project->desc3 !!}
                                            <hr>
                                            <h3 class="h4">{{ $project->title2 }} </h3>
                                            {!! $project->desc2 !!}
                                            <hr>
                                            <h3 class="h4">{{ $project->title4 }} </h3>
                                            {!! $project->desc4 !!}
                                            <hr>
                                        </div>
                                    </div><!--//resume-timeline-item-desc-->

                                </article><!--//resume-timeline-item-->


                            </div><!--//resume-timeline-->
                        </section><!--//resume-experience-section-->
                    </div><!--//col-8-->
                    <div class="col-12 col-lg-4 ps-lg-4">
                        @include('frontend.navbar')
                    </div>
                    <!--//col-side-->
                </div><!--//row-->
            </div><!--//resume-body-->
        </div><!--//resume-wrapper-->
    </div><!--//container-fluid-->
</div><!--//main-content-wrapper-->
@endsection
