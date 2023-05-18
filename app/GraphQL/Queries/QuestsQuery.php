<?php

namespace App\GraphQL\Queries;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Illuminate\Database\Eloquent\Collection;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class QuestsQuery extends Query
{
    protected $attributes = [
        'name' => 'quests',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Category'));
    }

    public function resolve($root, $args): Collection
    {
        return Category::all();
    }
}
