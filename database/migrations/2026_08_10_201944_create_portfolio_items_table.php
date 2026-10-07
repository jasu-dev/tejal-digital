<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_items', function (Blueprint $table): void {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->text('description');
            $table->text('challenge')->nullable();
            $table->text('solution')->nullable();
            $table->string('image_path')->nullable();
            $table->string('gradient')->default('from-blue-100 to-sky-100');
            $table->json('tags')->nullable();
            $table->string('status')->default('active');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('has_detail_page')->default(true);
            $table->string('detail_route')->nullable()->comment('Named route for static blade pages (legacy)');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_items');
    }
};
