<?php
namespace App\DataFixtures;

use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Ingredient;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadIngredientData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $names = [
            'apple vinegar',
            'aubergine',
            'penne rigate',
            'bacon in cubes',
            'fresh basil',
            'bay leaf',
            'beef fillets',
            'beer yeast',
            'black pepper',
            'butter',
            'capers',
            'carrot',
            'celeriac',
            'chestnuts',
            'chicken',
            'chicken breast',
            'chilli powder',
            'coarse salt',
            'cocoa',
            'cognac',
            'conchigliette',
            'cream',
            'cumin',
            'dried basil',
            'eggs',
            'emmental',
            'extravergine olive oil',
            'fine salt',
            'finely chopped plum tomatoes',
            'flour',
            'french bread',
            'fresh ginger',
            'fresh parsley',
            'fresh salmon',
            'garlic',
            'green beans',
            'lamb meat',
            'lemon juice',
            'lemon',
            'mackerel fillets',
            'malt',
            'marjoram',
            'milk',
            'mozzarella',
            'mushrooms',
            'noodles',
            'onion',
            'oyster mushrooms',
            'pecorino',
            'pitted green olives',
            'potatoes',
            'prawns',
            'raisins',
            'red caviar',
            'red potatoes',
            'rosemary',
            'round aubergines',
            'sage',
            'soy sauce',
            'sugar',
            'tomato concentrate',
            'tomatoes',
            'tomato sauce',
            'truffle paste',
            'veal\'s thick rib',
            'vegetable oil',
            'vegetable stock',
            'water',
            'yeast',
            'small onions',
            'balsamic vinegar',
            'white wine vinegar',
            'mushroom caps',
            'orecchiette',
            'turnip greens',
            'anchovies in oil',
            'chilli pepper',
            'pepper',
            'red pepper',
            'yellow pepper',
            'green pepper',
            'pickled capers',
            'pork shank pulp',
            'pork shank',
            'pork shoulder pulp',
            'bacon slices',
            'savoy cabbage',
            'sour cream',
            'couscous',
            'stick of celery',
            'cucumber',
            'saffron stigmas',
            'moscardini',
            'wild fennel',
            'courgette',
            'white wine',
            'prawn tails',
            'casereccio bread',
            'marinated anchovies',
            'salted capers',
            'fresh chilli pepper',
            'baguette',
            'canned beans',
            'cauliflower',
            'cannellini beans',
            'fresh sage',
            'anchovies in salt',
            'hard-boiled egg yolk',
            'sprat',
            'salmon caviar',
            'pearl barley',
            'spring onions',
            'mint',
            'coriander seeds',
            'red mullet',
            'fillet of red mullet',
            'fresh marjoram',
            'anchovies',
            'borlotti beans',
            'fenugreek seeds',
            'dill ',
            'parsley',
            'pork ribs',
            'sweet paprika',
            'mustard',
            'green asparagus',
            'apple granny smith',
            'rocket',
            'peas'
        ];
        
        foreach ($names as $i => $name) {
            $ingredient = new Ingredient();
            $ingredient->setTranslatableLocale("en");
            $ingredient->setName($name);
            $manager->persist($ingredient);
            $this->addReference('ingredient-'.strtolower(str_replace([' ',"'"], ["-",""], $ingredient->getName())), $ingredient);
        }
        
        $manager->flush();
    }
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\DataFixtures\OrderedFixtureInterface::getOrder()
     */
    public function getOrder()
    {
        return 1;
        
    }

    
    
}