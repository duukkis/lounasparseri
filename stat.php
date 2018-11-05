<?php
/**
 * helper 1, gets the lunch pages
 **/
if(2 == 1){
  $nbr_of_pages_to_fetch = 12;
  $days = 5;
  $cookieString = '{"lat":"60.1698","lng":"24.9383","formattedAddress":"Keskusta,+Helsinki"}';

  for($j = 2;$j <= $days; $j++){
    // clear file
    file_put_contents("lunch_".$j.".txt", "");
    for($i = 1;$i <= $nbr_of_pages_to_fetch; $i++){
      $url = "https://www.lounaat.info/ajax/filter?view=lahistolla&day=".$j."&page=".$i."&coords=false";
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_COOKIE, $cookieString);
      curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:40.0) Gecko/20100101 Firefox/40.1');
      $c = curl_exec($ch);
      curl_close($ch);
      file_put_contents("lunch_".$j.".txt", $c, FILE_APPEND);
      // sleep a while so no one gets angry
      sleep(2);
    }
  }
  die("all lunches fetched");
}

/**
 * parses lunches and returns an result array
 */
function parseLunches($file, $items, $debug = false){
  $c = file_get_contents($file);
  $html = str_get_html($c);

  $numbas = array();
  $total = 0;
  $ignore_these = array();

  // loop lunches
  foreach($html->find('div.item-body ul li') AS $l){
    $log = "";
    $lunch = trim(mb_strtolower(strip_tags($l->innertext())));
    $found = false;
    $ignore_row = false;
    foreach($ignore_these AS $ignore){
      if(mb_strpos($lunch, $ignore) !== false){
        $ignore_row = true;
      }
    }
    if(!$ignore_row){
      foreach($items AS $head => $its){
        foreach($its AS $k => $val){
          if(mb_strpos($lunch, $val) !== false){
            $found = true;
            // print $v." ";
            $log .= $val." ";
            if(isset($numbas[$head][$val])){
              $numbas[$head][$val]++;
            } else {
              $numbas[$head][$val] = 1;
            }
            // calc totals
            if(isset($numbas[$head]["TOTAL"])){
              $numbas[$head]["TOTAL"]++;
            } else {
              $numbas[$head]["TOTAL"] = 1;
            }
            $total++;
            // remove the word, so we can separate kermaviili from viili
            // and match viili or kala or kana last
            $lunch = str_replace($val, "", $lunch);
          }
        }
      }
    }
    if($debug){
      if($found) {
        print "FOUND ".$log." --- ".$lunch.PHP_EOL;
      } else if($ignore_row) {
        print "IGNORE ".$lunch.PHP_EOL;
      } else {
        print "NOTHING ".$lunch.PHP_EOL;
      }
    }
  }
  return array("numbas" => $numbas, "total" => $total);
}

// multibyte string padding for end formatting
function mb_str_pad( $input, $pad_length, $pad_string = ' ', $pad_type = STR_PAD_RIGHT) {
  $diff = strlen( $input ) - mb_strlen( $input );
  return str_pad( $input, $pad_length + $diff, $pad_string, $pad_type );
}


// html parser from http://simplehtmldom.sourceforge.net/
include("simple_html_dom.php");
include("items.php");

$debug = false;

// parse the local files
$file = "lunch_1.txt";
$result = parseLunches($file, $items, $debug);
$numbas = $result["numbas"];
$total = $result["total"];

// raw data here
// print_r($numbas);

if(!$debug){
  $pad = 20;
  print PHP_EOL.PHP_EOL;
  print "  Lounaita yhteensä ".$total.PHP_EOL;
  ksort($numbas);
  foreach($numbas AS $paaruoka => $subs){
    ksort($subs);
    print "  ".mb_str_pad($paaruoka,$pad)." ".$subs["TOTAL"].PHP_EOL;
    foreach($subs AS $k => $v){
      if($k != "TOTAL"){
        print "    ".mb_str_pad($k,$pad-2)." ".$v.PHP_EOL;
      }
    }
  }
  print PHP_EOL.PHP_EOL;
}