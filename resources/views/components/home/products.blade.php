@php

    $isArabic = app()->getLocale() === 'ar';

    $servicesSection = $homeSections->get('services');

    $pageTitle = $isArabic
        ? 'خدمات نقل العفش'
        : 'Furniture Moving Services';

    $pageSubtitle = $isArabic
        ? 'نقل عفش وأثاث وأغراض داخل الكويت'
        : 'Furniture, household and belongings moving across Kuwait';

    $whatsappNumber = '96560656190';

@endphp


<section class="services-page">

    {{-- =========================================================
        HERO
    ========================================================== --}}

    <div class="services-hero">

        <div class="container">

            <div class="services-hero-content">

                <span class="services-kicker">
                    {{ $isArabic ? 'خدماتنا' : 'OUR SERVICES' }}
                </span>

                <h1>
                    {{ $pageTitle }}
                </h1>

                <p>
                    {{ $pageSubtitle }}
                </p>

            </div>

        </div>

    </div>


    {{-- =========================================================
        SERVICES CONTENT
    ========================================================== --}}

    <div class="container services-container">

        {{-- Section Heading --}}

        <div class="services-heading">

            <div>

                @if($servicesSection?->subtitle)

                    <span class="section-kicker">
                        {{ $servicesSection->subtitle }}
                    </span>

                @endif

                <h2>

                    @if($servicesSection?->title)

                        {{ $servicesSection->title }}

                    @else

                        {{ $isArabic
                            ? 'اختر الخدمة التي تحتاجها'
                            : 'Choose the Service You Need' }}

                    @endif

                </h2>

            </div>


            <div class="services-count">

                <strong id="servicesCount">
                    {{ $products->count() }}
                </strong>

                <span>
                    {{ $isArabic ? 'خدمة' : 'Services' }}
                </span>

            </div>

        </div>


        {{-- =====================================================
            SEARCH
        ====================================================== --}}

        <div class="services-toolbar">

            <div class="services-search">

                <i class="bi bi-search search-icon"></i>

                <input
                    type="search"
                    id="serviceSearch"
                    placeholder="{{ $isArabic
                        ? 'ابحث عن خدمة...'
                        : 'Search for a service...' }}"
                    autocomplete="off"
                >

                <button
                    type="button"
                    id="clearSearch"
                    class="clear-search"
                    aria-label="{{ $isArabic
                        ? 'مسح البحث'
                        : 'Clear search' }}"
                >

                    <i class="bi bi-x"></i>

                </button>

            </div>

        </div>


        {{-- =====================================================
            SERVICES GRID
        ====================================================== --}}

        <div
            class="services-grid services-page-grid"
            id="servicesGrid"
        >

            @foreach($products as $service)

                @php

                    $serviceName = $isArabic
                        ? $service->name_ar
                        : $service->name_en;

                    $serviceDescription = $isArabic
                        ? $service->description_ar
                        : $service->description_en;

                    $message = $isArabic
                        ? "السلام عليكم، أريد طلب خدمة: {$serviceName}"
                        : "Hello, I would like to request the service: {$serviceName}";

                    $whatsappUrl =
                        'https://wa.me/' .
                        $whatsappNumber .
                        '?text=' .
                        urlencode($message);

                @endphp


                <article
                    class="service-card service-filter-item"
                    data-search="{{ strtolower(
                        $serviceName . ' ' .
                        ($serviceDescription ?? '')
                    ) }}"
                >

                    {{-- Image --}}

                    <a
                        href="{{ route('products.show', $service->slug) }}"
                        class="service-image"
                    >

                        @if($service->image)

                            <img
                                src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $serviceName }}"
                                loading="lazy"
                            >

                        @else

                            <div class="service-placeholder">

                                <i class="bi bi-truck"></i>

                            </div>

                        @endif


                        <div class="service-overlay">

                            <span class="service-view">

                                <i class="bi bi-arrow-up-left"></i>

                            </span>

                        </div>

                    </a>


                    {{-- Content --}}

                    <div class="service-content">

                        <span class="service-label">

                            <i class="bi bi-truck"></i>

                            {{ $isArabic
                                ? 'خدمة نقل عفش'
                                : 'MOVING SERVICE' }}

                        </span>


                        <h3>

                            <a
                                href="{{ route('products.show', $service->slug) }}"
                            >
                                {{ $serviceName }}
                            </a>

                        </h3>


                        @if($serviceDescription)

                            <p class="service-description">

                                {{ Str::limit(
                                    strip_tags($serviceDescription),
                                    150
                                ) }}

                            </p>

                        @endif


                        {{-- Footer --}}

                        <div class="service-footer">

                            <a
                                href="{{ route('products.show', $service->slug) }}"
                                class="service-details"
                            >

                                <span>
                                    {{ $isArabic
                                        ? 'عرض تفاصيل الخدمة'
                                        : 'View Service Details' }}
                                </span>

                                <i class="bi bi-arrow-left"></i>

                            </a>


                            <a
                                href="{{ $whatsappUrl }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="service-whatsapp"
                            >

                                <i class="bi bi-whatsapp"></i>

                                <span>
                                    {{ $isArabic
                                        ? 'اطلب الآن'
                                        : 'Request Now' }}
                                </span>

                            </a>

                        </div>

                    </div>

                </article>

            @endforeach


            {{-- Empty Result --}}

            <div
                class="services-empty"
                id="servicesEmpty"
                style="display: none;"
            >

                <div class="services-empty-icon">

                    <i class="bi bi-search"></i>

                </div>

                <h3>

                    {{ $isArabic
                        ? 'لم يتم العثور على خدمة'
                        : 'No Services Found' }}

                </h3>

                <p>

                    {{ $isArabic
                        ? 'جرب البحث باسم خدمة أخرى.'
                        : 'Try searching for another service.' }}

                </p>

            </div>

        </div>

    </div>

