<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 255);
			$table->string('email', 254);
			$table->string('phone_number', 15);
			$table->text('motivation')->nullable();
			$table->string('linkedin_url', 255);
			$table->string('github_url', 255);
			$table->string('english_level', 12);
			$table->integer('wage_cents');
            $table->string('resume_path', 255);
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
