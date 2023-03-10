<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('citizen_ship', ['us_citizen', 'us_resident', 'non_us_citizen_or_resident']);
            $table->enum('account_type', ['indiviual_or_personal', 'entity_trust_or_corporation', 'non_us_citizen_or_resident']);
            $table->string('entity_type')->nullable();
            $table->string('entity_name')->nullable();
            $table->string('signatory_title')->nullable();
            $table->text('street_address');
            $table->text('apartment_suit');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->smallInteger('mailing_address')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_number');
            $table->date('dob');
            $table->string('ssn');
            $table->string('ein');
            $table->smallInteger("net_worth_each_owner_one_million_check")->default(0);
            $table->smallInteger("net_worth_joint_spouse_check")->default(0);
            $table->smallInteger("total_asset_exceeding_check")->default(0);
            $table->smallInteger("indiviual_income_check")->default(0);
            $table->smallInteger("finary_member_check")->default(0);
            $table->smallInteger("member_of_board_of_director_check")->default(0);
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
        Schema::dropIfExists('customers');
    }
}
