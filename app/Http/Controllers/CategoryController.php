<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
            abort(404, 'Category not found');
        }
        // $data = ['data' => Category::find($id)];
        // $data === null ? abort(404, 'Categoria não encontrada') : $data;

        return response()->json(['data' => $category]);
    }

    public function updateCategory(int $id, Request $request): JsonResponse
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
        ]);

        $category->name = $data['name'];

        $category->save();

        return response()->json(['data' => $category]);
    }

    public function deleteCategory(int $id): Response
    {
        $category = Category::find($id);
        if ($category === null) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        if ($category->tickets()->exists()) {
            return response()->json(['message' => 'This category cannot be deleted because it has linked tickets.'], 409);
        }

        $category->delete();

        return response('', 204);
    }
}
