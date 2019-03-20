<?php

namespace App\Console\Commands;

use App\Question;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto-generate a sitemap.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = SitemapGenerator::create('https://howlongittakes.com/')->getSitemap();


        foreach (Question::where('approved', '1')->get() as $question) {
            $sitemap->add(action('QuestionsController@show', ['question' => $question->slug]));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
