<?php

use Hanafalah\ModuleExamination\Models\ExaminationStuff;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use Hanafalah\LaravelSupport\Concerns\NowYouSeeMe;

    private $__table;

    public function __construct()
    {
        $this->__table = app(config('database.models.ExaminationStuff', ExaminationStuff::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table_name = $this->__table->getTable();
        if (!$this->isTableExists()) {
            Schema::create($table_name, function (Blueprint $table) {
                $table->id();
                $table->string("flag", 100);
                $table->string("name");
                $table->json('props')->nullable();

                $table->index(["flag"], "ist_flag");
            });

            Schema::table($table_name, function (Blueprint $table) {
                $table->foreignIdFor($this->__table, 'parent_id')
                    ->nullable()->after($this->__table->getKeyName())
                    ->index()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->__table->getTable());
    }
};
