<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_group');
            $table->foreign('user_group')->references('id')->on('user_group');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('order',function (Blueprint $table){
            $table->increments('order_id');
            $table->string('order_name');
            $table->string('address_town');
            $table->integer('product_id');
            $table->integer('color_id');
            $table->integer('feature_id');
            $table->integer('flavour_id');
            $table->integer('icing_id');
            $table->integer('shape');
            $table->integer('size');
            $table->string('total');
            $table->foreign('product_id')->references('product_id')->on('product');
            $table->foreign('color_id')->references('color_id')->on('color');
            $table->foreign('feature_id')->references('feature_id')->on('feature');
            $table->foreign('flavour_id')->references('flavour_id')->on('flavour');
            $table->foreign('icing_id')->references('icing_id')->on('icing');
            $table->foreign('shape_id')->references('shape_id')->on('shape');
            $table->foreign('size_id')->references('size_id')->on('size');

        }
        );

        Schema::create('color',function (Blueprint $table){
            $table->increments('color_id');
            $table->string('color_name');

        }
        );

        Schema::create('features',function (Blueprint $table){
            $table->increments('feature_id');
            $table->string('feature_name');
            $table->integer('price_id');
            $table->foreign('price')->references('price_id')->on('prices');

        }
        );

        Schema::create('flavour',function (Blueprint $table){
            $table->increments('flavour_id');
            $table->string('flavour_name');

        }
        );

        Schema::create('icing',function (Blueprint $table){
            $table->increments('icing_id');
            $table->string('icing_name');
            }
        );

        Schema::create('price',function (Blueprint $table){
            $table->increments('price_id');
            $table->string('price_name');

        }
        );

        Schema::create('product',function (Blueprint $table){
            $table->increments('product_id');
            $table->string('product_name');


        }
        );

        Schema::create('shape',function (Blueprint $table){
            $table->increments('shape_id');
            $table->string('shape_name');

        }
        );

        Schema::create('size',function (Blueprint $table){
            $table->increments('size_id');
            $table->integer('price_id');
            $table->foreign('price')->references('price_id')->on('prices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
