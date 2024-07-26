<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id('color_id')->autoIncrement();
            $table->string('color_gamma');
        });

        DB::table('colors')->insert([
            ['color_gamma' => 'Белая'],
            ['color_gamma' => 'Розовая'],
            ['color_gamma' => 'Красная'],
            ['color_gamma' => 'Желтая'],
            ['color_gamma' => 'Оранжевая'],
            ['color_gamma' => 'Бордовая'],
            ['color_gamma' => 'Синяя'],
            ['color_gamma' => 'Фиолетовая'],
            ['color_gamma' => 'Разноцветная']
        ]);

        Schema::create('flowers', function (Blueprint $table) {
            $table->id('flowers_id')->autoIncrement();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
            $table->string('type_flowers')->nullable();
            $table->string('package')->nullable();
            $table->string('photo');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('color_id')->on('colors');
        });

        DB::table('flowers')->insert([
           [
               'name' => 'Букет из разноцветных роз',
               'price' => 23000,
               'type_flowers' => 'Розы',
               'package' => 'Корзина',
               'photo' => '',
               'color_id' => 9
           ],
            [
                'name' => 'Букет из красных тюльпанов',
                'price' => 15000,
                'type_flowers' => 'Тюльпаны',
                'package' => 'Букет',
                'photo' => '',
                'color_id' => 3
            ],
            [
                'name' => 'Букет из желтых лилий',
                'price' => 2500,
                'type_flowers' => 'Лилии',
                'package' => 'Коробка',
                'photo' => '',
                'color_id' => 4
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flowers');
        Schema::dropIfExists('colors');
    }
};
