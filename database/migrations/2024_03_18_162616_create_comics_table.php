<?php

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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->text('descrizione');
            $table->string('thumb');
            $table->decimal('prezzo', 8, 2); 
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table){
            $table->dropColumn([
                'titolo',
                'descrizione',
                'thumb',
                'prezzo',
                'series',
                'sale_date',
                'tipo'
            ]);
        });
    }
};
