

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
//EU Alliance

$Amnennar = new Servers; 
$Amnennar ->title = "Amnennar [FR]";
$Amnennar ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39819&sorting=lowest_price';
$serverArray[$i] = $Amnennar;
$i = $i + 1;

$Ashbringer = new Servers; 
$Ashbringer ->title = "Ashbringer [EU]";
$Ashbringer ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39821&sorting=lowest_price';
$serverArray[$i] = $Ashbringer;
$i = $i + 1;

$Auberdine = new Servers; 
$Auberdine ->title = "Auberdine [FR]";
$Auberdine ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39823&sorting=lowest_price';
$serverArray[$i] = $Auberdine;
$i = $i + 1;

$Bloodfang = new Servers; 
$Bloodfang ->title = "Bloodfang [EU]";
$Bloodfang ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39825&sorting=lowest_price';
$serverArray[$i] = $Bloodfang;
$i = $i + 1;

$Celebras = new Servers; 
$Celebras ->title = "Celebras [DE]";
$Celebras ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39827&sorting=lowest_price';
$serverArray[$i] = $Celebras;
$i = $i + 1;

$DragonsCall = new Servers; 
$DragonsCall ->title = "Dragon’s Call [DE]";
$DragonsCall ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39829&sorting=lowest_price';
$serverArray[$i] = $DragonsCall;
$i = $i + 1;

$Dragonfang = new Servers; 
$Dragonfang ->title = "Dragonfang [EU]";
$Dragonfang ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39831&sorting=lowest_price';
$serverArray[$i] = $Dragonfang;
$i = $i + 1;

$Dreadmist = new Servers; 
$Dreadmist ->title = "Dreadmist [EU]";
$Dreadmist ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39833&sorting=lowest_price';
$serverArray[$i] = $Dreadmist;
$i = $i + 1;

$Earthshaker = new Servers; 
$Earthshaker ->title = "Earthshaker [EU]";
$Earthshaker ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39835&sorting=lowest_price';
$serverArray[$i] = $Earthshaker;
$i = $i + 1;

$Everlook = new Servers; 
$Everlook ->title = "Everlook [DE]";
$Everlook ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39837&sorting=lowest_price';
$serverArray[$i] = $Everlook;
$i = $i + 1;

$Finkle = new Servers; 
$Finkle ->title = "Finkle [FR]";
$Finkle ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39839&sorting=lowest_price';
$serverArray[$i] = $Finkle;
$i = $i + 1;

$Firemaw = new Servers; 
$Firemaw ->title = "Firemaw [EU]";
$Firemaw ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39841&sorting=lowest_price';
$serverArray[$i] = $Firemaw;
$i = $i + 1;

$Flamelash = new Servers; 
$Flamelash ->title = "Flamelash [EU]";
$Flamelash ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39843&sorting=lowest_price';
$serverArray[$i] = $Flamelash;
$i = $i + 1;

$Gandling = new Servers; 
$Gandling ->title = "Gandling [EU]";
$Gandling ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39845&sorting=lowest_price';
$serverArray[$i] = $Gandling;
$i = $i + 1;

$Gehennas = new Servers; 
$Gehennas ->title = "Gehennas [EU]";
$Gehennas ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39847&sorting=lowest_price';
$serverArray[$i] = $Gehennas;
$i = $i + 1;

$Golemagg = new Servers; 
$Golemagg ->title = "Golemagg [EU]";
$Golemagg ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39849&sorting=lowest_price';
$serverArray[$i] = $Golemagg;
$i = $i + 1;

$Heartstriker = new Servers; 
$Heartstriker ->title = "Heartstriker [DE]";
$Heartstriker ->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39851&sorting=lowest_price';
$serverArray[$i] = $Heartstriker;
$i = $i + 1;

$HydraxianWaterlords = new Servers; 
$HydraxianWaterlords->title = "Hydraxian Waterlords [EU]";
$HydraxianWaterlords->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39853&sorting=lowest_price';
$serverArray[$i] = $HydraxianWaterlords;
$i = $i + 1;

$Judgement = new Servers; 
$Judgement->title = "Judgement [EU]";
$Judgement->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39855&sorting=lowest_price';
$serverArray[$i] = $Judgement;
$i = $i + 1;

