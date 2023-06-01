<?php

namespace App\Http\Resources;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $category = Category::find($this->category_id);
        $user = User::find($this->user_id);

        return [
            'id' => $this->id,
            'nome' => $this->name,
            'categoria' => [
                'id' => $this->category_id,
                'nome' => $category->name
            ],
            'usuario' => [
                'id' => $this->user_id,
                'nome' => $user->name
            ]
        ];
    }
}
