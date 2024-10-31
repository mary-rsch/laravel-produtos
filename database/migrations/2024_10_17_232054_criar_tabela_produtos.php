<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table){
            $table->id();
            $table->string('nome')->default('');
            $table->string('sku')->default('');
            $table->string('unidade_medida')->default('');
            $table->decimal('valor', 8, 2)->default(0);
            $table->integer('quantidade_estoque')->default(0);
            $table->enum('categoria', ['-', 'Eletrônicos', 'Roupas', 'Alimentos', 'Móveis', 'Beleza']);
            $table->timestamps();
            $table->softDeletes();
        }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
