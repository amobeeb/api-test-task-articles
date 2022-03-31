<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //save records into pivot
        for($i=1; $i<=Article::count(); $i++){
            DB::table('article_tag')->insert([
                'article_id'=>$i,
                'tag_id'=> mt_rand(1, 10)
            ]);
        }
    }
}
