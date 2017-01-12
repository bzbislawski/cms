<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Article;

class ArticleTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_fetches_published_articles()
    {
        factory(Article::class, 2)->create();
        factory(Article::class)->create(['published_at' => '2030-10-10']);

        $publishedArticles = Article::published()->get();
        $notPublishedArticles = Article::where('published_at', '>', date('Y-m-d H:i:s'))->get();

        $this->assertCount(2, $publishedArticles);
        $this->assertCount(1, $notPublishedArticles);
    }

}
