<?php

use App\Enums\CourseModality;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string("overview");
            $table->text('description');
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('instructors');
            $table->enum('modality', array_column(CourseModality::cases(), 'value'));
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
