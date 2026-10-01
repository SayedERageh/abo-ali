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
                'company_name_en' => 'Kuwait Furniture Moving',
                'company_name_ar' => 'نقل عفش الكويت',

                'email' => 'info@naqlfshkuwait.com',
                'phone' => '+96560656190',
                'whatsapp' => '+96560656190',

                'about_en' => <<<'TEXT'
Kuwait Furniture Moving provides professional furniture, household belongings, and moving services throughout Kuwait.

We specialize in moving furniture from houses, apartments, villas, offices, warehouses, and other locations. Our services include furniture dismantling, transportation, reassembly, packing, and arranging.

Our experienced workers can handle bedroom furniture, wardrobes, beds, cabinets, sofas, tables, office furniture, storage items, and household belongings with care.

We provide furniture moving from house to house, apartment to apartment, and from one location to another within Kuwait.

Our team also provides professional packing services to help protect furniture and household belongings during transportation.

If you are looking for furniture moving in Kuwait, furniture movers, moving workers, or a moving vehicle, our team is ready to help.

We also provide dismantling and installation services for bedrooms, wardrobes, beds, cabinets, and other furniture.

Managed by Abu Ali.
TEXT,

                'about_ar' => <<<'TEXT'
نقل عفش الكويت – إدارة أبو علي متخصصون في نقل العفش والأثاث والأغراض داخل الكويت، مع تقديم خدمات فك وتركيب وتغليف ونقل وترتيب الأثاث.

نقوم بنقل العفش من البيت إلى البيت، ومن منزل إلى منزل، ومن شقة إلى شقة، ونوفر خدمات نقل الأثاث داخل الكويت للبيوت والشقق والفلل والأدوار والمكاتب والمخازن.

تشمل خدماتنا نقل غرف النوم، فك وتركيب غرف النوم، نقل الكبتات والسرائر والطاولات والكنب وجميع قطع الأثاث والأغراض المنزلية.

كما لدينا فريق من العمال والنجارين المتخصصين في فك وتركيب العفش والأثاث، والتعامل مع قطع الأثاث الكبيرة والصغيرة بطريقة منظمة وآمنة.

نوفر كذلك خدمة خاصة لتغليف العفش والأثاث والأغراض قبل النقل للمساعدة في حمايتها أثناء التحميل والنقل والتنزيل.

إذا كنت تبحث عن نقل عفش الكويت أو نقل أثاث الكويت أو نقل أغراض الكويت، يمكنك التواصل معنا لطلب سيارة نقل عفش أو عمال نقل عفش حسب احتياجك.

نقدم خدمات نقل العفش داخل المنزل، ونقل قطع الأثاث من البيت، ونقل أثاث البيوت والشقق والفلل والمكاتب والمخازن.

إدارة أبو علي.
TEXT,

                'vision_en' => <<<'TEXT'
Our vision is to become a trusted name in furniture and household moving services in Kuwait by providing organized moving, professional dismantling and reassembly, careful packing, and reliable transportation.

We aim to make moving furniture and household belongings easier, safer, and more convenient for customers throughout Kuwait.
TEXT,

                'vision_ar' => <<<'TEXT'
رؤيتنا هي أن نكون من الأسماء الموثوقة في مجال نقل العفش والأثاث والأغراض داخل الكويت، من خلال تقديم خدمات منظمة تشمل الفك والتركيب والتغليف والنقل.

نسعى إلى جعل عملية نقل العفش من البيت أو الشقة أو الفيلا أو المكتب أكثر سهولة وتنظيمًا، مع الاهتمام بالتعامل الجيد مع الأثاث والأغراض أثناء جميع مراحل النقل.
TEXT,

                'mission_en' => <<<'TEXT'
Our mission is to provide reliable furniture moving and household belongings transportation services throughout Kuwait.

We are committed to providing professional workers, suitable transportation, careful furniture handling, dismantling and reassembly services, and packing solutions according to each customer's needs.

Our goal is to help customers move their furniture, household belongings, bedrooms, wardrobes, beds, office furniture, and storage items efficiently and with proper care.
TEXT,

                'mission_ar' => <<<'TEXT'
مهمتنا هي تقديم خدمات نقل عفش وأثاث وأغراض موثوقة داخل الكويت، مع توفير العمالة المناسبة وسيارات النقل وخدمات الفك والتركيب والتغليف.

