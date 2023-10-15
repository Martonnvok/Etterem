<?php

use App\Models\Recept;
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
       
    
            Schema::create('recepts', function (Blueprint $table) {    
                $table->foreignId('osszetevokId')->references('osszetevokId')->on('osszetevoks');
                $table->foreignId('etelId')->references('etelId')->on('etels');
                $table->timestamps(); 
    
            }); 
    
         
    
            Recept::create([ 
                'etelId' =>1, 
                'osszetevokId' => 1,  
    
            ]); 
    
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
