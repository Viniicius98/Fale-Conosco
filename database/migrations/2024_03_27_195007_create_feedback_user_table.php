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
            $table->string('motivo_contato');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('feedback_user');
    }
};
