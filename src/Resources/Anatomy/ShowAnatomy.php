<?php

namespace Gii\ModuleExamination\Resources\Anatomy;

class ShowAnatomy extends ViewAnatomy
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray(\Illuminate\Http\Request $request) : array {
      $arr = [
      ];
      $arr = $this->mergeArray(parent::toArray($request),$arr);
      
      return $arr;
  }
}
