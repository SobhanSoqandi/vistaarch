<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            // روابط اصلی
            $table->foreignId('style_id')->constrained()->cascadeOnDelete();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->foreignId('company_id')->nullable()->constrained()->nullOnDelete();

            // اطلاعات پروژه
            $table->year('year')->nullable();
            $table->string('location')->nullable();
            $table->integer('area')->nullable(); // متراژ

            // توضیحات
            $table->text('summary')->nullable();
            $table->longText('description')->nullable();

            // تصویر شاخص
            $table->string('cover_image')->nullable();

            // وضعیت انتشار
            $table->boolean('is_published')->default(true);

            $table->timestamps();

            // ایندکس‌ها برای فیلتر سریع
            $table->index('style_id');
            $table->index('service_id');
            $table->index('company_id');
            $table->index('year');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};