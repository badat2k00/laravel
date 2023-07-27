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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            //
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable(); //Có thể null
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users'); Khóa ngoại quan hệ 1-nhiều hoặc 1 -1 
            /* $table->primary(['user_id', 'role_id']) : Khóa chính quan hệ nhiều -nhiều (tạo thêm bảng);


    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

    Trong Laravel, có nhiều kiểu dữ liệu khác nhau được hỗ trợ trong migration, bao gồm:

bigIncrements(): kiểu số nguyên lớn tự tăng (tương đương với BIGINT AUTO_INCREMENT trong SQL).
bigInteger(): kiểu số nguyên lớn (tương đương với BIGINT trong SQL).
binary(): kiểu dữ liệu nhị phân (tương đương với BINARY hoặc VARBINARY trong SQL).
boolean(): kiểu dữ liệu boolean (tương đương với BOOLEAN hoặc TINYINT(1) trong SQL).
char(): kiểu dữ liệu ký tự cố định (tương đương với CHAR trong SQL).
date(): kiểu dữ liệu ngày (tương đương với DATE trong SQL).
dateTime(): kiểu dữ liệu ngày giờ (tương đương với DATETIME trong SQL).
decimal(): kiểu số thập phân (tương đương với DECIMAL trong SQL).
double(): kiểu số thực lớn (tương đương với DOUBLE hoặc REAL trong SQL).
enum(): kiểu dữ liệu enum (tương đương với ENUM trong SQL).
float(): kiểu số thực (tương đương với FLOAT trong SQL).
increments(): kiểu số nguyên tự tăng (tương đương với INT AUTO_INCREMENT trong SQL).
integer(): kiểu số nguyên (tương đương với INT trong SQL).
json(): kiểu dữ liệu JSON (tương đương với JSON hoặc JSONB trong SQL).
longText(): kiểu dữ liệu văn bản dài (tương đương với LONGTEXT hoặc TEXT trong SQL).
mediumText(): kiểu dữ liệu văn bản trung bình (tương đương với MEDIUMTEXT hoặc MEDIUMBLOB trong SQL).
smallInteger(): kiểu số nguyên nhỏ (tương đương với SMALLINT trong SQL).
string(): kiểu dữ liệu ký tự (tương đương với VARCHAR trong SQL).
text(): kiểu dữ liệu văn bản (tương đương với TEXT hoặc BLOB trong SQL).
time(): kiểu dữ liệu thời gian (tương đương với TIME trong SQL).
timestamp(): kiểu dữ liệu timestamp (tương đương với TIMESTAMP trong SQL).
unsignedBigInteger(): kiểu số nguyên lớn không dấu (tương đương với BIGINT UNSIGNED trong SQL).
unsignedInteger(): kiểu số nguyên không dấu (tương đương với INT UNSIGNED trong SQL).
unsignedSmallInteger(): kiểu số nguyên nhỏ không dấu (tương đương với SMALLINT UNSIGNED trong SQL).
uuid(): kiểu dữ liệu UUID (tương đương với UUID trong SQL).
     */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
