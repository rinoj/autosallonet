<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;
use App\Vetura;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // SitemapGenerator::create(config('app.url'))
        // ->getSitemap()
        // ->add(Url::create('/veturat')->setPriority(0.5))
        // ->add(Url::create('/sallonet')->setPriority(0.5))
        // ->add(Url::create('/rentacar')->setPriority(0.5))
        // ->writeToFile(public_path('sitemap.xml'));

        $sitemap = SitemapGenerator::create(config('app.url'))
            ->getSitemap()
            ->add(Url::create('/veturat')->setPriority(0.5))
            ->add(Url::create('/sallonet')->setPriority(0.5))
            ->add(Url::create('/rentacar')->setPriority(0.5));

        Vetura::all()->each(function (Vetura $vetura) use ($sitemap) {
            $sitemap->add(Url::create("/vetura/{$vetura->slug}"));
        });


        $sitemap->writeToFile(public_path('sitemap.xml'));

    }
}