<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function storeTicket(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:5000'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
        ]);

        $tickets = new Ticket;
        $tickets->title = $data['title'];
        $tickets->description = $data['description'];
        $tickets->category_id = $data['category_id'];
        $tickets->save();

        return response()->json([
            'data' => [
                'id' => $tickets->id,
                'title' => $tickets->title,
                'description' => $tickets->description,
                'category_id' => $tickets->category_id,
                'created_at' => $tickets->created_at,
                'updated_at' => $tickets->updated_at,
            ],
        ], 201);
    }
}
