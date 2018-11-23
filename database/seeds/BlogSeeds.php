<?php

use Illuminate\Database\Seeder;
use App\Blog_model;

class BlogSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog_model();
        $blog->title = '1';
        $blog->teaser = '1';
        $blog->content = '1';
        $blog->describe = '1';
        $blog->save();

        $blog = new Blog_model();
        $blog->title = '2';
        $blog->teaser = '2';
        $blog->content = '2';
        $blog->describe = '2';
        $blog->save();

        $blog = new Blog_model();
        $blog->title = '3';
        $blog->teaser = '3';
        $blog->content = '3';
        $blog->describe = '3';
        $blog->save();

        $blog = new Blog_model();
        $blog->title = '4';
        $blog->teaser = '4';
        $blog->content = '4';
        $blog->describe = '4';
        $blog->save();
    }
}