$Lakeshire = new Servers; 
$Lakeshire->title = "Lakeshire [DE]";
$Lakeshire->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39857&sorting=lowest_price';
$serverArray[$i] = $Lakeshire;
$i = $i + 1;

$Lucifron = new Servers; 
$Lucifron->title = "Lucifron [DE]";
$Lucifron->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39859&sorting=lowest_price';
$serverArray[$i] = $Lucifron;
$i = $i + 1;

$Mandokir = new Servers; 
$Mandokir->title = "Mandokir [ES]";
$Mandokir->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39861&sorting=lowest_price';
$serverArray[$i] = $Mandokir;
$i = $i + 1;

$MirageRaceway = new Servers; 
$MirageRaceway->title = "Mirage Raceway [EU]";
$MirageRaceway->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39863&sorting=lowest_price';
$serverArray[$i] = $MirageRaceway;
$i = $i + 1;

$Mograine = new Servers; 
$Mograine->title = "Mograine [EU]";
$Mograine->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39865&sorting=lowest_price';
$serverArray[$i] = $Mograine;
$i = $i + 1;

$NethergardeKeep = new Servers; 
$NethergardeKeep->title = "Nethergarde Keep [EU]";
$NethergardeKeep->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39867&sorting=lowest_price';
$serverArray[$i] = $NethergardeKeep;
$i = $i + 1;

$Noggenfogger = new Servers; 
$Noggenfogger->title = "Noggenfogger [EU]";
$Noggenfogger->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39869&sorting=lowest_price';
$serverArray[$i] = $Noggenfogger;
$i = $i + 1;

$Patchwerk = new Servers; 
$Patchwerk->title = "Patchwerk [DE]";
$Patchwerk->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39871&sorting=lowest_price';
$serverArray[$i] = $Patchwerk;
$i = $i + 1;

$PyrewoodVillage = new Servers; 
$PyrewoodVillage->title = "Pyrewood Village [EU]";
$PyrewoodVillage->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39873&sorting=lowest_price';
$serverArray[$i] = $PyrewoodVillage;
$i = $i + 1;

$Razorfen = new Servers; 
$Razorfen->title = "Razorfen [DE]";
$Razorfen->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39875&sorting=lowest_price';
$serverArray[$i] = $Razorfen;
$i = $i + 1;

$Razorgore = new Servers; 
$Razorgore->title = "Razorgore [EU]";
$Razorgore->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39877&sorting=lowest_price';
$serverArray[$i] = $Razorgore;
$i = $i + 1;

$Shazzrah = new Servers; 
$Shazzrah->title = "Shazzrah [EU]";
$Shazzrah->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39879&sorting=lowest_price';
$serverArray[$i] = $Shazzrah;
$i = $i + 1;

$Skullflame = new Servers; 
$Skullflame->title = "Skullflame [EU]";
$Skullflame->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39881&sorting=lowest_price';
$serverArray[$i] = $Skullflame;
$i = $i + 1;

$Stonespine = new Servers; 
$Stonespine->title = "Stonespine [EU]";
$Stonespine->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39883&sorting=lowest_price';
$serverArray[$i] = $Stonespine;
$i = $i + 1;

$Sulfuron = new Servers; 
$Sulfuron->title = "Sulfuron [FR]";
$Sulfuron->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39885&sorting=lowest_price';
$serverArray[$i] = $Sulfuron;
$i = $i + 1;

$TenStorms = new Servers; 
$TenStorms->title = "Ten Storms [EU]";
$TenStorms->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39887&sorting=lowest_price';
$serverArray[$i] = $TenStorms;
$i = $i + 1;

$Transcendence = new Servers; 
$Transcendence->title = "Transcendence [DE]";
$Transcendence->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39889&sorting=lowest_price';
$serverArray[$i] = $Transcendence;
$i = $i + 1;

$ZandalarTribe = new Servers; 
$ZandalarTribe->title = "Zandalar Tribe [EU]";
$ZandalarTribe->url = 'https://www.g2g.com/wow-classic-eu/gold-27815-27817?&platform=39891&sorting=lowest_price';
$serverArray[$i] = $ZandalarTribe;
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
echo 'WoW Classic EU Alliance' . '<br>' . '<br>' . '<br>';

foreach($serverArray as $e){
	$e->getTitle();
	$e->getPrice();
	echo '<br>';
}

?>