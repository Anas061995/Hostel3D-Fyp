<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('laravel-permission.table_names');
        $foreignKeys = config('laravel-permission.foreign_keys');

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        Schema::create($tableNames['user_has_permissions'], function (Blueprint $table) use ($tableNames, $foreignKeys) {
            $table->integer($foreignKeys['users'])->unsigned();
            $table->integer('permission_id')->unsigned();

            $table->foreign($foreignKeys['users'])
                ->references('id')
                ->on($tableNames['users'])
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary([$foreignKeys['users'], 'permission_id']);
        });

        Schema::create($tableNames['user_has_roles'], function (Blueprint $table) use ($tableNames, $foreignKeys) {
            $table->integer($foreignKeys['users'])->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign($foreignKeys['users'])
                ->references('id')
                ->on($tableNames['users'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary([$foreignKeys['users'], 'role_id']);
        });

        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->integer('role_id')->unsigned();
            $table->integer('permission_id')->unsigned();

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['role_id', 'permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('laravel-permission.table_names');

        Schema::dropIfExists($tableNames['role_has_permissions']);
        Schema::dropIfExists($tableNames['user_has_roles']);
        Schema::dropIfExists($tableNames['user_has_permissions']);
        Schema::dropIfExists($tableNames['roles']);
        Schema::dropIfExists($tableNames['permissions']);
    }
}
