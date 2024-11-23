<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NeighbourhoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "name" => sprintf("%s - %s", $this->name, $this->municipality->name),
            "municpality_id" => $this->municipality_id,
            "city_id" => $this->municipality->city->id
        ];
    }
}
