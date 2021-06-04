<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::table('comments', function (Blueprint $table) {
      //     $table-> foreign('post_id', 'commentpost')
      //     ->references('id')
      //     ->on('posts');
      // });
      // Schema::table('post_user', function (Blueprint $table) {
      //     $table-> foreign('post_id', 'postuser')
      //     ->references('id')
      //     ->on('posts');
      //     $table-> foreign('user_id', 'userpost')
      //     ->references('id')
      //     ->on('users');
      // });
      Schema::table('employees', function (Blueprint $table){
        $table-> foreign('location_id','employeelocation')
        ->references('id')
        ->on('locations');
      });
      Schema::table('employee_task', function (Blueprint $table) {
          $table-> foreign('employee_id', 'employeetask')
          ->references('id')
          ->on('employees');
          $table-> foreign('task_id', 'taskemployee')
          ->references('id')
          ->on('tasks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      // Schema::table('comments', function (Blueprint $table) {
      //     $table-> dropForeign('commentpost');
      // });
      // Schema::table('post_user', function (Blueprint $table) {
      //     $table-> dropForeign('postuser');
      //     $table-> dropForeign('userpost');
      // });
      Schema::disableForeignKeyConstraints();
      Schema::table('employees', function (Blueprint $table) {
          $table-> dropForeign('employeelocation');
      });
      Schema::table('employee_task', function (Blueprint $table) {
          $table-> dropForeign('employeetask');
          $table-> dropForeign('taskemployee');
      });
    }
}
