<?php

namespace App\Http\Resources;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user_id = $this->id;
        $products = User::find($user_id)->products;
        $products = json_decode($products->toJson(JSON_PRETTY_PRINT));
        foreach($products as $product)
        {
            unset($product->created_at);
            unset($product->updated_at);
            unset($product->deleted_at);
            $category = Category::find($product->category_id);
            $category = json_decode($category->toJson(JSON_PRETTY_PRINT));
            unset($category->created_at);
            unset($category->updated_at);
            unset($category->deleted_at);
            $product->category = $category;
        }
            
        return [
            'name' => $this->name,
            'email' => $this->email,
            'produtos' => $products
        ];
    }
}
