<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Team extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'depot' => $this->depot,
            'name' => $this->name,
            'salesmen' => $this->salesmen,
            'created_at' => $this->created_at,
            'created_by' => $this->creator,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updater,
            'deleted_at' => $this->deleted_at,
            'deleted_by' => $this->deleter,
        ];
    }
}
