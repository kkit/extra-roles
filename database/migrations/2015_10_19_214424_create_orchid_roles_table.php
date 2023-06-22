<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table): void {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->jsonb('permissions')->nullable();
            $table->timestamps();
        });

        DB::table('roles')->insert([
            [
                'slug' => 'administrator',
                'name' => 'Администратор',
                'permissions' => '{"platform.systems.attachment":"1","platform.systems.users":"1","platform.systems.roles":"1","platform.index":"1"}',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()'),
            ],
            [
                'slug' => 'operator',
                'name' => 'Оператор',
                'permissions' => '{"platform.systems.attachment":"0","platform.systems.users":"0","platform.systems.roles":"0","platform.index":"1"}',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()'),
            ],
            [
                'slug' => 'moderator',
                'name' => 'Модератор',
                'permissions' => '{"platform.systems.attachment":"0","platform.systems.users":"0","platform.systems.roles":"0","platform.index":"1"}',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()'),
            ],
            [
                'slug' => 'designer',
                'name' => 'Дизайнер',
                'permissions' => '{"platform.systems.attachment":"0","platform.systems.users":"0","platform.systems.roles":"0","platform.index":"1"}',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()'),
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
