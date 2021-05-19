<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('quarter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quarter');
            $table->date('year');
            $table->timestamps();
        });

        Schema::create('mno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mno_name');
            $table->timestamps();
        });

        Schema::create('mns', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mns_code');
            $table->string('mns_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('pre_paid')->unsigned()->nullable();
            $table->integer('post_paid')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
            //$table->primary(['mns_code']);
        });

        Schema::create('bc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bc_code');
            $table->string('bc_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('value')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        Schema::create('mms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mms_code');
            $table->string('mms_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('value')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        Schema::create('bts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('bts_code');
            $table->string('region');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('twoG')->unsigned()->nullable();
            $table->integer('threeG')->unsigned()->nullable();
            $table->integer('fourG')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        Schema::create('nc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nc_code');
            $table->string('Technology');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('percentage')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        // Schema::create('msc', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedInteger('msc_code');
        //     $table->string('region');
        //     $table->unsignedInteger('quarter_id');
        //     $table->unsignedInteger('mno_id');
        //     $table->string('location')->unsigned()->nullable();
        //     $table->integer('installed')->unsigned()->nullable();
        //     $table->timestamps();

        //     $table->foreign('quarter_id')->references('id')->on('quarter');
        //     $table->foreign('mno_id')->references('id')->on('mno');
        // });

    
        Schema::create('mntc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mntc_code');
            $table->string('mntc_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('traffic')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });
        

        
        Schema::create('mnd', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mnd_code');
            $table->string('mnd_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('count')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        
        Schema::create('mit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mit_code');
            $table->string('mit_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('count')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });


        Schema::create('mnt', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mnt_code');
            $table->string('mnt_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('pre_paid_rates')->unsigned()->nullable();
            $table->integer('post_paid_rates')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        Schema::create('ic', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ic_code');
            $table->string('ic_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('bandwidth')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });
        

        Schema::create('ccs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ccs_code');
            $table->string('ccs_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('number')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });


        Schema::create('np', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('np_code');
            $table->string('np_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('value')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        // Schema::create('sn', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->unsignedInteger('sn_code');
        //     $table->string('sn_type');
        //     $table->unsignedInteger('quarter_id');
        //     $table->unsignedInteger('mno_id');
        //     $table->integer('number')->unsigned()->nullable();
        //     $table->timestamps();

        //     $table->integer('quarter_id')->references('id')->on('quarter');
        //     $table->integer('mno_id')->references('id')->on('mno');
        // });

        Schema::create('ibs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ibs_code');
            $table->string('ibs_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('amount')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        Schema::create('rd', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rd_code');
            $table->string('service_type');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('Revenue')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

        Schema::create('tp', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('tp_code');
            $table->string('tax_payment');
            $table->unsignedInteger('quarter_id');
            $table->unsignedInteger('mno_id');
            $table->integer('amount')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('quarter_id')->references('id')->on('quarter');
            $table->foreign('mno_id')->references('id')->on('mno');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mno');
        Schema::dropIfExists('mns');
        Schema::dropIfExists('bc');
        Schema::dropIfExists('mms');
        Schema::dropIfExists('bts');
        Schema::dropIfExists('nc');
        Schema::dropIfExists('msc');
        Schema::dropIfExists('mntc');
        Schema::dropIfExists('mnd');
        Schema::dropIfExists('mit');
        Schema::dropIfExists('mnt');
        Schema::dropIfExists('ic');
        Schema::dropIfExists('ccs');
        Schema::dropIfExists('np');
        Schema::dropIfExists('sn');
        Schema::dropIfExists('ibs');
        Schema::dropIfExists('rd');
        Schema::dropIfExists('tp');
        Schema::dropIfExists('quarter');
        Schema::dropIfExists('mno');
    }
}
