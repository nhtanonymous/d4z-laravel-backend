<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PostTagResource;
use App\Http\Resources\PostCategoryResource;
use App\Models\PostCategory;
use App\Models\Category;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => [
                'id' => $this->user->id,
                'first_name' => $this->user->first_name,
                'last_name' => $this->user->last_name,
                'user_name' => $this->user->user_name,
                'email' => $this->user->email,
                'avatar' => $this->user->avatar,
                'role' => $this->user->role,
            ],
            'parent_id' => $this->parent_id,
            'title' => $this->title,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'image' => $this->image,
            'content' => $this->content,
            'published' => $this->published,
            'published_at' => $this->published_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category' => $this->category,
            'tag' => $this->tag,
        ];
    }
}
