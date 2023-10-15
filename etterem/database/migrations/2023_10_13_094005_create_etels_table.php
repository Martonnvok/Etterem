<?php

use App\Models\Etel;
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
        Schema::create('etels', function (Blueprint $table) {
            $table->id('etelId');
            $table->string('nev');
            $table->string('egyeb');
            $table->timestamps();
        });

        Etel::create([ 
            'etelId' => 1,  
            'nev' => 'alma',
            'egyeb' => 'asdfgh'


        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etels');
    }
};
