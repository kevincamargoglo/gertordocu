<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('collection_name');
            $table->string('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_extension')->nullable();            
            $table->string('file_url')->nullable();            
            $table->string('file_departamento')->nullable();                
            $table->string('created_by_id')->nullable();    
            $table->string('description')->nullable(); 
            $table->unsignedBigInteger('folder_id');
            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
