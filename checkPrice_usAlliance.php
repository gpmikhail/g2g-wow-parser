

<?php
// example of how to use basic selector to retrieve HTML contents
include('shd/simple_html_dom.php');
$opts=array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n"."Cookie: g2g_regional=%7B%22currency%22%3A%22USD%22%2C%22language%22%3A%22en%22%7D\r\n",'user_agent'=>'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.2.28) Gecko/20120306 Firefox/3.6.28'));
$context=stream_context_create($opts);



   class Servers { 
  
      /* Member variables */
      var $price; 
      var $title; 
      var $url;
        
      /* Member functions */
      function setPrice($par){ 
         $this->price = $par; 
      } 
        
      function getPrice(){ 
         echo $this->price."<br>"; 
      } 
        
      function setTitle($par){ 
         $this->title = $par; 
      } 
        
      function getTitle(){ 
         echo $this->title."<br>" ; 
      } 

      function getUrl(){ 
         echo $this->url."<br>" ; 
      } 

   } 




$i = 0;
//US Alliance

$Anathema = new Servers; 
$Anathema ->title = "Anathema [US]";
$Anathema ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34234&faction=34232&sorting=price@asc';
$serverArray[$i] = $Anathema;
$i = $i + 1;

$ArcaniteReaper = new Servers; 
$ArcaniteReaper ->title = "Arcanite Reaper [US]";
$ArcaniteReaper ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34235&faction=34232&sorting=price@asc';
$serverArray[$i] = $ArcaniteReaper;
$i = $i + 1;

$Arugal = new Servers; 
$Arugal ->title = "Arugal [OCE]";
$Arugal ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34236&faction=34232&sorting=price@asc';
$serverArray[$i] = $Arugal;
$i = $i + 1;

$Ashkandi = new Servers; 
$Ashkandi ->title = "Ashkandi [US]";
$Ashkandi ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34237&faction=34232&sorting=price@asc';
$serverArray[$i] = $Ashkandi;
$i = $i + 1;

$Atiesh = new Servers; 
$Atiesh ->title = "Atiesh [US]";
$Atiesh ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34238&faction=34232&sorting=price@asc';
$serverArray[$i] = $Atiesh;
$i = $i + 1;

$Azuresong = new Servers; 
$Azuresong ->title = "Azuresong [US]";
$Azuresong ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34239&faction=34232&sorting=price@asc';
$serverArray[$i] = $Azuresong;
$i = $i + 1;

$Benediction = new Servers; 
$Benediction ->title = "Benediction [US]";
$Benediction ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34240&faction=34232&sorting=price@asc';
$serverArray[$i] = $Benediction;
$i = $i + 1;

$Bigglesworth = new Servers; 
$Bigglesworth ->title = "Bigglesworth [US]";
$Bigglesworth ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34241&faction=34232&sorting=price@asc';
$serverArray[$i] = $Bigglesworth;
$i = $i + 1;

$Blaumeux = new Servers; 
$Blaumeux ->title = "Blaumeux [US]";
$Blaumeux ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34242&faction=34232&sorting=price@asc';
$serverArray[$i] = $Blaumeux;
$i = $i + 1;

$BloodsailBuccaneers = new Servers; 
$BloodsailBuccaneers ->title = "Bloodsail Buccaneers [US]";
$BloodsailBuccaneers ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34243&faction=34232&sorting=price@asc';
$serverArray[$i] = $BloodsailBuccaneers;
$i = $i + 1;

$DeviateDelight = new Servers; 
$DeviateDelight ->title = "Deviate Delight [US]";
$DeviateDelight ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34244&faction=34232&sorting=price@asc';
$serverArray[$i] = $DeviateDelight;
$i = $i + 1;

$Earthfury = new Servers; 
$Earthfury ->title = "Earthfury [US]";
$Earthfury ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34245&faction=34232&sorting=price@asc';
$serverArray[$i] = $Earthfury;
$i = $i + 1;

$Faerlina = new Servers; 
$Faerlina ->title = "Faerlina [US]";
$Faerlina ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34246&faction=34232&sorting=price@asc';
$serverArray[$i] = $Faerlina;
$i = $i + 1;

$Fairbanks = new Servers; 
$Fairbanks ->title = "Fairbanks [US]";
$Fairbanks ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34247&faction=34232&sorting=price@asc';
$serverArray[$i] = $Fairbanks;
$i = $i + 1;

$Felstriker = new Servers; 
$Felstriker ->title = "Felstriker [OCE]";
$Felstriker ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34248&faction=34232&sorting=price@asc';
$serverArray[$i] = $Felstriker;
$i = $i + 1;

$Grobbulus = new Servers; 
$Grobbulus ->title = "Grobbulus [US]";
$Grobbulus ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34249&faction=34232&sorting=price@asc';
$serverArray[$i] = $Grobbulus;
$i = $i + 1;

$Heartseeker = new Servers; 
$Heartseeker ->title = "Heartseeker [US]";
$Heartseeker ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34250&faction=34232&sorting=price@asc';
$serverArray[$i] = $Heartseeker;
$i = $i + 1;

$Herod = new Servers; 
$Herod ->title = "Herod [US]";
$Herod ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34251&faction=34232&sorting=price@asc';
$serverArray[$i] = $Herod;
$i = $i + 1;

$Incendius = new Servers; 
$Incendius ->title = "Incendius [US]";
$Incendius ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34252&faction=34232&sorting=price@asc';
$serverArray[$i] = $Incendius;
$i = $i + 1;

$Kirtonos = new Servers; 
$Kirtonos ->title = "Kirtonos [US]";
$Kirtonos ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34253&faction=34232&sorting=price@asc';
$serverArray[$i] = $Kirtonos;
$i = $i + 1;

