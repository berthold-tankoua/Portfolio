<section class="resume-skills-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-gear me-2"></i>COMPETENCES</h3>

    <ul class="list-unstyled" >
    <li class="mb-2">
        <div class="resume-skill-name text-capitalize"><img src="{{ asset('upload/skills/1794217189325281.png') }}" alt="image" width="15px" height="15px" class="me-1">Laravel | <img src="{{ asset('upload/skills/1794217278408413.png') }}" alt="image" width="15px" height="15px" class="me-1">PHP</div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 85%"></div>
        </div>
    </li>
    <li class="mb-2">
        <div class="resume-skill-name"><img src="{{ asset('upload/skills/1794217464578210.png') }}" alt="image" width="15px" height="15px" class="me-1">Html | <img src="{{ asset('upload/skills/1794217351642580.png') }}" alt="image" width="15px" height="15px" class="me-1">Css | <img src="{{ asset('upload/skills/1794217322879346.png') }}" alt="image" width="15px" height="15px" class="me-1">Bootstrap</div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 80%"></div>
        </div>
    </li>
        <li class="mb-2">
        <div class="resume-skill-name"><img src="{{ asset('upload/skills/1846653782352044.png') }}" alt="image" width="15px" height="15px" class="me-1">Agent IA</div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 70%"></div>
        </div>
    </li>
    <li class="mb-2">
        <div class="resume-skill-name"><img src="{{ asset('upload/skills/1821402864701050.png') }}" alt="image" width="15px" height="15px" class="me-1">PWA | <img src="{{ asset('upload/skills/1794217611005020.png') }}" alt="image" width="15px" height="15px" class="me-1">SEO </div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 60%"></div>
        </div>
    </li>
    <li class="mb-2">
        <div class="resume-skill-name"><img src="{{ asset('upload/skills/1794217521134374.png') }}" alt="image" width="15px" height="15px" class="me-1">Javascript | <img src="{{ asset('upload/skills/1794217497087496.png') }}" alt="image" width="15px" height="15px" class="me-1">jQuery</div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 50%"></div>
        </div>
    </li>
    <li class="mb-2">
        <div class="resume-skill-name"><img src="{{ asset('upload/skills/1794217805784333.png') }}" alt="image" width="15px" height="15px" class="me-1">VueJs</div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 35%"></div>
        </div>
    </li>

    <li class="mb-2">
        <div class="resume-skill-name">Python | Django</div>
        <div class="progress resume-progress" role="progressbar" aria-label="Basic example" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar resume-progress-bar" style="width: 20%"></div>
        </div>
    </li>
 </ul>

</section><!--//resume-section-->

<hr>

<section class="resume-educate-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-book me-2"></i>Education</h3>
    <ul class="list-unstyled">
        <li class="mb-2">
            <div class="resume-degree font-weight-bold">Licence en Genie Logiciel</div>
            <div class="resume-degree-org">Universite de Yaounde 1</div>
            <div class="resume-degree-time">2017 - 2022</div>
        </li>
        <li>
            <div class="resume-degree font-weight-bold">Baccalaureat D</div>
            <div class="resume-degree-org">Lycee Cite Verte</div>
            <div class="resume-degree-time">2009 - 2017</div>
        </li>
    </ul>
</section><!--//resume-section-->

<hr>

<section class="resume-lang-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-translate me-2"></i>Langues</h3>
     <ul class="list-unstyled resume-lang-list">
        <li class="mb-2">
            <div class="resume-lang-name">Francais</div>
            <div class="resume-level-indicator row gx-0 flex-nowrap">
                <div class="col"><span class="item item-full"></span></div>
            </div><!--//resume-level-indicator-->
        </li>
         <li class="mb-2">
            <div class="resume-lang-name">Anglais</div>
            <div class="resume-level-indicator row gx-0 flex-nowrap">
                <div class="col"><span class="item item-half"></span></div>
            </div><!--//resume-level-indicator-->
        </li>
    </ul>
</section>
<hr>
<section class="resume-educate-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-book me-2"></i>FORMATIONS</h3>
    <ul class="list-unstyled">
        @foreach ($formations as $item)
        <li class="mb-2">
            <div class="resume-degree font-weight-bold me-2">{{ $item->name }} <a href="{{ asset($item->image)}}" title="Afficher l'image"><i class="bi bi-image"></i></a></div>
            <div class="resume-degree-org">{{ $item->place }}</div>
            <div class="resume-degree-time">{{ $item->duration }}</div>
        </li>
        @endforeach
    </ul>
</section><!--//resume-section-->

<hr>
<section class="resume-skills-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-person-gear me-2"></i>Services</h3>
    <ul class="list-inline d-flex flex-wrap" style="font-size: 12.5px;">
        @foreach ($services as $item)
        <li class="list-inline-item"><span class="badge resume-skill-badge">{{ $item->name }}</span></li>
        @endforeach
    </ul>
</section><!--//resume-section-->
<hr>

<section class="resume-skills-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-person-gear me-2"></i>Competences</h3>
    <ul class="list-inline" >
        @foreach ($skills as $item)
        <li class="list-inline-item"><span class="badge resume-skill-badge" style="background-color: #8497bc;"><img src="{{ asset($item->image) }}" alt="image" width="20px" height="20px"> {{ $item->name }}</span></li>
        @endforeach
    </ul>
</section><!--//resume-section-->

<hr>

<section class="resume-projects-section resume-section">
    <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i class="resume-section-heading-icon bi bi-code-slash me-2"></i>Mes Projets</h3>
    @foreach ($projects as $item)
    <div class="item">
        <h4 class="item-heading"><img src="{{ asset($item->category->image) }}" width="25px" height="25px" class="me-2"><a href="{{ $item->url }}">{{ $item->name }}</a></h4>

    </div><!--//item-->
    @endforeach


</section>

