<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'key' => 'about',
                'title_ar' => 'من نحن',
                'title_en' => 'ABOUT US',

                'subtitle_ar' => 'نقل عفش وأثاث وأغراض داخل الكويت',
                'subtitle_en' => 'Furniture & Household Moving in Kuwait',

                'description_ar' => 'نقل عفش الكويت – إدارة أبو علي متخصصون في نقل العفش والأثاث والأغراض داخل الكويت. نقدم خدمات نقل العفش من بيت لبيت ومن منزل لمنزل ومن شقة لشقة، مع فك وتركيب الأثاث وتغليف العفش وتوفير العمال وسيارات النقل حسب احتياج العميل.',

                'description_en' => 'Kuwait Furniture Moving, managed by Abu Ali, provides furniture, household belongings, and moving services throughout Kuwait. We offer house-to-house and apartment-to-apartment moving, furniture dismantling and assembly, packing, workers, and moving vehicles.',

                'button_text_ar' => 'اعرف المزيد',
                'button_text_en' => 'Learn More',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'خدمات نقل العفش',
                'title_en' => 'OUR MOVING SERVICES',

                'subtitle_ar' => 'نقل وفك وتركيب وتغليف الأثاث',
                'subtitle_en' => 'Moving, Dismantling, Assembly & Packing',

                'description_ar' => 'نقدم خدمات نقل عفش الكويت ونقل أثاث الكويت ونقل أغراض الكويت، بالإضافة إلى فك وتركيب غرف النوم والكبتات والسرائر، وتغليف العفش، ونقل أثاث البيوت والشقق والفلل والمكاتب والمخازن.',

                'description_en' => 'We provide furniture and household moving services in Kuwait, including dismantling and assembly of bedrooms, wardrobes, and beds, furniture packing, and moving homes, apartments, villas, offices, and warehouses.',

                'button_text_ar' => 'جميع خدماتنا',
                'button_text_en' => 'All Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'لماذا نقل عفش الكويت؟',
                'title_en' => 'WHY KUWAIT FURNITURE MOVING?',

                'subtitle_ar' => 'تنظيم واهتمام بالعفش من بداية النقل حتى الوصول',
                'subtitle_en' => 'Careful Handling From Start to Finish',

                'description_ar' => 'نوفر عمال ونجارين متخصصين في فك وتركيب العفش، مع خدمة تغليف الأثاث والأغراض وتوفير سيارات نقل مناسبة، والاهتمام بعملية التحميل والنقل والتنزيل.',

                'description_en' => 'We provide experienced moving workers and carpenters for furniture dismantling and assembly, along with packing and suitable transportation solutions with careful handling throughout the move.',
            ],

            [
                'key' => 'projects',
                'title_ar' => 'ما الذي نقوم بنقله؟',
                'title_en' => 'WHAT WE MOVE',

                'subtitle_ar' => 'نقل مختلف أنواع العفش والأثاث والأغراض',
                'subtitle_en' => 'Different Types of Furniture & Belongings',

                'description_ar' => 'نقوم بنقل غرف النوم والكبتات والسرائر والكنب والطاولات والأثاث المستعمل وأثاث المكاتب والمخازن والأغراض المنزلية، كما نقدم خدمات نقل العفش داخل البيت والفيلا والشقة.',

                'description_en' => 'We move bedrooms, wardrobes, beds, sofas, tables, used furniture, office furniture, warehouse items, and household belongings from houses, villas, and apartments.',

                'button_text_ar' => 'اكتشف خدماتنا',
                'button_text_en' => 'Explore Our Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'التزامنا',
                'title_en' => 'OUR COMMITMENT',

                'subtitle_ar' => 'خدمة نقل منظمة تبدأ من أول اتصال',
                'subtitle_en' => 'Organized Moving Service From the First Call',

                'description_ar' => 'نلتزم بتوفير خدمة نقل عفش وأثاث منظمة، بداية من التواصل وتحديد احتياج العميل، مرورًا بالفك والتغليف والتحميل والنقل، وحتى التنزيل والتركيب عند الحاجة.',

                'description_en' => 'We are committed to providing an organized moving service, from understanding the customer needs through dismantling, packing, loading, transportation, unloading, and assembly when required.',
            ],

            [
                'key' => 'cta',
                'title_ar' => 'أبي نقل عفش بالكويت؟',
                'title_en' => 'NEED FURNITURE MOVING IN KUWAIT?',

                'subtitle_ar' => 'نقل عفش وأثاث وأغراض داخل الكويت',
                'subtitle_en' => 'Furniture & Household Moving Across Kuwait',

                'description_ar' => 'أبي نقل عفش، أبي نقل أثاث، أبي نقل أغراض البيت أو أبي سيارة نقل عفش؟ تواصل معنا الآن لترتيب خدمة النقل المناسبة، سواء كنت تحتاج نقل بيت أو شقة أو غرفة نوم أو كبت أو أثاث مستعمل.',

                'description_en' => 'Need furniture, household, or belongings moving in Kuwait? Contact us to arrange the right moving service for your house, apartment, bedroom, wardrobe, or used furniture.',

                'button_text_ar' => 'اطلب نقل عفش الآن',
                'button_text_en' => 'Request Moving Service',
                'button_url' => '/contact',
            ],
        ];

        foreach ($sections as $section) {
            HomeSection::updateOrCreate(
                ['key' => $section['key']],
                $section
            );
        }
    }
}