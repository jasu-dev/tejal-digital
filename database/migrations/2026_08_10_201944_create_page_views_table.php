<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_views', function (Blueprint $table): void {
            $table->id();
            $table->string('path', 500);
            $table->string('session_id', 100)->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->string('referer', 500)->nullable();
            $table->timestamp('visited_at')->useCurrent();

            $table->index('path');
            $table->index('visited_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_views');
    }
};
