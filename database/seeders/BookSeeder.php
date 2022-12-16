<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $book = new Book();
        $book->title = 'Percy Jackson and the Olympus: The Lightning Thief';
        $book->year_published = '2005';
        $book->genre_tags = 'fantasy, fiction, adventure';
        $book->author = 'Rick Riordan';
        $book->description="Percy Jackson is a good kid, but he can't seem to focus on his schoolwork or control his temper. And lately, being away at boarding school is only getting worse - Percy could have sworn his pre-algebra teacher turned into a monster and tried to kill him. When Percy's mom finds out, she knows it's time that he knew the truth about where he came from, and that he go to the one place he'll be safe. She sends Percy to Camp Half Blood, a summer camp for demigods (on Long Island), where he learns that the father he never knew is Poseidon, God of the Sea. Soon a mystery unfolds and together with his friends—one a satyr and the other the demigod daughter of Athena - Percy sets out on a quest across the United States to reach the gates of the Underworld (located in a recording studio in Hollywood) and prevent a catastrophic war between the gods.";
        $book->status= '0';
        $book->save();

        $book = new Book();
        $book->title = 'The Hunger Games';
        $book->year_published = '2008';
        $book->genre_tags = 'dystopia, fiction, romance';
        $book->author = 'Suzanne Collins';
        $book->description="In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV.

        Sixteen-year-old Katniss Everdeen, who lives alone with her mother and younger sister, regards it as a death sentence when she steps forward to take her sister's place in the Games. But Katniss has been close to dead before—and survival, for her, is second nature. Without really meaning to, she becomes a contender. But if she is to win, she will have to start making choices that weight survival against humanity and life against love.";
        $book->status= '1';
        $book->user_id= 1;
        $book->date_borrowed= Carbon::now()->format('Y-m-d H:i:s');
        $book->date_returned= Carbon::parse('2022-05-13');
        $book->save();

        $book = new Book();
        $book->title = 'Divergent';
        $book->year_published = '2005';
        $book->genre_tags = 'fantasy, fiction, science fiction';
        $book->author = 'Veronica Roth';
        $book->description="In Beatrice Prior's dystopian Chicago world, society is divided into five factions, each dedicated to the cultivation of a particular virtue—Candor (the honest), Abnegation (the selfless), Dauntless (the brave), Amity (the peaceful), and Erudite (the intelligent). On an appointed day of every year, all sixteen-year-olds must select the faction to which they will devote the rest of their lives. For Beatrice, the decision is between staying with her family and being who she really is—she can't have both. So she makes a choice that surprises everyone, including herself.

        During the highly competitive initiation that follows, Beatrice renames herself Tris and struggles alongside her fellow initiates to live out the choice they have made. Together they must undergo extreme physical tests of endurance and intense psychological simulations, some with devastating consequences. As initiation transforms them all, Tris must determine who her friends really are—and where, exactly, a romance with a sometimes fascinating, sometimes exasperating boy fits into the life she's chosen. But Tris also has a secret, one she's kept hidden from everyone because she's been warned it can mean death. And as she discovers unrest and growing conflict that threaten to unravel her seemingly perfect society, she also learns that her secret might help her save those she loves . . . or it might destroy her.";
        $book->status= '0';
        $book->save();

        $book = new Book();
        $book->title = 'The Fault in Our Stars';
        $book->year_published = '2012';
        $book->genre_tags = 'romance, fiction, teen';
        $book->author = 'Suzanne Collins';
        $book->description="Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel's story is about to be completely rewritten.

        Insightful, bold, irreverent, and raw, The Fault in Our Stars is award-winning author John Green's most ambitious and heartbreaking work yet, brilliantly exploring the funny, thrilling, and tragic business of being alive and in love.";
        $book->status= '1';
        $book->date_borrowed= Carbon::now()->format('Y-m-d H:i:s');
        $book->date_returned= Carbon::parse('2022-05-13');
        $book->save();
    }
}
