<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
     *

    Dr. Uttom Kumar Shet
    Qualification: BDS (Dhaka Dental College), MSD ( South Kore), PhD (South Korea),
    Special dental Implant Training from the University of Southern California ( USA), Korea, India.
    Specialist: Dental Implant
    Designation: Assistant Professor
    Expertise:  Dental Implant, General dentistry, OMFS surgery
    Experiences: 16  (Years)
    Organization:  Sapporo Dental College
    Chamber: THE DENTAL EXCELLENCE
    Address: 3rd Floor, ABC Northridge,  Road # 15, House # 51, Rabindra Sarani, Sector # 3, Uttara, Dhaka
    Visiting Hours: 5 pm to 9 pm
    Phone for Serial: +8801960932832

    Name:
    Qualification:
    Specialist in:
    Designation:
    Expertise:
    Experiences:
    Chamber:
    Other Places attended by the doc:
    phone number:
    adress:
    Visiting Hours

    */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name")->nullable();
            $table->string("b_name")->nullable();
            $table->string("qualifications")->nullable();
            $table->string("b_qualifications")->nullable();
            $table->string("designation")->nullable();
            $table->string("b_designation")->nullable();
            $table->string("expertise")->nullable();
            $table->string("b_expertise")->nullable();
            $table->string("chamber")->nullable();
            $table->string("b_chamber")->nullable();
            $table->string("other_chamber")->nullable();
            $table->string("b_other_chamber")->nullable();
            $table->string("address")->nullable();
            $table->string("b_address")->nullable();
            $table->integer("phone")->nullable()->unsigned();
            $table->string("visiting_hours")->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
