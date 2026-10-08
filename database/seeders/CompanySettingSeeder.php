<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name_en' => 'Abu Ali Air Conditioning',
                'company_name_ar' => 'أبو علي للتكييفات',

                'email' => 'info@abo-ali.site',
                'phone' => '+96551492176',
                'whatsapp' => '+96551492176',

                'about_en' => <<<'TEXT'
Abu Ali Air Conditioning provides professional air conditioning installation, maintenance, repair, cleaning, and servicing throughout Kuwait.

We specialize in servicing split air conditioners, central air conditioning systems, wall-mounted units, and various residential and commercial air conditioning systems.

Our services include air conditioner installation, AC repair, preventive maintenance, AC cleaning, filter cleaning, refrigerant gas charging, troubleshooting, and replacement of faulty AC parts.

We provide air conditioning services for homes, apartments, villas, offices, shops, warehouses, and commercial properties throughout Kuwait.

Our experienced technicians work to diagnose air conditioning problems and provide suitable repair and maintenance solutions according to the condition of each unit.

We also provide AC installation services for new units and can help customers with proper installation, testing, and operation.

If you are looking for an air conditioning technician in Kuwait, AC repair, AC maintenance, air conditioner installation, AC cleaning, or refrigerant gas charging, Abu Ali Air Conditioning is ready to help.

Our service covers different areas of Kuwait, including Kuwait City, Hawally, Salmiya, Farwaniya, Jahra, Ahmadi, Mubarak Al-Kabeer, and surrounding areas.

Managed by Abu Ali.
TEXT,

                'about_ar' => <<<'TEXT'
أبو علي للتكييفات متخصصون في تركيب وصيانة وتصليح وتنظيف المكيفات في جميع مناطق الكويت.

نقدم خدمات التكييف للمنازل والشقق والفلل والمكاتب والمحلات والمخازن والمنشآت التجارية، مع الاهتمام بفحص المكيف ومعرفة سبب العطل وتقديم الحل المناسب.

تشمل خدماتنا صيانة المكيفات، تصليح المكيفات، تركيب المكيفات، تنظيف المكيفات، تنظيف الفلاتر، تعبئة فريون، فحص المكيفات، ومعالجة مشاكل التبريد والتسريب والأعطال المختلفة.

نتعامل مع مكيفات السبليت والمكيفات الجدارية وأنظمة التكييف المركزي، ونوفر خدمات الصيانة والتركيب حسب نوع المكيف وحالة المكان.

كما نوفر خدمة تركيب مكيفات جديدة مع الفحص والتجربة والتأكد من عمل المكيف بصورة صحيحة.

إذا كنت تبحث عن فني تكييف في الكويت أو تحتاج إلى تصليح مكيف أو صيانة مكيف أو تنظيف مكيف أو تعبئة فريون، يمكنك التواصل مع أبو علي للتكييفات.

نقدم خدماتنا في مختلف مناطق الكويت، ومنها مدينة الكويت وحولي والسالمية والفروانية والجهراء والأحمدي ومبارك الكبير والمناطق المحيطة بها.

إدارة أبو علي.
TEXT,

                'vision_en' => <<<'TEXT'
Our vision is to become a trusted name in air conditioning services in Kuwait by providing reliable installation, maintenance, repair, cleaning, and servicing solutions.

We aim to make air conditioning maintenance easier and more convenient for customers by providing professional technicians, fast service, proper diagnosis, and suitable solutions for residential and commercial air conditioning systems throughout Kuwait.
TEXT,

                'vision_ar' => <<<'TEXT'
رؤيتنا هي أن نكون من الأسماء الموثوقة في مجال التكييفات في الكويت من خلال تقديم خدمات تركيب وصيانة وتصليح وتنظيف المكيفات بطريقة احترافية ومنظمة.

نسعى إلى توفير خدمة سهلة وسريعة للعملاء مع الاهتمام بفحص المكيف وتشخيص الأعطال وتقديم الحل المناسب، سواء للمنازل أو الشقق أو الفلل أو المكاتب والمحلات والمنشآت التجارية.

هدفنا هو مساعدة العملاء في الحفاظ على كفاءة المكيف وتحسين أداء التبريد وتقليل مشاكل وأعطال أجهزة التكييف.
TEXT,

                'mission_en' => <<<'TEXT'
Our mission is to provide reliable air conditioning installation, maintenance, repair, cleaning, and servicing throughout Kuwait.

We are committed to providing professional technicians, proper AC inspection, accurate troubleshooting, suitable repair solutions, refrigerant charging, cleaning, and installation services according to each customer's needs.

Our goal is to help customers maintain comfortable indoor temperatures and keep their air conditioning systems operating efficiently.

We provide services for split AC units, wall-mounted air conditioners, central air conditioning systems, homes, apartments, villas, offices, shops, warehouses, and commercial properties.
TEXT,

                'mission_ar' => <<<'TEXT'