نساعد العملاء في نقل عفش البيت والأثاث من منزل إلى منزل، ومن شقة إلى شقة، ومن بيت إلى بيت، بالإضافة إلى نقل أثاث الفلل والأدوار والمكاتب والمخازن.

نهتم بنقل غرف النوم والكبتات والسرائر والكنب والطاولات وجميع قطع الأثاث والأغراض المنزلية بطريقة منظمة.

كما نحرص على توفير خدمة تغليف مناسبة للأثاث والأغراض قبل النقل حسب طبيعة الطلب.
TEXT,

                'commitment_en' => <<<'TEXT'
We are committed to providing professional furniture and household moving services throughout Kuwait.

Our services include:

- Furniture Moving in Kuwait
- Household Belongings Moving
- House to House Furniture Moving
- Apartment to Apartment Moving
- Villa Furniture Moving
- Office Furniture Moving
- Warehouse Moving
- Bedroom Furniture Moving
- Wardrobe and Cabinet Moving
- Bed Moving
- Furniture Dismantling
- Furniture Assembly and Reassembly
- Bedroom Dismantling and Assembly
- Wardrobe Dismantling and Assembly
- Furniture Packing
- Household Belongings Packing
- Moving Workers
- Furniture Moving Car
- Furniture Moving Truck
- Carpenter for Furniture Dismantling and Assembly
- Moving Furniture Inside the House

We also provide furniture moving services for customers looking to move used furniture or individual furniture pieces.

If you need to move furniture, household belongings, a bedroom, wardrobe, bed, or other items, contact us to arrange the appropriate moving service.

Kuwait Furniture Moving - Managed by Abu Ali.
TEXT,

                'commitment_ar' => <<<'TEXT'
نحن ملتزمون بتقديم خدمات نقل العفش والأثاث والأغراض داخل الكويت باحترافية وتنظيم.

تشمل أهم خدماتنا:

- نقل عفش الكويت
- نقل أثاث الكويت
- نقل أغراض الكويت
- نقل العفش بالكويت
- نقل الأثاث بالكويت
- نقل أغراض البيت
- نقل عفش من بيت لبيت
- نقل أثاث من بيت لبيت
- نقل عفش من منزل لمنزل
- نقل أثاث من منزل لمنزل
- نقل عفش من شقة لشقة
- نقل أثاث من شقة لشقة
- نقل عفش داخل الكويت
- نقل أثاث داخل الكويت
- نقل عفش داخل المنزل
- نقل أثاث داخل المنزل
- نقل عفش داخل البيت
- نقل أثاث داخل البيت
- نقل غرف النوم
- فك وتركيب غرف نوم الكويت
- فك وتركيب عفش الكويت
- فك وتركيب أثاث الكويت
- فك وتركيب الكبتات
- نقل الكبتات
- نقل الكبتات بالكويت
- نقل السرير
- نقل الأثاث المستعمل
- نقل قطع الأثاث
- نقل قطع العفش
- نقل أثاث البيت
- نقل عفش البيت
- نقل أثاث شقة
- نقل عفش شقة
- نقل أثاث منزل
- نقل عفش منزل
- نقل أثاث فيلا
- نقل عفش فيلا
- نقل أثاث دور
- نقل عفش دور
- نقل المكاتب
- نقل المخازن
- نقل الخيام
- تغليف العفش
- تغليف الأثاث
- عمال نقل عفش الكويت
- عمال نقل أثاث الكويت
- نجار نقل عفش
- نجار فك وتركيب عفش
- سيارة نقل عفش
- سيارة نقل أثاث

إذا كنت تقول: أبي نقل عفش، ابي نقل عفش، أبي نقل أثاث، ابي نقل اثاث، أبي نقل أغراض، ابي نقل اغراض، أو تحتاج أحد ينقل العفش أو عمال نقل عفش، نوفر لك خدمة النقل المناسبة حسب احتياجك.

كما نوفر خدمات نقل عفش البيت، نقل أغراض البيت، نقل غرفة نوم، نقل كبت، نقل كبتات، نقل سرير، ونقل الأثاث المستعمل.

لدينا قسم خاص لتغليف العفش والأثاث والأغراض قبل النقل.

إدارة أبو علي – نقل عفش الكويت.
TEXT,

                'address_en' => 'Kuwait',
                'address_ar' => 'الكويت',
            ]
        );
    }
}