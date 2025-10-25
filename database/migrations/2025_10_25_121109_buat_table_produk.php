<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        schema::create('produk', function(blueprint $table){
            $table->id();
            $table->string('nama_produk',255);
            $table->string('harga',100);
            $table->string('stok',100);
            $table->string('supplier',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
