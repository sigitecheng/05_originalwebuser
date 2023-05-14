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
        Schema::create('invoice_pesanans', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id', 1, 8);
            $table->foreignId('jenisbarang_id', 1, 5);
            $table->decimal('hargasatuan_id', 8, 2);
            $table->integer('jumlahpesanan');
            $table->decimal('totalharga', 12, 2)->unsigned();
            $table->text('alamatkirim', 1000);
            $table->string('no_whatsapp', 12)->regex('/^\+?[0-9]+$/');
            $table->string('image')->nullable();
            $table->foreignId('statuspekerjaan_id', 1, 5);
            $table->foreignId('statusbayar_id', 1, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_pesanans');
    }
};
