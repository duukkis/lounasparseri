<?php
/**
* BE CAREFUL IN WHAT ORDER ARE THESE
* The matching goes from first to last and the matching gets replaced
* so if you have porkkanakermaviiliporsasta
* make sure that words are... 
* porkkana before kana
* kermaviili before viili or kerma (if you want to match kermaviili)
* that is why the words are mostly in alphabetical order
*/
$items = array(
    "hedelmä" => array("ananas", "appelsiini", "avokado", "avocado", "banaani", "granaattiomena", "hedelmä", "karpalo", "kirsikka", "kookos", "mango", "mansikka", "mandariini", "marjoja", "meloni", "mustaherukka", "mustikka", "omena", "persikka", "puolukka", "päärynä", "ruusunmarja", "vadelma", "viikuna", "viinirypäle"),
    "juusto" => array("brie", "cheddar", "emmental", "feta", "halloumi", "mascarpone", "mozzarella", "parmesan", "parmesaani", "sini-homejuusto", "sinihomejuusto", "vuohenjuusto", "juusto"),
    "jälkiruoka" => array("brownie", "jäätelö", "kanelikierre", "kiisseli", "kinuski", "kääretorttu", "mokkapalat", "mousse", "pannacotta", "rahka", "smoothie", "tiramisu", "täytekakku", "valkosuklaa"),
    "kananmuna" => array("kananmuna", "kananmunia", "munakas"),
    "keitto" => array("keitto"),
    "kevätkääryle" => array("kevätkääryle"),
    "couscous" => array("couscous", "cous cous", "kvinoa"),
    "liharuoka" => array("bolognese", "bolognaise", "burger", "hampurilainen", "hirven", "hirvi", "karjalanpaisti", "karitsa", "kebab", "lammas", "lampaan", "leike", "lihapulla", "lihapullia", "maksaa", "mureke", "pihvejä", "pihvi", "poron", "riista", "paisti", "jauheliha", "liha"),
    "linssi" => array("linssejä", "linssi"),
    "maito" => array("jogurtti", "jugurtti", "kermaviili", "maito", "majoneesi", "smetana", "kerma"),
    "makkara" => array("bratwurst", "chorizo", "makkara", "nakit", "nakki", "pepperoni", "salami"),
    "mauste" => array("basilika", "chili", "curry", "inkivääri", "jalapeno", "jalopeno", "kaneli", "kapris", "kardemumma", "kirveli", "korianteri", "kumina", "minttu", "mintulla", "mustapippuri", "paprik", "persilja", "pesto", "piparjuuri", "rakuuna", "rosmariini", "rucola", "ruohosipuli", "salvia", "sinap", "sitruuna", "tilli", "timjami", "valkopippuri", "valkosipuli", "vanilja", "pippuri"),
    "nauta" => array("härkä", "härän", "karja", "naudan", "nauta", "stroganof", "vasikan", "vasikka"),
    "nuudeli" => array("nuudel"),
    "ohukaiset" => array("lettu", "letut", "ohukaiset", "ohukaisia", "pannukakku"),
    "pasta" => array("cannelon", "lasagne", "makaroni", "makarooni", "pasta", "raviol", "spagetti", "spaghetti"),
    "peruna" => array("bataatti", "kiusaus", "muusi", "muussi", "perunoita", "pyttipannu", "ranskalaiset", "ranskanperunat", "peruna"),
    "porsas" => array("kasler", "kassler", "kinkku", "pekoni", "porsaan", "porsas", "possu", "pulled pork", "ribs"),
    "proteiini" => array("härkis", "härkik", "nyhtökaura", "seitan", "soija", "tofu"),
    "riisi" => array("ohra", "riisi", "risotto", "sushi"),
    "salaatti" => array("salaat"),
    "siemen" => array("auringonkukansiemen", "cashewpähkin", "pistaasi", "siemen", "maapähkin", "pähkin"),
    "sieni" => array("herkkusieni", "herkkutatti", "kanttarelli", "suppilovahver", "sieni"),
    "tortilla" => array("falafel", "tortilla", "burrito", "taco"),
    "vihannes" => array("artisokka", "borsh", "fenkoli", "hapankaali", "kikherne", "herne", "juureks", "juures", "kasviks", "kasvis", "kiinankaali", "kurkku", "kurpits", "lanttu", "maa-artisok", "maissi", "merilevä", "munakoiso", "mustajuur", "nauris", "oliivi", "palsternakka", "papu", "parsakaali", "pinaat", "porkkan", "punajuur", "purjo", "raparperi", "ruusukaali", "selleri", "sipuli", "tomaatt", "vihanneksia", "vihannes", "kaali"),
    "kana" => array("broiler", "kalkkuna", "kanaa", "kananpoika", "kananrinta", "kanapata", "kanapyörykät", "kanarinta", "kanavarras", "kanaviilokki", "kukkoa", "tikka masala", "pollo", "ankka", "kana"),
    "merenelävä" => array("ahven", "janssonin", "kalapuikko", "kampela", "katkarappu", "katkarapu", "kuha", "mereneläv", "muikku", "muikut", "nieriä", "oster", "savuloh", "scamp", "seiti", "seljanka", "siian", "siika", "silakka", "silakoita", "simpukka", "sushi", "särki", "tonnikala", "turska", "uunikala", "uuniloh", "äyriäis", "lohta", "lohi", "kala"),
    "pizza" => array("pitsa", "pizza"),
  );