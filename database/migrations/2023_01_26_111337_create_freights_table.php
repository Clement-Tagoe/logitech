<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->string('file_number');
            $table->string('bl_number');
            $table->string('customer_name');
            $table->string('slug')->nullable();
            $table->string('vessel')->nullable();
            $table->string('shipper')->nullable();
            $table->string('port_of_discharge')->nullable();
            $table->string('port_of_loading')->nullable();
            $table->string('freight_pay')->nullable();
            $table->string('number_of_original_bol')->nullable();
            $table->string('container_seals')->nullable();
            $table->string('packages')->nullable();
            $table->string('package_description')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('measurement')->nullable();
            $table->longText('comments')->nullable();
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freights');
    }
};
