<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            'title' => 'Przerwana lekcja muzyki',
            'premiere_year' => 1999,
            'description' => 'Susanna poznaje Lisę w zakładzie psychiatrycznym. Od niej uczy się akceptacji siebie.',
            'borrowed' => 0,
            'pathname' => 'przerwana_lekcja_muzyki',
            'director_id' => 1,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Oszukana',
            'premiere_year' => 2008,
            'description' => 'Los Angeles, 1928 rok. Christine wychodzi do pracy, zostawiając kilkuletniego syna w domu. Gdy wraca, dziecka nie ma.',
            'borrowed' => 0,
            'pathname' => 'oszukana',
            'director_id' => 2,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Mr. & Mrs Smith',
            'premiere_year' => 2005,
            'description' => 'Para płatnych zabójców pracujących dla dwóch tajnych agencji wiedzie monotonne małżeńskie życie. Niespodziewanie dostają zlecenie na siebie nawzajem.',
            'borrowed' => 0,
            'pathname' => 'mr_&_mrs_Smith',
            'director_id' => 3,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Zjawa',
            'premiere_year' => 2015,
            'description' => 'Hugh Glass szuka zemsty na ludziach, którzy zostawili go poważnie rannego po ataku niedźwiedzia.',
            'borrowed' => 0,
            'pathname' => 'zjawa',
            'director_id' => 4,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => '21',
            'premiere_year' => 2008,
            'description' => 'Wybitnie zdolni studenci prestiżowej uczelni dzięki wiedzy z zakresu matematyki wygrywają olbrzymie sumy w blackjacka. Tymczasem właściciele kasyn zabezpieczają się przed kolejnymi stratami.',
            'borrowed' => 0,
            'pathname' => '21',
            'director_id' => 5,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Złap mnie, jeśli potrafisz',
            'premiere_year' => 2002,
            'description' => 'Oparta na faktach historia młodego fałszerza, który w latach 60., podając się za pilotów, lekarzy i profesorów, wyłudził z banków ponad 2,5 mln dolarów.',
            'borrowed' => 0,
            'pathname' => 'zlap_mnie_jesli_potrafisz',
            'director_id' => 6,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Titanic',
            'premiere_year' => 1997,
            'description' => 'Rok 1912, brytyjski statek Titanic wyrusza w swój dziewiczy rejs do USA. Na pokładzie emigrant Jack przypadkowo spotyka arystokratkę Rose.',
            'borrowed' => 10,
            'pathname' => 'titanic',
            'director_id' => 7,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Split',
            'premiere_year' => 2016,
            'description' => 'Mężczyzna o mnogiej osobowości porywa trzy nastolatki. Okazuje się, że jedna z jaźni zaczyna dominować nad innymi.',
            'borrowed' => 0,
            'pathname' => 'split',
            'director_id' => 8,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Marsjanin',
            'premiere_year' => 2015,
            'description' => 'Po nieudanej ekspedycji Mark zostaje sam na Marsie. Mimo znikomych zapasów oraz zerwanej łączności z dowództwem mężczyzna stara się przetrwać w trudnych warunkach.',
            'borrowed' => 0,
            'pathname' => 'marsjanin',
            'director_id' => 9,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

        DB::table('film')->insert([
            'title' => 'Stowarzyszenie Umarłych Poetów',
            'premiere_year' => 1989,
            'description' => 'Charyzmatyczny nauczyciel języka angielskiego w konserwatywnym liceum stara się wpoić uczniom miłość do poezji i ideę "carpe diem".',
            'borrowed' => 5,
            'pathname' => 'stowarzyszenie_umarlych_poetow',
            'director_id' => 10,
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
    }
}
