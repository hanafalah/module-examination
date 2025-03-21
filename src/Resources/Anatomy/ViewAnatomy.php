<?php

namespace Hanafalah\ModuleExamination\Resources\Anatomy;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewAnatomy extends ApiResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [
      'id'     => $this->id,
      'name'   => $this->name,
      'props'  => $this->getPropsData()
    ];

    return $arr;
  }
}
