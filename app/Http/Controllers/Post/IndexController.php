<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\StoreResource;
use App\Models\Post;
use Illuminate\Contracts\Container\BindingResolutionException;

class IndexController extends BaseController
{
    /**
     * @throws BindingResolutionException
     */
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $perPage= $data['per_page']??10;
        $pageNumber=$data['page_number']??2;
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate($perPage,['*'],"page",$pageNumber)->withQueryString();
        return StoreResource::collection($posts);
//        return view('post.index', compact('posts'));
    }
}
