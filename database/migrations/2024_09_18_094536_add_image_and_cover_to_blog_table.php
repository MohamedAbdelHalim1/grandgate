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
        Schema::table('blog', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->string('cover')->nullable();
            
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->change();
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->change();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            //
        });
    }
};
