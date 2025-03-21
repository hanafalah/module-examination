<?php

namespace Hanafalah\ModuleExamination\Models;

use Hanafalah\ModuleExamination\Resources\ExaminationStuff\ViewExaminationStuff;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;

class ExaminationStuff extends BaseModel
{
    use HasProps;

    public $timestamps = false;
    protected $list = ['id', 'parent_id', 'name', 'flag', 'props'];

    public function toViewApi()
    {
        return new ViewExaminationStuff($this);
    }

    public function toShowApi()
    {
        return new ViewExaminationStuff($this);
    }

    //OVERIDING DEFAULT CHILDS EIGER
    public function childs()
    {
        return $this->hasMany(get_class($this), static::getParentId())->with('childs');
    }
}
