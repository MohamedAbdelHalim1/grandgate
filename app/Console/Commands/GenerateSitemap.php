<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class GenerateSitemap extends Command
{
    // Command name
    protected $signature = 'sitemap:generate';

    // Command description
    protected $description = 'Generate a sitemap for the website';

    // Command logic
    public function handle()
    {
        // Define the base URL
        $baseUrl = URL::to('/');

        // Routes to include in the sitemap
        $routes = [
            $baseUrl . '/',
            $baseUrl . '/{lang}/about-us',
            $baseUrl . '/{lang}/blog',
            $baseUrl . '/{lang}/blog/details/{id}',
            $baseUrl . '/{lang}/accessories',
            $baseUrl . '/{lang}/accessories/{slug}',
            $baseUrl . '/{lang}/products',
            $baseUrl . '/{lang}/projects',
            $baseUrl . '/{lang}/projects/{slug}',
            $baseUrl . '/{lang}/products/{slug}',
            $baseUrl . '/{lang}/contact-us',
        ];

        // Create sitemap content
        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($routes as $route) {
            $sitemapContent .= '<url>';
            $sitemapContent .= '<loc>' . $route . '</loc>';
            $sitemapContent .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
            $sitemapContent .= '<changefreq>daily</changefreq>';
            $sitemapContent .= '<priority>0.8</priority>';
            $sitemapContent .= '</url>';
        }

        $sitemapContent .= '</urlset>';

        // Save sitemap to public folder
        File::put(public_path('sitemap.xml'), $sitemapContent);

        $this->info('Sitemap generated successfully!');
    }
}
