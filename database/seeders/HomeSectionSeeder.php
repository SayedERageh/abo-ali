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

                'subtitle_ar' => 'أبو علي للتكييفات في الكويت',
                'subtitle_en' => 'Abu Ali Air Conditioning in Kuwait',

                'description_ar' => 'أبو علي للتكييفات متخصصون في خدمات تركيب وصيانة وتصليح وتنظيف المكيفات في الكويت. نقدم خدماتنا للمنازل والشقق والفلل والمكاتب والمنشآت، مع خبرة في التعامل مع مكيفات السبليت والمكيفات المركزية وتوفير الحلول المناسبة حسب حالة كل جهاز.',

                'description_en' => 'Abu Ali Air Conditioning provides professional air conditioning installation, maintenance, repair, cleaning, and refrigerant services in Kuwait. We serve homes, apartments, villas, offices, and businesses, with experience in split and central air conditioning systems.',

                'button_text_ar' => 'اعرف المزيد',
                'button_text_en' => 'Learn More',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'خدمات التكييف',
                'title_en' => 'OUR AC SERVICES',

                'subtitle_ar' => 'تركيب وصيانة وتصليح وتنظيف المكيفات',
                'subtitle_en' => 'AC Installation, Maintenance, Repair & Cleaning',

                'description_ar' => 'نقدم مجموعة متكاملة من خدمات التكييف في الكويت تشمل تركيب المكيفات السبليت والمركزية، صيانة وإصلاح الأعطال، تنظيف المكيفات، تعبئة وفحص الفريون، ومعالجة مشاكل ضعف التبريد وتسريب المياه والأعطال المختلفة.',

                'description_en' => 'We provide complete air conditioning services in Kuwait, including split and central AC installation, maintenance and repair, AC cleaning, refrigerant checking and charging, weak cooling solutions, water leakage repair, and troubleshooting of different AC problems.',

                'button_text_ar' => 'جميع خدماتنا',
                'button_text_en' => 'All Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'لماذا أبو علي للتكييفات؟',
                'title_en' => 'WHY ABU ALI AC?',

                'subtitle_ar' => 'خدمة تكييف تهتم بالتشخيص وجودة التنفيذ',
                'subtitle_en' => 'Professional Diagnosis & Quality Service',

                'description_ar' => 'نهتم بفحص المشكلة وتحديد سبب العطل قبل بدء العمل، مع توفير خدمات الصيانة والتصليح والتنظيف والتركيب حسب احتياج العميل. هدفنا تقديم خدمة منظمة وسريعة والحفاظ على كفاءة المكيف لأطول فترة ممكنة.',

                'description_en' => 'We focus on inspecting the AC system and identifying the cause of the problem before starting the work. Our services include maintenance, repair, cleaning, and installation according to each customer’s needs, with a focus on efficient and reliable service.',

            ],

            [
                'key' => 'projects',
                'title_ar' => 'ماذا نخدم؟',
                'title_en' => 'WHAT WE SERVICE',

                'subtitle_ar' => 'مكيفات سبليت ومكيفات مركزية للمنازل والمنشآت',
                'subtitle_en' => 'Split & Central AC Systems',

                'description_ar' => 'نخدم مختلف أنواع المكيفات في الكويت، بما في ذلك مكيفات السبليت والمكيفات المركزية. نقدم خدمات التركيب والصيانة والتنظيف والتصليح وفحص وتعبئة الفريون للمنازل والشقق والفلل والمكاتب والمحلات والمنشآت.',

                'description_en' => 'We service different types of air conditioning systems in Kuwait, including split and central AC units. Our services cover installation, maintenance, cleaning, repair, and refrigerant inspection and charging for homes, apartments, villas, offices, shops, and businesses.',

                'button_text_ar' => 'اكتشف خدماتنا',
                'button_text_en' => 'Explore Our Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'خدمة في مناطق الكويت',
                'title_en' => 'SERVICE ACROSS KUWAIT',

                'subtitle_ar' => 'نخدم العملاء في مختلف مناطق الكويت',
                'subtitle_en' => 'Serving Customers Across Kuwait',

                'description_ar' => 'نوفر خدمات التكييف للعملاء في مختلف مناطق الكويت، بما في ذلك حولي والسالمية والفروانية وخيطان والجهراء والفحيحيل ومناطق أخرى. يتم تحديد نوع الخدمة المطلوبة حسب موقع العميل وحالة المكيف.',

                'description_en' => 'We provide air conditioning services across Kuwait, including Hawally, Salmiya, Farwaniya, Khaitan, Jahra, Fahaheel, and other areas. The required service is determined according to the customer’s location and AC condition.',

            ],

            [
                'key' => 'cta',
                'title_ar' => 'تحتاج فني تكييف في الكويت؟',
                'title_en' => 'NEED AN AC TECHNICIAN IN KUWAIT?',

                'subtitle_ar' => 'تركيب وصيانة وتصليح وتنظيف المكيفات',
                'subtitle_en' => 'AC Installation, Maintenance, Repair & Cleaning',

                'description_ar' => 'إذا كنت تحتاج تركيب مكيف جديد، صيانة أو تصليح مكيف، تنظيف مكيف سبليت أو مركزي، أو فحص وتعبئة الفريون، تواصل مع أبو علي للتكييفات على الرقم +965 5149 2176 لترتيب الخدمة المناسبة.',

                'description_en' => 'Need a new AC installation, maintenance, repair, cleaning, or refrigerant service? Contact Abu Ali Air Conditioning at +965 5149 2176 to arrange the right service for your needs.',

                'button_text_ar' => 'اتصل بنا الآن',
                'button_text_en' => 'Contact Us Now',
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