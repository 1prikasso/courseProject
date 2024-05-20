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
            $table->id();
            $table->string('name');
            $table->string('middle_name');
            $table->string('family_name');
            $table->smallInteger("cabinet");
            $table->string("phone")->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('speciality');
            $table->enum('educational_degree', 
                ["Незакінчена вища освіта", "Бакалаврат",
                "Спеціалітет", "Інтернатура за фахом", "Клінічна ординатура", "Магістратура",
                "Аспірантура", "Докторантура"]);
            $table->enum('qualification_category', ["перша", "друга", "вища"]);
            $table->enum('gender', ["male", "female"]);
            $table->smallInteger("expMonth");
            $table->enum('post', 
                ["Генеральний директор", "Директор", "Медичний директор", "Головний лікар", 
                 "Начальник", "Лікар-спеціаліст", "Реєстратура"]);
            $table->boolean('deputy');
            $table->rememberToken();
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
