<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('match_goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('player_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('player_name', 255);
            $table->smallInteger('number');
            $table->char('position', 4);
            $table->smallInteger('minute');
            $table->boolean('is_penalty');
            $table->boolean('penalty_shoots');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_goals');
    }
}
