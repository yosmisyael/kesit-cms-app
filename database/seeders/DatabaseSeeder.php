<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    
        // User::create([
        //     'name' => 'Dale',
        //     'email' => 'dalery@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'movie',
            'slug' => 'movie'
        ]);

        // Post::create([
        //     'title' => 'The Art of Programming',
        //     'slug' => 'the-art-of-programming',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis interdum imperdiet. Integer porta nunc et eros viverra lobortis quis in tellus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis interdum imperdiet. Integer porta nunc et eros viverra lobortis quis in tellus. Praesent vehicula euismod nisl, vel interdum dolor semper et. Morbi vestibulum, sem finibus auctor accumsan, elit massa congue arcu, eu euismod tortor mauris nec tortor. Phasellus in cursus libero. Morbi consectetur, sem nec maximus pretium, libero erat egestas ipsum, eu lobortis augue nisi a lectus. Sed ipsum magna, semper maximus tincidunt eget, bibendum id erat. Integer turpis dui, dictum eu ante non, condimentum faucibus mauris. Curabitur ultricies ut augue sit amet aliquam. Praesent ac metus at justo aliquam consequat vitae id ipsum. Cras hendrerit, ipsum ac sollicitudin molestie, tortor arcu pretium libero, et bibendum lacus velit vitae dui. Donec condimentum eleifend magna, tempor ultrices leo vulputate id. Ut non odio consectetur, pellentesque libero in, ultricies ante. Curabitur ex ligula, vehicula a tempor scelerisque, blandit nec orci.</p>

        //     <p>Vivamus aliquam, odio ultrices dictum mollis, erat ligula egestas est, non varius arcu metus id risus. Aenean scelerisque eleifend tortor non feugiat. Integer tincidunt felis et convallis pulvinar. Sed eu placerat nisl. Cras venenatis nulla vitae porttitor semper. Proin dictum quam sed nulla suscipit, nec porta neque lobortis. Mauris faucibus, ex at consectetur suscipit, massa mauris rutrum magna, at pharetra enim nisi a libero. Suspendisse aliquet nibh nulla, a finibus sem vehicula vitae. Mauris varius ipsum sed felis malesuada, in volutpat urna malesuada. Sed sagittis finibus efficitur. Curabitur malesuada urna vitae turpis interdum, eget iaculis ex tincidunt. Phasellus pulvinar, quam non convallis tempor, libero sapien ornare metus, id imperdiet nunc tortor sit amet risus.</p>
            
        //     <p>Praesent vulputate molestie placerat. Maecenas luctus suscipit mauris. Ut id ligula elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tempor vitae mauris pretium dignissim. Nulla blandit id ligula tempor tempor. Nam sagittis mauris ac velit cursus, ut varius risus venenatis. Sed arcu nunc, dictum a arcu a, vulputate interdum sem. Donec at aliquam est. Nunc mollis luctus libero, id semper nibh scelerisque et. Donec cursus felis eleifend, sagittis ipsum vel, elementum libero. Nunc fringilla sed ipsum sed faucibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'The Art of Programming copy1',
        //     'slug' => 'the-art-of-programming-copy1',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis interdum imperdiet. Integer porta nunc et eros viverra lobortis quis in tellus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis interdum imperdiet. Integer porta nunc et eros viverra lobortis quis in tellus. Praesent vehicula euismod nisl, vel interdum dolor semper et. Morbi vestibulum, sem finibus auctor accumsan, elit massa congue arcu, eu euismod tortor mauris nec tortor. Phasellus in cursus libero. Morbi consectetur, sem nec maximus pretium, libero erat egestas ipsum, eu lobortis augue nisi a lectus. Sed ipsum magna, semper maximus tincidunt eget, bibendum id erat. Integer turpis dui, dictum eu ante non, condimentum faucibus mauris. Curabitur ultricies ut augue sit amet aliquam. Praesent ac metus at justo aliquam consequat vitae id ipsum. Cras hendrerit, ipsum ac sollicitudin molestie, tortor arcu pretium libero, et bibendum lacus velit vitae dui. Donec condimentum eleifend magna, tempor ultrices leo vulputate id. Ut non odio consectetur, pellentesque libero in, ultricies ante. Curabitur ex ligula, vehicula a tempor scelerisque, blandit nec orci.</p>

        //     <p>Vivamus aliquam, odio ultrices dictum mollis, erat ligula egestas est, non varius arcu metus id risus. Aenean scelerisque eleifend tortor non feugiat. Integer tincidunt felis et convallis pulvinar. Sed eu placerat nisl. Cras venenatis nulla vitae porttitor semper. Proin dictum quam sed nulla suscipit, nec porta neque lobortis. Mauris faucibus, ex at consectetur suscipit, massa mauris rutrum magna, at pharetra enim nisi a libero. Suspendisse aliquet nibh nulla, a finibus sem vehicula vitae. Mauris varius ipsum sed felis malesuada, in volutpat urna malesuada. Sed sagittis finibus efficitur. Curabitur malesuada urna vitae turpis interdum, eget iaculis ex tincidunt. Phasellus pulvinar, quam non convallis tempor, libero sapien ornare metus, id imperdiet nunc tortor sit amet risus.</p>
            
        //     <p>Praesent vulputate molestie placerat. Maecenas luctus suscipit mauris. Ut id ligula elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tempor vitae mauris pretium dignissim. Nulla blandit id ligula tempor tempor. Nam sagittis mauris ac velit cursus, ut varius risus venenatis. Sed arcu nunc, dictum a arcu a, vulputate interdum sem. Donec at aliquam est. Nunc mollis luctus libero, id semper nibh scelerisque et. Donec cursus felis eleifend, sagittis ipsum vel, elementum libero. Nunc fringilla sed ipsum sed faucibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'The Art of Programming copy2',
        //     'slug' => 'the-art-of-programming-copy2',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis interdum imperdiet. Integer porta nunc et eros viverra lobortis quis in tellus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis interdum imperdiet. Integer porta nunc et eros viverra lobortis quis in tellus. Praesent vehicula euismod nisl, vel interdum dolor semper et. Morbi vestibulum, sem finibus auctor accumsan, elit massa congue arcu, eu euismod tortor mauris nec tortor. Phasellus in cursus libero. Morbi consectetur, sem nec maximus pretium, libero erat egestas ipsum, eu lobortis augue nisi a lectus. Sed ipsum magna, semper maximus tincidunt eget, bibendum id erat. Integer turpis dui, dictum eu ante non, condimentum faucibus mauris. Curabitur ultricies ut augue sit amet aliquam. Praesent ac metus at justo aliquam consequat vitae id ipsum. Cras hendrerit, ipsum ac sollicitudin molestie, tortor arcu pretium libero, et bibendum lacus velit vitae dui. Donec condimentum eleifend magna, tempor ultrices leo vulputate id. Ut non odio consectetur, pellentesque libero in, ultricies ante. Curabitur ex ligula, vehicula a tempor scelerisque, blandit nec orci.</p>

        //     <p>Vivamus aliquam, odio ultrices dictum mollis, erat ligula egestas est, non varius arcu metus id risus. Aenean scelerisque eleifend tortor non feugiat. Integer tincidunt felis et convallis pulvinar. Sed eu placerat nisl. Cras venenatis nulla vitae porttitor semper. Proin dictum quam sed nulla suscipit, nec porta neque lobortis. Mauris faucibus, ex at consectetur suscipit, massa mauris rutrum magna, at pharetra enim nisi a libero. Suspendisse aliquet nibh nulla, a finibus sem vehicula vitae. Mauris varius ipsum sed felis malesuada, in volutpat urna malesuada. Sed sagittis finibus efficitur. Curabitur malesuada urna vitae turpis interdum, eget iaculis ex tincidunt. Phasellus pulvinar, quam non convallis tempor, libero sapien ornare metus, id imperdiet nunc tortor sit amet risus.</p>
            
        //     <p>Praesent vulputate molestie placerat. Maecenas luctus suscipit mauris. Ut id ligula elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tempor vitae mauris pretium dignissim. Nulla blandit id ligula tempor tempor. Nam sagittis mauris ac velit cursus, ut varius risus venenatis. Sed arcu nunc, dictum a arcu a, vulputate interdum sem. Donec at aliquam est. Nunc mollis luctus libero, id semper nibh scelerisque et. Donec cursus felis eleifend, sagittis ipsum vel, elementum libero. Nunc fringilla sed ipsum sed faucibus.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
