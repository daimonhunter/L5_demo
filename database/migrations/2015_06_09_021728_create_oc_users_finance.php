<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcUsersFinance extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('oc_users_finance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('uid')->comment = '用户UID';          //用户UID
            $table->decimal('balance', 10, 6)->comment = '交易金额';       //交易金额
            $table->unsignedInteger('create_at');    //创建时间
            $table->unsignedInteger('update_at');    //更新时间
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
