<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'post_content' => $this->post_content,
            'id' => $this->id,
            'date_create'=>$this->created_at->diffForHumans(),
            'date_update'=>$this->updated_at->diffForHumans(),
        ];
    }
}