</section>



<style>

/* =========================================================
   SERVICES PAGE
========================================================= */

.services-page {
    background: var(--tabarak-light);
    color: var(--tabarak-text);
}


/* =========================================================
   HERO
========================================================= */

.services-hero {
    position: relative;

    min-height: 390px;

    display: flex;
    align-items: center;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            var(--tabarak-blue-dark) 0%,
            var(--tabarak-blue) 100%
        );

    margin-bottom: 70px;
}

.services-hero::before {

    content: "";

    position: absolute;

    inset: 0;

    background:
        radial-gradient(
            circle at 85% 20%,
            rgba(255,255,255,.18),
            transparent 35%
        ),

        radial-gradient(
            circle at 15% 90%,
            rgba(255,255,255,.12),
            transparent 35%
        );

    pointer-events: none;
}

.services-hero-content {

    position: relative;

    z-index: 2;

    max-width: 850px;

    padding: 80px 0;
}

.services-kicker {

    display: inline-flex;

    align-items: center;

    gap: 10px;

    color: rgba(255,255,255,.88);

    font-size: 13px;

    font-weight: 700;

    letter-spacing: 2px;

    margin-bottom: 18px;
}

.services-kicker::before {

    content: "";

    width: 35px;

    height: 2px;

    background: currentColor;
}

.services-hero h1 {

    margin: 0 0 18px;

    color: #fff;

    font-size: clamp(42px, 6vw, 72px);

    font-weight: 800;

    line-height: 1.1;
}

.services-hero p {

    margin: 0;

    color: rgba(255,255,255,.88);

    font-size: 18px;

    line-height: 1.9;

    max-width: 650px;
}


/* =========================================================
   HEADING
========================================================= */

.services-heading {

    display: flex;

    align-items: flex-end;

    justify-content: space-between;

    gap: 30px;

    margin-bottom: 35px;
}

.services-heading h2 {

    margin: 8px 0 0;

    color: var(--tabarak-text);

    font-size: clamp(30px, 4vw, 46px);

    font-weight: 800;

    line-height: 1.2;
}

.services-count {

    display: flex;

    align-items: baseline;

    gap: 8px;

    white-space: nowrap;

    color: var(--tabarak-muted);
}

.services-count strong {

    color: var(--tabarak-blue);

    font-size: 30px;

    font-weight: 800;
}


/* =========================================================
   SEARCH
========================================================= */

.services-toolbar {

    display: flex;

    justify-content: flex-end;

    margin-bottom: 45px;

    padding: 18px;

    background: var(--tabarak-white);

    border: 1px solid var(--tabarak-border);

    border-radius: 18px;

    box-shadow: 0 10px 35px rgba(38,38,38,.06);
}

.services-search {

    position: relative;

    width: 350px;

    display: flex;

    align-items: center;
}

