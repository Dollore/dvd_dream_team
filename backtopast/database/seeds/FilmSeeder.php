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

        DB::table('film')->insert([
            'director_id' => 11,
            'title' => 'Wyspa tajemnic',
            'premiere_year' => 2010,
            'description' => 'Szeryf federalny Daniels stara się dowiedzieć, jakim sposobem z zamkniętej celi w pilnie strzeżonym szpitalu dla chorych psychicznie przestępców zniknęła pacjentka.',
            'borrowed' => 98,
            'pathname' => 'wyspa_tajemnic',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 12,
            'title' => 'Green Book',
            'premiere_year' => 2018,
            'description' => 'Drobny cwaniaczek z Bronksu zostaje szoferem ekstrawaganckiego muzyka z wyższych sfer i razem wyruszają na wielotygodniowe tournée.',
            'borrowed' => 26,
            'pathname' => 'green_book',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 13,
            'title' => 'Narodziny gwiazdy',
            'premiere_year' => 2018,
            'description' => 'Płomienny romans między dogasającą gwiazdą muzyki country a nieznaną piosenkarką zmienia ich życie na zawsze.',
            'borrowed' => 14,
            'pathname' => 'narodziny_gwiazdy',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 14,
            'title' => 'Zaplątani',
            'premiere_year' => 2010,
            'description' => 'Żyjąca na odludziu Roszpunka, której włosy mają magiczną moc, marzy, by poznać świat. Jej przepustką do wolności jest czarujący łotrzyk Flynn.',
            'borrowed' => 7,
            'pathname' => 'zaplatani',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 15,
            'title' => 'Gia',
            'premiere_year' => 1998,
            'description' => 'Burzliwe życie oraz kariera Gii Carangi, niezależnej i pięknej kobiety, która stała się jedną z legend świata mody.',
            'borrowed' => 22,
            'pathname' => 'gia',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 16,
            'title' => 'Kolekcjoner kości',
            'premiere_year' => 1999,
            'description' => 'Ekranizacja powieści Jefferego Deavera. Sparaliżowany i pogrążony w depresji detektyw Lincoln Rhyme zostaje poproszony o pomoc w schwytaniu seryjnego mordercy.',
            'borrowed' => 18,
            'pathname' => 'kolekcjoner_kosci',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 17,
            'title' => 'Złodziej życia',
            'premiere_year' => 2004,
            'description' => 'Agentka FBI pomaga kanadyjskiej policji w ujęciu seryjnego mordercy.',
            'borrowed' => 53,
            'pathname' => 'zlodziej_zycia',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 18,
            'title' => 'Wakacje Jasia Fasoli',
            'premiere_year' => 2007,
            'description' => 'Jaś Fasola wygrywa wycieczkę i wyrusza w pełną przygód podróż do Cannes.',
            'borrowed' => 102,
            'pathname' => 'wakacje_jasia_fasoli',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 19,
            'title' => 'Jaś Fasola: Nadciąga totalny kataklizm',
            'premiere_year' => 1997,
            'description' => 'Nieudolny Jaś Fasola przybywa do Ameryki, gdzie dostaje odpowiedzialne zadanie opieki nad cennym obrazem zakupionym przez muzeum w Los Angeles.',
            'borrowed' => 65,
            'pathname' => 'jas_fasola_nadciaga_totalny_kataklizm',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);
        
        DB::table('film')->insert([
            'director_id' => 20,
            'title' => 'Piraci z Karaibów: Klątwa Czarnej Perły ',
            'premiere_year' => 2003,
            'description' => 'Kowal Will Turner sprzymierza się z kapitanem Jackiem Sparrowem, by odzyskać swoją miłość - porwaną córkę gubernatora.',
            'borrowed' => 48,
            'pathname' => 'piraci_z_karaibow_klatwa_czarnej_perly',
            'created_at' => Carbon::now('Europe/Zurich')->toDateTimeString(),
        ]);

    }
}
