<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\Facades\GraphQL;

class DeleteCategoryMutation extends Mutation
{

    protected $attributes = [
        'name' => 'deleteCategory',
        'description' => 'Delete a category'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args): bool
    {
        $category = Category::findOrFail($args['id']);
        return (bool)$category->delete();
    }
}
