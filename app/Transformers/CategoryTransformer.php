<?php

namespace App\Transformers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use League\Fractal\ParamBag;

class CategoryTransformer extends TransformerAbstract
{
    /**
     * Resources that can be included if requested.
     *
     * @var array
     */
    protected $availableIncludes = ['posts'];

    /**
     * Transform a collection.
     *
     * @return array
     */
    public function transformFields(Category $category)
    {
        return [
            'id'          => $category->id,
            'name'        => $category->name,
            'slug'        => $category->slug,
            'title'       => $category->title,
            'description' => $category->description,
            'created_at'  => $category->created_at ? $category->created_at->toDateTimeString() : null
        ];
    }

    /**
     * Includer posts
     *
     * @param  category   $category
     *
     * @return mixed
     */
    public function includePosts(Category $category, ParamBag $params)
    {
        $posts = $this->searchCollection($category, 'posts', $params);

        return $this->collection($posts, new PostTransformer());
    }
}
