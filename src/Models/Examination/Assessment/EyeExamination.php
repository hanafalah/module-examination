<?php

namespace Hanafalah\ModuleExamination\Models\Examination\Assessment;

use Hanafalah\ModuleExamination\Models\Examination\Assessment\Assessment;

class EyeExamination extends Assessment
{
    protected $table = 'assessments';

    public $specific = [
        'Visus',
        'Palpebra',
        'Konjungtiva',
        'Kornea',
        'COA',
        'Iris',
        'Pupil',
        'Lensa',
        'Vitreus',
        'Fundus',
        'TIO'
    ];

    public function getExams(mixed $default = null, ?array $vars = null): array
    {
        return parent::getExams(['od' => null, 'os' => null]);
    }
}
