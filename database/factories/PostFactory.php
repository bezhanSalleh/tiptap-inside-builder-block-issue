<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => [
                "type" => "doc",
                "content" => [
                    [
                        "type" => "paragraph",
                        "attrs" => [
                            "class" => null,
                            "style" => null,
                            "textAlign" => "start"
                        ],
                        "content" => [
                            [
                                "type" => "text",
                                "text" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec venenatis vulputate lorem. Praesent nec nisl a purus blandit viverra. Curabitur "
                            ],
                            [
                                "type" => "text",
                                "marks" => [
                                    [
                                        "type" => "textStyle",
                                        "attrs" => [
                                            "class" => null,
                                            "style" => null,
                                            "color" => "#f00808"
                                        ]
                                    ],
                                    [
                                        "type" => "bold"
                                    ]
                                ],
                                "text" => "turpis"
                            ],
                            [
                                "type" => "text",
                                "text" => "."
                            ]
                        ]
                    ],
                    [
                        "type" => "blockquote",
                        "content" => [
                            [
                                "type" => "paragraph",
                                "attrs" => [
                                    "class" => null,
                                    "style" => null,
                                    "textAlign" => "start"
                                ],
                                "content" => [
                                    [
                                        "type" => "text",
                                        "text" => "Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Nunc sed turpis. Sed fringilla mauris sit amet nibh. Praesent nec nisl a purus blandit viverra."
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'blocks' => [
                [
                    "type" => "editor",
                    "data" => [
                        "content" => [
                            "type" => "doc",
                            "content" => [
                                [
                                    "type" => "tiptapBlock",
                                    "attrs" => [
                                        "type" => "titleBlock",
                                        "data" => [
                                            "title" => "Block Title",
                                            "color" => "Title Color",
                                            "side" => "Hero"
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
        ];
    }
}
