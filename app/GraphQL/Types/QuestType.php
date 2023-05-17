<?php

namespace App\GraphQL\Types;

use App\Models\Quest;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQlType;

class QuestType extends GraphQlType
{
    protected $attributes = [
        'name' => 'Quest',
        'description' => 'Collection of quests with their respective category',
        'model' => Quest::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of quest'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of quest'
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Description of quest'
            ],
            'reward' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Reward of quest'
            ],
            'category' => [
                'type' => GraphQL::type('Category'),
                'description' => 'The category of the quest'
            ],
        ];
    }
}
