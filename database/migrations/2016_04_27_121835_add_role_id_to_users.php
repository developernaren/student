<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
            $table->integer('role_id')->unsigned()->index();

            $table->foreign( 'role_id' )->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('education', function( $table ) {

            $table->dropForeign( 'users_role_id_foreign' );

        });
        Schema::table('education', function( $table ) {

            $table->dropColumn( 'role_id' );
                    
        });
    }
}
