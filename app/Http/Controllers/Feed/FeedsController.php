<?php

namespace App\Http\Controllers\Feed;

use App\Http\Controllers\Controller;
use App\Services\Feed\FeedBuilder;

class FeedsController extends Controller
{
    private $builder;

    public function __construct(FeedBuilder $builder)
    {
        $this->builder = $builder;
    }

    
    public function getFeed($type='rss')
    {
        if ($type === "rss" || $type === "atom") {
            return $this->builder->render($type);
        }
    }
}