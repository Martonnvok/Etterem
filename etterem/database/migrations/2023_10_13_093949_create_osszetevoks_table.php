<?php

use App\Models\Osszetevok;
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
        Schema::create('osszetevoks', function (Blueprint $table) {    
            $table->id('osszetevokId'); 
            $table->string('elnevezes');
            $table->boolean('mittartalmaz')->default(0);
            $table->timestamps(); 

        }); 

     

        Osszetevok::create([ 
            'osszetevokId' => 1,  
            'elnevezes' => 'alma',
            'mittartalmaz' => 0,


        ]); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osszetevoks');
    }
};
