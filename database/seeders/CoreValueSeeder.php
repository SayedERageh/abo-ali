<?php

namespace Database\Seeders;

use App\Models\CoreValue;
use Illuminate\Database\Seeder;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        $values = [
            [
                'title_ar' => 'صيانة مكيفات باحترافية',
                'title_en' => 'Professional AC Maintenance',
                'description_ar' => 'نقدم خدمات صيانة المكيفات في الكويت مع فحص الجهاز وتشخيص الأعطال والعمل على تحسين كفاءة التبريد.',
                'description_en' => 'We provide professional air conditioning maintenance services throughout Kuwait, including inspection, troubleshooting, and performance improvement.',
                'icon' => 'bi bi-tools',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تصليح جميع أعطال المكيفات',
                'title_en' => 'AC Repair Services',
                'description_ar' => 'نوفر خدمات تصليح المكيفات والتعامل مع مشاكل ضعف التبريد وتسريب المياه والأعطال المختلفة في أجهزة التكييف.',
                'description_en' => 'We provide AC repair services for cooling problems, water leaks, and various air conditioning faults.',
                'icon' => 'bi bi-wrench-adjustable',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تركيب مكيفات الكويت',
                'title_en' => 'AC Installation',
                'description_ar' => 'نقدم خدمة تركيب المكيفات الجديدة، بما في ذلك مكيفات السبليت والمكيفات الجدارية، مع الفحص والتجربة بعد التركيب.',
                'description_en' => 'We provide new air conditioner installation services, including split and wall-mounted AC units, with testing after installation.',
                'icon' => 'bi bi-snow',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تعبئة فريون المكيفات',
                'title_en' => 'AC Refrigerant Charging',
                'description_ar' => 'نوفر خدمة فحص وتعبئة فريون المكيفات للمساعدة في معالجة مشاكل ضعف التبريد وتحسين أداء جهاز التكييف.',
                'description_en' => 'We provide AC refrigerant inspection and charging services to help resolve cooling problems and improve AC performance.',
                'icon' => 'bi bi-droplet-half',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تنظيف وصيانة المكيفات',
                'title_en' => 'AC Cleaning & Service',
                'description_ar' => 'نقدم خدمات تنظيف المكيفات والفلاتر وإزالة الأتربة والشوائب للمساعدة في الحفاظ على كفاءة التكييف وجودة الهواء.',
                'description_en' => 'We provide AC cleaning and filter cleaning services to help maintain air conditioning efficiency and improve air quality.',
                'icon' => 'bi bi-stars',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'خدمة تكييف في جميع مناطق الكويت',
                'title_en' => 'AC Services Across Kuwait',
                'description_ar' => 'نقدم خدمات تركيب وصيانة وتصليح المكيفات في مختلف مناطق الكويت، بما فيها حولي والسالمية والفروانية والجهراء والأحمدي ومبارك الكبير.',
                'description_en' => 'We provide AC installation, maintenance, and repair services across Kuwait, including Hawally, Salmiya, Farwaniya, Jahra, Ahmadi, and Mubarak Al-Kabeer.',
                'icon' => 'bi bi-geo-alt',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($values as $value) {
            CoreValue::updateOrCreate(
                ['title_en' => $value['title_en']],
                $value
            );
        }
    }
}