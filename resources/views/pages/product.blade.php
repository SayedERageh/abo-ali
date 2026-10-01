@extends('layouts.app')

@section('content')

    @php
        $isArabic = app()->getLocale() === 'ar';

        $serviceName = $isArabic
            ? $product->name_ar
            : $product->name_en;

        $serviceDescription = $isArabic
            ? $product->description_ar
            : $product->description_en;

        $whatsappNumber = '96560656190';

        $message = $isArabic
            ? "السلام عليكم، أريد طلب خدمة: {$serviceName}"
            : "Hello, I would like to request the service: {$serviceName}";

        $whatsappUrl =
            'https://wa.me/' .
            $whatsappNumber .
            '?text=' .
            urlencode($message);
    @endphp


    {{-- Page Hero --}}
    <section class="service-detail-hero">

        <div class="container">

            <div class="service-detail-breadcrumb">

                <a href="{{ route('home') }}">
                    {{ $isArabic ? 'الرئيسية' : 'HOME' }}
                </a>

                <i class="bi bi-chevron-left"></i>

                <a href="{{ route('products') }}">
                    {{ $isArabic ? 'خدماتنا' : 'SERVICES' }}
                </a>

                <i class="bi bi-chevron-left"></i>

                <span>{{ $serviceName }}</span>

            </div>

        </div>

    </section>


    {{-- Service Details --}}
    <section class="service-detail-section section-padding">

        <div class="container">

            <div class="row g-5 align-items-start">

                {{-- Service Image --}}
                <div class="col-lg-6">

                    <div class="service-detail-image">

                        @if($product->image)

                            <img
                                src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $serviceName }}"
                            >

                        @else

                            <div class="service-detail-placeholder">

                                <i class="bi bi-truck"></i>

                            </div>

                        @endif

                    </div>

                </div>


                {{-- Service Info --}}
                <div class="col-lg-6">

                    <div class="service-detail-content">

                        <span class="service-detail-kicker">
                            {{ $isArabic ? 'خدمة من خدماتنا' : 'OUR SERVICE' }}
                        </span>


                        <h1>
                            {{ $serviceName }}
                        </h1>


                        @if($serviceDescription)

                            <div class="service-detail-description">

                                {!! nl2br(e($serviceDescription)) !!}

                            </div>

                        @endif


                        {{-- Main CTA --}}
                        <a
                            href="{{ $whatsappUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="service-detail-whatsapp"
                        >

                            <i class="bi bi-whatsapp"></i>

                            <span>
                                {{ $isArabic
                                    ? 'اطلب خدمتك الآن'
                                    : 'Request Your Service Now' }}
                            </span>

                        </a>


                        {{-- Phone --}}
                        @if($company->phone)

                            <a
                                href="tel:{{ $company->phone }}"
                                class="service-detail-phone"
                            >

                                <i class="bi bi-telephone"></i>

                                <span>
                                    {{ $isArabic
                                        ? 'أو اتصل بنا'
                                        : 'Or Call Us' }}
                                </span>

                                <strong>
                                    {{ $company->phone }}
                                </strong>

                            </a>

                        @endif


                        {{-- Service Features --}}
                        <div class="service-detail-features">

                            <div class="service-feature">

                                <div class="service-feature-icon">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <div>
                                    <strong>
                                        {{ $isArabic
                                            ? 'نقل داخل الكويت'
                                            : 'Moving Across Kuwait' }}
                                    </strong>

                                    <span>
                                        {{ $isArabic
                                            ? 'نقل العفش والأثاث والأغراض داخل الكويت'
                                            : 'Furniture and belongings moving across Kuwait' }}
                                    </span>
                                </div>

                            </div>


                            <div class="service-feature">

                                <div class="service-feature-icon">
                                    <i class="bi bi-tools"></i>
                                </div>

                                <div>
                                    <strong>
                                        {{ $isArabic
                                            ? 'فك وتركيب'
                                            : 'Dismantling & Assembly' }}
                                    </strong>

                                    <span>
                                        {{ $isArabic
                                            ? 'فك وتركيب غرف النوم والكبتات والسرائر'
                                            : 'Bedrooms, wardrobes and beds dismantling and assembly' }}
                                    </span>
                                </div>

                            </div>


                            <div class="service-feature">

                                <div class="service-feature-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <div>
                                    <strong>
                                        {{ $isArabic
                                            ? 'عمال متخصصون'
                                            : 'Experienced Workers' }}
                                    </strong>

                                    <span>
                                        {{ $isArabic
                                            ? 'عمال لنقل وتحميل وتفريغ العفش'
                                            : 'Experienced workers for loading and moving furniture' }}
                                    </span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- Other Services --}}
    @if(isset($products) && $products->where('id', '!=', $product->id)->isNotEmpty())

        <section class="related-services section-padding">

            <div class="container">

                <div class="section-heading text-center">

                    <span class="section-kicker">
                        {{ $isArabic ? 'خدماتنا الأخرى' : 'OTHER SERVICES' }}
                    </span>

                    <h2 class="section-title">
                        {{ $isArabic
                            ? 'اكتشف خدمات نقل العفش'
                            : 'Explore Our Moving Services' }}
                    </h2>

                </div>


                <div class="services-grid">

                    @foreach($products->where('id', '!=', $product->id)->take(3) as $relatedService)

                        @php
                            $relatedName = $isArabic
                                ? $relatedService->name_ar
                                : $relatedService->name_en;
                        @endphp

                        <article class="service-card">

                            <a
                                href="{{ route('products.show', $relatedService->slug) }}"
                                class="service-image"
                            >

                                @if($relatedService->image)

                                    <img
                                        src="{{ asset('storage/' . $relatedService->image) }}"
                                        alt="{{ $relatedName }}"
                                        loading="lazy"
                                    >

                                @else

                                    <div class="service-placeholder">
                                        <i class="bi bi-truck"></i>
                                    </div>

                                @endif

                            </a>


                            <div class="service-content">

                                <h3>

                                    <a href="{{ route('products.show', $relatedService->slug) }}">
                                        {{ $relatedName }}
                                    </a>

                                </h3>

                                <a
                                    href="{{ route('products.show', $relatedService->slug) }}"
                                    class="service-details-link"
                                >

                                    {{ $isArabic
                                        ? 'عرض الخدمة'
                                        : 'View Service' }}

                                    <i class="bi bi-arrow-left"></i>

                                </a>

                            </div>

                        </article>

                    @endforeach

                </div>

            </div>

        </section>

    @endif