.services-search input {

    width: 100%;

    height: 52px;

    padding: 0 48px 0 45px;

    border: 1px solid var(--tabarak-border);

    border-radius: 12px;

    outline: none;

    background: var(--tabarak-light);

    color: var(--tabarak-text);

    font-size: 14px;

    transition: .25s ease;
}

.services-search input:focus {

    background: var(--tabarak-white);

    border-color: var(--tabarak-blue);

    box-shadow:
        0 0 0 4px rgba(11,94,215,.10);
}

.search-icon {

    position: absolute;

    left: 17px;

    z-index: 2;

    color: var(--tabarak-muted);

    pointer-events: none;
}

.clear-search {

    position: absolute;

    right: 10px;

    width: 32px;

    height: 32px;

    border: 0;

    border-radius: 50%;

    background: transparent;

    color: var(--tabarak-muted);

    cursor: pointer;

    display: none;

    align-items: center;

    justify-content: center;
}

.clear-search:hover {

    background: var(--tabarak-light-blue);

    color: var(--tabarak-blue);
}


/* =========================================================
   SERVICES GRID
========================================================= */

.services-page-grid {

    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 30px;
}


/* =========================================================
   SERVICE CARD
========================================================= */

.service-filter-item {

    min-width: 0;

    background: var(--tabarak-white);

    border: 1px solid var(--tabarak-border);

    border-radius: 18px;

    overflow: hidden;

    box-shadow:
        0 10px 35px rgba(38,38,38,.055);

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}

.service-filter-item:hover {

    transform: translateY(-7px);

    border-color: rgba(11,94,215,.20);

    box-shadow:
        0 22px 55px rgba(38,38,38,.12);
}


/* =========================================================
   SERVICE IMAGE
========================================================= */

.service-filter-item .service-image {

    position: relative;

    display: block;

    height: 310px;

    overflow: hidden;

    background: var(--tabarak-light);
}

.service-filter-item .service-image img {

    width: 100%;

    height: 100%;

    object-fit: cover;

    transition: transform .5s ease;
}

.service-filter-item:hover .service-image img {

    transform: scale(1.06);
}


/* IMAGE OVERLAY */

.service-overlay {

    position: absolute;

    inset: 0;

    display: flex;

    align-items: flex-end;

    justify-content: flex-end;

    padding: 20px;

    background:
        linear-gradient(
            to top,
            rgba(11,94,215,.30),
            transparent 40%
        );

    opacity: 0;

    transition: opacity .3s ease;
}

.service-filter-item:hover .service-overlay {

    opacity: 1;
}

.service-view {

    display: flex;

    align-items: center;

    justify-content: center;

    width: 48px;

    height: 48px;

    border-radius: 50%;

    background: var(--tabarak-white);

    color: var(--tabarak-blue);

    font-size: 18px;

    box-shadow:
        0 8px 20px rgba(0,0,0,.12);
}

.service-placeholder {

    width: 100%;

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    color: var(--tabarak-blue);

    font-size: 55px;

    background: var(--tabarak-light-blue);
}


/* =========================================================
   CONTENT
========================================================= */

.service-filter-item .service-content {

    padding: 24px;
}

.service-label {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    margin-bottom: 10px;

    color: var(--tabarak-blue);

    font-size: 12px;

    font-weight: 700;
}

.service-label i {

    font-size: 12px;
}

.service-filter-item h3 {

    margin: 0 0 12px;

    font-size: 21px;

    line-height: 1.45;

    font-weight: 750;
}

.service-filter-item h3 a {

    color: var(--tabarak-text);

    text-decoration: none;

    transition: color .2s ease;
}

.service-filter-item h3 a:hover {

    color: var(--tabarak-blue);
}

.service-filter-item .service-description {

    min-height: 55px;

    margin: 0 0 22px;

    color: var(--tabarak-muted);

    font-size: 14px;

    line-height: 1.8;
}


/* =========================================================
   FOOTER
========================================================= */

.service-filter-item .service-footer {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 12px;

    padding-top: 18px;

    border-top: 1px solid var(--tabarak-border);
}


/* DETAILS */

.service-details {

    display: inline-flex;

    align-items: center;

    gap: 7px;

    color: var(--tabarak-blue);

    text-decoration: none;

    font-size: 13px;

    font-weight: 700;

    transition: .25s ease;
}

