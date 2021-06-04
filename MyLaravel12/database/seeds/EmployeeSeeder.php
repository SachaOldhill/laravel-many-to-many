<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Employee;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class, 20) -> make()
      ->each(function($employee){

        $location = Location::inRandomOrder() -> first();
        $employee -> location() -> associate($location);
        $employee -> save();
      });
    }
}
