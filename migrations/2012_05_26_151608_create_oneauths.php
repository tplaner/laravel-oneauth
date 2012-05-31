<?php

class OneAuth_Create_OneAuths {
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oneauths', function ($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('provider', 50);
			$table->string('uid', 255);
			$table->string('access_token', 255)->nullable();
			$table->string('refresh_token', 255)->nullable();
			$table->integer('expires')->defaults(0)->nullable();

			$table->timestamps();
			$table->index('access_token');
			$table->index('user_id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oneauths');
	}
}