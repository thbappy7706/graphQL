<?php

namespace App\GraphQL\Types;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQlType;

class CategoryType extends GraphQlType
{
    protected $attributes = [
        'name' => 'Category',
        'description' => 'Collection of categories',
        'model' => Category::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of category'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of category'
            ],
            'quest' => [
                'type' => Type::listOf(GraphQL::type('Quest')),
                'description' => 'List of quests'
            ]
        ];
    }
}
