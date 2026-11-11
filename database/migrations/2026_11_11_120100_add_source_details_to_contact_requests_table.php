<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_requests', function (Blueprint $table): void {
            $table->string('form', 30)->nullable()->after('status');
            $table->string('source_page', 500)->nullable()->after('form');
            $table->string('landing_page', 500)->nullable()->after('source_page');
            $table->string('referrer', 500)->nullable()->after('landing_page');
            $table->string('channel', 30)->nullable()->after('referrer');
            $table->string('utm_source', 150)->nullable()->after('channel');
            $table->string('utm_medium', 150)->nullable()->after('utm_source');
            $table->string('utm_campaign', 150)->nullable()->after('utm_medium');
            $table->string('device_type', 20)->nullable()->after('utm_campaign');
            $table->string('browser', 40)->nullable()->after('device_type');
            $table->string('os', 40)->nullable()->after('browser');
            $table->string('country', 2)->nullable()->after('os');
            $table->string('session_id', 100)->nullable()->after('country');

            $table->index('created_at');
            $table->index('channel');
        });
    }

    public function down(): void
    {
        Schema::table('contact_requests', function (Blueprint $table): void {
            $table->dropIndex(['created_at']);
            $table->dropIndex(['channel']);
            $table->dropColumn([
                'form', 'source_page', 'landing_page', 'referrer', 'channel', 'utm_source', 'utm_medium',
                'utm_campaign', 'device_type', 'browser', 'os', 'country', 'session_id',
            ]);
        });
    }
};
