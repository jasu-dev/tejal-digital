<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table): void {
            // Hero content
            $table->string('badge_text')->nullable()->after('category');
            $table->text('hero_subtitle')->nullable()->after('badge_text');
            $table->string('cta_text')->nullable()->default('Build Similar App')->after('hero_subtitle');
            $table->text('intro_quote')->nullable()->after('solution');

            // Floating badge chips in hero image (JSON: [{icon, label, value}])
            $table->json('hero_badges')->nullable()->after('intro_quote');

            // Challenges/Objectives cards (JSON: [{icon, title, description}])
            $table->json('features')->nullable()->after('hero_badges');

            // Architecture / "How We Built It" cards (JSON: [{title, description}])
            $table->json('architecture')->nullable()->after('features');

            // FAQs (JSON: [{question, answer}])
            $table->json('faqs')->nullable()->after('architecture');

            // Related project slugs (JSON: string[])
            $table->json('related_slugs')->nullable()->after('faqs');

            // Client meta
            $table->string('client_name')->nullable()->after('related_slugs');
            $table->string('live_url')->nullable()->after('client_name');

            // SEO
            $table->string('meta_title')->nullable()->after('live_url');
            $table->text('meta_description')->nullable()->after('meta_title');
            $table->text('meta_keywords')->nullable()->after('meta_description');
            $table->string('og_title')->nullable()->after('meta_keywords');
            $table->text('og_description')->nullable()->after('og_title');
            $table->string('og_image_path')->nullable()->after('og_description');
            $table->string('twitter_title')->nullable()->after('og_image_path');
            $table->text('twitter_description')->nullable()->after('twitter_title');
        });
    }

    public function down(): void
    {
        Schema::table('portfolio_items', function (Blueprint $table): void {
            $table->dropColumn([
                'badge_text', 'hero_subtitle', 'cta_text', 'intro_quote',
                'hero_badges', 'features', 'architecture', 'faqs', 'related_slugs',
                'client_name', 'live_url',
                'meta_title', 'meta_description', 'meta_keywords',
                'og_title', 'og_description', 'og_image_path',
                'twitter_title', 'twitter_description',
            ]);
        });
    }
};
