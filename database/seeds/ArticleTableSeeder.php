<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('articles')->insert([
            'title' => '1 art',
            'content' => '1 cont',
            'slug' => '1 slug',
            'user_id' => 1,
            'published_at' => \Carbon\Carbon::parse("12.03.2016"),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('articles')->insert([
            'title' => '7 art',
            'content' => '7 cont',
            'slug' => 'pijfiow slug',
            'user_id' => 1,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => '4 art',
            'content' => '4 cont',
            'slug' => '12322 slug',
            'user_id' => 2,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => '123 art',
            'content' => '123 cont',
            'slug' => '3 slug',
            'user_id' => 2,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => '1223 art',
            'content' => '123 cont',
            'slug' => '3 slug',
            'user_id' => 1,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => '12233 art',
            'content' => '123 cont',
            'slug' => '3 slug',
            'user_id' => 2,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('articles')->insert([
            'title' => '2 art',
            'content' => '2 cont',
            'slug' => '2 slug',
            'user_id' => 3,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
		DB::table('articles')->insert([
            'title' => 'user2 article',
            'content' => 'user2 article',
            'slug' => 'user2 article',
            'user_id' => 3,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('articles')->insert([
            'title' => 'Mostrans OU',
            'content' => "<div class='row'>
<div class='col-md-12'>
<p>Фирма <strong>«Mostrans»</strong> основана в 2013-ом году и занимаеться ремонтом и обслуживанием легковых, а также грузовых автомобилей. Мы гарантируем качественно выполненную работу. Также мы занимаемся продажей запчастей для автомобилей.</p>
</div>
</div>
<div class='row'>
<div class='col-md-6'><img class='img-responsive' src='http://placehold.it/700x450' alt='' /></div>
<div class='col-md-6'>
<h2>Ремонт любой сложности</h2>
<p>Автосервис <strong>«Mostrans»</strong> предлагает ремонт и обслуживание автомобилей любой сложности Наш автосервис готов предложить своим клиентам большой перечень работ по ремонту и техническому обслуживанию автомобилей различных марок. Ремонт и обслуживание автомобилей производят высококвалифицированные мастера, а ремзона имеет все необходимое профессиональное оборудование для осуществления ремонта любой сложности. В ремонте мы используем как оригинальные запчасти, так и аналоги. Все эти составляющие позволяют нам оперативно достигать положительного результата в ремонте и техническом обслуживании автомобилей. Для проведения ремонта Вашего автомобиля Вы можете предварительно позвонить нам и записаться на любое удобное для Вас время.</p>
</div>
</div>
",
            'slug' => 'Our homepage',
            'homepage' => 1,
            'user_id' => 1,
            'published_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
