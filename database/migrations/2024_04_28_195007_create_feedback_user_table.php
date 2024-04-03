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
        Schema::create('feedback_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('email_contato');
            $table->string('telefone')->nullable();
            $table->text('mensagem');
            $table->unsignedBigInteger('motivo_contato');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('motivo_contato')->references('id')->on('motivos_contatos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feedback_user',function (Blueprint $table) {
            $table->dropForeign('feedback_user_user_id_foreign');
        });
        Schema::table('feedback_user',function (Blueprint $table) {
            $table->dropForeign('feedback_user_motivo_contato_foreign');
        });
        Schema::dropIfExists('feedback_user');
    }
};
