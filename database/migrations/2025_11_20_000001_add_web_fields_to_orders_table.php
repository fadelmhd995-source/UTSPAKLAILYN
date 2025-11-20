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
        // Add web form fields to orders table if they don't already exist
        if (Schema::hasTable('orders')) {
            Schema::table('orders', function (Blueprint $table) {
                if (!Schema::hasColumn('orders', 'name')) {
                    $table->string('name')->nullable()->after('items');
                }
                if (!Schema::hasColumn('orders', 'phone')) {
                    $table->string('phone')->nullable()->after('name');
                }
                if (!Schema::hasColumn('orders', 'address')) {
                    $table->text('address')->nullable()->after('phone');
                }
                if (!Schema::hasColumn('orders', 'area')) {
                    $table->integer('area')->nullable()->after('address');
                }
                if (!Schema::hasColumn('orders', 'notes')) {
                    $table->text('notes')->nullable()->after('area');
                }
                if (!Schema::hasColumn('orders', 'service')) {
                    $table->string('service')->nullable()->after('notes');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('orders')) {
            Schema::table('orders', function (Blueprint $table) {
                if (Schema::hasColumn('orders', 'service')) {
                    $table->dropColumn('service');
                }
                if (Schema::hasColumn('orders', 'notes')) {
                    $table->dropColumn('notes');
                }
                if (Schema::hasColumn('orders', 'area')) {
                    $table->dropColumn('area');
                }
                if (Schema::hasColumn('orders', 'address')) {
                    $table->dropColumn('address');
                }
                if (Schema::hasColumn('orders', 'phone')) {
                    $table->dropColumn('phone');
                }
                if (Schema::hasColumn('orders', 'name')) {
                    $table->dropColumn('name');
                }
            });
        }
    }
};
