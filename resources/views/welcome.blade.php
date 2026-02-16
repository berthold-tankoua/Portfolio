@extends('main_master')

@section('content')

@section('title')
Brecht Tankoua | Portfolio
@endsection
@php
 $categories= App\Models\Category::orderBy('id','ASC')->get();
 $about= App\Models\About::first();
 $top_projects = App\Models\Project::orderBy('top','DESC')->get();
@endphp
<div class="main-content-wrapper">
	<div class="">
		<div class="resume-wrapper mx-auto rounded-2">
			<div class="resume-header px-lg-5">
				<div class="resume-profile-holder text-center">
					<img class="resume-profile-pic rounded-circle" src="{{ asset('assets/images/profile.png')}}" alt="image">

					<h2 class="resume-name text-uppercase">BRECHT TANKOUA  </h2>
					<div class="resume-role-title text-uppercase">Developpeur Web & IA</div>
					<P>Consultant en publicité Meta & Concepteur d’agent IA</P>
					<div class="top-bar text-center position-relative">
						<div class="top-bar-inner">

							<ul class="social-list list-inline mx-auto">
								<li class="list-inline-item me-0 me-md-1 me-lg-2"><a href="https://web.facebook.com/agencedigitals/"><i class="fa-brands fa-facebook fa-fw"></i></a></li>
								<li class="list-inline-item me-0 me-md-1 me-lg-2"><a href="https://gitlab.com/Brecht_tankoua"><i class="fa-brands fa-github fa-fw"></i></a></li>

								<li class="list-inline-item me-0 me-md-1 me-lg-2"><a href="https://www.linkedin.com/in/brecht-tankoua-80b311279/"><i class="fa-brands fa-linkedin-in fa-fw"></i></a></li>

								<li class="list-inline-item me-0 me-md-1 me-lg-2"><a href="https://www.shopixup.com/store/agencedigitals"><i class="fa-brands fa-web fa-fw"></i></a></li>

							</ul><!--//social-list-->

						</div><!--//top-bar-inner-->

					</div><!--//top-bar-->
					<div class="resume-contact mt-4">
						<div class="resume-contact-list list-unstyled list-inline mb-0 justify-content-between">
							<a href="tel:942-388-8634" class="list-inline-item me-md-3 me-lg-5"><i class="resume-contact-icon bi bi-telephone-inbound me-2"></i>+1 942-388-8634</a>
							<a href="mailto:brtankoua@gmail.com" class="list-inline-item me-md-3 me-lg-5"><i class="resume-contact-icon bi bi-envelope me-2"></i> brtankoua@gmail.com</a>
							<a href="https://www.shopixup.com/store/agencedigitals" class="list-inline-item me-lg-5"><i class="resume-contact-icon bi bi-globe me-2"></i> www.agencedigitals.com/</a>
						</d>
					</div><!--//resume-contact-->
				</div><!--//profile-holder-->
			</div><!--//resume-header-->
			<br>
			<div class="w-100 mb-4" style="overflow: hidden;color:rgb(101, 100, 100) !important;">
				<div class="marquee-content">
					@foreach($categories as $category)
                        <a href="{{url('/category/'.$category->id.'/'.$category->slug)}}" class="marquee-tag btn btn-outline-dark " style="font-size:13.5px;">
                            <img class="me-2" src="{{ asset($category->image) }}" alt="" width="20px" height="20px">{{ $category->slug }}
                        </a>
					@endforeach


				</div>
			</div>
			<div class="resume-body p-3 p-lg-1">
				<div class="row">
					<div class="col-12 col-lg-8 pe-lg-4">
						<section class="resume-summary-section resume-section">
						<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-2 py-lg-3"><i class="resume-section-heading-icon bi bi-person me-2"></i>A Propos </h3>
						<strong >{{  $about->title1}},</strong>
							<div class="resume-summary-desc mt-2 project-desc">
								{!! $about->desc1 !!}
							</div>
						</section><!--//resume-section-->

						<hr>

						<section class="resume-experience-section resume-section">
							<h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-briefcase me-2"></i>EXPÉRIENCES PROFESSIONNELLES</h3>
							<div class="resume-timeline position-relative">
								@foreach ($top_projects as $project)
									<article class="resume-timeline-item position-relative pb-4">

										<div class="resume-timeline-item-header mb-2">

											<div class="resume-position-meta d-flex justify-content-between mb-3">
												<div class="resume-position-time">{{ $project->start_date }} | {{ $project->end_date }}</div>
												<a style="color: rgb(45, 44, 44)" href="{{ $project->url }}" class="mbldis resume-company-name">{{ $project->url }}</a>
											</div>
											<div class="d-flex flex-wrap me-3">
												<h3 class="resume-position-title mb-1 me-3">{{ $project->name }}  </h3>
												@php
													$tools = $project->tool_path;
													$project_tools = explode(',', $tools);
												@endphp
													<div class="d-flex p-tool overflow-hidden" >
														@foreach($project_tools as $key=> $tool)
														<div class="item me-1">
															<img src="{{ asset($tool) }}"  alt="portofolio-skill" >
														</div>
														@if ($key==8)
															@php
																break;
															@endphp
														@endif
														@endforeach
													</div>
											</div>
										</div><!--//resume-timeline-item-header-->
										<div class="">
											<div class="containers">
												<img class="project-img" src="{{ asset($project->image1) }}" alt="" />

												<div class="overlay"></div>
												<div class="button"><a href="{{ url('project/'.$project->id.'/detail') }}"> VOIR PLUS </a></div>
											  </div><br>
										</div>

										<div class="resume-timeline-item-desc">
											<div class="project-desc">
												{!! $project->desc1 !!}
											</div>
											<div class="text-center p-3">
												<div class="buttons"><a href="{{ url('project/'.$project->id.'/detail') }}"> VOIR PLUS </a></div>
											</div>

										</div><!--//resume-timeline-item-desc-->

									</article><!--//resume-timeline-item-->
								@endforeach

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


</div><!--//row-->
@endsection
