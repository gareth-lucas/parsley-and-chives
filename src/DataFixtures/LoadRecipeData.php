<?php
namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Ingredient;
use App\Entity\UnitOfMeasure;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use App\Entity\Recipe;
use App\Entity\RecipeStep;
use App\Entity\Preparation;
use App\Entity\RecipeIngredient;

class LoadRecipeData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $recipes = [
            [
                'id' => '1',
                'language' => 'EN',
                'title' => 'Oyster mushroom soup with noodles',
                'description' => 'For vegan option use noodles without eggs in them.',
                'cooking_time' => '35',
                'preparation_time' => '10',
                'steps' => [
                    'Chop up the onion and cut the mushrooms in thin slices.',
                    'Heat the oil in a sausepan and saute the onion on medium heat for about 5 min., then add the mushrooms and saute for another 5 min.',
                    'Add boiling stock, cover, and simmer for about 20 min. Add noodles, salt and pepper to taste, stir well and cook for 3 min. ',
                    'Chop up the parsley, pour the soup in serving bowls, sprinkle with a little bit of parsley and serve.',
                    '',
                    '',
                    '',
                    ''
                ],
                'type' => ['2','B','D','1']
            ],
            [
                'id' => '1',
                'language' => 'IT',
                'title' => 'Zuppa di funghi ostrica con noodles',
                'description' => 'Blah',
                'cooking_time' => '35',
                'preparation_time' => '10',
                'steps' => [
                    'Tritate finemente la cipolla e tagliate i funghi in fette sottili.',
                    'Scaldate olio in una pentola e soffriggete la cipola sul fuoco medio per 5 min., aggiungete i funghi e soffriggete per altri 5 min.',
                    'Versate il brodo bollente, coprite, e lasciate sobbollire per circa 20 min. Aggiungete i noodles, sale e pepe q.b., mescolate bene e cuocete per 3 min. ',
                    'Tritate finemente il prezzemolo, distribuite la zuppa in ciotole, cospargete un pÃ² di prezzemolo e servite.',
                    '',
                    '',
                    '',
                    ''
                ],
                'type' => ['2','B','D','1']
            ],
            [
                'id' => '1',
                'language' => 'RU',
                'title' => 'Ð¡ÑƒÐ¿ Ð¸Ð· Ð²ÐµÑˆÐµÐ½ÐºÐ¸ Ñ� Ð»Ð°Ð¿ÑˆÐ¾Ð¹',
                'description' => '',
                'cooking_time' => '35',
                'preparation_time' => '10',
                'steps' => [
                    'ÐœÐµÐ»ÐºÐ¾ Ð½Ð°Ñ€ÐµÐ¶ÑŒÑ‚Ðµ Ð»ÑƒÐº Ð¸ Ð¿Ð¾Ñ€ÐµÐ¶ÑŒÑ‚Ðµ Ð³Ñ€Ð¸Ð±Ñ‹ Ð½Ð° Ð½ÐµÐ±Ð¾Ð»ÑŒÑˆÐ¸Ðµ ÐºÑƒÑ�Ð¾Ñ‡ÐºÐ¸.',
                    'Ð Ð°Ð·Ð¾Ð³Ñ€ÐµÐ¹Ñ‚Ðµ Ð¼Ð°Ñ�Ð»Ð¾ Ð² ÐºÐ°Ñ�Ñ‚Ñ€ÑŽÐ»Ðµ Ð¸ Ð¾Ð±Ð¶Ð°Ñ€ÑŒÑ‚Ðµ Ð»ÑƒÐº Ð½Ð° Ñ�Ñ€ÐµÐ´Ð½ÐµÐ¼ Ð¾Ð³Ð½Ðµ Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ 5 Ð¼Ð¸Ð½., Ð´Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ð³Ñ€Ð¸Ð±Ñ‹ Ð¸ Ð¾Ð±Ð¶Ð°Ñ€ÑŒÑ‚Ðµ Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ ÐµÑ‰Ðµ 5 Ð¼Ð¸Ð½.',
                    'Ð’Ð»ÐµÐ¹Ñ‚Ðµ ÐºÐ¸Ð¿Ñ�Ñ‰Ð¸Ð¹ Ð±ÑƒÐ»ÑŒÐ¾Ð½, Ð·Ð°ÐºÑ€Ð¾Ð¹Ñ‚Ðµ ÐºÑ€Ñ‹ÑˆÐºÐ¾Ð¹, Ð¸ Ð²Ð°Ñ€Ð¸Ñ‚Ðµ Ð½Ð° Ñ�Ð»Ð°Ð±Ð¾Ð¼ Ð¾Ð³Ð½Ðµ Ð¾ÐºÐ¾Ð»Ð¾ 20 Ð¼Ð¸Ð½. Ð”Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ð»Ð°Ð¿ÑˆÑƒ, Ñ�Ð¾Ð»ÑŒ Ð¸ Ð¿ÐµÑ€ÐµÑ† Ð¿Ð¾ Ð²ÐºÑƒÑ�Ñƒ, Ñ…Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¿ÐµÑ€ÐµÐ¼ÐµÑˆÐ°Ð¹Ñ‚Ðµ Ð¸ Ð²Ð°Ñ€Ð¸Ñ‚Ðµ 3 Ð¼Ð¸Ð½. ',
                    'ÐœÐµÐ»ÐºÐ¾ Ð¿Ð¾Ñ€ÑƒÐ±Ð¸Ñ‚Ðµ Ð¿ÐµÑ‚Ñ€ÑƒÑˆÐºÑƒ, Ñ€Ð°Ð·Ð»ÐµÐ¹Ñ‚Ðµ Ñ�ÑƒÐ¿ Ð² Ð¿Ð¾Ñ€Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ðµ Ð¼Ð¸Ñ�ÐºÐ¸, Ð¿Ð¾Ñ�Ñ‹Ð¿ÑŒÑ‚Ðµ Ð¿ÐµÑ‚Ñ€ÑƒÑˆÐºÐ¾Ð¹ Ð¸ Ð¿Ð¾Ð´Ð°Ð²Ð°Ð¹Ñ‚Ðµ Ðº Ñ�Ñ‚Ð¾Ð»Ñƒ.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '2',
                'language' => 'EN',
                'title' => 'Quick cocoa biscuits',
                'description' => '',
                'cooking_time' => '12',
                'preparation_time' => '10',
                'steps' => [
                    'Sieve the flour and yeast, add all other ingredients and form a dough.',
                    'Cover a tray with baking paper, form roundshaped biscuits, distribute them on a tray and bake in the oven at 180 for about 12 min.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ],
                'type' => ['S','P']
            ],
            [
                'id' => '2',
                'language' => 'IT',
                'title' => 'Biscotti di cacao veloci',
                'description' => '',
                'cooking_time' => '12',
                'preparation_time' => '10',
                'steps' => [
                    'Setacciate la farina con il lievito, aggiungete tutti gli altri ingredienti e formate il composto.',
                    'Coprite la teglia con carta da forno, formate i rrotondi biscotti, sistemateli sulla teglia e cucinate nel forno a 180 per 12 min circa.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ],
                'type' => ['S','P']
            ],
            [
                'id' => '2',
                'language' => 'RU',
                'title' => 'ÐŸÐµÑ‡ÐµÐ½ÑŒÐµ Ñ� ÐºÐ°ÐºÐ°Ð¾ Ð±Ñ‹Ñ�Ñ‚Ñ€Ð¾Ð³Ð¾ Ð¿Ñ€Ð¸Ð³Ð¾Ñ‚Ð¾Ð²Ð»ÐµÐ½Ð¸Ñ�',
                'description' => '',
                'cooking_time' => '12',
                'preparation_time' => '10',
                'steps' => [
                    'ÐŸÑ€Ð¾Ð¿ÑƒÑ�Ñ‚Ð¸Ñ‚Ðµ Ñ‡ÐµÑ€ÐµÐ· Ñ�Ð¸Ñ‚Ð¾ Ð¼ÑƒÐºÑƒ Ñ� Ð´Ñ€Ð¾Ð¶Ð¶Ð°Ð¼Ð¸, Ð´Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ð²Ñ�Ðµ Ð¾Ñ�Ñ‚Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ð¸Ð½Ð³Ñ€ÐµÐ´Ð¸ÐµÐ½Ñ‚Ñ‹ Ð¸ Ð·Ð°Ð¼ÐµÑ�Ð¸Ñ‚Ðµ Ñ‚ÐµÑ�Ñ‚Ð¾.',
                    'Ð�Ð°ÐºÑ€Ð¾Ð¹Ñ‚Ðµ Ð¿Ð¾Ð´Ð´Ð¾Ð½ Ð±ÑƒÐ¼Ð°Ð³Ð¾Ð¹ Ð´Ð»Ñ� Ð²Ñ‹Ð¿ÐµÑ‡ÐºÐ¸, Ñ�Ñ„Ð¾Ñ€Ð¼Ð¸Ñ€ÑƒÐ¹Ñ‚Ðµ ÐºÑ€ÑƒÐ³Ð»Ñ‹Ðµ Ð¿ÐµÑ‡ÐµÐ½ÑŒÑ�, Ñ€Ð°Ð·Ð¼ÐµÑ�Ñ‚Ð¸Ñ‚Ðµ Ð¸Ñ… Ð½Ð° Ð¿Ð¾Ð´Ð´Ð¾Ð½Ðµ Ð¸ Ð²Ñ‹Ð¿ÐµÐºÐ°Ð¹Ñ‚Ðµ Ð² Ð´ÑƒÑ…Ð¾Ð²ÐºÐµ Ð¿Ñ€Ð¸ 180 Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ð½Ð¾ 12 Ð¼Ð¸Ð½.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '3',
                'language' => 'EN',
                'title' => 'Stewed veal with chestnuts',
                'description' => 'This is an autumn dish, cooked during the season of chestnuts and enriched with truffle flavour.',
                'cooking_time' => '120',
                'preparation_time' => '15',
                'steps' => [
                    'Peel and chop a carrot and an onion, fry with a bit of butter and oil for 5 min. Add the meat and let it brown for 5 min., turning it over in order to brown on all sides. Add boiling stock, milk, salt and pepper. Cover and stew on medium heat for 1,5 hr, adding more mixture of stock and milk, if necessary.',
                    'Make a cut on the chestnuts with a knife and cook them in the oven at max temperature (220-250) for 15 min or until they are cooked, the cut opens and the skin can be easily removed.',
                    'In the middle of cooking, after about 50 min, add peeled chestnuts to the stew. A few minutes before it\'s ready add a tbsp of the truffle paste. Serve the veal with the chestnuts and the sauce, and roast potatoes as a side dish.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '3',
                'language' => 'IT',
                'title' => 'Umido di vitello con castagne',
                'description' => 'Questo Ã¨ un piatto autunnale, adatto alla stagione delle castagne e arricchito dall\'aroma del tartufo.',
                'cooking_time' => '120',
                'preparation_time' => '15',
                'steps' => [
                    'Pulite e tritate una carota e una cipolla, fate appassire per 5 minuti in una noce di burro con un filo d\'olio. Aggiungete la carne e rosolatela per 5 minuti, voltandola per farla colorire da tutti i lati. Bagnate con il brodo bollente e aggiungete il latte, sale e pepe. Mettete il coperchio e lasciate stufare a fuoco moderato per circa un\'ora e mezza, allungando il sugo, se si dovesse restringere troppo, con altro brodo misto a latte.',
                    'Incidete la buccia delle castagne con un coltello e arrostitele nel forno, scaldato al massimo (220-250), per 15 minuti, o finche sono cotte e la buccia si apre e si stacca con facilitÃ .',
                    'A metÃ  cottura, dopo circa 50 minuti, unite allo stufato le castagne sbucciate. Poco prima di spegnere, profumate con un cucchiaio di pasta di tartufo. Servite il vitello con le castagne e la salsa, accompagnando a piacere con patate arrosto.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '4',
                'language' => 'EN',
                'title' => 'Red potatoes',
                'description' => 'This is a simple but delicious side dish.',
                'cooking_time' => '25',
                'preparation_time' => '10',
                'steps' => [
                    'Wash the potatoes under running water and cut them into wedges.',
                    'Heat the oil in a pan and add the potatoes, cumin, marjoram and black pepper. Mix well and cook on medium-low heat for about 20 min, stirring often on order to cook potatoes evenly on all sides.',
                    'At the end of cooking time add crushed garlic and salt, mix well, and cook for another 5 min. The potatoes should be soft inside and a bit crispy outside.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '4',
                'language' => 'IT',
                'title' => 'Patate rosse saltate in padella',
                'description' => 'Semplice e gustoso contorno',
                'cooking_time' => '25',
                'preparation_time' => '10',
                'steps' => [
                    'Lavate le patate sotto l\'acqua corrente e tagliatele a spicchi.',
                    'Scaldate l\'olio in una padella e unite le patate, cumuno, maggiorana e pepe nero. Mescolate bene e cuocete a fuoco medio-basso per 20 min circa, girando spesso per farle rosotare da tutti i lati.',
                    'A fine cottura mettete l\'aglio schiacciatto e sale, mescolate bene e lasciate cucinare per altri 5 min. Dovranno risultare morbide dentro e un pÃ² croccante fuori.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '5',
                'language' => 'RU',
                'title' => 'Ð‘Ð»Ð¸Ð½Ñ‡Ð¸ÐºÐ¸ Ñ� ÐºÑ€Ð°Ñ�Ð½Ð¾Ð¹ Ð¸ÐºÑ€Ð¾Ð¹',
                'description' => ' ',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Ð Ð°Ñ�Ñ‚Ð¾Ð¿Ð¸Ñ‚Ðµ Ð¼Ð°Ñ�Ð»Ð¾ Ð¸ Ð´Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ð² Ð¼ÑƒÐºÑƒ. ÐžÑ‚Ð´ÐµÐ»Ð¸Ñ‚Ðµ Ð¶ÐµÐ»Ñ‚ÐºÐ¸ Ð¾Ñ‚ Ð±ÐµÐ»ÐºÐ¾Ð² Ð¸ Ð´Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ð² Ð¼ÑƒÐºÑƒ. ÐžÑ‚Ð»Ð¾Ð¶Ð¸Ñ‚Ðµ Ð±ÐµÐ»ÐºÐ¸ Ð² Ñ�Ñ‚Ð¾Ñ€Ð¾Ð½Ñƒ.',
                    'Ð�Ð°Ñ‡Ð¸Ð½Ð°Ð¹Ñ‚Ðµ Ñ€Ð°Ð·Ð¼ÐµÑˆÐ¸Ð²Ð°Ñ‚ÑŒ, Ð¿Ð¾Ñ�Ñ‚ÐµÐ¿ÐµÐ½Ð½Ð¾ Ð´Ð¾Ð±Ð°Ð²Ð»Ñ�Ñ� Ð¼Ð¾Ð»Ð¾ÐºÐ¾, Ð¼Ð°Ñ�Ñ�Ð° Ð´Ð¾Ð»Ð¶Ð½Ð° Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒÑ�Ñ� Ð´Ð¾Ñ�Ñ‚Ð°Ñ‚Ð¾Ñ‡Ð½Ð¾ Ð¶Ð¸Ð´ÐºÐ¾Ð¹. Ð’Ð¼ÐµÑˆÐ°Ð¹Ñ‚Ðµ Ð²Ð·Ð±Ð¸Ñ‚Ñ‹Ðµ Ð² Ð¿ÐµÐ½Ñƒ Ð±ÐµÐ»ÐºÐ¸ Ð¸ Ñ�Ð¾Ð»ÑŒ Ð¸ Ñ…Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¿ÐµÑ€ÐµÐ¼ÐµÑˆÐ°Ð¹Ñ‚Ðµ.',
                    'Ð Ð°Ð·Ð¾Ð³Ñ€ÐµÐ¹Ñ‚Ðµ Ñ�Ð¼Ð°Ð·Ð°Ð½Ð½ÑƒÑŽ Ð¼Ð°Ñ�Ð»Ð¾Ð¼ Ñ�ÐºÐ¾Ð²Ð¾Ñ€Ð¾Ð´ÐºÑƒ, Ð·Ð°Ñ‡ÐµÑ€Ð¿Ð½Ð¸Ñ‚Ðµ Ñ‚ÐµÑ�Ñ‚Ð¾ Ð¿Ð¾Ð»Ð¾Ð²Ð½Ð¸ÐºÐ¾Ð¼ Ð¸ Ñ€Ð°Ð²Ð½Ð¾Ð¼ÐµÑ€Ð½Ð¾ Ñ€Ð°Ñ�Ð¿Ñ€ÐµÐ´ÐµÐ»Ð¸Ñ‚Ðµ Ð½Ð° Ñ�ÐºÐ¾Ð²Ð¾Ñ€Ð¾Ð´ÐºÐµ. Ð’Ñ‹Ð¿ÐµÐºÐ°Ð¹Ñ‚Ðµ Ñ‚Ð¾Ð½ÐºÐ¸Ðµ Ð±Ð»Ð¸Ð½Ñ‡Ð¸ÐºÐ¸ Ð½Ð° Ð¾Ð±ÐµÐ¸Ñ… Ñ�Ñ‚Ð¾Ñ€Ð¾Ð½Ð°Ñ…, Ð½Ð° Ñ�Ñ€ÐµÐ´Ð½Ðµ-Ð²Ñ‹Ñ�Ð¾ÐºÐ¾Ð¼ Ð¾Ð³Ð½Ðµ. ',
                    'Ð Ð°Ð·Ð¼ÐµÑ�Ñ‚Ð¸Ñ‚Ðµ Ð½Ð° ÐºÐ°Ð¶Ð´Ñ‹Ð¹ Ð±Ð»Ð¸Ð½Ñ‡Ð¸Ðº Ð¸ÐºÑ€Ñƒ Ð² Ð»Ð¸Ð½Ð¸ÑŽ Ð¸ Ð·Ð°ÐºÐ°Ñ‚Ð°Ð¹Ñ‚Ðµ Ñ€Ð¾Ð»Ð¸ÐºÐ¾Ð¼. Ð¡Ñ€Ð°Ð·Ñƒ Ð¶Ðµ Ð¿Ð¾Ð´Ð°Ð²Ð°Ð¹Ñ‚Ðµ Ðº Ñ�Ñ‚Ð¾Ð»Ñƒ.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '5',
                'language' => 'EN',
                'title' => 'Pancakes with red caviar',
                'description' => '',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Melt the butter and add it to the flour. Separate yolks from whites and add them to the flour with butter. Set the whites aside.',
                    'Start to mix all together, gradually adding milk, the pancake mixture should be quite liquid. Whip the whites and add them to the mixture, also add salt to taste, and mix all together.',
                    '3.Heat the butter in a frying pan, pick some mixture with a ladle and distribute evenly on the pan surface. Cook thin pancakes on both sides, on medium-high heat.',
                    'Put caviar on a pancake in a line and roll the pancake.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '5',
                'language' => 'IT',
                'title' => 'Crespelle al caviale rosso',
                'description' => '',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Fate sciogliere il burro e versatelo in farina. Separate i tuorli dagli albumi e aggiungeteli alla farina con il burro. Tenete gli albumi da parte.',
                    'Cominciate a mescolare il tutto, aggiungendo gradualmente il latte, la miscela per le crespelle deve risultare piuttosto liquida. Montate gli albumi, versateli nella miscela, salate a piacere, e mescolate bene.',
                    'Fate sciogliere il burro nella padella, prendete la pastella con un mestolo, e distribuitela uniformemente sulla padella. Friggete le crespelle sottili su entrambi i lati, sul fuoco medio-alto.',
                    'Mettete il caviale in linea su una crespella e arrotolatela. ',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '6',
                'language' => 'EN',
                'title' => 'Orecchiette with turnip greens',
                'description' => '',
                'cooking_time' => '20',
                'preparation_time' => '20',
                'steps' => [
                    'Bring water with coarse salt to boil in a pan. Meanwhile, clean turnip greens discarding damaged parts, big leaves stems and end bits of smaller stems. Wash the turnip greens, cut them in pieces about 2 cm big, and throw in the pan with boiling water together with orecchiette. If you use fresh orecchette, add them 5 min after you put in turnip greens. Cook pasta for the time indicated on a package.',
                    'In the meantime heat some olive oil in a wide frying pan, add chopped garlic and let it brown, then turn off the gas, add anchovies and stir well to let them blend into the rest of the sauce. When orecchiette are done, drain them, putting some liquid aside, and add them to the sauce. Turn on the gas, and stir pasta well for a couple of min on high heat to let it absorb the flavour. In case orecchiette are a bit dry, add a ladle of liquid which you kept aside, turn off the gas, add a little bit of chilli pepper to taste, and stir again. Serve orecchiette with turnip greens immediately while they are still hot.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '6',
                'language' => 'IT',
                'title' => 'Orecchiette con cime di rapa',
                'description' => '',
                'cooking_time' => '20',
                'preparation_time' => '20',
                'steps' => [
                    'Portate a bollore una pentola d\'acqua con il sale grosso. Nel frattempo, pulite le cime di rapa eliminando le parti sciupate, i gambi piÃ¹ grossi e la parte finale di quelli piÃ¹ teneri.Lavate le cime di rapa e tagliatele a pezzeti di un paio di cm, dopodichÃ¨ gettatele nell\'acqua bollente insieme alle orecchiette. Se usate le orecchiette fresche, mettetele in pentola 5 min dopo le cime di rapa. Cuocete la pasta per il tempo, indicato sulla confezione.',
                    'Intanto, preparate il soffritto: ponete sul fuoco la padella ampia, versate un filo d\'olio, lasciatelo scaldare e unite l\'aglio tritato, lasciate dorare, spegnete il fuoco e aggiungete le acciughe sott\'olio, mescolando bene per farli scioglere. Una volta cotte le orecchiette con le cime di rapa, scolate bene, conservando un pÃ² di acqua di cottura, e versate tutto in padella con il soffritto. Mantecate a fuoco vivace per un paio di minuti e mescolate bene per insaporire le orecchiette. Se vi risultano asciutte, aggiungete un mestolo di acqua di cottura, spegnete il fuoco e unite il peperoncino a piacere. Servite le orecchiette con cime di rapa ben calde.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '7',
                'language' => 'EN',
                'title' => 'Onion soup',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '25',
                'steps' => [
                    'Peel and trim the onions and slice them thinly. In a large saucepan heat a big chunk of butter with a generous drizzle of olive oil, and add the onions with 2 bay leaves. Let them brown, stirring well, for 6 min. Meanwhile boil the water.',
                    'Sprinkle the flour on the onions and let it toast for 4 min, stirring constantly. Pour boiling water, stir well in order to avoid the lumps to form. Flavour the soup with a generous pinch of salt and let it cook for 40 min. As an option you can enhance the flavour of soup by using vegetable stock instead of just water.',
                    'Cut emmental in slices of 2-3 mm. Slice the bread and toast it in the oven at 200 for about 5 min, until it gets golden brown.',
                    'Place bread slices into individual ovenproof soup pots and fill them with soup, after having removed the bay leaves. Add emmental on top and put the pots in the oven at 200 for 3-4 min to let the cheese melt. Serve the onion soup straight in the individual pots.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '7',
                'language' => 'IT',
                'title' => 'Zuppa di cipolle',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '25',
                'steps' => [
                    '1.Sbucciate e spuntate le cipolle e tagliatele a fette sottili.In una capace casseruola scaldate una grossa noce di burro con un generoso filo d\'olio, e mettele le cipolle e 2 foglie di alloro. Fatele rosolare, mescolando, per 6 min. Nel frattempo, portate a bollore l\'acqua.',
                    'Spolverizzate la farina sulle cipolle e fatela tostare per 4 min., mescolando in continuazione. Versate l\'acqua bollente, mescolando bene perchÃ¨ non si formino grumi. Insaporite la zuppa con un pizzicone di sale e lasciatela cuocere per 40 min. Per rendere la zuppa piÃ¹ saporita come variante si puÃ² usare il brodo vegetale.',
                    'Tagliate l\'emmental a filetti di 2-3 mm. Tagliate il pane a fette e fatele tostare nel forno a 200 per circa 5 mni, finchÃ¨ sono ben abbrustolite. ',
                    'Sistemate le fette di pane nelle zuppierine e versate sopra la zuppa, dopo aver eliminato l\'alloro. Mettete l\'emmental, passate le zuppierine nel forno a 200 per 3-4 min, finchÃ¨ il formaggio Ã¨ fuso e dorato. Servite subito.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '8',
                'language' => 'EN',
                'title' => 'Cream of seleriac, carrots and potatoes',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '25',
                'steps' => [
                    'Cleanse the vegetables and chop them up. Heat the oil in a casserole and fry the vegetables on low heat for 10 min, stirring every now an then. Add stock, salt, pepper, cover the casserole and simmer for 40 min.',
                    'Once cooked, remove the casserole from gas and let the cream cool down, then blend it.',
                    'Put it again on gas to heat up. Distribute the cream in soup bowls, sprinkle with a bit of chopped parsley and serve.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '8',
                'language' => 'IT',
                'title' => 'Crema di sedano rapa, carote e patate',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '25',
                'steps' => [
                    'Mondate le verdure e tritatele. In una casseruola fate scaldare l\'olio e appassitevi le verdure per 10 min. su fiamma dolce, mescolando ogni tanto. Bagnatele con il brodo, salatele, pepatele, copritele e lasciatele sobbollire per 40 min.',
                    'Trascorso il tempo di cottura, togliete la casseruola dal fuoco e fate intiepidire la crema, poi frullatela. ',
                    'Rimettete la crema sul fuoco a scaldare. Distribuitela in ciotole da portata individuali, spolverizzatela con un pÃ² di prezzemolo tritato e servitela.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '9',
                'language' => 'EN',
                'title' => 'Stuffed aubergines',
                'description' => '',
                'cooking_time' => '50',
                'preparation_time' => '25',
                'steps' => [
                    'Preheat the oven to 180 C. Wash the aubergines, trim the ends, and scoop out the pulp with a teaspoon, leaving 1 cm thick border, and put the pulp onto a board.',
                    'Grease a baking tray with 2 tbsp of oil. Brush the inside of aubergines with 2 tbsp of oil, sprinkle some salt and place them on the tray. Cook in the oven for 20 min.',
                    'Meanwhile cut the salmon in small cubes. Soak the raisins in hot water, then drain and dry them. Chop the pulp of aubergines up with olives and sautÃ¨ in a frying pan with 2 tbsp of oil and a slightly squashed clove of garlic for 5 min. Add raisins, capers and 2 tbsp of tomato sauce, stir and cook for another 5 min. Eliminate garlic, adjust with salt and pepper to your taste, and take off the heat.',
                    'Stir salmon into hot sauce and fill aubergines with this mixture. Pour the remaining tomato sauce on a backing tray and flavour it with a remaining clove of garlic, sliced, and the olive oil. Add the aubergines, put them again into the oven and cook for 30 min.',
                    'Once the cooking time is finished, take the aubergines out of the oven, garnish with fresh basil leaves and serve.',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '9',
                'language' => 'IT',
                'title' => 'Melanzane farcite',
                'description' => '',
                'cooking_time' => '50',
                'preparation_time' => '25',
                'steps' => [
                    'Scaldate il forno a 180. Lavate le melanzane, spuntatele e scavatele della polpa con l\'aiuto di un cucchiaino, lasciando un bordo di 1 cm di spessore, e mettete la polpa estratta su un tagliere.',
                    'Ungete una pirofila con due cucchiai di olio. Spennellate l\'interno delle melanzane con due cucchiai di olio, salatele e trasferitele nella pirofila. Infornatele e lasciate cuocere per 20 min.',
                    'Nel frattempo tagliate il salmone a cubetti. Fate rinvenire l\'uvetta in acqua calda, poi scolatela e asciugatela. Tritate la polpa delle melanzane con le olive e fatela appassire in una padella con due cucchiai di olio e uno spicchio di aglio schiacciato, per 5 min. Unite l\'uvetta, i capperi e 2 cucchiai di polpa di pomodoro e proseguite la cottura per altri 5 min. Eliminate lo spicchio d\'aglio, regolate di sale, pepate e togliete dal fuoco. ',
                    'Mescolate i pezzetti di salmone al sugo preparato caldo e con il composto ottenuto farcite le melanzane. Versate sul fondo della pirofila la polpa di pomodoro rimanente e insaporitela con lo spicchio di aglio rimasto tagliato a fettine e con il resto dell\'olio. Ponete sopra le melanzane, infornate di nuovo e lasciate cuocere il tutto per 30 min.',
                    'Trascorso il tempo di cottura indicato, togliete le melanzane dal forno, profumatele con il basilico e servitele.',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '10',
                'language' => 'EN',
                'title' => 'Focaccia with olives, capers and rosemary',
                'description' => 'this recipe needs 2,5 hrs for the dough to rise',
                'cooking_time' => '20',
                'preparation_time' => '20',
                'steps' => [
                    'In a little bowl put yeast and 2 tsp of sugar, and dissolve in about 20 ml of water. Dissolve fine salt in the rest of warm water, and pour in 40 ml of olive oil.',
                    'Put flour in a bowl and add the water with yeast and sugar, and the water with salt and oil and knead for about 10 min (or 3-4 min with a food processor), until you obtain smooth dough. Move the dough to a pastry board with a bit of flour and form a ball from it.',
                    'Pour 40 ml of olive oil onto the centre of a baking tin and put dough on it. Place the baking tin into the oven and leave it to rise for 1.5 hours (the oven should be switched off and closed). Take out the dough, which should have doubled in volume, and start working it with your hands, greased with oil, to prevent sticking, stretching the dough to cover the entire surface of the tin. With your fingertips imprint the signs on the surface to form the classic "holes", and let it rise again for 30 min.',
                    'Sprinkle some coarse salt onto the surface of the dough, and pour the rest 20 ml of oil, to cover the "holes". Leave the dough to rise for another 30 min. Meanwhile, chop up rosemary and capers.',
                    'In the meantime, pre-heat the oven to 200 C. Complete your focaccia with chopped capers and rosemary and also distribute the olives evenly on the surface. Spray some water on the surface and bake the focaccia in the oven for 20 min. When it is ready, take out of the oven and let it cool down before serving.',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '10',
                'language' => 'IT',
                'title' => 'Focaccia con olive, capperi e rosmarino',
                'description' => '',
                'cooking_time' => '20',
                'preparation_time' => '20',
                'steps' => [
                    'Ponete in una ciotola il lievito sbriciolato e 2 cucchiaini di zucchero, stemperate tutto in poca acqua di circa 20 ml, finchÃ© il lievito Ã¨ sciolto. Sciogliete il sale fino nella restante acqua tiepida, e versate 40 ml dell\'olio di oliva.',
                    'Disponete la farina in una ciotola e versate sopra l\'acqua con il lievito e lo zucchero, l\'acqua con il sale e l\'olio, l\'acqua restante e impastate a mano per 10 min circa (oppure usate il robot da cucina per 3-4 min), fino ad ottenere un impasto omogeneo. Ponete l\'impasto su una spianatoia e lavoratelo un pÃ² con la farina per dargli la forma di una palla.',
                    'Versate in una teglia altri 40 ml dell\'olio e posizionate l\'impasto sull\'olio al centro della teglia. Fate lievitare per 1.5 ore in un forno spento e chiuso. Trascorso questo tempo prendete l\'impasto, che dovrÃ  raddoppiarsi in volume, e lavoratelo con le mani impregnate d\'olio per evitare che si appiccicchi, quindi stendetelo su tutta la superficie della teglia. Impremete con i polpastrelli dei segni per formare i classici "buchi", e fate lievitare di nuovo per 30 min.',
                    'Riprendete l\'impasto e cospargete con una manciata di sale grosso e con i restanti 20 ml di olio, che dovrÃ  coprire i "buchi". Fate lievitare l\'impasto ancora per 30 min. Nel frattempo preparate il trito di rosmarino e capperi. ',
                    'Nel frattempo scaldate il forno a 200 gradi. Completate la focaccia con il trito di capperi e rosmarino e disponete le olive. Bagnate la superficie con dell\'acqua vaporizzata e infornate la focaccia per 20 min. Estraete la teglia dal forno e fate intiepidire su una gratella prima di servire.',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '11',
                'language' => 'EN',
                'title' => 'Conchigliette with mackerel and mushrooms',
                'description' => '',
                'cooking_time' => '20',
                'preparation_time' => '10',
                'steps' => [
                    'Put water for pasta to boil. Chop up the mushrooms and fry them in olive oil with a clove of crushed garlic for 5 min. Add mackerel, tomato sauce, basil, stir well and let cook for 10 min., stirring every now and again.',
                    'Cook pasta for the time, indicated on the pack, drain it, and add to the sauce. Mix everything together and stir for a minute in order that pasta absorbs flavour. Your pasta is ready!',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '11',
                'language' => 'IT',
                'title' => 'Conchigliette con sgombro e funghi',
                'description' => '',
                'cooking_time' => '20',
                'preparation_time' => '10',
                'steps' => [
                    'Portate a bollore l\'acqua per pasta. Nel frattempo tagliate i funghi a pezzetti e soffriggeteli nell\'olio di oliva con un spicchio d\'aglio schiacciato per 5 min. Aggiungete i filetti di sgombro, passata di pomodoro, basilico, mescolate bene e lasciate cuocere per 10 min., mescolando ogni tanto.',
                    'Lessate la pasta per il tempo, indicato sulla confezione, scolatela e mettetela nel sugo. Fate insaporire la pasta per un minuto circa, mescolando in continuazione. La vostra pasta Ã¨ pronta!',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '11',
                'language' => 'RU',
                'title' => '"Ð Ð°ÐºÑƒÑˆÐºÐ¸" Ñ�Ð¾ Ñ�ÐºÑƒÐ¼Ð±Ñ€Ð¸ÐµÐ¹ Ð¸ Ð³Ñ€Ð¸Ð±Ð°Ð¼Ð¸',
                'description' => '',
                'cooking_time' => '20',
                'preparation_time' => '10',
                'steps' => [
                    'ÐŸÐ¾Ñ�Ñ‚Ð°Ð²ÑŒÑ‚Ðµ ÐºÐ¸Ð¿Ñ�Ñ‚Ð¸Ñ‚ÑŒÑ�Ñ� Ð²Ð¾Ð´Ñƒ Ð´Ð»Ñ� Ð¿Ð°Ñ�Ñ‚Ñ‹. ÐœÐµÐ¶Ð´Ñƒ Ñ‚ÐµÐ¼ Ð¼ÐµÐ»ÐºÐ¾ Ð½Ð°Ñ€ÐµÐ¶ÑŒÑ‚Ðµ Ð³Ñ€Ð¸Ð±Ñ‹ Ð¸ Ð¿Ð¾Ð´Ð¶Ð°Ñ€ÑŒÑ‚Ðµ Ð¸Ñ… Ð½Ð° Ð¾Ð»Ð¸Ð²ÐºÐ¾Ð²Ð¾Ð¼ Ð¼Ð°Ñ�Ð»Ðµ Ñ� Ñ€Ð°Ð·Ð´Ð°Ð²Ð»ÐµÐ½Ð½Ð¾Ð¹ Ð´Ð¾Ð»ÑŒÐºÐ¾Ð¹ Ñ‡ÐµÑ�Ð½Ð¾ÐºÐ° Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ 5 Ð¼Ð¸Ð½. Ð”Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ñ„Ð¸Ð»Ðµ Ñ�ÐºÑƒÐ¼Ð±Ñ€Ð¸Ð¸, Ñ‚Ð¾Ð¼Ð°Ñ‚Ð½Ñ‹Ð¹ Ñ�Ð¾ÑƒÑ�, Ð±Ð°Ð·Ð¸Ð»Ð¸Ðº, Ñ…Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¿ÐµÑ€ÐµÐ¼ÐµÑˆÐ°Ð¹Ñ‚Ðµ Ð¸ Ð²Ð°Ñ€Ð¸Ñ‚Ðµ Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ 10 Ð¼Ð¸Ð½., Ð¿ÐµÑ€Ð¸Ð¾Ð´Ð¸Ñ‡ÐµÑ�ÐºÐ¸ Ð¿Ð¾Ð¼ÐµÑˆÐ¸Ð²Ð°Ñ�.',
                    'Ð¡Ð²Ð°Ñ€Ð¸Ñ‚Ðµ Ð¿Ð°Ñ�Ñ‚Ñƒ Ð¿Ð¾ Ð²Ñ€ÐµÐ¼ÐµÐ½Ð¸, ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ð¾Ð¼ Ð½Ð° ÑƒÐ¿Ð°ÐºÐ¾Ð²ÐºÐµ, Ñ�Ð»ÐµÐ¹Ñ‚Ðµ, Ð¸ Ð´Ð¾Ð±Ð°Ð²ÑŒÑ‚Ðµ Ð² Ñ�Ð¾ÑƒÑ�. Ð¥Ð¾Ñ€Ð¾ÑˆÐ¾ Ð¿ÐµÑ€ÐµÐ¼ÐµÑˆÐ¸Ð²Ð°Ð¹Ñ‚Ðµ Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ Ð¼Ð¸Ð½ÑƒÑ‚Ñ‹, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¿Ð°Ñ�Ñ‚Ð° Ð²Ð¾Ð±Ñ€Ð°Ð»Ð° Ð² Ñ�ÐµÐ±Ñ� Ð²ÐºÑƒÑ� Ð¸ Ð°Ñ€Ð¾Ð¼Ð°Ñ‚ Ñ�Ð¾ÑƒÑ�Ð°. Ð’Ð°ÑˆÐ° Ð¿Ð°Ñ�Ñ‚Ð° Ð³Ð¾Ñ‚Ð¾Ð²Ð°!',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '12',
                'language' => 'EN',
                'title' => 'Baked penne',
                'description' => '',
                'cooking_time' => '30',
                'preparation_time' => '30',
                'steps' => [
                    '1.Put oil in a frying pan and fry onion, garlic and parsley until they get a bit of golden colour. Add chopped tomatoes and cook on low heat for 25 min. Add salt and pepper to taste.',
                    'Cook penne for half time indicated on the package, drain well.',
                    'Grease the baking tray with oil and put a layer of pasta. Cover with a layer of bacon, a layer of tomato sauce and cheeses. Repeat the procedure until you finish all ingredients, and sprinkle cheese on top.',
                    'Cook in the oven, preheated to 180 C, for 30 min, or until a golden crust forms on the surface. Serve instantly to the table.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '12',
                'language' => 'IT',
                'title' => 'Penne gratinate al forno',
                'description' => '',
                'cooking_time' => '30',
                'preparation_time' => '30',
                'steps' => [
                    'Fate soffriggere in una padella con l\'olio il prezzemolo, la cipolla e l\'aglio finchÃ¨ non sarÃ  colorito. Aggiungete i pomodori e lasciate cuocere a fuoco basso per 25 min. Aggiustate di sale e pepe.',
                    'Fate cuocere le penne per metÃ  del tempo di cottura indicato sulla confezione, scolate bene.',
                    'Ungete una pirofila e stendetevi uno strato di pasta. Ricoprite con uno strato di pancetta, con il condimento al pomodoro e con i formaggi. Andate avanti cosi, strato dopo strato, fino a riempire la pirofila, cospargendo il formaggio sulla superficie.',
                    'Passate nel forno a 180 C per 30 min, finchÃ¨ non si sarÃ  formata una crosta dorata. Servite subito.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '13',
                'language' => 'EN',
                'title' => 'Small onions in sweet and sour sauce ',
                'description' => '',
                'cooking_time' => '45',
                'preparation_time' => '15',
                'steps' => [
                    'Peel and wash the onions. In a casserole melt the butter, gradually adding sugar, and stir well. After 5 min pour balsamic vinegar, stir for a couple of minutes, and then add onions and bay leaves.',
                    'Cover and let cook for 5 min, then remove the lid, and continue cooking on low heat for about 35 min, stirring from time to time. If necessary, add a ladle of hot water, it will prevent onions from getting dry.',
                    'Serve small onions in sweet and sour sauce as a starter or as a side dish to meat courses.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '13',
                'language' => 'IT',
                'title' => 'Cipolline in agrodolce',
                'description' => '',
                'cooking_time' => '45',
                'preparation_time' => '15',
                'steps' => [
                    'Sbucciate e lavate le cipolline. Fate fondere il burro in una casseruola aggiungendo mano a mano lo zucchero e mescolate il tutto. Dopo 5 min aggiungete l\'aceto balsamico, mescolate, e dopo un paio di minuti aggiungete le cipolline e le foglie di alloro.',
                    'Coprite e lasciate cuocere per 5 min, poi togliete il coperchio e proseguite la cottura a fuoco lento per 35 min circa, mescolando di tanto in tanto. Se necessario aggiungete un mestolo di acqua calda in modo che le cipolline non si asciughino troppo.',
                    'Servite le cipolline come antipasto o come accompagnamento alle portate di carne.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '14',
                'language' => 'EN',
                'title' => 'Soy sauce braised shrimp',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Wash the shrimp, dry them, make a cut along the back and devein them. Finely chop up an onion.',
                    'In a frying pan heat 3-4 tbsp of oil and fry the chopped onion for 5 min. Add the shrimp and fry them for a couple of minutes on both sides on high heat, until they become uniformely brown.',
                    'Drizzle a little bit of white vinegar and soy sauce over the shrimp. Add sugar and ginger and mix well. Let it cook for another 2-3 min on high heat, until the sauce becomes thick and syrupy. Serve the shrimp hot with their sauce, decorating with some fresh parsley.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '14',
                'language' => 'IT',
                'title' => 'Gamberi brasati in salsa di soia',
                'description' => 'Il condimento agrodolce renderÃ  i crostacei ancora piÃ¹ gustosi. Questo piatto puÃ² essere adatto anche a un menu d\'ispirazione etnica.',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Lavate i gamberi, asciugateli, fate il taglio lungo la schiena ed eliminate il folo nero intestinale. Tritate finemente la cipolla.',
                    'Scaldate in una padella 3-4 cucchiai d\'olio e fate soffriggere la cipolla per 5 min. Aggiungete i gamberi e fateli rosolare per un paio di minuti su due lati a fuoco vivace, finchÃ¨ saranno dorati in modo uniforme.',
                    'Irrorate i gamberi con una spruzzata di aceto bianco e con la salsa di soia. Aggiungete lo zucchero e lo zenzero, mescolate bene.  Lasciate cuocere il tutto a fuoco vivace per altri 2-3 min, il fondo di cottura deve risultare ristretto e sciropposo. Servite i gamberi ben caldi, con il loro sughetto, guarnendo con qualche ciuffo di prezzemolo fresco.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '15',
                'language' => 'EN',
                'title' => 'Small onions with mushrooms in sweet and sour sauce ',
                'description' => '',
                'cooking_time' => '40',
                'preparation_time' => '15',
                'steps' => [
                    'Peel and clean the small onions, eliminating the rootlets and damaged foliar stems. Pour a little oil in a backing dish, add sugar and balsamic vinegar and put on medium fire, let it caramelize for 4-5 min, stirring continuously.',
                    'Add 2 bay leaves, small onions, boiling stock, adjust with salt and put the backing dish in the oven, preheated to 180 C. Cook for 15 min.',
                    'Meanwhile, clean well the mushroom caps, eliminating bits of soil with a wet kitchen paper. Add the mushrooms to the onions, mix well and cook in the oven for another 10 min. When this side dish is ready, eliminate the bay leaves, complete with freshly ground black pepper and chopped fresh parsley and serve.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '15',
                'language' => 'IT',
                'title' => 'Cipolline con i funghi champignon in agrodolce',
                'description' => 'Questo contorno Ã¨ ricco, profumato e caramellato, Ã¨ ottimo per la cena con gli amici e per le feste.',
                'cooking_time' => '40',
                'preparation_time' => '15',
                'steps' => [
                    'Sbuciate e pulite le cipolline, eliminando le radichette e le eventuali guaine esterne sciupate. Mettete un filo d\'olio nella pirofila, aggiungete lo zucchero e l\'aceto balsamico e portate su fuoco medio, lasciando caramellare per 4-5 min, mescolando continuamente. ',
                    'Unite 2 foglie di alloro, le cipolline, il brodo bollente, aggiustate di sale e mettete la pirofila nel forno, preriscaldato a 180 C. Cuocete per 15 min.',
                    'Intanto, pulite bene le cappelle di funghi, eliminando l\'eventuale terriccio con un pezzo di carta da cucina umido. Mescolate i funghi alle cipolline e cuocete nel forno per altri 10 min. Quando il contorno Ã¨ pronto, eliminate l\'alloro, completate con una macinata di pepe nero e un pÃ² di prezzemolo fresco tritato e servite.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '16',
                'language' => 'EN',
                'title' => 'Marinated peppers and aubergines',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '30',
                'steps' => [
                    'Trim the aubergines and cut them in round slices 0,5 cm thick, and grill them for 7-8 min, turning once in the middle of cooking time. Roast the whole peppers in the oven at 200 C for about 10 min., until the skin is darkened and swollen. Peel the peppers, remove the stalk, seeds and filaments and cut them in slices 3-4 cm wide. You can roast the peppers in a different way by holding them over gas, also in this case the skin should become dark and swollen. Once burnt, the skin will come off easily. You can also put them still hot in a paper bag, like a bag for bread, close well and leave there for a little bit before peeling: with the steam forming inside the skin will come off even easier.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '16',
                'language' => 'IT',
                'title' => 'Marinata di peperoni e melanzane',
                'description' => 'Questo Ã¨ un gustoso piatto di verdure, insaporite da una salsina che sa stuzzicare il palato.',
                'cooking_time' => '10',
                'preparation_time' => '30',
                'steps' => [
                    'Spuntate le melanzane e tagliatele a fettine rotonde di mezzo cm di spessore, quindi grigliatele su una bistecchiera ben calda per 7-8 min, voltandole a metÃ  cottura. Arrostite in forno a 200 C i peperoni interi per 10 min circa, finchÃ¨ la buccia Ã¨ annerita e gonfia. Quindi, spellateli, eliminate picciolo, semi e filamenti, e tagliateli a falde larghe di 3-4 cm.Per arrostire i peperoni potete passarli, invece che in forno, sulla fiamma del fornello: in entrambi i casi, la buccia deve diventare scura e gonfia. Una volta brucciacchiata, la pelle verrÃ  via facilmente. Potete anche lasciarli riposare, prima di spellarli, infilandoli ancora caldi in un sacchetto di carta, tipo quello del pane, e chiudendo bene: con il vapore che si sviluppa all\'interno, la pelle si solleverÃ  meglio.',
                    'Mettete melanzane e peperoni in un piatto profondo e cospargete con un pizzico di sale. Preparate un trito con la cipolla (bianca o rossa), i capperi, le acciughe e un ciuffetto di prezzemolo. Rosolate il trito per un paio di minuti con un filo d\'olio, e versate questa salsina ancora calda sulle verdure. Lasciate marinare per almeno 2 ore prima di servire.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '17',
                'language' => 'EN',
                'title' => 'Roast chicken',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '15',
                'steps' => [
                    'Mix chopped sage, rosemary and garlic with salt and pepper and use this mixture to flavour the chicken both inside and outside. Wash a lemon well and put it inside the chicken, to give it good flavour and to eliminate fat.',
                    'Put the chicken in a backing tray and pour some olive oil over it. Cook in the oven at 200 C for 1 hour. The chicken is ready when it is golden-brown and crispy outside and soft inside.',
                    'Cut it up in quarters or in smaller pieces and serve immediately, garnished with roast potatoes and fresh lettuce.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '17',
                'language' => 'IT',
                'title' => 'Pollo arrosto',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '15',
                'steps' => [
                    'Mescolate il trito di salvia, rosmarino e aglio con sale e pepe e usate questo condimento per insaporire il pollo sia internamente che esternamente. Inserite un limone ben lavato nella cavitÃ  addominale del pollo, servirÃ  a dargli un buon sapore e ad eliminare i grassi.',
                    'Disponete il pollo in una teglia e ungetelo con l\'olio. Fate cuocere in forno a 200 C per 1 ora. Prima di togliere dal forno accertatevi che il pollo sia ben colorito, avrete raggiunto un ottimo risultato se sarÃ  croccante fuori e morbido all\'interno.',
                    'Servitelo immediatamente, tagliato in quarti o a pezzetti piÃ¹ piccoli, con contorno di patate arrosto e lattuga fresca.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '18',
                'language' => 'EN',
                'title' => 'Beef fillets with green pepper',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Crush green pepper with prongs of a fork and press it with hands on both sides of each fillet.',
                    'Put a frying pan with butter and oil on gas, salt the fillets and put them into the pan. Pour cognac in, let it evaporate and then add cream. Let it cook for about 5 min, turning the meat over at least once.',
                    'In case the sauce is too liquid, remove the fillets from the pan and keep them in a warm place, then turn up the heat and let the sauce reduce. Serve the fillets hot with their sauce and garnish with green beans.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '18',
                'language' => 'IT',
                'title' => 'Filetti di manzo al pepe verde',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Schiacciate con i rebbi di una forchetta il pepe verde e pressatelo con le mani su entrambi i lati di ogni filetto.',
                    'Ponete una padella sul fuoco con il burro e l\'olio, salate i filetti e metteteli a rosolare. Bagnate con il cognac, fate evaporare e aggiungete la panna. Lasciate cuocere per altri 5 minuti circa girando la carne almeno una volta.',
                    'Se il sughetto risultasse troppo liquido, togliete i filetti, teneteli in caldo e fate rapprendere il fondo di cottura su fiamma vivace. Servite i filetti caldi con fagiolini verdi.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '19',
                'language' => 'EN',
                'title' => 'Green beans with butter',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Wash the green beans, trim and cook in boiling salted water. When they are cooked al dente, drain them and place in cold water to stop the cooking process.',
                    'Melt some butter in a pan and add green beans, salt, pepper, and finely chopped parsley. Stir well and leave for a couple of minutes to let the beans absorb the flavour.',
                    'Remove from gas and sprinkle with a bit of lemon juice, stir again and serve hot.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '19',
                'language' => 'IT',
                'title' => 'Fagiolini verdi al burro',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Lavate i fagiolini, spuntateli alle estremitÃ  e poi lessateli in acqua bollente salata. Quando sono cotti al dente, scolateli ed emmergeteli nell\'acqua fredda per fermare la cottura.',
                    'Sciogliete il burro in un tegame e unite i fagiolini, salate, pepate, e aggiungete il prezzemolo tritato finissimo. Mescolate bene e lasciate insaporire per un paio di minuti.',
                    'Togliete dal fuoco e spruzzate con qualche goccia di succo di limone, mescolate ancora e servite ben caldi.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '20',
                'language' => 'EN',
                'title' => 'Pork with savoy cabbage',
                'description' => '',
                'cooking_time' => '120',
                'preparation_time' => '20',
                'steps' => [
                    'Cut the meat into regular pieces a couple of cm big. Peel an onion and cut it into thin slices. Peel and wash the potatoes and cut them into thin slices as well. Remove cabbage base and core, divide the leaves and wash them well, and cut the thick and hard ribs off.',
                    'Butter a backing dish well, and place first some leaves of cabbage, then onion slices, a part of pork mix, salt and pepper, some chopped slices of bacon and potatoes. Repeat the procedure, finishing with a layer of cabbage leaves, covering all other ingredients.',
                    'Cover the backing dish with its lid or with aluminium foil and put in the oven preheated to 150 C for 2 hours. When it is ready, remove from the oven and serve to the table directly in the backing dish.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '20',
                'language' => 'IT',
                'title' => 'Maiale con verza',
                'description' => '',
                'cooking_time' => '120',
                'preparation_time' => '20',
                'steps' => [
                    'Tagliate la carne a tocchi regolari di un paio di cm. Sbucciate la cipolla e tagliatela a fette sottili. Sbucciate e lavate le patate, e tagliatele a fettine sottili. Private la verza della base e del torsolo, dividete e lavate bene le foglie, eliminando le coste piÃ¹ spesse e dure.',
                    'Imburrate bene la pirofila, quindi mettete sul fondo alcune foglie di verza, fette di cipolla, una parte del misto di maiale, sale e pepe, alcune fette di pancetta spezzettate, e poi le patate. Ripetete la procedura, finendo con uno stratto di verza per coprire tutti gli ingredienti.',
                    'Chiudete la pirofila con il suo coperchio o con un foglio d\'alluminio e passatela nel forno scaldato a 150 C per 2 ore.Sfornate e servite il maiale direttamente nella pirofila di cottura.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '21',
                'language' => 'EN',
                'title' => 'Marinated onions',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '5',
                'steps' => [
                    'Cut the onions in very thin slices and put them in a bowl. Mix the vegetable oil with vinegar, sugar and salt and pour over the onions, mix well.',
                    'Marinate the onions for 1 hour, stirring every now and then. Drain the marinade and season with sour cream and chopped fresh parsley.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '21',
                'language' => 'IT',
                'title' => 'Cipolle marinate',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '5',
                'steps' => [
                    'Tagliate le cipolle a fette molto sottili e mettetele in una ciotola. Mescolate olio vegetale con aceto, zucchero e sale e versate sopra le cipolle, mescolate bene.',
                    'Lasciate marinare le cipolle per un ora, mescolando ogni tanto. Trascorsa un ora, scolate bene e condite con panna acida e prezzemolo fresco tritato.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '22',
                'language' => 'EN',
                'title' => 'Couscous with turnip greens',
                'description' => '',
                'cooking_time' => '15',
                'preparation_time' => '15',
                'steps' => [
                    'Clean the pepper by eliminating stalk, seeds and filaments, and cut it into 2 cm squares. Peel the cucumber and dice it into 0,5 cm pieces. Eliminate the base, leaves and filaments of celery, and dice it. Also clean the turnip greens by eliminating tough stems and damaged parts. Set aside the "flowers" (inflorescences similar to broccoli), and cut the rest in 2 cm pieces.',
                    'Take a wide pan and fry pepper, celery, cucumber and turnip greens with olive oil on high heat, stirring often. After 3-4 min add salt and pepper, reduce the heat and let cook for another 5 min. At the end add turnip inflorescences, stir well, and after 3 min take off the heat.',
                    'Meanwhile, prepare couscous, flavour with a little olive oil and distribute it widely on a plate. Place the hot vegetable sauce in the centre of the plate, garnish with pistils of saffron, freshly ground pepper and serve immediately.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '22',
                'language' => 'IT',
                'title' => 'Couscous con cime di rapa',
                'description' => 'Leggero e colorato, un modo gustoso di fare il piatto pieno di vitamine e sostanze utili.',
                'cooking_time' => '15',
                'preparation_time' => '15',
                'steps' => [
                    'Pulite il peperone eliminando picciolo, semi e filamenti, poi tagliatelo a quadrotti di un paio di cm. Sbucciate il cetriolo e riducetelo a dadini di mezzo cm. Eliminate la base di sedano, foglie e fili laterali e tagliatelo a dadini. Pulite anche le cime di rapa eliminando gambi duri e parti sciupate. Tenete da parte i "fiori" (le infiorescenze simili a broccoletti) e taglate il resto a pezzetti di circa 2 cm.',
                    'Fate saltare a fuoco vivace in una larga padella, con un filo d\'olio caldo, il peperone, il sedano, il cetriolo e le cime di rapa, mescplando. Dopo 3-4 minuti aggiungete sale e pepe, abbassate la fiamma e lasciate cuocere per altri 5 minuti. Infine, unite i fiori delle cime di rapa, mescolate bene e spegnete dopo 3 minuti.',
                    'Intanto, fate rinvenire il couscous, conditelo con un filo d\'olio ed allargatelo su un piatto. Al centro disponete l\'intingolo di verdure caldo, completatelo con un pizzico di pistilli di zafferano, una macinata di pepe e servite immediatamente.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '23',
                'language' => 'EN',
                'title' => 'Moscardini with wild fennel',
                'description' => '',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Rinse moscardini well under running water. Put them in a pan with a generous drizzle of olive oil (4-5 tbsp), 1-2 whole cloves of garlic, slightly crushed, a pinch of chilli pepper, a sprig of wild fennel and enough water to cover the mollusc. Put a lid on, bring to boil on medium heat and let the moscardini stew until almost all liquid is absorbed, about 30 min, and at the end complete with a pinch of salt.',
                    'When the moscardini are almost done (to check it, prick them with a fork: they should be very soft), let couscous reconstitute and flavour it with a drizzle of olive oil.',
                    'Spread couscous on the plate and put stewed moscardini with their sauce on top. Garnish with some fresh wild fennel, some olive oil and serve.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '23',
                'language' => 'IT',
                'title' => 'Moscardini al finocchietto selvatico',
                'description' => 'I moscardini creano un ottimo abbinamento con il finocchietto selvatico, erba tipica della cucina siciliana. Se non lo trovate, sostituitelo con le foglioline verdi di un finocchio, oppure con un cucchiaino di semi di finocchio, che hanno perÃ² un aroma piÃ¹ intenso.',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Sciaquate bene i moscardini sotto l\'acqua corrente. Metteteli in un tegame con un generoso filo d\'olio (4-5 cucchiai), 1-2 spicchi d\'aglio interi, leggermente schiacciati, un pizzico di peperoncino, un mazzetto di finocchietto e tanta acqua sufficiente a coprire a filo i molluschi. Mettete il coperchio, portate a bollore su fuoco moderato e lasciate stufare i moscardini finchÃ¨ quasi tutto il liquido di cottura Ã¨ stato assorbito, circa mezz\'ora, completandoli alla fine con un pizzico di sale.',
                    'Quando i moscardini sono quasi cotti (per verificarlo, pungeteli con una forchetta: devono risultare molto teneri),  fate rinvenire il couscous e completatelo con un filo d\'olio.',
                    'Allargate il couscous nel piatto da portata e sistemate sopra i moscardini stufati con il loro sughetto. Guarnite con qualche ciuffo di finocchietto fresco, completate con un filo d\'olio crudo e servite.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '24',
                'language' => 'EN',
                'title' => 'Couscous with chicken and lamb',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Peel the potato and cut it into the chunks of 2 cm. Cut the meats into the cunks of the same size. Peel the onion, chop it up finely and fry in a casserole with a drizzle of olive oil for 2-3 min. Add the meat and let it brown on high heat for 4-5 min, stirring often. Season with salt and pepper and pour in a splash of wine. After 1-2 min add a potato and half a cup (about 100 ml) of hot water. Put a lid on, reduce the heat and let it stew for about 20 min.',
                    'Peel the tomatoes, remove the seeds and cut into big chunks. Cut the aubergine and the courgette in 2 cm big cubes, and also pepper after having removed stalk, seeds and filaments. Fry these vegetables in a pan with olive oil and a lightly crushed clove of garlic on high heat for 5-6 min. Add the vegetables to the meat and cook for another 10 min.',
                    'Meanwhile lt couscous reconstitute and garnish it with a little olive oil. Season the mix of meat and vegetables with basil leaves, cleaned and torn into smaller pieces. Stir well, adjust with salt and place the mix in the centre of a plate, put couscous around it and serve.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '24',
                'language' => 'IT',
                'title' => 'Couscous con pollo e agnello',
                'description' => 'Questo Ã¨ il piatto nello stile italiano con carne, verdure, pomodoro e basilico.',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Sbucciate la patata e tagliatela a tocchi di circa 2 cm. Tagliate le carni a dadi di un paio di cm. Tritate finemente la cipolla sbucciata e fatela appassire 2-3 min in una casseruola con un filo d\'olio. Unite le carni e lasciate rosolare per 4-5 min a fuoco vivo, mescolando. Aggiungete sale e pepe e bagnate con una spruzzata di vino. Dopo 1-2 min aggiungete la patata e mezzo bicchiere (circa 100 ml) di acqua calda. Mettete il coperchio, abbassate la fiamma e lasciate stufare per circa 20 min. ',
                    'Tritate grossolanamente i pomodori, sbucciati e privati di semi. Riducete la melanzana e la zucchina a dadi di circa 2 cm, e anche il peperone, privato di picciolo, semi e filamenti.. Rosolate queste verdure per 5-6 min a fuoco vivo in una padella con un filo d\'olio e uno spicchio d\'aglio intero, leggermente schiacciato. Aggiungete le verdure alle carni e proseguite la cottura ancora per 10 min.',
                    'Nel frattempo fate rinvenire il couscous e conditelo con un filo d\'olio. Insaporite il misto di carne e verdure con una manciatina di foglie di basilico pulite e spezzettate. Mescolate, aggiustate di sale e trasferite la preparazione al centro di un piatto, mettete il couscous intorno a questo mix and servite.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '25',
                'language' => 'EN',
                'title' => 'Peppers stuffed with couscous and prawns',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '15',
                'steps' => [
                    'Cut the top of the peppers off from the part of the stalk, remove seeds and filaments, sprinkle with salt, turn over and keep on a cutting board (so that they lose vegetation water).',
                    'Peel the tomatoes and cut them into big chunks. Cut the prawns in 2-3 pieces each and fry them in a pan for 3-4 min with tomatoes, a drizzle of oil, a pinch of salt and freshly ground pepper, stirring often.',
                    '3.Add couscous and vegetable stock to the pan, stir well, turn off the gas and fill the peppers with this mixture. Put the peppers on a backing tin greased with oil, sprinkle them with some oil and cover with their tops, which you kept aside. Pour a little bit of water into the tin and cook in the oven at 200 C for an hour. When they are done, take out of the oven, garnish with chopped parsley and torn basil leaves and serve.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '25',
                'language' => 'IT',
                'title' => 'Peperoni ripieni con couscous e gamberi',
                'description' => 'Sono ottimi tiepidi, ma potete provarli anche freddi per un pranzo all\'aperto o per un picnic.',
                'cooking_time' => '60',
                'preparation_time' => '15',
                'steps' => [
                    'Togliete ai peperoni una calottina dalla parte del picciolo, poi li svuotate di semi e filamenti, cospargete con un pizzico di sale e teneteli capovolti su un tagliere mentre preparate gli altri ingredienti (cosi, perdono l\'acqua di vegetazione).',
                    'Sbucciate e tritate grossolanamente i pomodori. Riducete le code di gamberi in 2-3 pezzi e saltatele in padella per 3-4 min con i pomodori, un filo d\'olio, un pizzico di sale e una macinata di pepe, mescolando spesso.',
                    'Unite nella padella il couscous e il brodo vegetale, mescolate il composto, spegnete e distribuitelo nei peperoni. Sistemate i peperoni in piedi di una teglia unta, irrorateli d\'olio e coprite ciascuno con la sua calottina. Aggiungete nella teglia un dito d\'acqua e infornate a 200 C per un\'ora. Sfornate e servite i peperoni tiepidi, completati con prezzemolo tritato e basilico spezzettato.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '26',
                'language' => 'IT',
                'title' => 'Bruschette alle acciughe ',
                'description' => 'Buonissime bruschette mediterranee, con la crema saporitissima e con i filetti marinati di pesce azzurro.',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Spuntate le melanzane, eliminando base e piccioli, tagliatele a metÃ  per il lungo. Incidete la polpa con taglietti incrociati (per facilitare la cottura), poi infornatele a 200 C per circa 30 min. Sfornatele e raschiatele per staccare dalla buccia tutta la polpa, che con la cottura in forno sarÃ  diventata morbidissima.',
                    'Passate la polpa delle melanzane al mixer con i capperi dissalati, uno spicchio d\'aglio, un ciuffetto di prezzemolo, una macinata di pepe e un generoso filo d\'olio, fino ad ottenere una crema liscia e omogenea. Aggiungete se occorre poco sale, ma probabilmente non servirÃ , perchÃ¨ i capperi sono giÃ  molto saporiti.',
                    'Tagliate a metÃ  o in tre le fette di pane. Allineatele sulla placca e fate tostare in forno  a 200 C per 3-4 min. Spalmatele con la salsina di melanzane e guarnite con le acciughe, ben sgocciolate dalla marinata.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '27',
                'language' => 'EN',
                'title' => 'Fancy crostoni',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Trim and scrape the carrot and cut it into 1-2 mm stripes. Cut in the same way the pepper after having eliminated seeds and filaments. Cut the cucumber into slices of 2-3 mm (eliminate the central seeds if they are too many). Chop the cauliflower into small florets, and discard the hard stalks.',
                    'In a wide frying pan heat the oil with a sprig of rosemary, a few chilli rings (remove the seeds if you want it less spicy), and a clove of garlic cut in half (remove it as soon as it gets golden-brown). In this seasoning fry the vegetables (cauliflower, carrot, pepper and cucumber) for 5 min, keeping them separated. Sprinkle with some vinegar and after 2 min add a bit of salt. Turn the gas off and let it cool down.',
                    'Blend the beans with some oil, parsley, rosemary, salt and pepper to obtain smooth cream.',
                    'Cut the baguette in 24 slices about one cm thick and toast them in the oven at 200 C for 3-4 min. Cover with the beans cream and garnish with cold vegetables.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '27',
                'language' => 'IT',
                'title' => 'Fantasia di crostoni',
                'description' => 'Tocchi di colore e buonissima salsa do legumi rendono queste bruschette irresistibili.',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Spuntate e rachiate la carota e riducetela a listraelle di 1-2 mm. Tagliate allo stesso modo il peperone, dopo aver eliminato semi e filamenti. Tagliate il cetriolo a rondelle di 2-3 mm (eliminate i semi centrali se sono abbondanti). Private le cimette di cavolfiore dei gambi duri dividendole a ciuffetti',
                    'In una larga padella riscaldate un filo d\'olio con un rametto di rosmarino, qualche rondella di peperoncino (per un gusto meno intenso, scartate i semini) e uno spicchio d\'aglio a metÃ  (toglietelo appena dorato). In questo fondo saltate le verdure  (cavolfiore, carota, peperoni e cetriolo) per 5 min. tenendole separate.Spruzzate con un dito di aceto e, dopo 2 min, completate con poco sale. Spegnete e lasciate raffreddare.',
                    'Frullate i fagioli nel frullatore con un filo d\'olio, qualche foglia di prezzemolo e rosmarino, sale e pepe, per fare una crema liscia.',
                    'Tagliate la baguette in 24 fettine di circa un cm di spessore e fatele tostare in forno a 200 C per 3-4 min. Spalmatele con la mousse di fagioli e completatele con le vergure fredde.',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '28',
                'language' => 'EN',
                'title' => 'Cannellini beans and tomato soup',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Soak the beans in cold water for at least 8 hours. Drain them and put in a casserole, cover with plenty of water. Add a peeled onion, 2 whole cloves of garlic, a sprig of sage and 1-2 bay leaves. Cover, bring to a boil on medium heat and cook for an hour. Taste the beans to check whether they are cooked and soft, if not cook for a bit longer.',
                    'When the beans are cooked, add some coarse salt and after 2 min turn the gas off. Discard the onion, garlic and herbs and drain the beans, keeping the formed stock (there should be about a litre, if it is less then add some boiling water with half of a stock cube dissolved in it).',
                    'In a different casserole fry the second onion, peeled and chopped, with olive oil, for about 3-4 min. Add the tomatoes, peeled and cut in big chunks, and fry for a couple of minutes. Next add cannellini and their stock, bring to a boil, adjust with salt if necessary, and let it cook for 5 min, turn the gas off. Garnish the soup with a drizzle of raw olive oil, fresh basil leaves, torn with hands into small pieces, and freshly ground pepper. Serve canellini beans and tomato soup hot.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '28',
                'language' => 'IT',
                'title' => 'Minestra di cannellini e pomodoro',
                'description' => 'Legumi con verdure fresche ed erbe aromatiche per una ricetta semplice e buona.',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Mettete in ammollo i fagioli in acqua fredda per almeno 8 ore. Scolateli e metteteli in una casseruola, coprite abbondantemente con acqua. Unite una cipilla sbucciata, 2 spicchi d\'aglio interi, un rametto di salvia, 1-2 foglie di alloro. Mettete il coperchio, portate a bollore su fuoco moderato, e lasciate cuocere per un\'ora. Assaggiateli per verificare che siano teneri, altrimenti lasciate sul fuoco ancora un pÃ².',
                    'Quando i fagioli sono cotti aggiungete un pÃ² di sale grosso e dopo un paio di minuti spegnete. Eliminate la cipolla, aglio ed erbe e sgocciolate i fagioli conservando la loro acqua di cottura (deve essere circa un litro, in caso contrario allungatela con acqua bollente nella quale sciogliete mezzo dado vegetale).',
                    'In un\'altra casseruola soffriggete con un filo d\'olio la seconda cipolla, sbucciata e tritata, per 3-4 min. Unite i pomodori sbucciati e tritati grossolonamente, lasciandoli insaporire per un paio di minuti. Aggiungete i cannellini con il loro brodo, fate prendere il bollore, aggiustate di sale se occorre, e spegnete dopo circa 5 min. Completate la minestra con un filo d\'olio crudo, basilico sminuzzato con le mani e una macinata di pepe. Servite la minestra ancora calda.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '29',
                'language' => 'RU',
                'title' => 'ÐžÐ»Ð°Ð´ÑŒÐ¸ Ð¸Ð· Ð´Ñ€Ð¾Ð¶Ð¶ÐµÐ²Ð¾Ð³Ð¾ Ñ‚ÐµÑ�Ñ‚Ð°',
                'description' => ' ',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Ð˜Ð· Ð¼ÑƒÐºÐ¸, Ð¼Ð¾Ð»Ð¾ÐºÐ° Ð¸ Ð´Ñ€Ð¾Ð¶Ð¶ÐµÐ¹ Ð¿Ñ€Ð¸Ð³Ð¾Ñ‚Ð¾Ð²ÑŒÑ‚Ðµ Ð³ÑƒÑ�Ñ‚Ð¾Ðµ Ð¾Ð¿Ð°Ñ€Ð½Ð¾Ðµ Ñ‚ÐµÑ�Ñ‚Ð¾, Ð¸ Ð´Ð°Ð¹Ñ‚Ðµ ÐµÐ¼Ñƒ Ð¿Ð¾Ð´Ð½Ñ�Ñ‚ÑŒÑ�Ñ�. Ð’Ð¼ÐµÑˆÐ°Ð¹Ñ‚Ðµ Ñ€Ð°Ñ�Ñ‚Ð¾Ð¿Ð»ÐµÐ½Ð½Ð¾Ðµ Ð¼Ð°Ñ�Ð»Ð¾, Ñ�Ñ‹Ñ€Ñ‹Ðµ Ñ�Ð¹Ñ†Ð°, Ð¿Ð¾Ñ�Ð¾Ð»Ð¸Ñ‚Ðµ Ð¸ Ð´Ð°Ð¹Ñ‚Ðµ Ñ‚ÐµÑ�Ñ‚Ñƒ ÐµÑ‰Ðµ Ñ€Ð°Ð· Ð¿Ð¾Ð´Ð½Ñ�Ñ‚ÑŒÑ�Ñ�. ',
                    'Ð Ð°Ñ�Ñ‚Ð¾Ð¿Ð¸Ñ‚Ðµ Ð¼Ð°Ñ�Ð»Ð¾ Ð½Ð° Ñ�ÐºÐ¾Ð²Ð¾Ñ€Ð¾Ð´Ðµ Ð½Ð° Ñ�Ñ€ÐµÐ´Ð½Ðµ-Ð²Ñ‹Ñ�Ð¾ÐºÐ¾Ð¼ Ð¾Ð³Ð½Ðµ Ð¸ Ñ�Ñ„Ð¾Ñ€Ð¼Ð¸Ñ€ÑƒÐ¹Ñ‚Ðµ Ð¿Ð¾Ð»Ð¾Ð²Ð½Ð¸ÐºÐ¾Ð¼ Ð½ÐµÐ±Ð¾Ð»ÑŒÑˆÐ¸Ðµ Ñ‚Ð¾Ð»Ñ�Ñ‚Ñ‹Ðµ Ð¾Ð»Ð°Ð´ÑŒÐ¸ (3 ÑˆÑ‚ Ð½Ð° Ñ�ÐºÐ¾Ð²Ð¾Ñ€Ð¾Ð´Ðµ Ð´Ð¸Ð°Ð¼ÐµÑ‚Ñ€Ð¾Ð¼ 24 Ñ�Ð¼). Ð–Ð°Ñ€ÑŒÑ‚Ðµ Ð² Ñ‚ÐµÑ‡ÐµÐ½Ð¸Ðµ 3 Ð¼Ð¸Ð½ Ð¿Ð¾ÐºÐ° Ð½Ð¸Ð¶Ð½Ñ�Ñ� Ñ‡Ð°Ñ�Ñ‚ÑŒ Ð½Ðµ Ð¿Ð¾Ð´Ñ€ÑƒÐ¼Ñ�Ð½Ð¸Ñ‚Ñ�Ñ�, Ð·Ð°Ñ‚ÐµÐ¼ Ð¿ÐµÑ€ÐµÐ²ÐµÑ€Ð½Ð¸Ñ‚Ðµ Ð¸ Ð¶Ð°Ñ€ÑŒÑ‚Ðµ ÐµÑ‰Ðµ Ð¾ÐºÐ¾Ð»Ð¾ 2 Ð¼Ð¸Ð½ÑƒÑ‚.',
                    'Ð“Ð¾Ñ‚Ð¾Ð²Ñ‹Ðµ Ð¾Ð»Ð°Ð´ÑŒÐ¸ Ð¿Ð¾Ð»Ð¾Ð¶Ð¸Ñ‚Ðµ Ñ�Ñ‚Ð¾Ð¿ÐºÐ¾Ð¹ Ð½Ð° Ð±Ð»ÑŽÐ´Ð¾, Ð¿Ð¾Ð¼Ð°Ð¶ÑŒÑ‚Ðµ ÐºÐ°Ð¶Ð´Ñ‹Ð¹ Ñ�Ð»Ð¸Ð²Ð¾Ñ‡Ð½Ñ‹Ð¼ Ð¼Ð°Ñ�Ð»Ð¾Ð¼, Ð¿Ð¾Ð»ÐµÐ¹Ñ‚Ðµ Ñ�Ð¼ÐµÑ‚Ð°Ð½Ð¾Ð¹ Ð¸ Ð¿Ð¾Ð´Ð°Ð²Ð°Ð¹Ñ‚Ðµ Ðº Ñ�Ñ‚Ð¾Ð»Ñƒ Ð³Ð¾Ñ€Ñ�Ñ‡Ð¸Ð¼Ð¸.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '29',
                'language' => 'EN',
                'title' => 'Fluffy pancakes',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'In a bowl combine flour, milk and yeast and form thick batter, then let it rise in a warm place. Add melted butter, eggs, salt, mix well and let it rise again.',
                    'Melt some butter in a frying pan on medium-high fire, take the batter with a ladle and form small thick pancakes (3 pancakes in a 24 cm frying pan). Fry for about 3 min until the bottom side becomes golden-brown, then turn over and fry for another 2 min.',
                    'Place ready pankaces on a plate in a pile, putting a bit of butter between them, complete with sour cream on top and serve while still hot.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '29',
                'language' => 'IT',
                'title' => 'Frittelle lievitati',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'In una ciotola unite la farina, il latte e il lievito, lavorate fino ad ottenere un impasto piuttosto denso, e lasciatelo lievitare.',
                    'In una padella fate sciogliere il burro sul fuoco medio-alto, prendete l\'impasto con un mestolo e formate le frittelle abbastanza spesse (3 in una padella di 24 cm). Friggete per circa 3 min finchÃ¨ il lato inferiore non diventa dorato, poi giratele e friggete per altri 2 min.',
                    'Disponete le frittele pronte su un piatto una sopra l\'altra, mettendo un pÃ² di burro su ciascuna, completate con panna acida e servitele ancora calde.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '30',
                'language' => 'EN',
                'title' => 'Butter with anchovies',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Wash anchovies under running water to remove salt and cut them into small pieces. Bring the butter to room temperature. Chop up the parsley finely.',
                    'In a mortar and pestle combine all ingredients and grind them into a smooth paste. Transfer the paste on a plate and give it a desired shape with a wet knife. You can serve it as a spread on toast, with the pancakes or with the boiled potatoes.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '30',
                'language' => 'IT',
                'title' => 'Burro con acciughe',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Lavate le acciughe sotto l\'acqua corrente per eliminare il sale e sminuzzatele. Portate il burro a temperatura ambiente. Tritate finemente il prezzemolo.',
                    'Unite tutti gli ingredienti in un mortaio e con un pestello formate il composto omogeneo. Trasferite la pasta su un piatto e con un coltello inumidito in acqua datela una forma desiderata. Potete servire questo burro con le acchiughe spalmato sul pane tostato, su pancakes oppure con le patate lessate.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '30',
                'language' => 'RU',
                'title' => 'ÐœÐ°Ñ�Ð»Ð¾ Ð·Ð°ÐºÑƒÑ�Ð¾Ñ‡Ð½Ð¾Ðµ Ñ� Ð°Ð½Ñ‡Ð¾ÑƒÑ�Ð°Ð¼Ð¸',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'ÐŸÑ€Ð¾Ð¼Ð¾Ð¹Ñ‚Ðµ Ð°Ð½Ñ‡Ð¾ÑƒÑ�Ñ‹ Ð¿Ð¾Ð´ Ð¿Ñ€Ð¾Ñ‚Ð¾Ñ‡Ð½Ð¾Ð¹ Ð²Ð¾Ð´Ð¾Ð¹ Ñ‡Ñ‚Ð¾Ð±Ñ‹ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ Ñ�Ð¾Ð»ÑŒ Ð¸ Ð¿Ð¾Ñ€ÐµÐ¶ÑŒÑ‚Ðµ Ð½Ð° Ð¼ÐµÐ»ÐºÐ¸Ðµ ÐºÑƒÑ�Ð¾Ñ‡ÐºÐ¸. Ð”Ð¾Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð¼Ð°Ñ�Ð»Ð¾ Ð´Ð¾ ÐºÐ¾Ð¼Ð½Ð°Ñ‚Ð½Ð¾Ð¹ Ñ‚ÐµÐ¼Ð¿ÐµÑ€Ð°Ñ‚ÑƒÑ€Ñ‹. ÐœÐµÐ»ÐºÐ¾ Ð½Ð°Ñ€ÐµÐ¶ÑŒÑ‚Ðµ Ð¿ÐµÑ‚Ñ€ÑƒÑˆÐºÑƒ.',
                    'ÐŸÐ¾Ð»Ð¾Ð¶Ð¸Ñ‚Ðµ Ð²Ñ�Ðµ Ð¸Ð½Ð³Ñ€ÐµÐ´Ð¸ÐµÐ½Ñ‚Ñ‹ Ð² Ñ�Ñ‚ÑƒÐ¿ÐºÑƒ Ð¸ Ð¿ÐµÑ�Ñ‚Ð¸ÐºÐ¾Ð¼ Ð¸Ñ�Ñ‚Ð¾Ð»Ñ‡Ð¸Ñ‚Ðµ Ð² Ð¾Ð´Ð½Ð¾Ñ€Ð¾Ð´Ð½ÑƒÑŽ Ð¼Ð°Ñ�Ñ�Ñƒ. ÐŸÐµÑ€ÐµÐ»Ð¾Ð¶Ð¸Ñ‚Ðµ Ñ�Ñ‚Ñƒ Ð¼Ð°Ñ�Ñ�Ñƒ Ð½Ð° Ð±Ð»ÑŽÐ´Ð¾ Ð¸ Ð¼Ð¾ÐºÑ€Ñ‹Ð¼ Ð½Ð¾Ð¶Ð¾Ð¼ Ð¿Ñ€Ð¸Ð´Ð°Ð¹Ñ‚Ðµ ÐµÐ¹ Ð¶ÐµÐ»Ð°ÐµÐ¼ÑƒÑŽ Ñ„Ð¾Ñ€Ð¼Ñƒ. ÐŸÐ¾Ð´Ð°Ð²Ð°Ð¹Ñ‚Ðµ Ñ�Ñ‚Ð¾ Ð¼Ð°Ñ�Ð»Ð¾ Ñ� Ð°Ð½Ñ‡Ð¾ÑƒÑ�Ð°Ð¼Ð¸ Ðº Ñ…Ð»ÐµÐ±Ð½Ð¾Ð¼Ñƒ Ñ‚Ð¾Ñ�Ñ‚Ñƒ, Ð¾Ð»Ð°Ð´ÑŠÑ�Ð¼ Ð¸Ð»Ð¸ Ðº Ð²Ð°Ñ€ÐµÐ½Ð¾Ð¹ ÐºÐ°Ñ€Ñ‚Ð¾ÑˆÐºÐµ.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '31',
                'language' => 'EN',
                'title' => 'Eggs with red caviar',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '5',
                'steps' => [
                    'Prepare hard-boiled eggs, peel and let them cool down. Cut each egg lengthwise and cut a little bit of the convex part off in order that the halves don\'t fall.',
                    'Put caviar on yalks, place the halves of the eggs on a plate and decorate with fresh parskey. ',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '31',
                'language' => 'IT',
                'title' => 'Uova con il caviale rosso',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '5',
                'steps' => [
                    'Preparate le uova sode, fate raffreddare e poi sgusciate. Tagliate ogni uovo a metÃ  nel senso della lunghezza e tagliate un pÃ² la parte convessa dell\'albume, cosi le parti rimarranno stabili sul piatto.',
                    'Mettete il caviale su ogli metÃ  dell\'uovo, posizionate su un piatto e decorate con i ciufetti di prezzemolo.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '31',
                'language' => 'RU',
                'title' => 'Ð¯Ð¹Ñ†Ð° Ñ� ÐºÑ€Ð°Ñ�Ð½Ð¾Ð¹ Ð¸ÐºÑ€Ð¾Ð¹',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '5',
                'steps' => [
                    'Ð¡Ð²Ð°Ñ€Ð¸Ñ‚Ðµ Ð²ÐºÑ€ÑƒÑ‚ÑƒÑŽ Ñ�Ð¹Ñ†Ð°, Ð¾Ñ�Ñ‚ÑƒÐ´Ð¸Ñ‚Ðµ Ð¸ Ð¾Ñ‡Ð¸Ñ�Ñ‚Ð¸Ñ‚Ðµ. Ð Ð°Ð·Ñ€ÐµÐ¶ÑŒÑ‚Ðµ ÐºÐ°Ð¶Ð´Ð¾Ðµ Ñ�Ð¹Ñ†Ð¾ Ð²Ð´Ð¾Ð»ÑŒ Ð¿Ð¾Ð¿Ð¾Ð»Ð°Ð¼ Ð¸ Ð½ÐµÐ¼Ð½Ð¾Ð³Ð¾ Ñ�Ñ€ÐµÐ¶ÑŒÑ‚Ðµ Ð²Ñ‹Ð¿ÑƒÐºÐ»ÑƒÑŽ Ñ‡Ð°Ñ�Ñ‚ÑŒ Ð±ÐµÐ»ÐºÐ°, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¿Ð¾Ð»Ð¾Ð²Ð¸Ð½ÐºÐ¸ Ð½Ðµ Ð¿Ð°Ð´Ð°Ð»Ð¸. ',
                    'Ð�Ð° ÐºÐ°Ð¶Ð´Ñ‹Ð¹ Ð¶ÐµÐ»Ñ‚Ð¾Ðº Ð¿Ð¾Ð»Ð¾Ð¶Ð¸Ñ‚Ðµ Ð¿Ð¾ Ð³Ð¾Ñ€ÐºÐµ Ð¸ÐºÑ€Ñ‹, ÑƒÑ�Ñ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚Ðµ Ð½Ð° Ñ‚Ð°Ñ€ÐµÐ»ÐºÐ¸ Ð¸ ÑƒÐºÑ€Ð°Ñ�ÑŒÑ‚Ðµ Ð²ÐµÑ‚Ð¾Ñ‡ÐºÐ°Ð¼Ð¸ Ð¿ÐµÑ‚Ñ€ÑƒÑˆÐºÐ¸.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '32',
                'language' => 'IT',
                'title' => 'Insalata di orzo allo zenzero',
                'description' => '',
                'cooking_time' => '30',
                'preparation_time' => '15',
                'steps' => [
                    'Fate lessare l\'orzo in abbondante acqua salata. Scolatelo, versatelo in una insalatiera, conditelo con l\'olio e lasciate raffreddare.',
                    'Intanto, lavate un ciuffo di prezzemolo e tritate finemente le foglie. Pulite tre rametti di menta e tagliate le foglie a striscioline sottili con le forbici.Aggiungete le due erbe all\'orzo. Private il sedano di base, foglie e fili laterali. Eliminate al peperone il picciolo e i semi e spuntate i cipolotti.Riducete le verdure a dadini di 3-4 mm e mescolatele all\'orzo.',
                    'Pelate un pezzetto di zenzero, grattuggiatelo e unitelo nell\'insalatiera insieme a un cucchiaino di grani di coriandolo. Lavate il limone, spremetelo e versate il succo sull\'insalata. Completate con sale e pepe, mescolate e servite.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '33',
                'language' => 'IT',
                'title' => 'Filetti di triglie mediterranei',
                'description' => '',
                'cooking_time' => '6',
                'preparation_time' => '10',
                'steps' => [
                    'Preparate un trito finissimo con le foglie di un mazzetto di prezzemolo, due rametti di basilico e due di maggiorana. Tritate finemente anche uno spicchio d\'aglio, privato del germoglio.',
                    'Sciacquate e asciugate i filetti di triglia ed eliminate, con una pinzetta, eventuali piccole lische. Passate i filetti in un piatto con un velo di farina, poi tuffateli in una padella con abbondante olio di oliva bollente, friggendoli 2-3 minuti per parte. Sgocciolateli su carta assorbente da cucina, poi trasferiteli su un piatto, cospargete di sale e il trito di aromi e completate con le fettine di limone. Servite caldi.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '34',
                'language' => 'EN',
                'title' => 'Marinated spicy anchovies',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Wash the anchovies, discard the head, open them and remove the fishbones, then wash the fillets and dry them. Cover the bottom of a glass or steel tray with vinegar, put the fillets in one near another, add a little bit of salt, pour the rest of vinegar, cover with the plastic wrap and leave it to marinate in the fridge for 24 hours.',
                    'Chop up the parsley with garlic and chilli pepper, put the mixture in a bowl, add salt, pepper and oil and mix well.',
                    'Drain the anchovies from the marinade and place them in layers into a glass container, covering every layer with the prepaired sauce. Close the container and put it into the fridge for 2-3 hours before serving. These anchovies can be kept in the fridge for about a week, make sure that they are completely covered with sauce, add more oil if necessary.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '34',
                'language' => 'IT',
                'title' => 'Acciughe marinate piccanti',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Lavate le acchiughe, staccate la testa, apritele ed eliminate la lisca; quindi lavate i filetti e asciugateli. Versate un velo d\'aceto sul fondo di un recipiente di vetro o di acciaio, sistematevi i filetti, uno accanto all\'altro, salateli leggermente, versate il resto di aceto, coprite con la pellicola trasparente e lasciate marinare in frigorifero per 24 ore.',
                    'Tritate il prezzemolo con l\'aglio e peperoncino, mettete il trito in una ciotola, salate, pepate, unite l\'olio e mescolate bene.',
                    'Scolate le acciughe dalla marinata e sistematele a strati in un contenitore di vetro, coprendo ogni strato con la salsa. Chiudete il contenitore e lasciate riposare nel frigo per 2-3 ore prima di servire. Queste acciughe si possono conservare in frigorifero fino a una settimana, fate attenzione che restino sempre completamente coperte di salsa, aggiungendo piÃ¹ olio se necessario.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '35',
                'language' => 'EN',
                'title' => 'Bean stew with potatoes',
                'description' => '',
                'cooking_time' => '4',
                'preparation_time' => '20',
                'steps' => [
                    'Soak the beans for 6-8 hours, then drain them and rinse well. Put the beans in a pan filled with water and boil on high heat for 15 min, then reduce the heat and simmer for 45 min.',
                    'Take the beans off the heat, drain and rinse again, discard the water. Put them in a pan and add boiling water. Now it is time to add other ingredients: vegetable stock, potatoes, coriander and fenugreek seeds, chilli powder, tomato concentrate. Mix well and leave to cook for about 2 hours, stirring every now and again. Long cooking time will ensure softness not only of the beans but also of the skins, and will also make the stock dense and creamy.',
                    'When the beans are about ready, chop up an onion, a clove of garlic, and parsley and fry them in oil until onion is golden brown. Add this mixture to the bean stew, cook for another 5 min and take off the heat. Your bean stew with potatoes is ready! ',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '35',
                'language' => 'IT',
                'title' => 'Stufato di fagioli con le patate',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Lasciate i fagioli in ammollo per 6-8 ore, scolateli e sciaquate bene. Metteleli in una pentola con abbondante acqua fredda, portate a bollore e fare bollire a fuoco medio-alto per un quarto d\'ora. Riducete la fiamma e fare sobbollire per 45 min.',
                    'Togliete i fagioli dal fuoco, scolateli e sciaquateli di nuovo, scartando l\'acqua di cottura. Mettteli in una pentola ed aggiungete l\'acqua bollente. Adesso Ã¨ ora di aggiungere gli altri ingredienti: brodo vegetale, patate, semi di coriandolo e di fieno greco, peperoncino in polvere, e concentrato di pomodoro. Mescolate tutto bene e lasciate cuocere per 2 ore circa, mescolando ogni tanto. Il lungo tempo di cottura renderÃ  i fagioli morbidi non solo all\'interno ma anche all\'esterno e il brodo sarÃ  denso e cremoso.',
                    'Quando i fagioli saranno quasi pronti, tritate la cipolla, uno spicchio d\'aglio ed un ciuffo di prezzemolo e fateli soffriggere nell\'olio finche la cipolla non diventa dorata. Versate questo misto nello stufato, mescolate e dopo 5 min spegnete il fuoco. Il vostro stufato di fagioli con le patate Ã¨ pronto!',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '36',
                'language' => 'EN',
                'title' => 'Mexican chicken tortillas',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '36',
                'language' => 'IT',
                'title' => 'Tortillas messicani con pollo',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    '',
                    ' ',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '37',
                'language' => 'EN',
                'title' => 'Popeye pie',
                'description' => '',
                'cooking_time' => '60',
                'preparation_time' => '10',
                'steps' => [
                    'First of all wash and peel the potatoes, cut them in pieces and boil for about 20 min. Meanwhile clean the spinach, cut them in pieces and boil them in salty water for 5 min.',
                    'Drain the potatoes and put them in a bowl. Drain well the spinach, try to eliminate as much water as you can, and add it to the bowl with the potatoes.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '37',
                'language' => 'IT',
                'title' => 'Braccio di ferro',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'Per la prima cosa lavate e pelate le patate, tagliatele a pezzi e fate lessare per 20 min circa. Nel frattempo pulite i spinaci, tagliateli a pezzi e fateli bollire in acqua salata per 5 min.',
                    'Scolate le patate e mettetele in una ciotola. Infine scolate bene i spinaci, eliminando piÃ¹ acqua possibile, e metteteli nella ciotola insieme alle patate. Schiacciate bene con la forchetta e mescolate, formando una miscela omogenea, unite il pepe nero, cumino e coriandolo e mescolate ancora per amalgamare bene gli ingredienti. Lasciate raffreddare.',
                    'Preriscaldate il forno a 150 C. Prendete la crostatiera di 24 cm di diametro, ungetela con l\'olio di oliva e rivestite con il primo pezzo di pasta sfoglia, facendolo aderire beneai lati dello stampo. Piempite con il composto di patate e spinaci e chiudete con il secondo pezzo di sfoglia. Tagliate l\'eccesso di sfoglia intorno ai bordi e premete con la forchetta per sigillarli. Mettete nel forno per circa mezzora. Sfornate il pie pronto, fate raffreddare un pÃ², e servite.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '38',
                'language' => 'EN',
                'title' => 'Pork loin in beer',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '38',
                'language' => 'IT',
                'title' => 'Arista cotta in birra',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '39',
                'language' => 'EN',
                'title' => 'Savoy cabbage soup',
                'description' => '',
                'cooking_time' => '50',
                'preparation_time' => '15',
                'steps' => [
                    'Chop up the onion and dice carrots and potatoes. Chop up the cabbage, put it in a colander and wash under the running water.',
                    'Put the onion in a pan and fry it on medium heat for 5 min. Add all other vegetables, pour in boiling stock, add tomato concentrate and seasoning. Cover, bring to boil, then reduce the heat and leave to simmer for about 40 min.',
                    'Once the soup is ready, distribute it into the warm bowls and sprinkle with some chopped parsley. Serve this delicious soup with country-style bread.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '39',
                'language' => 'IT',
                'title' => 'Minestrone di verza',
                'description' => '',
                'cooking_time' => '50',
                'preparation_time' => '15',
                'steps' => [
                    'Tritate la cipolla e tagliate le carote e le patate a dadini. Tritate la verza, trasferitela nel colino e lavate sotto l\'acqua corrente.',
                    'Mettete la cipolla in una pentola con l\'olio e soffriggetela sul fuoco medio per 5 min. Aggiungete tutte le altre verdure, versate il brodo bollente, il concentrato di pomodoro e gli aromi. Coprite, portate a bollore, poi riducete la fiamma e lasciate sobbollire per circa 40 min.',
                    'Quando il minestrone Ã¨ pronto, distribuitelo nelle ciotole tiepide e cospargete con un pÃ² di prezzemolo tritato. Servite con il pane rustico.',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '40',
                'language' => 'EN',
                'title' => 'Marinated pork ribs',
                'description' => '',
                'cooking_time' => '0',
                'preparation_time' => '0',
                'steps' => [
                    'In a small bowl combine all ingredients for the marinade and rub it onto the pork ribs on all sides. Place the pork ribs in a backing dish, cover with plastic wrap and let them marinade in the fridge for 2 hours.',
                    'Take the ribs out of the fridge. Pre-heat the oven to 180 C. Sprinkle with a bit of olive oil and cook in the oven for about 2 hours, turning the ribs over from time to time. Serve with roast potatoes and carrots and green salad.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '40',
                'language' => 'IT',
                'title' => 'Costine di maiale marinate',
                'description' => '',
                'cooking_time' => '2',
                'preparation_time' => '10',
                'steps' => [
                    'In una ciotolina inite tutti gli ingredienti per la marinata, mescolate e massaggiatela in costine di maiale da tutti i lati.Mettele le costine in una pirofila, coprite con la pellicola trasparente e lasciate marinare nel frigo per 2 ore.',
                    'Togliete le costine dal frigo. Preriscaldate il forno a 180 C. Irrorate le costine con un pÃ² di olio di oliva e cucinate nel forno per 2 ore circa, girando ogni tanto. Servite con patate e carote arrosto e con insalate verde.',
                    '',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '41',
                'language' => '',
                'title' => 'A very green salad',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Cut off the hard part of asparagus and put them together with peas in a pan with boiling salted water. Bring to boil and cook for 10 min. Drain.',
                    'Wash and dry the apple. Remove the core and cut the apple in thin slices. Put the slices in a salad bowl and sprinkle with lemon juice. Add asparagus and peas.',
                    'Rinse and dry the parsley and finely chop it, slice up the spring onions. Mix them with olive oil and apple vinegar, and add salt and pepper. Pour this sauce over the salad. Clean the rocket leaves, add them to the salad and mix well. Your salad is ready!',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ],
            [
                'id' => '41',
                'language' => '',
                'title' => 'Insalata tutta verde',
                'description' => '',
                'cooking_time' => '10',
                'preparation_time' => '10',
                'steps' => [
                    'Togliete la parte dura di asparagi ed immergeteli insieme ai piselli in una pentola con acqua bollente salata. Portate ad ebollizione e cucinate per 10 min. Scolateli.',
                    'Lavate ed asciugate la mela. Rimuovete il torsolo e tagliate la mela a fette sottili.Versateli in una salattiera e spruzzateli con il succo di limone. Aggiungete i piselli con gli asparagi.',
                    'Sciaquate ed asciugate il prezzemolo e tritatelo finemente, affettate i cipollotti. Mescolateli con olio di oliva e aceto di mele, salate e pepate. Versate questa salsina sul contenuto della salattiera. Pulite le foglie di rucola, aggiungetela all\'insalata e mescolate. La vostra insalata Ã¨ pronta!',
                    '',
                    '',
                    '',
                    '',
                    ''
                ]
            ]
        ];
        
        
        foreach ($recipes as $inr) {
            if ($inr['language'] != "EN")
                continue;
            
            $recipe = new Recipe();
            $recipe->setTranslatableLocale("en");
            $recipe->setName($inr['title']);
            $recipe->setDescription($inr['description']);
            $recipe->setPreparationTime(new \DateTime($inr['preparation_time'] . " minutes"));
            $recipe->setCookingTime(new \DateTime($inr['cooking_time'] . " minutes"));
            $recipe->setCreationDate(new \DateTime());
            $recipe->setAuthor("Admin");
                        
            foreach ($inr['steps'] as $index=>$step) {
                if ($step == "") {
                    continue;
                }
                $rs = new RecipeStep();
                $rs->setTranslatableLocale("en");
                $rs->setDescription($step);
                $rs->setPosition(1+$index);
                $recipe->addRecipeStep($rs);
            }
            
            $ipc = new RecipeIngredient();
            $ipc->setTranslatableLocale("en");
            $ips = [];
            
            for ($x = 0; $x < 20; $x ++) {
                try {
                    $ips[] = $this->getReference("ip-" . $inr['id'] . "-" . $x);
                } catch (\Exception $e) {
                    // do nothing
                }
            }
            
            foreach ($ips as $ip) {
                $recipe->addRecipeIngredient($ip);
            }            
            
            $manager->persist($recipe);
        }
        
        $manager->flush();
        
    }

    /**
     *
     * {@inheritdoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 20;
    }
}