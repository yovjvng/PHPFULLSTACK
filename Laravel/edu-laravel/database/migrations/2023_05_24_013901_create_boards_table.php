<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // migration 파일 생성 : php artisan make:migration create_boards_table
    // migration 실행 : php artisan migrate
    // migration 리셋(모든 migration 파일의 down()메소드를 실행) : php artisan migration:reset
    // migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migration:rollback 


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 수정일, 작성일, 삭제여부
            $table->id('bno'); // big_int, pk, auto_increment
            $table->char('category', 1)->index(); // char(1), not null, index추가
            $table->string('btitle', 100); // varchar(100) not null
            $table->string('bcontent', 4000); // varchar(100) not null
            $table->timestamps(); // created_at, update_at을 생성, null 허용
            $table->timestamp('delete_at')->nullable();
            $table->char('delete_flg', 1)->default('0'); // char(1), default '0', not null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
