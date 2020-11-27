<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolworks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->ondelete('cascade');
            $table->integer('items')->unsigned();
            $table->timestamp('deadline')->nullable();
            $table->string('type', 100)->nullable()->default('assignment');
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
        Schema::dropIfExists('schoolworks');
    }
}