<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Division;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisionsArray = array(
            'Barishal' =>
                array(
                    'Barguna',
                    'Barisal',
                    'Bhola',
                    'Jhalokati',
                    'Patuakhali',
                    'Pirojpur'
                ),
            'Chittagong' =>
                array(
                    'Bandarban',
                    'Brahmanbaria',
                    'Chandpur',
                    'Chittagong',
                    'Comilla',
                    'Coxs Bazar',
                    'Feni',
                    'Khagrachhari',
                    'Lakshmipur',
                    'Noakhali',
                    'Rangamati'
                ),
            'Dhaka' =>
                array(
                    'Dhaka',
                    'Faridpur',
                    'Gazipur',
                    'Gopalganj',
                    'Kishoreganj',
                    'Madaripur',
                    'Manikganj',
                    'Munshiganj',
                    'Narayanganj',
                    'Narsingdi',
                    'Rajbari',
                    'Shariatpur',
                    'Tangail'
                ),
            'Khulna' =>
                array(
                    'Bagerhat',
                    'Chuadanga',
                    'Jessore',
                    'Jhenaidah',
                    'Khulna',
                    'Kushtia',
                    'Magura',
                    'Meherpur',
                    'Narail',
                    'Satkhira'
                ),
            'Mymensingh' =>
                array(
                    'Jamalpur',
                    'Mymensingh',
                    'Netrakona',
                    'Sherpur'
                ),
            'Rajshahi' =>
                array(
                    'Bogra',
                    'Chapainawabganj',
                    'Joypurhat',
                    'Naogaon',
                    'Natore',
                    'Pabna',
                    'Rajshahi',
                    'Sirajganj'
                ),
            'Rangpur' =>
                array(
                    'Dinajpur',
                    'Gaibandha',
                    'Kurigram',
                    'Lalmonirhat',
                    'Nilphamari',
                    'Panchagarh',
                    'Rangpur',
                    'Thakurgaon'
                ),
            'Sylhet' =>
                array(
                    'Habiganj',
                    'Moulvibazar',
                    'Sunamganj',
                    'Sylhet'
                ),
        );

        foreach ($divisionsArray as $division => $districts) {
            foreach ($districts as $district) {
                District::create([
                    'division_id' => Division::where('division_name', $division)->select('id')->first()->id,
                    'name' => $district
                ]);
            }
        }
    }
}
