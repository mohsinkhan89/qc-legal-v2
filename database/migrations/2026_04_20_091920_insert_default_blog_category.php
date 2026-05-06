<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\BlogCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Ensure "Blogs" category exists
        if (!BlogCategory::where('slug', 'blogs')->exists()) {
            BlogCategory::create([
                'title' => 'Blogs',
                'slug' => 'blogs',
                'status' => 1
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // We probably don't want to delete it on rollback if it was a system category
    }
};
