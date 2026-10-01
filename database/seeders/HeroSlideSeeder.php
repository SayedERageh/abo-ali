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
            'title_ar' => 'نقل عفش الكويت باحترافية وسرعة',
            'title_en' => 'Professional Furniture Moving in Kuwait',

            'subtitle_ar' => 'نقل عفش وأثاث وأغراض داخل الكويت',
            'subtitle_en' => 'Furniture, Household & Belongings Moving in Kuwait',

            'description_ar' => 'نقدم خدمات نقل عفش الكويت ونقل أثاث الكويت من بيت لبيت ومن منزل لمنزل ومن شقة لشقة، مع فك وتركيب العفش وتغليف الأثاث وتوفير العمال وسيارات النقل حسب احتياجك.',

            'description_en' => 'We provide professional furniture, household belongings, and moving services throughout Kuwait, including house-to-house and apartment-to-apartment moving, dismantling, assembly, packing, workers, and moving vehicles.',

            'image' => 'hero-slides/slide-1.jpg',

            'button_text_ar' => 'اطلب نقل عفش الآن',
            'button_text_en' => 'Request Moving Service',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'اتصل بنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'فك وتركيب ونقل غرف النوم والكبتات',
            'title_en' => 'Bedroom & Wardrobe Dismantling, Moving & Assembly',

            'subtitle_ar' => 'فك وتركيب عفش وأثاث الكويت',
            'subtitle_en' => 'Furniture Dismantling & Assembly in Kuwait',

            'description_ar' => 'لدينا عمال ونجارون لفك وتركيب غرف النوم والكبتات والسرائر وجميع قطع الأثاث، مع نقل العفش داخل الكويت بطريقة منظمة من البيت أو الشقة أو الفيلا.',

            'description_en' => 'Our experienced workers and carpenters dismantle, move, and assemble bedrooms, wardrobes, beds, and other furniture from houses, apartments, and villas throughout Kuwait.',

            'image' => 'hero-slides/slide-2.jpg',

            'button_text_ar' => 'اطلب عمال نقل عفش',
            'button_text_en' => 'Request Moving Workers',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'خدمات نقل العفش',
            'secondary_button_text_en' => 'Moving Services',
            'secondary_button_url' => '/services',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'تغليف العفش ونقل الأغراض داخل الكويت',
            'title_en' => 'Furniture Packing & Household Moving in Kuwait',

            'subtitle_ar' => 'قسم خاص لتغليف العفش والأثاث',
            'subtitle_en' => 'Dedicated Furniture Packing Service',

            'description_ar' => 'لدينا قسم خاص لتغليف العفش والأثاث والأغراض قبل النقل، ونوفر خدمة نقل أغراض البيت ونقل الأثاث المستعمل ونقل المكاتب والمخازن والخيام.',

            'description_en' => 'We provide dedicated furniture and belongings packing services before transportation, including household items, used furniture, offices, warehouses, and tents.',

            'image' => 'hero-slides/slide-3.jpg',

            'button_text_ar' => 'اطلب خدمة النقل',
            'button_text_en' => 'Request Moving Service',
            'button_url' => '/contact',

            'secondary_button_text_ar' => 'تواصل معنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}