.service-details:hover {

    color: var(--tabarak-blue-dark);

}

.service-details i {

    transition: transform .25s ease;
}

.service-details:hover i {

    transform: translateX(-4px);
}


/* =========================================================
   WHATSAPP
========================================================= */

.service-whatsapp {

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    min-height: 42px;

    padding: 0 15px;

    border-radius: 9px;

    background: #168c4b;

    color: #fff !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 700;

    transition: .25s ease;
}

.service-whatsapp:hover {

    background: #11753d;

    color: #fff !important;

    transform: translateY(-2px);
}


/* =========================================================
   EMPTY STATE
========================================================= */

.services-empty {

    grid-column: 1 / -1;

    text-align: center;

    padding: 90px 20px;
}

.services-empty-icon {

    width: 75px;

    height: 75px;

    margin: 0 auto 20px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: var(--tabarak-light-blue);

    color: var(--tabarak-blue);

    font-size: 28px;
}

.services-empty h3 {

    margin-bottom: 8px;

    font-size: 24px;

    color: var(--tabarak-text);
}

.services-empty p {

    margin: 0;

    color: var(--tabarak-muted);
}


/* =========================================================
   RTL
========================================================= */

html[dir="rtl"] .services-search input {

    padding-right: 45px;

    padding-left: 48px;
}

html[dir="rtl"] .search-icon {

    right: 17px;

    left: auto;
}

html[dir="rtl"] .clear-search {

    left: 10px;

    right: auto;
}

html[dir="rtl"] .services-kicker::before {

    order: 2;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1199px) {

    .services-page-grid {

        grid-template-columns:
            repeat(2, minmax(0, 1fr));
    }

}

@media (max-width: 991px) {

    .services-toolbar {

        justify-content: stretch;
    }

    .services-search {

        width: 100%;
    }

}

@media (max-width: 767px) {

    .services-hero {

        min-height: 320px;

        margin-bottom: 45px;
    }

    .services-hero-content {

        padding: 60px 0;
    }

    .services-hero h1 {

        font-size: 42px;
    }

    .services-hero p {

        font-size: 15px;
    }

    .services-heading {

        align-items: flex-start;

        flex-direction: column;

        margin-bottom: 25px;
    }

    .services-toolbar {

        padding: 14px;

        border-radius: 14px;

        margin-bottom: 30px;
    }

    .services-page-grid {

        grid-template-columns: 1fr;

        gap: 22px;
    }

    .service-filter-item .service-image {

        height: 280px;
    }

}

@media (max-width: 480px) {

    .services-hero h1 {

        font-size: 36px;
    }

    .service-filter-item .service-content {

        padding: 20px;
    }

    .service-filter-item .service-footer {

        align-items: stretch;

        flex-direction: column;
    }

    .service-details {

        justify-content: center;

        min-height: 42px;

        border: 1px solid var(--tabarak-border);

        border-radius: 9px;
    }

    .service-whatsapp {

        width: 100%;
    }

}

</style>



{{-- =============================================================
    SERVICES SEARCH JS
============================================================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput =
        document.getElementById('serviceSearch');

    const clearSearch =
        document.getElementById('clearSearch');

    const services =
        document.querySelectorAll('.service-filter-item');

    const servicesEmpty =
        document.getElementById('servicesEmpty');

    const servicesCount =
        document.getElementById('servicesCount');


    function filterServices() {

        const searchValue =
            searchInput.value
                .trim()
                .toLowerCase();


        let visibleCount = 0;


        services.forEach(function (service) {

            const searchText =
                service.dataset.search || '';


            const searchMatch =
                searchValue === '' ||
                searchText.includes(searchValue);


            if (searchMatch) {

                service.style.display = '';

                visibleCount++;

            } else {

                service.style.display = 'none';

            }

        });


        servicesCount.textContent =
            visibleCount;


        if (visibleCount === 0) {

            servicesEmpty.style.display =
                'block';

        } else {

            servicesEmpty.style.display =
                'none';

        }


        if (searchValue.length > 0) {

            clearSearch.style.display =
                'flex';

        } else {

            clearSearch.style.display =
                'none';

        }

    }


    searchInput.addEventListener(
        'input',
        filterServices
    );


    clearSearch.addEventListener(
        'click',
        function () {

            searchInput.value = '';

            searchInput.focus();

            filterServices();

        }
    );


    filterServices();

});

</script>