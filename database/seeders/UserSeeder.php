<?php

namespace Database\Seeders;

use App\Models\Profiles\AdminProfile;
use App\Models\Profiles\ClientProfile;
use App\Models\Profiles\SellerProfile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    private $KNOWN_CLIENT_EMAIL = "pepe@cliente.com";
    private $KNOWN_SELLER_EMAIL = "pepe@vendedor.com";
    private $KNOWN_ADMIN_EMAIL = "pepe@admin.com";
    private $KNOWN_SUPER_EMAIL = "pepe@super.com";
    private $KNOWN_PASSWORD = "secret";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->KNOWN_PASSWORD = Hash::make($this->KNOWN_PASSWORD);
        $this->seedClients(50);
        $this->seedSellers(15);
        $this->seedAdmin(5);
        $this->seedSuperUser();
    }

    private function seedClients(int $cant){
        $clients = User::factory($cant)->create();
        foreach ($clients as $client) {
            $client->assignRole('client');
            $client->assignClientProfile(ClientProfile::factory()->create());
        }
        User::factory()->create([
            'email' => $this->KNOWN_CLIENT_EMAIL,
            'password' => $this->KNOWN_PASSWORD
        ])->assignRole('client')->assignClientProfile(ClientProfile::factory()->create());
    }

    private function seedSellers(int $cant){
        $sellers = User::factory($cant)->create();
        foreach ($sellers as $seller) {
            $seller->assignRole('seller');
            $seller->assignSellerProfile(SellerProfile::factory()->create());
        }
        User::factory()->create([
            'email' => $this->KNOWN_SELLER_EMAIL,
            'password' => $this->KNOWN_PASSWORD
        ])
            ->assignRole('client')->assignClientProfile(ClientProfile::factory()->create())
            ->assignRole('seller')->assignSellerProfile(SellerProfile::factory()->create());
    }

    private function seedAdmin(int $cant){
        $admins = User::factory($cant)->create();
        foreach ($admins as $admin) {
            $admin->assignRole('admin');
            $admin->assignAdminProfile(AdminProfile::factory()->create());
        }
        User::factory()->create([
            'email' => $this->KNOWN_ADMIN_EMAIL,
            'password' => $this->KNOWN_PASSWORD
        ])
            ->assignRole('client')->assignClientProfile(ClientProfile::factory()->create())
            ->assignRole('admin')->assignAdminProfile(AdminProfile::factory()->create());
    }

    private function seedSuperUser()
    {
        User::factory()->create([
            'email' => $this->KNOWN_SUPER_EMAIL,
            'password' => $this->KNOWN_PASSWORD
        ])
        ->assignRole('client')->assignClientProfile(ClientProfile::factory()->create())
        ->assignRole('seller')->assignSellerProfile(SellerProfile::factory()->create())
        ->assignRole('admin')->assignAdminProfile(AdminProfile::factory()->create());
    }
}
