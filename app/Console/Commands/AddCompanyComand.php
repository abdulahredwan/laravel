<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class AddCompanyComand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new company';


    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $name =$this->ask('what is your company name?');
        $phone=$this->ask('what is your company phone number');
        if ($this->confirm('Are you ready to insert "' .$name. '"?')){
            $company = Company::create([
                'name'=>$name,
                'phone'=>$phone,
            ]);
            return $this->info('Added:' .$company->name);
        }
        $this->warn('No new added');
    }


}
