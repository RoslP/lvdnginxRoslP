<?php

namespace App\Services\Post;


use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data)
    {
        try {
            DB::beginTransaction();

            $tags = $data['tags'];
            $category = $data['category'];
            unset($data['tags'], $data['category']);
            $tagIds = $this->getTagIds($tags);
            $data['category_id'] = $this->getCategoryId($category);
            $post = Post::create($data);
            $post->tags()->attach($tagIds);

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $post;
    }

    public function update($post, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
    }

    private function getTagIds($tags): array
    {
        $tagIds = [];
        foreach ($tags as $tag) {

            $tag = !isset($tag['id']) ? Tag::firstOrCreate($tag) : Tag::find($tag['id']);
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }

    private function getCategoryId($category): int
    {
        $category = !isset($category['id']) ? Category::firstOrCreate($category) : Category::find($category['id']);
        return $category->id;
    }
}
