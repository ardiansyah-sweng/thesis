<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostCreateRequest;

class BlogPostController extends Controller
{
    public function store(BlogPostCreateRequest $request)
    {
        $validated = $request->validated();
    }
}
