<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Category;
use App\Models\Accessory;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $sitemap = Sitemap::create();
    
        // Static pages
        $staticPages = [
            'about-us',
            'contact-us',
            'projects',
            'products',
            'accessories',
            'blog',
        ];
    
        foreach (['en', 'ar'] as $lang) {
            foreach ($staticPages as $page) {
                $sitemap->add(Url::create("/$lang/$page")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8));
            }
        }
    
        // Helper function to add dynamic items
        $addDynamicItems = function($items, $langField, $slugField) use ($sitemap) {
            foreach ($items as $item) {
                $slug = $item->{$slugField};
                if ($slug) {
                    $sitemap->add(Url::create("/$item->lang/$slug")
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.8));
                }
            }
        };
    
        // Add dynamic blog posts
        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            foreach (['en' => 'slug', 'ar' => 'slug_ar'] as $lang => $slugField) {
                $sitemap->add(Url::create("/$lang/blog/details/{$blog->$slugField}")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8));
            }
        }
    
        // Add dynamic projects
        $projects = Project::all();
        foreach ($projects as $project) {
            foreach (['en' => 'slug', 'ar' => 'slug_ar'] as $lang => $slugField) {
                $sitemap->add(Url::create("/$lang/projects/{$project->$slugField}")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8));
            }
        }
    
        // Add dynamic categories
        $categories = Category::all();
        foreach ($categories as $category) {
            foreach (['en' => 'slug', 'ar' => 'slug_ar'] as $lang => $slugField) {
                $sitemap->add(Url::create("/$lang/products/{$category->$slugField}")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8));
            }
        }
    
        // Add dynamic accessories
        $accessories = Accessory::all();
        foreach ($accessories as $accessory) {
            foreach (['en' => 'slug', 'ar' => 'slug_ar'] as $lang => $slugField) {
                $sitemap->add(Url::create("/$lang/accessories/{$accessory->$slugField}")
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8));
            }
        }
    
        // Return the sitemap response
        return $sitemap->toResponse(request());
    }
    
    
}
