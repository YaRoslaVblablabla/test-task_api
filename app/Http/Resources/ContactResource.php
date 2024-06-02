<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "FIO" => $this->FIO,
            "company" => $this->company,
            "phone" => $this->phone,
            "email" => $this->email,
            "birthDate" => $this->birthDate,
            "img" => $this->img,
        ]; 
    }
}
