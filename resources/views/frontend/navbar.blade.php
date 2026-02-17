<section class="resume-lang-section resume-section">
    <h1 class="h5 text-uppercase py-2 py-lg-3 py-3"><i class="bi bi-translate me-2"></i>Langues</h1>
    <ul class="list-unstyled resume-lang-list">
        <li class="mb-4">
            <div class="resume-skill-name text-capitalize">Francais</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="98"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 85%"></div>
            </div><!--//resume-level-indicator-->
        </li>
        <li class="mb-2">
            <div class="resume-skill-name">Anglais</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="86"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 70%"></div>
            </div>
        </li>
    </ul>
</section>
<hr>
<section class="resume-skills-section resume-section">
    <h1 class="h5 text-uppercase py-2 py-lg-3 py-3"><i class="bi bi-gear me-2"></i>COMPETENCES</h1>
    <ul class="list-unstyled text-white">
        <li class="mb-4">
            <div class="resume-skill-name text-capitalize"><img src="{{ asset('upload/skills/1794217189325281.png') }}"
                    alt="image" width="15px" height="15px" class="me-1">Laravel | <img
                    src="{{ asset('upload/skills/1794217278408413.png') }}" alt="image" width="15px" height="15px"
                    class="me-1">PHP</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="98"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 85%"></div>
            </div>
        </li>
        <li class="mb-4">
            <div class="resume-skill-name"><img src="{{ asset('upload/skills/1794217464578210.png') }}" alt="image"
                    width="15px" height="15px" class="me-1">Html & Css | <img
                    src="{{ asset('upload/skills/1794217322879346.png') }}" alt="image" width="15px" height="15px"
                    class="me-1">Bootstrap | <img src="{{ asset('upload/skills/1794217521134374.png') }}"
                    alt="image" width="15px" height="15px" class="me-1">Js | <img
                    src="{{ asset('upload/skills/1794217497087496.png') }}" alt="image" width="15px" height="15px"
                    class="me-1">jQuery</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 80%"></div>
            </div>
        </li>
        <li class="mb-4">
            <div class="resume-skill-name"><img src="{{ asset('upload/skills/1794217805784333.png') }}" alt="image"
                    width="15px" height="15px" class="me-1">VueJs | <img
                    src="{{ asset('upload/skills/1821402864701050.png') }}" alt="image" width="15px" height="15px"
                    class="me-1">PWA</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="86"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 70%"></div>
            </div>
        </li>
        <li class="mb-4">
            <div class="resume-skill-name"> | <img src="{{ asset('upload/skills/1794217611005020.png') }}"
                    alt="image" width="15px" height="15px" class="me-1">SEO </div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example"
                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 60%"></div>
            </div>
        </li>
        <li class="mb-4">
            <div class="resume-skill-name"><img src="{{ asset('upload/skills/1846653782352044.png') }}"
                    alt="image" width="15px" height="15px" class="me-1">Agent IA</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example"
                aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 50%"></div>
            </div>
        </li>
        <li class="mb-4">
            <div class="resume-skill-name"><img src="{{ asset('upload/skills/1846653782352044.png') }}"
                    alt="image" width="15px" height="15px" class="me-1">Agent IA</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example"
                aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 35%"></div>
            </div>
        </li>
        <li class="mb-4">
            <div class="resume-skill-name">Python | Django</div>
            <div class="progress resume-progress mt-2" role="progressbar" aria-label="Basic example"
                aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar resume-progress-bar" style="width: 20%"></div>
            </div>
        </li>
    </ul>
</section><!--//resume-section-->

<hr>
<section class="resume-educate-section resume-section">
    <h1 class="h5 text-uppercase py-2 py-lg-3 py-3"><i class="bi bi-book me-2"></i>FORMATIONS</h1>
    <ul class="list-unstyled text-white resume-educate-list">
        @foreach ($formations as $item)
            <li class="mb-4">
                <div class="resume-degree font-weight-bold me-2">{{ $item->name }} <a
                        href="{{ asset($item->image) }}" title="Afficher l'image"><i class="bi bi-image"></i></a>
                </div>
                <div class="resume-degree-org">{{ $item->place }}</div>
                <div class="resume-degree-time">{{ $item->duration }}</div>
            </li>
        @endforeach
    </ul>
</section><!--//resume-section-->

<hr>
