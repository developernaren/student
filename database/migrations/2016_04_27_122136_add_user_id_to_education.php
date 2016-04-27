<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('education', function( $table ) {

            $table->integer('user_id')->unsigned()->index();

            $table->foreign('user_id')->references('id')->on('roles');            
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

            $table->dropForeign( 'education_user_id_foreign' );

        });
        Schema::table('education', function( $table ) {

            $table->dropColumn( 'user_id' );
                    
        });
    }
}
