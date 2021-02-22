<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_list = config('customers');
        foreach ($customer_list as $value) {
            $newCustomer = new Customer();
            $newCustomer->firstname = $value['firstname'];
            $newCustomer->lastname = $value['lastname'];
            $newCustomer->age = $value['age'];
            $newCustomer->nationality = $value['nationality'];
            $newCustomer->premium = $value['premium'];

            $newCustomer->save();
        }
    }
}
