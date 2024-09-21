<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoMetaSeeder extends Seeder
{
    public function run()
    {
        $seoMetaData = [
            ['page' => 'about', 'title' => 'About Us', 'description' => 'Learn more about us.'],
            ['page' => 'aboutAr', 'title' => 'عن الشركة', 'description' => 'تعلم المزيد عنا.'],
            ['page' => 'accessories_details', 'title' => 'Accessory Details', 'description' => 'Details about our accessories.'],
            ['page' => 'accessories_detailsAr', 'title' => 'تفاصيل الإكسسوارات', 'description' => 'تفاصيل حول إكسسواراتنا.'],
            ['page' => 'accessories', 'title' => 'Accessories', 'description' => 'Browse our accessories.'],
            ['page' => 'accessoriesAr', 'title' => 'الإكسسوارات', 'description' => 'تصفح إكسسواراتنا.'],
            ['page' => 'blog-details', 'title' => 'Blog Details', 'description' => 'Read our blog details.'],
            ['page' => 'blog-detailsAr', 'title' => 'تفاصيل المدونة', 'description' => 'اقرأ تفاصيل مدونتنا.'],
            ['page' => 'blog', 'title' => 'Blog', 'description' => 'Check out our latest blog posts.'],
            ['page' => 'blogAr', 'title' => 'مدونة', 'description' => 'تحقق من أحدث مشاركات مدونتنا.'],
            ['page' => 'contact', 'title' => 'Contact Us', 'description' => 'Get in touch with us.'],
            ['page' => 'contactAr', 'title' => 'اتصل بنا', 'description' => 'اتصل بنا.'],
            ['page' => 'index', 'title' => 'Home', 'description' => 'Welcome to our website.'],
            ['page' => 'indexAr', 'title' => 'الرئيسية', 'description' => 'مرحبا بكم في موقعنا.'],
            ['page' => 'product-details', 'title' => 'Product Details', 'description' => 'Details about our products.'],
            ['page' => 'product-detailsAr', 'title' => 'تفاصيل المنتج', 'description' => 'تفاصيل حول منتجاتنا.'],
            ['page' => 'project-details', 'title' => 'Project Details', 'description' => 'Details about our projects.'],
            ['page' => 'project-detailsAr', 'title' => 'تفاصيل المشروع', 'description' => 'تفاصيل حول مشاريعنا.'],
            ['page' => 'projects', 'title' => 'Projects', 'description' => 'Browse our projects.'],
            ['page' => 'projectsAr', 'title' => 'المشاريع', 'description' => 'تصفح مشاريعنا.'],
        ];

        DB::table('seo_meta')->insert($seoMetaData);
    }
}