<style>

/* ==========================================
   SERVICE DETAILS
========================================== */

.service-detail-hero {
    padding: 35px 0;
    background: #f8fafc;
    border-bottom: 1px solid #e2e8f0;
}

.service-detail-breadcrumb {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    color: #94a3b8;
    font-size: 14px;
}

.service-detail-breadcrumb a {
    color: #0b5ed7;
    text-decoration: none;
    font-weight: 700;
}

.service-detail-breadcrumb i {
    font-size: 11px;
    color: #cbd5e1;
}

.service-detail-breadcrumb span {
    color: #64748b;
}


/* Image */

.service-detail-image {
    width: 100%;
    height: 520px;
    overflow: hidden;
    border-radius: 22px;
    background: #eef4f8;
    border: 1px solid #e2e8f0;
    box-shadow: 0 15px 40px rgba(15, 23, 42, .08);
}

.service-detail-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.service-detail-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-detail-placeholder i {
    font-size: 100px;
    color: #94a3b8;
}


/* Content */

.service-detail-content {
    padding: 15px 0;
}

.service-detail-kicker {
    display: inline-block;
    margin-bottom: 15px;
    color: #0b5ed7;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1px;
}

.service-detail-content h1 {
    margin: 0 0 25px;
    color: #12304a;
    font-size: clamp(32px, 4vw, 48px);
    line-height: 1.3;
    font-weight: 800;
}

.service-detail-description {
    color: #64748b;
    font-size: 17px;
    line-height: 2;
    margin-bottom: 30px;
}


/* WhatsApp CTA */

.service-detail-whatsapp {
    width: 100%;
    min-height: 60px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    padding: 15px 25px;

    border-radius: 12px;

    background: #198754;
    color: #fff !important;

    font-size: 17px;
    font-weight: 800;

    text-decoration: none !important;

    transition: .3s ease;
}

.service-detail-whatsapp:hover {
    background: #146c43;
    transform: translateY(-2px);
    color: #fff !important;
}

.service-detail-whatsapp i {
    font-size: 24px;
}


/* Phone */

.service-detail-phone {
    margin-top: 12px;

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;

    min-height: 52px;

    border: 1px solid #dbe4ec;
    border-radius: 11px;

    color: #475569;
    text-decoration: none;

    font-size: 14px;

    transition: .3s ease;
}

.service-detail-phone:hover {
    border-color: #0b5ed7;
    color: #0b5ed7;
}

.service-detail-phone i {
    color: #0b5ed7;
}


/* Features */

.service-detail-features {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #e2e8f0;

    display: flex;
    flex-direction: column;
    gap: 20px;
}

.service-feature {
    display: flex;
    align-items: center;
    gap: 15px;
}

.service-feature-icon {
    width: 48px;
    height: 48px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: #eaf4ff;
    color: #0b5ed7;

    font-size: 21px;
}

.service-feature strong {
    display: block;
    margin-bottom: 3px;
    color: #12304a;
    font-size: 15px;
}

.service-feature span {
    display: block;
    color: #64748b;
    font-size: 13px;
}


/* Related Services */

.related-services {
    background: #f8fafc;
}

.related-services .section-heading {
    margin-bottom: 40px;
}

.service-card {
    overflow: hidden;
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(15, 23, 42, .05);
    transition: .3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 18px 40px rgba(15, 23, 42, .09);
}

.service-image {
    display: block;
    width: 100%;
    height: 230px;
    overflow: hidden;
    background: #eef4f8;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.05);
}

.service-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-placeholder i {
    font-size: 65px;
    color: #94a3b8;
}

.service-content {
    padding: 22px;
}

.service-content h3 {
    margin: 0 0 15px;
    font-size: 19px;
    line-height: 1.5;
}

.service-content h3 a {
    color: #12304a;
    text-decoration: none;
}

.service-details-link {
    display: inline-flex;
    align-items: center;
    gap: 7px;

    color: #0b5ed7;
    text-decoration: none;

    font-size: 14px;
    font-weight: 700;
}

.service-details-link:hover {
    color: #084298;
}

.service-details-link i {
    transition: transform .3s ease;
}

.service-details-link:hover i {
    transform: translateX(-4px);
}


/* Grid */

.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}


/* Responsive */

@media (max-width: 991px) {

    .service-detail-image {
        height: 450px;
    }

    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media (max-width: 575px) {

    .service-detail-hero {
        padding: 25px 0;
    }

    .service-detail-image {
        height: 320px;
        border-radius: 15px;
    }

    .service-detail-content h1 {
        font-size: 30px;
    }

    .service-detail-description {
        font-size: 15px;
    }

    .services-grid {
        grid-template-columns: 1fr;
    }

}

</style>

@endsection