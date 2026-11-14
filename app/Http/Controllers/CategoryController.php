<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
        ]);

        $category = new Category;
        $category->name = $data['name'];
        $category->save();

        return response()->json([
            'data' => [
                'id' => $category->id,
                'name' => $category->name,
                'created_at' => $category->created_at,
                'updated_at' => $category->updated_at,
            ],

        ], 201);
    }

    public function index(): array
    {
        return ['data' => Category::orderBy('id')->get()];
    }

    public function find(int $id): JsonResponse
    {
        $category = Category::find($id);
        if ($category === null) {
            abort(404, 'Categoria não encontrada');
        }
        // $data = ['data' => Category::find($id)];
        // $data === null ? abort(404, 'Categoria não encontrada') : $data;

        return response()->json(['data' => $category]);
    }
}
