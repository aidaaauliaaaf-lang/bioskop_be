<?php

namespace App\Http\Requests\Ticket;

use Illuminate\Foundation\Http\FormRequest;

class TicketStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "theater_id" => ["required", "exists:theaters,id"],
            "film_id" => ["required", "exists:films,id"],
            "list_bangku" => ["required", "string"],
            "tanggal_nonton" => ["required", "string"],
            "jam_nonton" => ["required", "string"],
        ];
    }
}
