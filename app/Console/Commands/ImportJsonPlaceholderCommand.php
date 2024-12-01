<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Models\Post;
use Illuminate\Console\Command;

class ImportJsonPlaceholderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-json-placeholder-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run test Guzzle request';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new ImportDataClient();
        $response = $client->client->request('GET', 'https://jsonplaceholder.typicode.com/posts', ['verify' => false]);
        $data = json_decode($response->getBody()->getContents());
        foreach ($data as $post) {
            Post::firstOrCreate([
                'title'=>$post->title],
                [
                'title'=>$post->title,
                'post_content'=>$post->body,
                ]
            );
        }
    }
}
