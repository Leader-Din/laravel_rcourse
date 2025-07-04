<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
        "id"=>$this->id,
        "name"=>$this->name,
        "email"=>$this->email,
       'phone' =>new ListPhoneResource($this->phone),
        'role'=>ListRoleResource::collection($this->roles)
       ];
    }
}
