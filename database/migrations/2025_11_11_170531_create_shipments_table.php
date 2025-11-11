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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->constrained('shops')->onDelete('cascade');
            $table->foreignId('delivery_id')->nullable()->constrained('users')->onDelete('set null'); // assigned pilot
            $table->string('from_destination', 255);
            $table->string('to_destination', 255);
            $table->decimal('distance', 8, 2); // km or miles
            $table->enum('status', ['pending', 'assigned', 'in_transit', 'delivered', 'cancelled'])->default('pending');
            $table->decimal('weight', 8, 2); // shipment weight
            $table->string('photo')->nullable(); // product photo
            $table->text('comment')->nullable(); // extra info
            $table->enum('cost_type', ['prepaid', 'cash_on_delivery'])->default('prepaid');
            $table->decimal('price', 10, 2); // shipping price
            $table->decimal('product_cost', 10, 2)->nullable(); // optional
            $table->enum('vechial_type', ['motorcycle','car', 'bike' ,'without'])->default('without'); // type of product
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
