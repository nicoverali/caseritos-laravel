<?php

namespace Database\Seeders;

use App\Faker\ClientProfilePictureProvider;
use App\Models\Profiles\AdminProfile;
use App\Models\Profiles\ClientProfile;
use App\Models\Profiles\SellerProfile;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    private $KNOWN_CLIENT_EMAIL = "pepe@cliente.com";
    private $KNOWN_SELLER_EMAIL = "pepe@vendedor.com";
    private $KNOWN_ADMIN_EMAIL = "pepe@admin.com";
    private $KNOWN_SUPER_EMAIL = "pepe@super.com";
    private $KNOWN_PASSWORD = "secret";

    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = new Generator();
        $this->faker->addProvider(ClientProfilePictureProvider::class);

        $this->KNOWN_PASSWORD = Hash::make($this->KNOWN_PASSWORD);
        $this->seedClients(30);
        $this->seedSellers(15);
        $this->seedAdmin(5);
        $this->seedSuperUser();
    }

    private function seedClients(int $cant){
        $this->createUsers([], $cant, ['client']);
        $this->createUsers(['email'=> $this->KNOWN_CLIENT_EMAIL, 'password' => $this->KNOWN_PASSWORD], 1, ['client']);
    }

    private function seedSellers(int $cant){
        $this->createUsers([], $cant, ['client', 'seller']);
        $this->createUsers(['email'=> $this->KNOWN_SELLER_EMAIL, 'password' => $this->KNOWN_PASSWORD], 1, ['client', 'seller']);
    }

    private function seedAdmin(int $cant){
        $this->createUsers([], $cant, ['client', 'admin']);
        $this->createUsers(['email'=> $this->KNOWN_ADMIN_EMAIL, 'password' => $this->KNOWN_PASSWORD], 1, ['client', 'admin']);
    }

    private function seedSuperUser()
    {
        $this->createUsers(['email'=> $this->KNOWN_SUPER_EMAIL, 'password' => $this->KNOWN_PASSWORD], 1, ['client', 'seller', 'admin']);
    }

    private function createUsers($attributes, $cant, $roles){
        $attributes = (new Collection($attributes))->whereNotNull()->toArray();
        $users = User::factory($cant)->create($attributes);
        foreach ($users as $user) {
            foreach ($roles as $role){
                $clientAttr = [
                    'picture' => $this->faker->profilePicture($user->name),
                    'thumbnail' => $this->faker->profileThumbnail($user->name),
                ];
                $user->assignRole($role);
                switch ($role){
                    case 'client': $user->assignClientProfile(ClientProfile::factory()->create($clientAttr));
                        break;
                    case 'seller': $user->assignSellerProfile(SellerProfile::factory()->create());
                        break;
                    case 'admin': $user->assignAdminProfile(AdminProfile::factory()->create());
                }
            }
        }
    }
}
