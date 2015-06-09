<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_info', function(Blueprint $table)
		{
			$table->unsignedInteger('id');
            $table->string('email')->unique()->comment = '邮箱';      //如果不是必填,转移到用户信息表
            $table->tinyInteger('gender',FALSE,TRUE)->comment = '性别';
            $table->string('avatar')->comment = '头像';
            $table->tinyInteger('gender',FALSE,TRUE)->comment = '';
            $table->unsignedInteger('create_at');   //创建时间
            $table->unsignedInteger('update_at');   //更新时间
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_info');
	}

}
