@php
    $projects = [
        [
            'image' => asset('assets/projects/Hair-transplant-brand-landing-pages.webp'),
            'title' => 'Hair Transplant Landing Pages',
        ],
        [
            'image' => asset('assets/projects/alacritys-interior-company.webp'),
            'title' => 'Alacritys Interior Design',
        ],
        [
            'image' => asset('assets/projects/promofusion360-web-application.webp'),
            'title' => 'PromoFusion 360',
        ],
        [
            'image' => asset('assets/projects/jasol-packers-and-movers-moving-company.webp'),
            'title' => 'Jasol Packers & Movers',
        ],
        [
            'image' => asset('assets/projects/growix-saas-software.webp'),
            'title' => 'Growix SaaS Software',
        ],
        [
            'image' => asset('assets/projects/jixicloud-web-hosting-company.webp'),
            'title' => 'JixiCloud Web Hosting',
        ],
        [
            'image' => asset('assets/projects/tech-nukti-blog-website.webp'),
            'title' => 'Tech Nukti Blog',
        ]
    ];
@endphp

<style>
    .slider-track {
        display: flex;
        width: max-content;
        gap: 1.5rem;
        will-change: transform;
    }

    .project-card {
        flex-shrink: 0;
        width: 50vw;
        overflow: hidden;
        border-radius: 1rem;
        border: 1px solid #e5e5e5;
        background: #fff;
        transition: .3s;
    }

    .project-card:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }

    .project-card img {
        display: block;
        width: 100%;
        height: auto;
        transition: .5s;
    }

    .project-card:hover img {
        transform: scale(1.03);
    }

    @media (min-width:640px){
        .project-card{width:40vw;}
    }

    @media (min-width:768px){
        .project-card{width:35vw;}
    }

    @media (min-width:1024px){
        .project-card{width:15vw;}
    }
</style>

<section class="py-10 sm:py-14 px-3 sm:px-6 lg:px-8 border-b border-outline-variant/30">
    <div class="max-w-7xl mx-auto">

        <div class="overflow-hidden mask-edges">

            {{-- Row 1 --}}
            <div id="slider1" class="slider-track">

                @foreach($projects as $project)
                    <div class="project-card">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
                    </div>
                @endforeach

                {{-- Duplicate --}}
                @foreach($projects as $project)
                    <div class="project-card">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
                    </div>
                @endforeach

            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {

    function createInfiniteSlider(selector, speed = 0.5, reverse = false) {

        const slider = document.querySelector(selector);

        const halfWidth = () => slider.scrollWidth / 2;

        let x = reverse ? -halfWidth() : 0;
        let paused = false;

        slider.addEventListener('mouseenter', () => paused = true);
        slider.addEventListener('mouseleave', () => paused = false);

        function animate() {

            if (!paused) {

                if (reverse) {

                    x += speed;

                    if (x >= 0) {
                        x = -halfWidth();
                    }

                } else {

                    x -= speed;

                    if (Math.abs(x) >= halfWidth()) {
                        x = 0;
                    }

                }

                slider.style.transform = `translate3d(${x}px,0,0)`;
            }

            requestAnimationFrame(animate);
        }

        animate();
    }

    createInfiniteSlider('#slider1', 0.60, false);

});
</script>