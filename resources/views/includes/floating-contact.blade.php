{{-- resources/views/includes/floating-contact.blade.php --}}

@php
    $phone = $company->phone ?? '';

    // تحويل الرقم لصيغة واتساب بدون + أو مسافات
    $whatsappNumber = preg_replace('/[^0-9]/', '', $phone);

    $whatsappMessage = urlencode(
        'السلام عليكم، أريد الاستفسار عن خدمة نقل عفش الكويت'
    );
@endphp

<div class="floating-contact" dir="ltr">

    {{-- WhatsApp --}}
    <a
        href="https://wa.me/{{ $whatsappNumber }}?text={{ $whatsappMessage }}"
        target="_blank"
        rel="noopener noreferrer"
        class="floating-contact-btn whatsapp-btn"
        aria-label="تواصل معنا عبر واتساب"
    >
        <i class="bi bi-whatsapp"></i>
    </a>

    {{-- Phone --}}
    <a
        href="tel:{{ $phone }}"
        class="floating-contact-btn phone-btn"
        aria-label="اتصل بنا"
    >
        <i class="bi bi-telephone-fill"></i>
    </a>

</div>

<style>
    .floating-contact {
        position: fixed;
        left: 20px;
        bottom: 20px;
        z-index: 9999;

        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .floating-contact-btn {
        width: 56px;
        height: 56px;
        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #fff;
        text-decoration: none;

        font-size: 25px;

        box-shadow: 0 6px 20px rgba(0, 0, 0, .18);

        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }

    .floating-contact-btn:hover {
        transform: translateY(-4px) scale(1.05);
        color: #fff;
        box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
    }

    .whatsapp-btn {
        background: #25D366;
    }

    .phone-btn {
        background: #0B5ED7;
    }

    @media (max-width: 576px) {

        .floating-contact {
            left: 15px;
            bottom: 15px;
            gap: 10px;
        }

        .floating-contact-btn {
            width: 52px;
            height: 52px;
            font-size: 23px;
        }
    }
</style>