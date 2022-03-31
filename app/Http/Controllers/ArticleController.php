<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResourse;
use App\Http\Resources\CommentCollection;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;

class ArticleController extends Controller
{
    use JsonResponse;

//    /**
//     * @OA\Get(
//     *      path="/articles",
//     *      operationId="getArticleList",
//     *      tags={"Articles"},
//     *      summary="Get list of Articles",
//     *      description="Returns list of articles",
//     *      @OA\Response(
//     *          response=200,
//     *          description="Success",
//     *          @OA\JsonContent(
//     *
//     *       )
//     *       ),
//     *     )
//     */
    public function index()
    {
        $article = Article::descOrder()->get(); //articles in descending order
        return $this->onSuccess(200, "Success", new ArticleCollection($article));
    }

    /**
     * @OA\Get(
     *      path="/articles/1",
     *      operationId="showArticleDetails",
     *      tags={"Articles"},
     *      summary="Show Article",
     *      description="Show selected articles using Article Id",
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *
     *       )
     *       ),
     *     )
     */
    public function show(Article $article)
    {
        return $this->onSuccess(200, "Success", new ArticleResourse($article));
    }

    /**
     * @OA\Get(
     *      path="/articles/1/comment",
     *      operationId="ArticleComment",
     *      tags={"ArticlesComment"},
     *      summary="Show Article Comments",
     *      description="Show list of comments on Article",
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *
     *       )
     *       ),
     *     )
     */
    public function comment($id)
    {
        $article = Article::with('comments')->find($id);
        return $this->onSuccess(200, "Success", new CommentCollection($article->comments) );
    }

    /**
     * @OA\Get(
     *      path="/articles/1/like",
     *      operationId="ArticleLike",
     *      tags={"ArticlesComment"},
     *      summary="Increment Article Likes",
     *      description="Increment the numbers of Article Like",
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *
     *       )
     *       ),
     *     )
     */
    public function like(Article $article)
    {
        $article->increment('likes');
        return $this->onSuccess(200, "Success", new ArticleResourse($article));
    }

    /**
     * @OA\Get(
     *      path="/articles/1/View",
     *      operationId="ArticleView",
     *      tags={"ArticlesView"},
     *      summary="Increment Article Views",
     *      description="Increment the numbers of Article View",
     *         @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\JsonContent(
     *
     *       )
     *       ),
     *     )
     */
    public function view(Article $article)
    {
        $article->increment('views');
        return $this->onSuccess(200, "Success", new ArticleResourse($article));
    }


}
