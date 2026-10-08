<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlide::query()->delete();

        HeroSlide::create([
            'title_ar' => 'أبو علي للتكييفات في الكويت',
            'title_en' => 'Abu Ali Air Conditioning in Kuwait',

            'subtitle_ar' => 'تركيب وصيانة وتصليح المكيفات في الكويت',
            'subtitle_en' => 'AC Installation, Maintenance & Repair in Kuwait',

            'description_ar' => 'أبو علي للتكييفات يقدم خدمات تركيب وصيانة وتصليح وتنظيف المكيفات في جميع مناطق الكويت، مع توفير خدمات تعبئة الفريون وفحص الأعطال وخدمة مكيفات السبليت والمكيفات الجدارية والتكييف المركزي.',

            'description_en' => 'Abu Ali Air Conditioning provides professional AC installation, maintenance, repair, cleaning, refrigerant charging, and troubleshooting services throughout Kuwait for split, wall-mounted, and central air conditioning systems.',

            'image' => 'hero-slides/slide-1.jpg',

            'button_text_ar' => 'اطلب فني تكييف الآن',
            'button_text_en' => 'Request an AC Technician',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'اتصل بنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'صيانة وتصليح جميع أنواع المكيفات',
            'title_en' => 'AC Maintenance & Repair Services',

            'subtitle_ar' => 'فني تكييف متخصص في الكويت',
            'subtitle_en' => 'Professional AC Technician in Kuwait',

            'description_ar' => 'نوفر خدمات صيانة وتصليح المكيفات ومعالجة مشاكل ضعف التبريد وتسريب المياه والأعطال المختلفة، مع خدمة مكيفات السبليت والمكيفات الجدارية والتكييف المركزي للمنازل والفلل والمكاتب والمحلات.',

            'description_en' => 'We provide AC maintenance and repair services for cooling problems, water leaks, and various air conditioning faults. Our services cover split, wall-mounted, and central AC systems for homes, villas, offices, and shops.',

            'image' => 'hero-slides/slide-2.jpg',

            'button_text_ar' => 'اطلب صيانة مكيف',
            'button_text_en' => 'Request AC Maintenance',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'خدمات التكييف',
            'secondary_button_text_en' => 'AC Services',
            'secondary_button_url' => '/services',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'تركيب مكيفات جديدة وتعبئة فريون',
            'title_en' => 'New AC Installation & Refrigerant Charging',

            'subtitle_ar' => 'خدمة تكييف متكاملة في جميع مناطق الكويت',
            'subtitle_en' => 'Complete AC Services Across Kuwait',

            'description_ar' => 'نقدم تركيب المكيفات الجديدة وتعبئة فريون وتنظيف المكيفات وفلاتر التكييف وفحص الأعطال، مع خدمة سريعة للمنازل والشقق والفلل والمكاتب والمحلات في مختلف مناطق الكويت.',

            'description_en' => 'We provide new AC installation, refrigerant charging, AC cleaning, filter cleaning, and troubleshooting services for homes, apartments, villas, offices, and shops throughout Kuwait.',

            'image' => 'hero-slides/slide-3.jpg',

            'button_text_ar' => 'اطلب خدمة التكييف',
            'button_text_en' => 'Request AC Service',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'تواصل معنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}