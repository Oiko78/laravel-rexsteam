<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Game;
use App\Models\GameCategory;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $roles = [
            Role::factory()->create(["name" => "Admin"]),
            Role::factory()->create(["name" => "Member"]),
        ];
        User::factory(2)->create(["role_id" => $roles[0]['id']]);
        User::factory(2)->create(["role_id" => $roles[1]['id']]);

        $game_categories = GameCategory::factory()->createMany([
            [
                "name" => "Simulation",
            ],
            [
                "name" => "Puzzle",
            ],
            [
                "name" => "Sport",
            ],
            [
                "name" => "Action",
            ],
            [
                "name" => "Role-Playing",
            ],
            [
                "name" => "Strategy",
            ],
            [
                "name" => "Horror",
            ],
        ]);

        Game::factory()->createMany([
            [
                "name" => "Apex Legends",
                "category_id" => $game_categories[3]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/header.jpg?t=1621457566",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256832561/movie480_vp9.webm?t=1619624593"
            ],
            [
                "name" => "Euro Truck Simulator",
                "category_id" => $game_categories[0]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/227300/header.jpg?t=1619119593",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256827292/movie480_vp9.webm?t=1616622379"
            ],
            [
                "name" => "Forza Horizon 4",
                "category_id" => $game_categories[0]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1293830/header.jpg?t=1615337540",
                "trailer" => "https: //cdn.cloudflare.steamstatic.com/steam/apps/256806810/movie480_vp9.webm?t=1603820794"
            ],
            [
                "name" => "Grand Theft Auto V",
                "category_id" => $game_categories[4]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg?t=1618856444",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256757115/movie480.webm?t=1563930864"
            ],
            [
                "name" => "GTFO",
                "category_id" => $game_categories[3]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/493520/header.jpg?t=1619710162",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256832724/movie480_vp9.webm?t=1619710158"
            ],
            [
                "name" => "It Takes Two",
                "category_id" => $game_categories[5]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/1426210/header_alt_assets_0.jpg?t=1620487863",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256827093/movie480_vp9.webm?t=1616514535"
            ],
            [
                "name" => "Monster Hunter World",
                "category_id" => $game_categories[4]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/582010/header.jpg?t=1613693233",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256769022/movie480.webm?t=1596524406"
            ],
            [
                "name" => "Planet Coaster",
                "category_id" => $game_categories[1]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/493340/header.jpg?t=1617973118",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256674785/movie480.webm?t=1488290537"
            ],
            [
                "name" => "Tekken 7",
                "category_id" => $game_categories[0]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/389730/header.jpg?t=1616774938",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256807403/movie480_vp9.webm?t=1604043392"
            ],
            [
                "name" => "Terraria",
                "category_id" => $game_categories[0]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/105600/header.jpg?t=1590092560",
                "trailer" => "https://cdn.cloudflare.steamstatic.com/steam/apps/256785003/movie480_vp9.webm?t=1589654781270921"
            ],
            [
                "name" => "Totally Accurate Battle Simulator",
                "category_id" => $game_categories[1]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/508440/header.jpg?t=1617880814",
                "trailer" => "https: //cdn.cloudflare.steamstatic.com/steam/apps/256828204/movie480_vp9.webm?t=1617300058"
            ],
            [
                "name" => "Valheim",
                "category_id" => $game_categories[1]['id'],
                "cover" => "https://cdn.cloudflare.steamstatic.com/steam/apps/892970/header.jpg?t=1617258628",
                "trailer" => "https: //cdn.cloudflare.steamstatic.com/steam/apps/256820008/movie480_vp9.webm?t=1612278985"
            ],
        ]);
    }
}
