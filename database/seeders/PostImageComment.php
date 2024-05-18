<?php

namespace Database\Seeders;

use App\Models\Comments;
use App\Models\Images;
use App\Models\Post;
use App\Models\User;
use Dotenv\Util\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Nette\Utils\Image;
use function Termwind\render;

class PostImageComment extends Seeder
{
    /**
     * Run the database seeds.
     */
    private int $rand = 1;

    public function __construct()
    {
        Schema::disableForeignKeyConstraints();
        Post::truncate();
        Images::truncate();
        Comments::truncate();
        Schema::enableForeignKeyConstraints();
    }

    public function run(): void
    {
        for ($i = 0; $i < 9; $i++) {
            Images::factory()->count(rand(0, 3))->for(
                Post::factory()->create()
            )->hasComments(rand(1, 3))->create();
        }
    }
}
