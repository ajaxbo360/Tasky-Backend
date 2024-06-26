<?php

use App\Enums\TaskStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->delete('cascade');
            $table->index('user_id');
            $table->index('status');
            $table->string('name');
            $table->enum('status', [TaskStatusEnum::New->value, TaskStatusEnum::InProgress->value, TaskStatusEnum::Completed->value])->default(TaskStatusEnum::New->value);
            $table->text('description')->nullable();
            $table->index('due_date');
            $table->date('due_date')->nullable()->default(null);;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
