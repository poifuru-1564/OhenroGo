<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Temple;
use App\Models\Topic;
use App\Models\Status;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('posts')->insert([
            

            ## Realistic posts for seeding the database
            [
                'user_id' => DB::table('users')->where('id', 1)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 4)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "I started walking the Shikoku pilgrimage route today, but the sun was unbelievably strong and I honestly felt like I might get heatstroke. The water I brought even turned warm, so I spent a lot of time searching for vending machines and convenience stores as I walked. I also realized that because I’m a bit stooped, carrying a backpack makes my shoulders tense up. Using trekking poles helps keep my back straight, so I’ll walk with them from now on.\nWhen the temples are close together, I can take breaks and it’s not too exhausting, but when the distance stretches to about 5 km, it gets really tough with all the asphalt roads and uphill climbs. Still, I’m glad I managed to reach my target temple today. I’m so grateful to the people who offered me ice water and bananas, to the fellow pilgrims, and to the people who reached out when they heard I had started the pilgrimage. Thanks to all of you, I made it. Your support meant a lot to me.",
                'photo_path' => 'img/for_seed/ryozenji_1.png',
                'title' => "The first day of Ohenro",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 1)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 1)->value('id'),
            ],

            [
                'user_id' => DB::table('users')->where('id', 2)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 1)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "I had udon after visiting the temple, and it was so good I was honestly emotional. Even the water the lady at the udon shop gave me tasted amazing. I was just overwhelmed with gratitude that I managed to reach Shozanji today.",
                'photo_path' => 'img/for_seed/udon_shosanji_12.png',
                'title' => "Udon at Shosanji Temple",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 1)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 12)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 4)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 1)->value('id'),
                'status_id' => DB::table('status')->where('id', 2)->value('id'),
                'body' => "Dinner",
                'photo_path' => 'img/for_seed/dinner.png',
                'title' => "Dinner in Tokushima",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 1)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 23)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 6)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 4)->value('id'),
                'status_id' => DB::table('status')->where('id', 3)->value('id'),
                'body' => "This is the stamp from the last temple! Thanks Ohenro!",
                'photo_path' => 'img/for_seed/stamp_okuboji_88.png',
                'title' => "The stamp at Koyasan (The last temple in Ohenro)",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 4)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 88)->value('id'),
            ],

            [
                'user_id' => DB::table('users')->where('id', 7)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 5)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "First seaside view I have seen in Ohenro!! Goodbye Tokushima!",
                'photo_path' => 'img/for_seed/seaside.png',
                'title' => "Seaside View",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 1)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 23)->value('id'),
            ],

            [
                'user_id' => DB::table('users')->where('id', 8)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 3)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "Thank you for the kindness and warm gifts! At 85 temple.",
                'photo_path' => 'img/for_seed/gift_from_local.png',
                'title' => "Gift by Locals",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 4)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 85)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 9)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 4)->value('id'),
                'status_id' => DB::table('status')->where('id', 2)->value('id'),
                'body' => "Iwamotoji Temple",
                'photo_path' => 'img/for_seed/iwamotoji_37.png',
                'title' => "Iwamotoji temple",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 2)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 37)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 3)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 2)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "Tonight I’m staying at a guesthouse called Sudachian. They have English-speaking staff, so there were many international guests. Out of nine people, only three were Japanese. They also offered shuttle service to the hot spring and even sent our backpacks to the previous and next accommodations. It was incredibly helpful. This place is quite popular, but since I booked early, I was lucky enough to get a room.",
                'photo_path' => null,
                'title' => "Sudachian",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 1)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 12)->value('id'),
            ],

            [
                'user_id' => DB::table('users')->where('id', 5)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 6)->value('id'),
                'status_id' => DB::table('status')->where('id', 3)->value('id'),
                'body' => "Today, I left at 8 a.m. and headed to Okunoin in Koyasan to express my gratitude to Kukai. While I was on the train, we started talking about whether it might be better to visit Kongobuji Temple, the head temple of the Shingon sect, before going to Okunoin. So we decided to visit Kongobuji first, then make our way to Okunoin.\nSince Kukai is the principal deity of Kongobuji, the way you pay your respects is different from the temples in Shikoku, and I found myself a bit unsure of what to do. I already knew I would recite sutras at Okunoin, but today my chanting felt more earnest and heartfelt than usual.\nBecause it was Sunday, there were many people visiting. Most were tourists, so not many people were reciting sutras. In Shikoku, you receive a goshuin as proof of reciting the sutra, so the place where you receive it is called the “nōkyōsho.” But in Koyasan, since few people chant sutras, the sign simply says “goshuinjo.” Seeing that really made me feel that my pilgrimage had come to an end.\nAfter leaving Kongobuji, we headed toward Okunoin. The path leading to Okunoin is lined with the graves of many historical figures, including the Matsudaira family and Toyotomi Hideyoshi. Many of the graves are quite old and covered in moss. But the atmosphere was still and green, and I somehow felt I could understand why so many people chose to be buried there.\nAt Okunoin, I once again wasn’t sure where exactly I should pray. I chanted a sutra in what turned out to be the wrong spot, realized my mistake afterward, and then recited it again properly in front of Kobo Daishi.\nDuring that final chanting, I thought about how much I had grown over the past two months. It made me feel a little lonely realizing that I probably won’t be visiting temples as often anymore. After giving my thanks to Kobo Daishi for watching over me during these two months, I left.\nFrom Koyasan, I went to Osaka, then finally returned to Hiroshima. Once again, to everyone who encouraged me, everyone who offered me hospitality, my family who supported me, and the fellow pilgrims who walked with me to the very end, thank you from the bottom of my heart.",
                'photo_path' => null,
                'title' => "A Final Journey to Koyasan: Giving Thanks at Kongobuji and Okunoin, Reflecting on Two Months of Pilgrimage, and Returning Home with a Full Heart",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 4)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 88)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 10)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 4)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "This morning, it was raining heavily from the start, so I put on my poncho and left the inn. The first temple, Iyadaniji, apparently has 540 steps, so my day began with quite a tough climb. The Daishido, where Kukai is enshrined, is inside a building, and I was able to take my time looking around the hall.\nBy the time I reached the second temple, Mandaraji, the rain had become even heavier, and I visited the temple shivering from the cold. Mandaraji is said to be the oldest building among all the Shikoku pilgrimage temples, but despite its age, it looked remarkably dignified and well preserved.\nThe third temple I visited, Shusshakaji, is the temple where a legend says Kukai threw himself off a cliff to show his vow to save all living beings, and celestial beings caught him. From my perspective, as someone without religious faith, the idea of entrusting your life to something whose existence can’t be confirmed feels unimaginable. But Kukai was devoted to Buddhism, so perhaps that’s why he was able to take such an act of faith. I still don’t have that kind of belief, so I can’t fully understand it, but I find it fascinating to think about what it feels like to entrust yourself to something invisible. And since devotion requires studying and learning about the deity you follow, I imagine people with deep faith must also be diligent and hardworking.\nThe next temple, Konzōji, had a statue of a rabbit. When I looked it up, I found that the rabbit is said to have jumped out of the moon held in the left hand of Gakkō Bosatsu, the Buddhist deity associated with moonlight. The rain was really intense while I was visiting, but the rabbit statue definitely soothed me.\nThe last temple, Zentsuji, is known as the birthplace of Kukai. The name “Zentsu” was the name of Kukai’s father, and after his father passed away, Kukai named the temple where he was born and raised “Zentsuji” in his honor. Since tomorrow is the anniversary of Zentsu’s death, a Kobo Daishi festival will be held on the temple grounds. Even today, when I visited, there were tents set up and flowers decorating the water basins in preparation for the festival. As one of the head temples of the sect, Zentsuji has a vast and impressive precinct. If I have time tomorrow, I’d like to stop by again to see the festival.",
                'photo_path' => null,
                'title' => "A Rain-Soaked Pilgrimage Through the Temples of Kukai: Reflections on Faith, Legend, and the Quiet Beauty of Shikoku",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 3)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 75)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 11)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 5)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "We left the inn at 6:10 this morning, and the staff kindly drove us to the trailhead. Thank you so much for taking us so early in the morning. Since it was still early, it felt quite cold when we started the climb toward Unpenji. The slope was steep and it put a lot of strain on my calves, but a woman who had stayed at the same inn was walking ahead while calling out cheerful chants, which somehow made the climb feel fun. I really appreciated it.\nAfter climbing for about 30 minutes, we reached an open area where the trees had been cut, and the sunlight came through. We had been walking through a dim forest, so seeing the sun made me feel relieved. We arrived at the temple about 90 minutes after we set out. Since it was only around 13 degrees at Unpenji, we finished our visit quickly and set off again. These days, it’s getting harder to spend much time relaxing at the temples.\nAfter leaving Unpenji, we walked for about three hours to Daikōji. The steep downhill steps were tough, and I slipped and landed on my backside twice, but thankfully I wasn’t hurt. We finished visiting much earlier than planned today. I decided to kill some time at a family restaurant. On the way, an elderly woman kindly gave me a nutritional drink. She even went back to her house to get it for me. Thank you so much. It was delicious.\nAt the restaurant, I reviewed our upcoming plans. I didn’t fully take into account that some temples are deep in the mountains, so revising the schedule is proving a bit tricky.\nWe checked into our room at 4 p.m., then went out for dinner at 6. The lady at the restaurant recommended lots of dishes for us. Thank you again. Tomorrow, our lodging is close by, so we’ll only be walking about 17 kilometers. I’ve been feeling sleepy these days, so I think I’ll finally get a good rest tonight.",
                'photo_path' => null,
                'title' => "The highest mountain in Ohenro",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 4)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 66)->value('id'),
            ],
            [
                'user_id' => DB::table('users')->where('id', 12)->value('id'),
                'topic_id' => DB::table('topics')->where('id', 4)->value('id'),
                'status_id' => DB::table('status')->where('id', 1)->value('id'),
                'body' => "Originally, we had planned to walk about 32 kilometers today, but we changed the plan and decided to visit one more temple. As a result, we ended up walking 45 kilometers. We walked 13 kilometers more than expected, so by the time we reached our lodging, we were completely exhausted.\nWe arrived at Dainichi-ji around 1 p.m., and after discussing it together, we decided to visit another temple, Kokubun-ji. It added roughly 9 extra kilometers to our plan, so the afternoon became quite tough and fast-paced. \nWhen we finally arrived at our lodging, we took an hour of free time to rest, then went out for yakiniku. Tomorrow, we’ll be visiting three temples. We’ve started discussing taking a rest day soon, so we’re looking for a good town to stop in. For now, we’re thinking of taking a day or a half-day break around Nishizaki in Kochi Prefecture. If you know of a good place to rest, I’d really appreciate your advice.",
                'photo_path' => null,
                'title' => "The longest day in Ohenro (45km walk)",
                'created_at' => now(),
                'prefecture_id' => DB::table('prefectures')->where('id', 2)->value('id'),
                'temple_id' => DB::table('temples')->where('id', 29)->value('id'),
            ],

        ]);

    }
}
