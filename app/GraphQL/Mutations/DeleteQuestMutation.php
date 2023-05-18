<?php

namespace App\GraphQL\Mutations;

use App\Models\Quest;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\Facades\GraphQL;

class DeleteQuestMutation extends Mutation
{

    protected $attributes = [
        'name' => 'deleteQuest',
        'description' => 'Delete a quest'
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
        $quest = Quest::findOrFail($args['id']);
        return (bool)$quest->delete();
    }
}
