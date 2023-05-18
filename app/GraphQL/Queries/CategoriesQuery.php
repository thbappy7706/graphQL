<?php

namespace App\GraphQL\Queries;

use App\Models\Quest;
use GraphQL\Type\Definition\Type;
use Illuminate\Database\Eloquent\Collection;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class CategoriesQuery extends Query
{
    protected $attributes = [
        'name' => 'categories',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Quest'));
    }

    public function resolve($root, $args): Collection
    {
        return Quest::all();
    }
}
