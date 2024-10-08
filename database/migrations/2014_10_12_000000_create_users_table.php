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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('name')->comment('ユーザー名（漢字）');
            $table->string('kana')->comment('ユーザー名（フリガナ）');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('メールアドレス認証の完了・未完了');
            $table->string('password')->comment('パスワード');
            $table->string('postal_code')->comment('郵便番号');
            $table->string('address')->comment('住所');
            $table->string('phone_number')->comment('電話番号');
            $table->date('birthday')->nullable()->comment('生年月日');
            $table->string('occupation')->nullable()->comment('職業');
            $table->rememberToken()->comment('ログイン状態を保持するためのトークン（秘密の文字列）');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
