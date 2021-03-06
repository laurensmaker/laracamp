<?php

use App\Models\camps;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampbenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campbenefits', function (Blueprint $table) {
            $table->id();
            //cara relasi yg pertama
            // $table->bigInteger('camp_id')->unsigned();            
            // $table->unsignedBigInteger('camp_id');

            //cara ke 2
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            //cara relasai yang pertama
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campbenefits');
    }
}
