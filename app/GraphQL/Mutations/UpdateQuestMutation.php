<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\Facades\GraphQL;

class UpdateQuestMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createCategory',
        'description' => 'Create a category'
    ];

    public function type(): Type
    {
        return GraphQL::type('Category');
    }
}
