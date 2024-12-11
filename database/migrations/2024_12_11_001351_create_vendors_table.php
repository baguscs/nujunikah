<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Vendor;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori', [Vendor::CATEGORI_VANUE, Vendor::CATEGORI_CATERING, Vendor::CATEGORI_PHOTO_AND_VIDEO, Vendor::CATEGORI_DECORATION, Vendor::CATEGORI_MUA, Vendor::CATEGORI_ENTERTAINMENT]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
