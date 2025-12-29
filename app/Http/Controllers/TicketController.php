<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ticket\TicketStoreRequest;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //

    public function store(TicketStoreRequest $request  )
    {
        //
        $validated = $request->validated();
        $pelanggan = Pelanggan::firstWhere("user_id", auth()->id);
        $ticket = Ticket::create([
            "theater_id" => $validated["theater_id"],
            "film_id" => $validated["film_id"],
            "list_bangku" => $validated["list_bangku"],
            "tanggal_nonton" => $validated["tanggal_nonton"],
            "jam_nonton" => $validated["jam_nonton"],
            "pelanggan_id" => $pelanggan->id,
        ]);

        Pesanan::create([
            "ticket_id" => $ticket->id,
            "no_invoice" => Pesanan::generateInvoiceNumber(),
            "status" => "pending",
            "jumlah_tiket" => count(explode(",", $validated["list_bangku"])),
            "harga_tiket" => count(explode(",", $validated["list_bangku"])) * $ticket->film->harga,
        ]);

        return response()->json($validated);
    }
}