$Kromcrush = new Servers; 
$Kromcrush ->title = "Kromcrush [US]";
$Kromcrush ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34254&faction=34232&sorting=price@asc';
$serverArray[$i] = $Kromcrush;
$i = $i + 1;

$Kurinnaxx = new Servers; 
$Kurinnaxx ->title = "Kurinnaxx [US]";
$Kurinnaxx ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34255&faction=34232&sorting=price@asc';
$serverArray[$i] = $Kurinnaxx;
$i = $i + 1;

$Loatheb = new Servers; 
$Loatheb ->title = "Loatheb [LATAM]";
$Loatheb ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34256&faction=34232&sorting=price@asc';
$serverArray[$i] = $Loatheb;
$i = $i + 1;

$Mankrik = new Servers; 
$Mankrik ->title = "Mankrik [US]";
$Mankrik ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34257&faction=34232&sorting=price@asc';
$serverArray[$i] = $Mankrik;
$i = $i + 1;

$Myzrael = new Servers; 
$Myzrael ->title = "Myzrael [US]";
$Myzrael ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34258&faction=34232&sorting=price@asc';
$serverArray[$i] = $Myzrael;
$i = $i + 1;

$Netherwind = new Servers; 
$Netherwind ->title = "Netherwind [US]";
$Netherwind ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34259&faction=34232&sorting=price@asc';
$serverArray[$i] = $Netherwind;
$i = $i + 1;

$OldBlanchy = new Servers; 
$OldBlanchy ->title = "Old Blanchy [US]";
$OldBlanchy ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34260&faction=34232&sorting=price@asc';
$serverArray[$i] = $OldBlanchy;
$i = $i + 1;

$Pagle = new Servers; 
$Pagle ->title = "Pagle [US]";
$Pagle ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34261&faction=34232&sorting=price@asc';
$serverArray[$i] = $Pagle;
$i = $i + 1;

$Rattlegore = new Servers; 
$Rattlegore ->title = "Rattlegore [US]";
$Rattlegore ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34262&faction=34232&sorting=price@asc';
$serverArray[$i] = $Rattlegore;
$i = $i + 1;

$Remulos = new Servers; 
$Remulos ->title = "Remulos [OCE]";
$Remulos ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34263&faction=34232&sorting=price@asc';
$serverArray[$i] = $Remulos;
$i = $i + 1;

$Skeram = new Servers; 
$Skeram ->title = "Skeram [US]";
$Skeram ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34264&faction=34232&sorting=price@asc';
$serverArray[$i] = $Skeram;
$i = $i + 1;

$Smolderweb = new Servers; 
$Smolderweb ->title = "Smolderweb [US]";
$Smolderweb ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34265&faction=34232&sorting=price@asc';
$serverArray[$i] = $Smolderweb;
$i = $i + 1;

$Stalagg = new Servers; 
$Stalagg ->title = "Stalagg [US]";
$Stalagg ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34266&faction=34232&sorting=price@asc';
$serverArray[$i] = $Stalagg;
$i = $i + 1;

$Sulthraze = new Servers; 
$Sulthraze ->title = "Sul’thraze [BR]";
$Sulthraze ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34267&faction=34232&sorting=price@asc';
$serverArray[$i] = $Sulthraze;
$i = $i + 1;

$Sulfuras = new Servers; 
$Sulfuras ->title = "Sulfuras [US]";
$Sulfuras ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34268&faction=34232&sorting=price@asc';
$serverArray[$i] = $Sulfuras;
$i = $i + 1;

$Thalnos = new Servers; 
$Thalnos ->title = "Thalnos [US]";
$Thalnos ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34269&faction=34232&sorting=price@asc';
$serverArray[$i] = $Thalnos;
$i = $i + 1;

$Thunderfury = new Servers; 
$Thunderfury ->title = "Thunderfury [US]";
$Thunderfury ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34270&faction=34232&sorting=price@asc';
$serverArray[$i] = $Thunderfury;
$i = $i + 1;

$Westfall = new Servers; 
$Westfall ->title = "Westfall [US]";
$Westfall ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34271&faction=34232&sorting=price@asc';
$serverArray[$i] = $Westfall;
$i = $i + 1;

$Whitemane = new Servers; 
$Whitemane ->title = "Whitemane [US]";
$Whitemane ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34272&faction=34232&sorting=price@asc';
$serverArray[$i] = $Whitemane;
$i = $i + 1;

$Windseeker = new Servers; 
$Windseeker ->title = "Windseeker [US]";
$Windseeker ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34273&faction=34232&sorting=price@asc';
$serverArray[$i] = $Windseeker;
$i = $i + 1;

$Yojamba = new Servers; 
$Yojamba ->title = "Yojamba [OCE]";
$Yojamba ->url = 'https://www.g2g.com/wow-classic-us/gold-27816-27825?&server=34274&faction=34232&sorting=price@asc';
$serverArray[$i] = $Yojamba;
$i = $i + 1;





//setprice
foreach($serverArray as $e){
   $data=file_get_html($e->url,false,$context);
   $str = $data->find('span.products__exch-rate')[0];
   $strArray = explode('"',$str);
   $val = floatval($strArray[5]);
   $e->setPrice( $val );

}

//sort
usort($serverArray,function($first,$second){
    return $first->price < $second->price;
});


//out
date_default_timezone_set("Europe/Moscow");
echo date("d/m/Y") . "<br>";
echo date("h:i:sa") . '<br>';
echo 'WoW Classic US Alliance' . '<br>' . '<br>' . '<br>';
foreach($serverArray as $e){
   $e->getTitle();
   $e->getPrice();
   echo '<br>';
}

?>