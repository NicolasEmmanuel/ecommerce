<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory()->count(10) /* Creation de 10 utilisateur */
            ->has(Commande::factory()->count(3)/* Chaque utilisateur va avoir 3 commandes */
            ->hasAttached(Produit::factory()->count(5),/* hasAttached: enfant d'une relation many to many */ /* on crée 5 produits */
       ['prix_total'=>rand(100,500),'quantite_total'=>rand(1,3)]))
            ->create();
    }
}
