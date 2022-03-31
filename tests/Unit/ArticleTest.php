<?php

namespace Tests\Unit;

use App\Models\Article;
use Database\Seeders\ArticleSeeder;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_article()
    {
         $response = $this->get('/api/articles');
         $response->assertSuccessful();

    }

    public function test_check_article_by_id()
    {
        $article = Article::find(1);
        $response = $this->get('/api/articles/1');
        $response->assertSuccessful();
    }

    public function test_check_article_comment()
    {
        $response = $this->get('/api/articles/1/comment');
        $response->assertSuccessful();
    }

    public function test_check_article_like()
    {
        $response = $this->get('/api/articles/1/like');
        $response->assertSuccessful();
    }
    public function test_check_article_view()
    {
        $response = $this->get('/api/articles/1/view');
        $response->assertSuccessful();
    }
}