مهمتنا هي تقديم خدمات تركيب وصيانة وتصليح وتنظيف المكيفات في جميع مناطق الكويت.

نحرص على توفير فنيين متخصصين لفحص المكيف وتشخيص الأعطال وتقديم الحلول المناسبة، بالإضافة إلى خدمات تعبئة الفريون وتنظيف المكيفات وصيانة الوحدات وتركيب المكيفات الجديدة.

نساعد العملاء في الحفاظ على كفاءة أجهزة التكييف وتحسين مستوى التبريد والتعامل مع الأعطال والمشاكل المختلفة.

نقدم خدماتنا للمنازل والشقق والفلل والمكاتب والمحلات والمخازن والمنشآت التجارية، ونتعامل مع مكيفات السبليت والمكيفات الجدارية وأنظمة التكييف المركزي.
TEXT,

                'commitment_en' => <<<'TEXT'
We are committed to providing professional air conditioning services throughout Kuwait.

Our services include:

- Air Conditioning Repair in Kuwait
- AC Maintenance in Kuwait
- Air Conditioner Installation
- Split AC Installation
- Central AC Services
- AC Cleaning
- Air Conditioner Cleaning
- AC Filter Cleaning
- Refrigerant Gas Charging
- AC Gas Refill
- AC Troubleshooting
- AC Inspection
- AC Preventive Maintenance
- AC Cooling Problems
- AC Water Leakage Repair
- AC Electrical Fault Diagnosis
- Air Conditioner Service
- Residential AC Services
- Villa AC Services
- Apartment AC Services
- Office AC Services
- Shop AC Services
- Commercial AC Services
- Central Air Conditioning Maintenance
- Split Air Conditioner Maintenance
- AC Unit Replacement
- New AC Installation
- Air Conditioning Technician
- AC Repair Technician

Our technicians provide air conditioning services in Kuwait City, Hawally, Salmiya, Farwaniya, Jahra, Ahmadi, Mubarak Al-Kabeer, and surrounding areas.

If your air conditioner is not cooling properly, leaking water, making unusual sounds, or needs maintenance, contact Abu Ali Air Conditioning for the appropriate service.

Abu Ali Air Conditioning - Kuwait.
TEXT,

                'commitment_ar' => <<<'TEXT'
نحن ملتزمون بتقديم خدمات التكييف والمكيفات داخل الكويت باحترافية وتنظيم.

تشمل أهم خدماتنا:

- صيانة تكييف الكويت
- صيانة مكيفات الكويت
- تصليح مكيفات الكويت
- تصليح تكييف الكويت
- تركيب مكيفات الكويت
- تركيب تكييف الكويت
- تركيب مكيفات سبليت
- تركيب مكيفات جديدة
- صيانة مكيفات سبليت
- صيانة التكييف المركزي
- تصليح التكييف المركزي
- صيانة مكيفات مركزي
- تنظيف المكيفات
- تنظيف مكيفات الكويت
- تنظيف فلاتر المكيفات
- تنظيف التكييف
- تعبئة فريون المكيف
- تعبئة فريون الكويت
- شحن فريون مكيفات
- فحص المكيفات
- فحص التكييف
- فني تكييف الكويت
- فني مكيفات الكويت
- فني تصليح مكيفات
- فني صيانة مكيفات
- تصليح مكيف لا يبرد
- إصلاح ضعف تبريد المكيف
- تصليح تسريب ماء المكيف
- صيانة المكيفات المنزلية
- صيانة مكيفات الشقق
- صيانة مكيفات الفلل
- صيانة مكيفات المكاتب
- صيانة مكيفات المحلات
- صيانة مكيفات الشركات
- خدمة تكييف للمنازل
- خدمة تكييف للفلل
- خدمة تكييف للمكاتب
- خدمة تكييف للمحلات

إذا كنت تقول: أبي فني تكييف، أبي فني مكيفات، أبي تصليح مكيف، أبي صيانة مكيف، أبي تركيب مكيف، أو تحتاج فني متخصص في المكيفات، يمكنك التواصل مع أبو علي للتكييفات.

نقدم خدمات تركيب وصيانة وتصليح وتنظيف المكيفات، بالإضافة إلى تعبئة الفريون وفحص أعطال التكييف.

نتعامل مع مكيفات السبليت والمكيفات الجدارية وأنظمة التكييف المركزي.

نقدم خدمات التكييف في مدينة الكويت وحولي والسالمية والفروانية والجهراء والأحمدي ومبارك الكبير والمناطق المحيطة.

إذا كان المكيف لا يبرد، أو التبريد ضعيف، أو المكيف يسرب ماء، أو يحتاج إلى تنظيف أو تعبئة فريون، يمكن التواصل معنا لطلب الخدمة المناسبة.

أبو علي للتكييفات – الكويت.
TEXT,

                'address_en' => 'Kuwait',
                'address_ar' => 'الكويت',
            ]
        );
    }
}