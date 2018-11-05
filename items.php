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
    "hedelmä" => array("ananas", "appelsiini", "avokado", "banaani", "granaattiomena", "hedelmä", "karpalo", "kirsikka", "kookos", "mango", "mansikka", "marjoja", "meloni", "mustaherukka", "mustikka", "omena", "persikka", "puolukka", "päärynä", "ruusunmarja", "vadelma"),
    "juusto" => array("cheddar", "feta", "halloumi", "mozzarella", "parmesan", "parmesaani", "sini-homejuusto", "sinihomejuusto", "vuohenjuusto", "juusto"),
    "jälkiruoka" => array("brownie", "kanelikierre", "kiisseli", "kääretorttu", "mokkapalat", "mousse", "pannacotta", "rahka", "tiramisu"),
    "kananmuna" => array("kananmuna", "kananmunia", "munakas"),
    "keitto" => array("keitto"),
    "kevätkääryle" => array("kevätkääryle"),
    "couscous" => array("couscous"),
    "liharuoka" => array("bolognese", "burger", "hampurilainen", "karjalanpaisti", "karitsa", "kebab", "lammas", "leike", "lihapullat", "lihapullia", "maksaa", "mureke", "pihvejä", "pihvi", "poron", "riista", "paisti", "jauheliha", "liha"),
    "linssi" => array("linssejä", "linssi"),
    "maito" => array("jogurtti", "jugurtti", "kermaviili", "maito", "majoneesi", "smetana", "kerma"),
    "makkara" => array("bratwurst", "chorizo", "makkara", "nakit", "nakki", "salami"),
    "mauste" => array("basilika", "chili", "curry", "fenkoli", "inkivääri", "jalapeno", "jalopeno", "kaneli", "kapris", "kirveli", "korianteri", "minttu", "mintulla", "mustapippuri", "paprika", "persilja", "pesto", "rakuuna", "rosmariini", "rucola", "ruohosipuli", "salvia", "sinap", "sitruuna", "tilli", "timjami", "valkopippuri", "valkosipuli", "vanilja", "pippuri"),
    "nauta" => array("härkä", "härän", "karja", "naudan", "nauta"),
    "nuudeli" => array("nuudeleita", "nuudeli"),
    "ohukaiset" => array("lettu", "letut", "ohukaiset", "ohukaisia", "pannukakku"),
    "pasta" => array("cannelon", "lasagne", "makaroni", "makarooni", "pasta", "raviol", "spagetti", "spaghetti"),
    "peruna" => array("bataatti", "kiusaus", "muusi", "muussi", "perunoita", "pyttipannu", "ranskalaiset", "ranskanperunat", "peruna"),
    "pizza" => array("pitsa", "pizza"),
    "porsas" => array("kassler", "kinkku", "pekoni", "porsaan", "porsas", "possu", "ribs"),
    "proteiini" => array("härkis", "nyhtökaura", "seitan", "soija", "tofu"),
    "riisi" => array("riisi", "risotto", "sushi"),
    "salaatti" => array("salaat"),
    "siemen" => array("pistaasi", "siemen", "maapähkinä", "pähkinä"),
    "sieni" => array("herkkusieni", "herkkutatti", "kanttarelli", "sieni"),
    "tortilla" => array("tortilla", "burrito", "taco"),
    "vihannes" => array("artisokka", "borsh", "hapankaali", "herne", "juureks", "juures", "kasviks", "kasvis", "kiinankaali", "kurkku", "kurpitsa", "lanttu", "maissi", "munakoiso", "mustajuur", "oliivi", "palsternakka", "papu", "parsakaali", "pinaat", "porkkan", "punajuur", "purjo", "ruusukaali", "selleri", "sipuli", "tomaatt", "vihanneksia", "vihannes", "kaali"),
    "kana" => array("broiler", "kalkkuna", "kanaa", "kananpoika", "kananrinta", "kanapata", "kanapyörykät", "kanarinta", "kanavarras", "kanaviilokki", "kukkoa", "tikka masala", "pollo", "kana"),
    "merenelävä" => array("ahven", "janssoninkiusaus", "kalapuikko", "kampela", "katkarappu", "katkarapu", "kuha", "lohta", "mereneläv", "muikku", "muikut", "oster", "savulohi", "scamp", "seiti", "siian", "siika", "silakka", "silakoita", "simpukka", "sushi", "tonnikala", "turska", "uunikala", "uunilohi", "lohi", "kala"),
  );
