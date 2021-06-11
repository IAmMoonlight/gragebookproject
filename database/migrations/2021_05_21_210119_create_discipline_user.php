<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplineUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Discipline::class);
            $table->foreignIdFor(\App\Models\User::class);
            $table->string('control_form')->default(\App\Models\User::FORM_CREDIT);
            $table->boolean('has_course_work')->default(false);
			$table->jsonb('attestations');
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
        Schema::dropIfExists('discipline_user');
    }
}
