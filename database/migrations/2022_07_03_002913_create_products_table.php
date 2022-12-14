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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id'); //fk_marca
            $table->integer('supplier_id'); //fk_fornecedor
            $table->integer('category_id'); //fk_categoria1
            $table->integer('subcategory_id'); //fk_categoria2
            $table->integer('subsubcategory_id'); //fk_categoria3
            $table->string('product_name_pt');  
            $table->string('product_slug_pt'); 
            $table->string('product_code')->nullable();
            $table->string('product_qty')->nullable();
         //   $table->string('product_tags_pt')->nullable(); //projeto futuro lucas
            $table->string('product_size_pt')->nullable(); 
            $table->string('product_color_pt')->nullable(); 
            $table->string('product_selling_price');
            $table->string('product_discount_price')->nullable(); 
            $table->string('product_short_description_en')->nullable(); 
            $table->string('product_short_description_pt')->nullable(); 
            $table->string('product_long_description_en')->nullable(); 
            $table->string('product_long_description_pt')->nullable(); 
            $table->string('product_thumbnail'); 
            $table->integer('product_hot_deals')->nullable(); //projeto futuro lucas
            $table->integer('product_featured')->nullable(); //projeto futuro lucas
            $table->integer('product_special_offer')->nullable();  //projeto futuro lucas
            $table->integer('product_special_deals')->nullable();  //projeto futuro lucas
            $table->integer('product_status')->default(0); 
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
        Schema::dropIfExists('products');
    }
};
