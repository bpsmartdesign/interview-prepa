<?php

$dictionary = [
  "apple", "banana", "orange", "grape", "kiwi", "pineapple", "strawberry", "mango", "watermelon", "peach",
  "blueberry", "pear", "cherry", "lemon", "coconut", "raspberry", "lime", "plum", "blackberry", "apricot",
  "avocado", "fig", "pomegranate", "nectarine", "melon", "guava", "persimmon", "dragonfruit", "papaya", "cranberry",
  "passionfruit", "lychee", "starfruit", "mulberry", "tangerine", "boysenberry", "cantaloupe", "honeydew", "kiwifruit",
  "mandarin", "mangosteen", "quince", "grapefruit", "rhubarb", "plantain", "date", "elderberry", "gooseberry", "tomato",
  "potato", "onion", "carrot", "pepper", "cucumber", "lettuce", "broccoli", "spinach", "zucchini", "cauliflower",
  "celery", "beetroot", "garlic", "cabbage", "asparagus", "radish", "eggplant", "pumpkin", "corn", "sweet potato",
  "leek", "turnip", "chickpea", "lentil", "mushroom", "pea", "bean", "soybean", "black-eyed pea", "kidney bean",
  "lima bean", "green bean", "navy bean", "red", "bean", "split pea", "mung bean", "adzuki bean", "fava bean",
  "chocolate", "cake", "cookie", "ice cream", "pie", "candy", "brownie", "cupcake", "donut", "muffin",
  "pancake", "waffle", "scone", "cheesecake", "pudding", "tiramisu", "macaron", "gelato", "frozen yogurt", "caramel",
  "cappuccino", "espresso", "latte", "mocha", "americano", "frappuccino", "chai", "hot chocolate", "tea", "lemonade",
  "soda", "juice", "milkshake", "smoothie", "water", "coffee", "wine", "beer", "cocktail", "whiskey",
  "rum", "vodka", "gin", "tequila", "brandy", "martini", "margarita", "mojito", "sangria", "pina colada",
  "cosmopolitan", "daiquiri", "negroni", "old fashioned", "manhattan", "paloma", "spritz", "whisky sour", "white russian", "mai tai",
  "hamburger", "pizza", "sandwich", "hot dog", "taco", "sushi", "pasta", "steak", "chicken", "salad",
  "burrito", "noodle", "shawarma", "kebab", "gyro", "ramen", "curry", "falafel", "samosa", "spring roll",
  "lasagna", "panini", "sausage", "meatball", "pie", "omelette", "fish", "lobster", "shrimp", "crab"
];

function checkWordBreak($str, $dictionary) {
  $dictionaryHash = array_flip($dictionary);
  $allSub = [];
  
  function processBreak ($sub, $dictionaryHash, &$allSub) {
    if (strlen($sub) === 0)
      return;

    $currentSub = $sub[0];

    for ($i =1; $i < strlen($sub); $i++) {
      $currentSub .= $sub[$i];
  
      if (isset($dictionaryHash[$currentSub])) {
        $allSub[] = $currentSub;
        processBreak(substr($sub, strlen($currentSub)), $dictionaryHash, $allSub);
      }
    }
  }

  processBreak($str, $dictionaryHash, $allSub);

  return $allSub;
}

print_r(checkWordBreak('pietacosushi', $dictionary));
