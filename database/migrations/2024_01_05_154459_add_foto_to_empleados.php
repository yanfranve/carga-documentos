<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoToEmpleados extends Migration
{
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('foto')->nullable()->after('estado');
        });
    }

    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->dropColumn('foto');
        });
    }
}
