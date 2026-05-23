<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company')->after('id');
            $table->string('departure_station')->after('company');
            $table->string('arrival_station')->after('departure_station');
            $table->time('departure_time')->after('arrival_station');
            $table->time('arrival_time')->after('departure_time');
            $table->string('train_code')->after('arrival_time');
            $table->unsignedTinyInteger('number_of_wagons')->after('train_code');
            $table->boolean('in_time')->after('number_of_wagons');
            $table->boolean('cancelled')->after('in_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_code');
            $table->dropColumn('number_of_wagons');
            $table->dropColumn('in_time');
            $table->dropColumn('cancelled');
        });
    }
};
