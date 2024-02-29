<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('molhemoon_internships', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('experience_needed');
            $table->enum('career_level', ['Entry Level', 'Mid Level', 'Senior Level', 'Executive']);
            $table->enum('education_level', ['High School', 'Bachelor Degree', 'Master Degree', 'Ph.D.', 'Not Specified ']);
            $table->decimal('salary', 10, 2);
            $table->text('description');
            $table->text('requirements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('molhemoon_internships');
    }
};
