<?php

declare(strict_types=1);

use App\Support\UserAgent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('page_views', function (Blueprint $table): void {
            $table->boolean('is_entry')->default(false)->after('referer');
            $table->string('channel', 30)->nullable()->after('is_entry');
            $table->string('referrer_host', 150)->nullable()->after('channel');
            $table->string('utm_source', 150)->nullable()->after('referrer_host');
            $table->string('utm_medium', 150)->nullable()->after('utm_source');
            $table->string('utm_campaign', 150)->nullable()->after('utm_medium');
            $table->string('device_type', 20)->nullable()->after('utm_campaign');
            $table->string('browser', 40)->nullable()->after('device_type');
            $table->string('os', 40)->nullable()->after('browser');
            $table->string('country', 2)->nullable()->after('os');

            $table->index(['session_id', 'visited_at']);
            $table->index(['is_entry', 'visited_at']);
        });

        // Backfill device / browser / OS for views recorded before this migration
        DB::table('page_views')->select(['id', 'user_agent'])->orderBy('id')->chunkById(500, function ($rows): void {
            foreach ($rows as $row) {
                DB::table('page_views')->where('id', $row->id)->update(UserAgent::parse($row->user_agent)->toArray());
            }
        });
    }

    public function down(): void
    {
        Schema::table('page_views', function (Blueprint $table): void {
            $table->dropIndex(['session_id', 'visited_at']);
            $table->dropIndex(['is_entry', 'visited_at']);
            $table->dropColumn([
                'is_entry', 'channel', 'referrer_host', 'utm_source', 'utm_medium', 'utm_campaign',
                'device_type', 'browser', 'os', 'country',
            ]);
        });
    }
};
