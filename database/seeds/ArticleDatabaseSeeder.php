<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ArticleDatabaseSeeder extends Seeder
{
    public function run()
    {
        $data = file_get_contents(resource_path('json/articles.json'));
        $data = json_decode($data, true);
        $results = $data['results'];

        foreach ($results as $result){
            $article = [
                'title' => $result['title'],
                'abstract' => $result['abstract'],
                'url' => $result['url'],
                'writer' => $result['byline'],
                'created_at' => $result['created_date'],
                'updated_at' => $result['updated_date'],
                'date_ms' => strtotime($result['created_date']),
                'tags' => implode(',', $result['des_facet']),
                'image' => $result['multimedia'][0]['url']
            ];
            \App\Article::updateOrCreate($article);
        }

    }
}
