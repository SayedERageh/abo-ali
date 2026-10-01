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
                'title_ar' => 'نقل عفش باحترافية',
                'title_en' => 'Professional Furniture Moving',
                'description_ar' => 'نقدم خدمات نقل العفش والأثاث والأغراض داخل الكويت من خلال عمالة مدربة على التعامل مع مختلف أنواع الأثاث.',
                'description_en' => 'We provide professional furniture, household belongings, and moving services throughout Kuwait with experienced moving workers.',
                'icon' => 'bi bi-truck',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title_ar' => 'فك وتركيب العفش',
                'title_en' => 'Dismantling & Assembly',
                'description_ar' => 'نوفر خدمات فك وتركيب العفش والأثاث وغرف النوم والكبتات والسرائر قبل النقل وبعد الوصول.',
                'description_en' => 'We provide furniture dismantling and reassembly services, including bedrooms, wardrobes, beds, and other furniture.',
                'icon' => 'bi bi-tools',
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title_ar' => 'تغليف العفش',
                'title_en' => 'Professional Packing',
                'description_ar' => 'لدينا قسم خاص لتغليف العفش والأثاث والأغراض قبل النقل للمساعدة في الحفاظ عليها أثناء التحميل والنقل والتنزيل.',
                'description_en' => 'Our dedicated packing service helps protect furniture and household belongings during loading, transportation, and unloading.',
                'icon' => 'bi bi-box-seam',
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل داخل الكويت',
                'title_en' => 'Moving Across Kuwait',
                'description_ar' => 'نقدم خدمة نقل عفش وأثاث وأغراض داخل الكويت، من بيت لبيت ومن منزل لمنزل ومن شقة لشقة.',
                'description_en' => 'We provide furniture and household moving services throughout Kuwait, including house-to-house and apartment-to-apartment moves.',
                'icon' => 'bi bi-geo-alt',
                'sort_order' => 4,
                'is_active' => true,
            ],

            [
                'title_ar' => 'عمال ونجارين متخصصون',
                'title_en' => 'Experienced Moving Team',
                'description_ar' => 'فريق من العمال والنجارين للمساعدة في فك ونقل وتركيب غرف النوم والكبتات وجميع قطع الأثاث.',
                'description_en' => 'Our team includes experienced moving workers and carpenters for dismantling, moving, and assembling bedrooms, wardrobes, and furniture.',
                'icon' => 'bi bi-people',
                'sort_order' => 5,
                'is_active' => true,
            ],

            [
                'title_ar' => 'نقل مختلف أنواع العفش',
                'title_en' => 'All Types of Furniture',
                'description_ar' => 'نقوم بنقل غرف النوم والكبتات والسرائر والكنب والطاولات وأثاث المكاتب والمخازن والأغراض المنزلية.',
                'description_en' => 'We move bedrooms, wardrobes, beds, sofas, tables, office furniture, warehouse items, and household belongings.',
                'icon' => 'bi bi-house-door',
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