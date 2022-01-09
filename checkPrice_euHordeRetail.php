

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
//EU Horde

$Aegwynn = new Servers; 
$Aegwynn ->title = "Aegwynn [DE]";
$Aegwynn ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=544&faction=1087&sorting=price@asc';
$serverArray[$i] = $Aegwynn;
$i = $i + 1;

$AeriePeak = new Servers; 
$AeriePeak ->title = "Aerie Peak [EU]";
$AeriePeak ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=545&faction=1087&sorting=price@asc';
$serverArray[$i] = $AeriePeak;
$i = $i + 1;

$Agamaggan = new Servers; 
$Agamaggan ->title = "Agamaggan [EU]";
$Agamaggan ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=546&faction=1087&sorting=price@asc';
$serverArray[$i] = $Agamaggan;
$i = $i + 1;

$Aggra = new Servers; 
$Aggra ->title = "Aggra [EU]";
$Aggra ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=547&faction=1087&sorting=price@asc';
$serverArray[$i] = $Aggra;
$i = $i + 1;

$Aggramar = new Servers; 
$Aggramar ->title = "Aggramar [EU]";
$Aggramar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=548&faction=1087&sorting=price@asc';
$serverArray[$i] = $Aggramar;
$i = $i + 1;

$AhnQiraj = new Servers; 
$AhnQiraj ->title = "Ahn'Qiraj [EU]";
$AhnQiraj ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=549&faction=1087&sorting=price@asc';
$serverArray[$i] = $AhnQiraj;
$i = $i + 1;

$AlAkir = new Servers; 
$AlAkir ->title = "Al'Akir [EU]";
$AlAkir ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=550&faction=1087&sorting=price@asc';
$serverArray[$i] = $AlAkir;
$i = $i + 1;

$Alexstrasza = new Servers; 
$Alexstrasza ->title = "Alexstrasza [DE]";
$Alexstrasza ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=551&faction=1087&sorting=price@asc';
$serverArray[$i] = $Alexstrasza;
$i = $i + 1;

$Alleria = new Servers; 
$Alleria ->title = "Alleria [DE]";
$Alleria ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=552&faction=1087&sorting=price@asc';
$serverArray[$i] = $Alleria;
$i = $i + 1;

$Alonsus = new Servers; 
$Alonsus ->title = "Alonsus [EU]";
$Alonsus ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=553&faction=1087&sorting=price@asc';
$serverArray[$i] = $Alonsus;
$i = $i + 1;

$AmanThul = new Servers; 
$AmanThul ->title = "Aman'Thul [DE]";
$AmanThul ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=554&faction=1087&sorting=price@asc';
$serverArray[$i] = $AmanThul;
$i = $i + 1;

$Ambossar = new Servers; 
$Ambossar ->title = "Ambossar [DE]";
$Ambossar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=555&faction=1087&sorting=price@asc';
$serverArray[$i] = $Ambossar;
$i = $i + 1;

$Anachronos = new Servers; 
$Anachronos ->title = "Anachronos [EU]";
$Anachronos ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=556&faction=1087&sorting=price@asc';
$serverArray[$i] = $Anachronos;
$i = $i + 1;

$Anetheron = new Servers; 
$Anetheron ->title = "Anetheron [DE]";
$Anetheron ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=557&faction=1087&sorting=price@asc';
$serverArray[$i] = $Anetheron;
$i = $i + 1;

$Antonidas = new Servers; 
$Antonidas ->title = "Antonidas [DE]";
$Antonidas ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=558&faction=1087&sorting=price@asc';
$serverArray[$i] = $Antonidas;
$i = $i + 1;

$Anubarak = new Servers; 
$Anubarak ->title = "Anub'arak [DE]";
$Anubarak ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=559&faction=1087&sorting=price@asc';
$serverArray[$i] = $Anubarak;
$i = $i + 1;

$Arakarahm = new Servers; 
$Arakarahm ->title = "Arak-arahm [FR]";
$Arakarahm ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=560&faction=1087&sorting=price@asc';
$serverArray[$i] = $Arakarahm;
$i = $i + 1;

$Arathi = new Servers; 
$Arathi ->title = "Arathi [FR]";
$Arathi ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=561&faction=1087&sorting=price@asc';
$serverArray[$i] = $Arathi;
$i = $i + 1;

$Arathor = new Servers; 
$Arathor ->title = "Arathor [EU]";
$Arathor ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=562&faction=1087&sorting=price@asc';
$serverArray[$i] = $Arathor;
$i = $i + 1;

$Archimonde = new Servers; 
$Archimonde ->title = "Archimonde [FR]";
$Archimonde ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=563&faction=1087&sorting=price@asc';
$serverArray[$i] = $Archimonde;
$i = $i + 1;

$Area52 = new Servers; 
$Area52 ->title = "Area 52 [DE]";
$Area52 ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=564&faction=1087&sorting=price@asc';
$serverArray[$i] = $Area52;
$i = $i + 1;

$ArgentDawn = new Servers; 
$ArgentDawn ->title = "Argent Dawn [EU]";
$ArgentDawn ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=565&faction=1087&sorting=price@asc';
$serverArray[$i] = $ArgentDawn;
$i = $i + 1;

$Arthas = new Servers; 
$Arthas ->title = "Arthas [DE]";
$Arthas ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=566&faction=1087&sorting=price@asc';
$serverArray[$i] = $Arthas;
$i = $i + 1;

$Arygos = new Servers; 
$Arygos ->title = "Arygos [DE]";
$Arygos ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=567&faction=1087&sorting=price@asc';
$serverArray[$i] = $Arygos;
$i = $i + 1;

$Aszune = new Servers; 
$Aszune ->title = "Aszune [EU]";
$Aszune ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=568&faction=1087&sorting=price@asc';
$serverArray[$i] = $Aszune;
$i = $i + 1;

$Auchindoun = new Servers; 
$Auchindoun ->title = "Auchindoun [EU]";
$Auchindoun ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=569&faction=1087&sorting=price@asc';
$serverArray[$i] = $Auchindoun;
$i = $i + 1;

$AzjolNerub = new Servers; 
$AzjolNerub ->title = "Azjol-Nerub [EU]";
$AzjolNerub ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=570&faction=1087&sorting=price@asc';
$serverArray[$i] = $AzjolNerub;
$i = $i + 1;

$Azshara = new Servers; 
$Azshara ->title = "Azshara [DE]";
$Azshara ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=571&faction=1087&sorting=price@asc';
$serverArray[$i] = $Azshara;
$i = $i + 1;

$Azuremyst = new Servers; 
$Azuremyst ->title = "Azuremyst [EU]";
$Azuremyst ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=572&faction=1087&sorting=price@asc';
$serverArray[$i] = $Azuremyst;
$i = $i + 1;

$Baelgun = new Servers; 
$Baelgun ->title = " [DE]";
$Baelgun ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=573&faction=1087&sorting=price@asc';
$serverArray[$i] = $Baelgun;
$i = $i + 1;

$Balnazzar = new Servers; 
$Balnazzar ->title = "Balnazzar [EU]";
$Balnazzar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=574&faction=1087&sorting=price@asc';
$serverArray[$i] = $Balnazzar;
$i = $i + 1;

$Blackhand = new Servers; 
$Blackhand ->title = "Blackhand [DE]";
$Blackhand ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=575&faction=1087&sorting=price@asc';
$serverArray[$i] = $Blackhand;
$i = $i + 1;

$Blackmoore = new Servers; 
$Blackmoore ->title = "Blackmoore [DE]";
$Blackmoore ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=576&faction=1087&sorting=price@asc';
$serverArray[$i] = $Blackmoore;
$i = $i + 1;

$Blackrock = new Servers; 
$Blackrock ->title = "Blackrock [DE]";
$Blackrock ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=577&faction=1087&sorting=price@asc';
$serverArray[$i] = $Blackrock;
$i = $i + 1;

$BladesEdge = new Servers; 
$BladesEdge ->title = "Blade's Edge [EU]";
$BladesEdge ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=578&faction=1087&sorting=price@asc';
$serverArray[$i] = $BladesEdge;
$i = $i + 1;

$Bladefist = new Servers; 
$Bladefist ->title = "Bladefist [EU]";
$Bladefist ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=579&faction=1087&sorting=price@asc';
$serverArray[$i] = $Bladefist;
$i = $i + 1;

$Bloodfeather = new Servers; 
$Bloodfeather ->title = "Bloodfeather [EU]";
$Bloodfeather ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=580&faction=1087&sorting=price@asc';
$serverArray[$i] = $Bloodfeather;
$i = $i + 1;

$Bloodhoof = new Servers; 
$Bloodhoof ->title = "Bloodhoof [EU]";
$Bloodhoof ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=581&faction=1087&sorting=price@asc';
$serverArray[$i] = $Bloodhoof;
$i = $i + 1;

$Bloodscalp = new Servers; 
$Bloodscalp ->title = "Bloodscalp [EU]";
$Bloodscalp ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=582&faction=1087&sorting=price@asc';
$serverArray[$i] = $Bloodscalp;
$i = $i + 1;

$Blutkessel = new Servers; 
$Blutkessel ->title = "Blutkessel [DE]";
$Blutkessel ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=583&faction=1087&sorting=price@asc';
$serverArray[$i] = $Blutkessel;
$i = $i + 1;

$Boulderfist = new Servers; 
$Boulderfist ->title = "Boulderfist [EU]";
$Boulderfist ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=584&faction=1087&sorting=price@asc';
$serverArray[$i] = $Boulderfist;
$i = $i + 1;

$BronzeDragonflight = new Servers; 
$BronzeDragonflight ->title = "Bronze Dragonflight [EU]";
$BronzeDragonflight ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=585&faction=1087&sorting=price@asc';
$serverArray[$i] = $BronzeDragonflight;
$i = $i + 1;

$Bronzebeard = new Servers; 
$Bronzebeard ->title = "Bronzebeard [EU]";
$Bronzebeard ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=586&faction=1087&sorting=price@asc';
$serverArray[$i] = $Bronzebeard;
$i = $i + 1;

$BurningBlade = new Servers; 
$BurningBlade ->title = "Burning Blade [EU]";
$BurningBlade ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=587&faction=1087&sorting=price@asc';
$serverArray[$i] = $BurningBlade;
$i = $i + 1;

$BurningLegion = new Servers; 
$BurningLegion ->title = "Burning Legion [EU]";
$BurningLegion ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=588&faction=1087&sorting=price@asc';
$serverArray[$i] = $BurningLegion;
$i = $i + 1;

$BurningSteppes = new Servers; 
$BurningSteppes ->title = "Burning Steppes [EU]";
$BurningSteppes ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=589&faction=1087&sorting=price@asc';
$serverArray[$i] = $BurningSteppes;
$i = $i + 1;

$CThun = new Servers; 
$CThun ->title = "C'Thun [ES]";
$CThun ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=590&faction=1087&sorting=price@asc';
$serverArray[$i] = $CThun;
$i = $i + 1;

$ChamberofAspects = new Servers; 
$ChamberofAspects ->title = "Chamber of Aspects [EU]";
$ChamberofAspects ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=591&faction=1087&sorting=price@asc';
$serverArray[$i] = $ChamberofAspects;
$i = $i + 1;

$Chantseternels = new Servers; 
$Chantseternels ->title = "Chants éternels [FR]";
$Chantseternels ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=592&faction=1087&sorting=price@asc';
$serverArray[$i] = $Chantseternels;
$i = $i + 1;

$Chogall = new Servers; 
$Chogall ->title = "Cho'gall [FR]";
$Chogall ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=593&faction=1087&sorting=price@asc';
$serverArray[$i] = $Chogall;
$i = $i + 1;

$Chromaggus = new Servers; 
$Chromaggus ->title = "Chromaggus [EU]";
$Chromaggus ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=594&faction=1087&sorting=price@asc';
$serverArray[$i] = $Chromaggus;
$i = $i + 1;

$ColinasPardas = new Servers; 
$ColinasPardas ->title = "Colinas Pardas [ES]";
$ColinasPardas ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=595&faction=1087&sorting=price@asc';
$serverArray[$i] = $ColinasPardas;
$i = $i + 1;

$ConfrerieduThorium = new Servers; 
$ConfrerieduThorium ->title = "Confrérie du Thorium [FR]";
$ConfrerieduThorium ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=596&faction=1087&sorting=price@asc';
$serverArray[$i] = $ConfrerieduThorium;
$i = $i + 1;

$ConseildesOmbres = new Servers; 
$ConseildesOmbres ->title = "Conseil des Ombres [FR]";
$ConseildesOmbres ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=597&faction=1087&sorting=price@asc';
$serverArray[$i] = $ConseildesOmbres;
$i = $i + 1;

$Crushridge = new Servers; 
$Crushridge ->title = "Crushridge [EU]";
$Crushridge ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=598&faction=1087&sorting=price@asc';
$serverArray[$i] = $Crushridge;
$i = $i + 1;

$CultedelaRivenoire = new Servers; 
$CultedelaRivenoire ->title = "Cultedela Rivenoire [FR]";
$CultedelaRivenoire ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=599&faction=1087&sorting=price@asc';
$serverArray[$i] = $CultedelaRivenoire;
$i = $i + 1;

$Daggerspine = new Servers; 
$Daggerspine ->title = "Daggerspine [EU]";
$Daggerspine ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=600&faction=1087&sorting=price@asc';
$serverArray[$i] = $Daggerspine;
$i = $i + 1;

$Dalaran = new Servers; 
$Dalaran ->title = "Dalaran [FR]";
$Dalaran ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=601&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dalaran;
$i = $i + 1;

$Dalvengyr = new Servers; 
$Dalvengyr ->title = "Dalvengyr [DE]";
$Dalvengyr ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=602&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dalvengyr;
$i = $i + 1;

$DarkmoonFaire = new Servers; 
$DarkmoonFaire ->title = "Darkmoon Faire [EU]";
$DarkmoonFaire ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=603&faction=1087&sorting=price@asc';
$serverArray[$i] = $DarkmoonFaire;
$i = $i + 1;

$Darksorrow = new Servers; 
$Darksorrow ->title = "Darksorrow [EU]";
$Darksorrow ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=604&faction=1087&sorting=price@asc';
$serverArray[$i] = $Darksorrow;
$i = $i + 1;

$Darkspear = new Servers; 
$Darkspear ->title = "Darkspear [EU]";
$Darkspear ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=605&faction=1087&sorting=price@asc';
$serverArray[$i] = $Darkspear;
$i = $i + 1;

$DasKonsortium = new Servers; 
$DasKonsortium ->title = "Das Konsortium [DE]";
$DasKonsortium ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=606&faction=1087&sorting=price@asc';
$serverArray[$i] = $DasKonsortium;
$i = $i + 1;

$DasSyndikat = new Servers; 
$DasSyndikat ->title = "Das Syndikat [DE]";
$DasSyndikat ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=607&faction=1087&sorting=price@asc';
$serverArray[$i] = $DasSyndikat;
$i = $i + 1;

$Deathwing = new Servers; 
$Deathwing ->title = "Deathwing [EU]";
$Deathwing ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=608&faction=1087&sorting=price@asc';
$serverArray[$i] = $Deathwing;
$i = $i + 1;

$DefiasBrotherhood = new Servers; 
$DefiasBrotherhood ->title = "Defias Brotherhood [EU]";
$DefiasBrotherhood ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=609&faction=1087&sorting=price@asc';
$serverArray[$i] = $DefiasBrotherhood;
$i = $i + 1;

$Dentarg = new Servers; 
$Dentarg ->title = "Dentarg [EU]";
$Dentarg ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=610&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dentarg;
$i = $i + 1;

$DerabyssischeRat = new Servers; 
$DerabyssischeRat ->title = "Der abyssische Rat [DE]";
$DerabyssischeRat ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=611&faction=1087&sorting=price@asc';
$serverArray[$i] = $DerabyssischeRat;
$i = $i + 1;

$DerMithrilorden = new Servers; 
$DerMithrilorden ->title = "Der Mithrilorden [DE]";
$DerMithrilorden ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=612&faction=1087&sorting=price@asc';
$serverArray[$i] = $DerMithrilorden;
$i = $i + 1;

$DerRatvonDalaran = new Servers; 
$DerRatvonDalaran ->title = "Der Rat von Dalaran [DE]";
$DerRatvonDalaran ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=613&faction=1087&sorting=price@asc';
$serverArray[$i] = $DerRatvonDalaran;
$i = $i + 1;

$Destromath = new Servers; 
$Destromath ->title = "Destromath [DE]";
$Destromath ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=614&faction=1087&sorting=price@asc';
$serverArray[$i] = $Destromath;
$i = $i + 1;

$Dethecus = new Servers; 
$Dethecus ->title = "Dethecus [DE]";
$Dethecus ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=615&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dethecus;
$i = $i + 1;

$DieAldor = new Servers; 
$DieAldor ->title = "Die Aldor [DE]";
$DieAldor ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=616&faction=1087&sorting=price@asc';
$serverArray[$i] = $DieAldor;
$i = $i + 1;

$DieArguswacht = new Servers; 
$DieArguswacht ->title = "Die Arguswacht [DE]";
$DieArguswacht ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=617&faction=1087&sorting=price@asc';
$serverArray[$i] = $DieArguswacht;
$i = $i + 1;

$DieewigeWacht = new Servers; 
$DieewigeWacht ->title = "Die ewige Wacht [DE]";
$DieewigeWacht ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=618&faction=1087&sorting=price@asc';
$serverArray[$i] = $DieewigeWacht;
$i = $i + 1;

$DieNachtwache = new Servers; 
$DieNachtwache ->title = "Die Nachtwache [DE]";
$DieNachtwache ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=619&faction=1087&sorting=price@asc';
$serverArray[$i] = $DieNachtwache;
$i = $i + 1;

$DieSilberneHand = new Servers; 
$DieSilberneHand ->title = "Die Silberne Hand [DE]";
$DieSilberneHand ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=620&faction=1087&sorting=price@asc';
$serverArray[$i] = $DieSilberneHand;
$i = $i + 1;

$DieTodeskrallen = new Servers; 
$DieTodeskrallen ->title = "Die Todeskrallen [DE]";
$DieTodeskrallen ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=621&faction=1087&sorting=price@asc';
$serverArray[$i] = $DieTodeskrallen;
$i = $i + 1;

$Doomhammer = new Servers; 
$Doomhammer ->title = "Doomhammer [EU]";
$Doomhammer ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=622&faction=1087&sorting=price@asc';
$serverArray[$i] = $Doomhammer;
$i = $i + 1;

$Draenor = new Servers; 
$Draenor ->title = "Draenor [EU]";
$Draenor ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=623&faction=1087&sorting=price@asc';
$serverArray[$i] = $Draenor;
$i = $i + 1;

$Dragonblight = new Servers; 
$Dragonblight ->title = "Dragonblight [EU]";
$Dragonblight ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=624&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dragonblight;
$i = $i + 1;

$Dragonmaw = new Servers; 
$Dragonmaw ->title = "Dragonmaw [EU]";
$Dragonmaw ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=625&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dragonmaw;
$i = $i + 1;

$Drakthul = new Servers; 
$Drakthul ->title = "Drak'thul [EU]";
$Drakthul ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=626&faction=1087&sorting=price@asc';
$serverArray[$i] = $Drakthul;
$i = $i + 1;

$DrekThar = new Servers; 
$DrekThar ->title = "Drek'Thar [FR]";
$DrekThar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=627&faction=1087&sorting=price@asc';
$serverArray[$i] = $DrekThar;
$i = $i + 1;

$DunModr = new Servers; 
$DunModr ->title = "Dun Modr [ES]";
$DunModr ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=628&faction=1087&sorting=price@asc';
$serverArray[$i] = $DunModr;
$i = $i + 1;

$DunMorogh = new Servers; 
$DunMorogh ->title = "Dun Morogh [DE]";
$DunMorogh ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=629&faction=1087&sorting=price@asc';
$serverArray[$i] = $DunMorogh;
$i = $i + 1;

$Dunemaul = new Servers; 
$Dunemaul ->title = "Dunemaul [EU]";
$Dunemaul ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=630&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dunemaul;
$i = $i + 1;

$Durotan = new Servers; 
$Durotan ->title = "Durotan [DE]";
$Durotan ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=631&faction=1087&sorting=price@asc';
$serverArray[$i] = $Durotan;
$i = $i + 1;

$EarthenRing = new Servers; 
$EarthenRing ->title = "Earthen Ring [EU]";
$EarthenRing ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=632&faction=1087&sorting=price@asc';
$serverArray[$i] = $EarthenRing;
$i = $i + 1;

$Echsenkessel = new Servers; 
$Echsenkessel ->title = "Echsenkessel [DE]";
$Echsenkessel ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=633&faction=1087&sorting=price@asc';
$serverArray[$i] = $Echsenkessel;
$i = $i + 1;

$Eitrigg = new Servers; 
$Eitrigg ->title = "Eitrigg [FR]";
$Eitrigg ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=634&faction=1087&sorting=price@asc';
$serverArray[$i] = $Eitrigg;
$i = $i + 1;

$EldreThalas = new Servers; 
$EldreThalas ->title = "Eldre'Thalas [FR]";
$EldreThalas ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=635&faction=1087&sorting=price@asc';
$serverArray[$i] = $EldreThalas;
$i = $i + 1;

$Elune = new Servers; 
$Elune ->title = "Elune [FR]";
$Elune ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=636&faction=1087&sorting=price@asc';
$serverArray[$i] = $Elune;
$i = $i + 1;

$EmeraldDream = new Servers; 
$EmeraldDream ->title = "Emerald Dream [EU]";
$EmeraldDream ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=637&faction=1087&sorting=price@asc';
$serverArray[$i] = $EmeraldDream;
$i = $i + 1;

$Emeriss = new Servers; 
$Emeriss ->title = "Emeriss [EU]";
$Emeriss ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=638&faction=1087&sorting=price@asc';
$serverArray[$i] = $Emeriss;
$i = $i + 1;

$Eonar = new Servers; 
$Eonar ->title = "Eonar [EU]";
$Eonar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=639&faction=1087&sorting=price@asc';
$serverArray[$i] = $Eonar;
$i = $i + 1;

$Eredar = new Servers; 
$Eredar ->title = "Eredar [DE]";
$Eredar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=640&faction=1087&sorting=price@asc';
$serverArray[$i] = $Eredar;
$i = $i + 1;

$Executus = new Servers; 
$Executus ->title = "Executus [EU]";
$Executus ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=641&faction=1087&sorting=price@asc';
$serverArray[$i] = $Executus;
$i = $i + 1;

$Exodar = new Servers; 
$Exodar ->title = "Exodar [ES]";
$Exodar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=642&faction=1087&sorting=price@asc';
$serverArray[$i] = $Exodar;
$i = $i + 1;

$FestungderSturme = new Servers; 
$FestungderSturme ->title = "Festung der Stürme [DE]";
$FestungderSturme ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=643&faction=1087&sorting=price@asc';
$serverArray[$i] = $FestungderSturme;
$i = $i + 1;

$Forscherliga = new Servers; 
$Forscherliga ->title = "Forscherliga [DE]";
$Forscherliga ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=644&faction=1087&sorting=price@asc';
$serverArray[$i] = $Forscherliga;
$i = $i + 1;

$Frostmane = new Servers; 
$Frostmane ->title = "Frostmane [EU]";
$Frostmane ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=645&faction=1087&sorting=price@asc';
$serverArray[$i] = $Frostmane;
$i = $i + 1;

$Frostmourne = new Servers; 
$Frostmourne ->title = "Frostmourne [DE]";
$Frostmourne ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=646&faction=1087&sorting=price@asc';
$serverArray[$i] = $Frostmourne;
$i = $i + 1;

$Frostwhisper = new Servers; 
$Frostwhisper ->title = "Frostwhisper [EU]";
$Frostwhisper ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=647&faction=1087&sorting=price@asc';
$serverArray[$i] = $Frostwhisper;
$i = $i + 1;

$Frostwolf = new Servers; 
$Frostwolf ->title = "Frostwolf [DE]";
$Frostwolf ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=648&faction=1087&sorting=price@asc';
$serverArray[$i] = $Frostwolf;
$i = $i + 1;

$Garona = new Servers; 
$Garona ->title = "Garona [FR]";
$Garona ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=649&faction=1087&sorting=price@asc';
$serverArray[$i] = $Garona;
$i = $i + 1;

$Garrosh = new Servers; 
$Garrosh ->title = "Garrosh [DE]";
$Garrosh ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=650&faction=1087&sorting=price@asc';
$serverArray[$i] = $Garrosh;
$i = $i + 1;

$Genjuros = new Servers; 
$Genjuros ->title = "Genjuros [EU]";
$Genjuros ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=651&faction=1087&sorting=price@asc';
$serverArray[$i] = $Genjuros;
$i = $i + 1;

$Ghostlands = new Servers; 
$Ghostlands ->title = "Ghostlands [EU]";
$Ghostlands ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=652&faction=1087&sorting=price@asc';
$serverArray[$i] = $Ghostlands;
$i = $i + 1;

$Gilneas = new Servers; 
$Gilneas ->title = "Gilneas [DE]";
$Gilneas ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=653&faction=1087&sorting=price@asc';
$serverArray[$i] = $Gilneas;
$i = $i + 1;

$Gorgonnash = new Servers; 
$Gorgonnash ->title = "Gorgonnash [DE]";
$Gorgonnash ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=654&faction=1087&sorting=price@asc';
$serverArray[$i] = $Gorgonnash;
$i = $i + 1;

$GrimBatol = new Servers; 
$GrimBatol ->title = "Grim Batol [EU]";
$GrimBatol ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=655&faction=1087&sorting=price@asc';
$serverArray[$i] = $GrimBatol;
$i = $i + 1;

$Guldan = new Servers; 
$Guldan ->title = "Gul'dan [DE]";
$Guldan ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=656&faction=1087&sorting=price@asc';
$serverArray[$i] = $Guldan;
$i = $i + 1;

$Hakkar = new Servers; 
$Hakkar ->title = "Hakkar [EU]";
$Hakkar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=657&faction=1087&sorting=price@asc';
$serverArray[$i] = $Hakkar;
$i = $i + 1;

$Haomarush = new Servers; 
$Haomarush ->title = "Haomarush [EU]";
$Haomarush ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=658&faction=1087&sorting=price@asc';
$serverArray[$i] = $Haomarush;
$i = $i + 1;

$Hellfire = new Servers; 
$Hellfire ->title = "Hellfire [EU]";
$Hellfire ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=659&faction=1087&sorting=price@asc';
$serverArray[$i] = $Hellfire;
$i = $i + 1;

$Hellscream = new Servers; 
$Hellscream ->title = "Hellscream [EU]";
$Hellscream ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=660&faction=1087&sorting=price@asc';
$serverArray[$i] = $Hellscream;
$i = $i + 1;

$Hyjal = new Servers; 
$Hyjal ->title = "Hyjal [FR]";
$Hyjal ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=661&faction=1087&sorting=price@asc';
$serverArray[$i] = $Hyjal;
$i = $i + 1;

$Illidan = new Servers; 
$Illidan ->title = "Illidan [FR]";
$Illidan ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=662&faction=1087&sorting=price@asc';
$serverArray[$i] = $Illidan;
$i = $i + 1;

$Jaedenar = new Servers; 
$Jaedenar ->title = "Jaedenar [EU]";
$Jaedenar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=663&faction=1087&sorting=price@asc';
$serverArray[$i] = $Jaedenar;
$i = $i + 1;

$KaelThas = new Servers; 
$KaelThas ->title = "Kael'Thas [FR]";
$KaelThas ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=664&faction=1087&sorting=price@asc';
$serverArray[$i] = $KaelThas;
$i = $i + 1;

$Karazhan = new Servers; 
$Karazhan ->title = "Karazhan [EU]";
$Karazhan ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=665&faction=1087&sorting=price@asc';
$serverArray[$i] = $Karazhan;
$i = $i + 1;

$Kargath = new Servers; 
$Kargath ->title = "Kargath [DE]";
$Kargath ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=666&faction=1087&sorting=price@asc';
$serverArray[$i] = $Kargath;
$i = $i + 1;

$Kazzak = new Servers; 
$Kazzak ->title = "Kazzak [EU]";
$Kazzak ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=667&faction=1087&sorting=price@asc';
$serverArray[$i] = $Kazzak;
$i = $i + 1;

$KelThuzad = new Servers; 
$KelThuzad ->title = "Kel'Thuzad [DE]";
$KelThuzad ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=668&faction=1087&sorting=price@asc';
$serverArray[$i] = $KelThuzad;
$i = $i + 1;

$Khadgar = new Servers; 
$Khadgar ->title = "Khadgar [EU]";
$Khadgar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=669&faction=1087&sorting=price@asc';
$serverArray[$i] = $Khadgar;
$i = $i + 1;

$KhazModan = new Servers; 
$KhazModan ->title = "Khaz Modan [FR]";
$KhazModan ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=670&faction=1087&sorting=price@asc';
$serverArray[$i] = $KhazModan;
$i = $i + 1;

$Khazgoroth = new Servers; 
$Khazgoroth ->title = "Khaz'goroth [DE]";
$Khazgoroth ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=671&faction=1087&sorting=price@asc';
$serverArray[$i] = $Khazgoroth;
$i = $i + 1;

$KilJaeden = new Servers; 
$KilJaeden ->title = "Kil'Jaeden [DE]";
$KilJaeden ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=672&faction=1087&sorting=price@asc';
$serverArray[$i] = $KilJaeden;
$i = $i + 1;

$Kilrogg = new Servers; 
$Kilrogg ->title = "Kilrogg [EU]";
$Kilrogg ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=673&faction=1087&sorting=price@asc';
$serverArray[$i] = $Kilrogg;
$i = $i + 1;

$KirinTor = new Servers; 
$KirinTor ->title = "Kirin Tor [FR]";
$KirinTor ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=674&faction=1087&sorting=price@asc';
$serverArray[$i] = $KirinTor;
$i = $i + 1;

$Korgall = new Servers; 
$Korgall ->title = "Kor'gall [EU]";
$Korgall ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=675&faction=1087&sorting=price@asc';
$serverArray[$i] = $Korgall;
$i = $i + 1;

$Kragjin = new Servers; 
$Kragjin ->title = "Krag'jin [DE]";
$Kragjin ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=676&faction=1087&sorting=price@asc';
$serverArray[$i] = $Kragjin;
$i = $i + 1;

$Krasus = new Servers; 
$Krasus ->title = "Krasus [FR]";
$Krasus ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=677&faction=1087&sorting=price@asc';
$serverArray[$i] = $Krasus;
$i = $i + 1;

$KulTiras = new Servers; 
$KulTiras ->title = "Kul Tiras [EU]";
$KulTiras ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=678&faction=1087&sorting=price@asc';
$serverArray[$i] = $KulTiras;
$i = $i + 1;

$KultderVerdammten = new Servers; 
$KultderVerdammten ->title = "Kult der Verdammten [DE]";
$KultderVerdammten ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=679&faction=1087&sorting=price@asc';
$serverArray[$i] = $KultderVerdammten;
$i = $i + 1;

$LaCroisadeecarlate = new Servers; 
$LaCroisadeecarlate ->title = "La Croisade écarlate [FR]";
$LaCroisadeecarlate ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=680&faction=1087&sorting=price@asc';
$serverArray[$i] = $LaCroisadeecarlate;
$i = $i + 1;

$LaughingSkull = new Servers; 
$LaughingSkull ->title = "Laughing Skull [EU]";
$LaughingSkull ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=681&faction=1087&sorting=price@asc';
$serverArray[$i] = $LaughingSkull;
$i = $i + 1;

$LesClairvoyants = new Servers; 
$LesClairvoyants ->title = "Les Clairvoyants [FR]";
$LesClairvoyants ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=682&faction=1087&sorting=price@asc';
$serverArray[$i] = $LesClairvoyants;
$i = $i + 1;

$LesSentinelles = new Servers; 
$LesSentinelles ->title = "Les Sentinelles [FR]";
$LesSentinelles ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=683&faction=1087&sorting=price@asc';
$serverArray[$i] = $LesSentinelles;
$i = $i + 1;

$Lightbringer = new Servers; 
$Lightbringer ->title = "Lightbringer [EU]";
$Lightbringer ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=684&faction=1087&sorting=price@asc';
$serverArray[$i] = $Lightbringer;
$i = $i + 1;

$LightningsBlade = new Servers; 
$LightningsBlade ->title = "Lightning's Blade [EU]";
$LightningsBlade ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=685&faction=1087&sorting=price@asc';
$serverArray[$i] = $LightningsBlade;
$i = $i + 1;

$Lordaeron = new Servers; 
$Lordaeron ->title = "Lordaeron [DE]";
$Lordaeron ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=686&faction=1087&sorting=price@asc';
$serverArray[$i] = $Lordaeron;
$i = $i + 1;

$LosErrantes = new Servers; 
$LosErrantes ->title = "Los Errantes [ES]";
$LosErrantes ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=687&faction=1087&sorting=price@asc';
$serverArray[$i] = $LosErrantes;
$i = $i + 1;

$Lothar = new Servers; 
$Lothar ->title = "Lothar [DE]";
$Lothar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=688&faction=1087&sorting=price@asc';
$serverArray[$i] = $Lothar;
$i = $i + 1;

$Madmortem = new Servers; 
$Madmortem ->title = "Madmortem [DE]";
$Madmortem ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=689&faction=1087&sorting=price@asc';
$serverArray[$i] = $Madmortem;
$i = $i + 1;

$Magtheridon = new Servers; 
$Magtheridon ->title = "Magtheridon [EU]";
$Magtheridon ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=690&faction=1087&sorting=price@asc';
$serverArray[$i] = $Magtheridon;
$i = $i + 1;

$MalGanis = new Servers; 
$MalGanis ->title = "Mal'Ganis [DE]";
$MalGanis ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=691&faction=1087&sorting=price@asc';
$serverArray[$i] = $MalGanis;
$i = $i + 1;

$Malfurion = new Servers; 
$Malfurion ->title = "Malfurion [DE]";
$Malfurion ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=692&faction=1087&sorting=price@asc';
$serverArray[$i] = $Malfurion;
$i = $i + 1;

$Malorne = new Servers; 
$Malorne ->title = "Malorne [DE]";
$Malorne ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=693&faction=1087&sorting=price@asc';
$serverArray[$i] = $Malorne;
$i = $i + 1;

$Malygos = new Servers; 
$Malygos ->title = "Malygos [DE]";
$Malygos ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=694&faction=1087&sorting=price@asc';
$serverArray[$i] = $Malygos;
$i = $i + 1;

$Mannoroth = new Servers; 
$Mannoroth ->title = "Mannoroth [DE]";
$Mannoroth ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=695&faction=1087&sorting=price@asc';
$serverArray[$i] = $Mannoroth;
$i = $i + 1;

$MarecagedeZangar = new Servers; 
$MarecagedeZangar ->title = "Marécagede Zangar [FR]";
$MarecagedeZangar ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=696&faction=1087&sorting=price@asc';
$serverArray[$i] = $MarecagedeZangar;
$i = $i + 1;

$Mazrigos = new Servers; 
$Mazrigos ->title = "Mazrigos [EU]";
$Mazrigos ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=697&faction=1087&sorting=price@asc';
$serverArray[$i] = $Mazrigos;
$i = $i + 1;

$Medivh = new Servers; 
$Medivh ->title = "Medivh [FR]";
$Medivh ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=698&faction=1087&sorting=price@asc';
$serverArray[$i] = $Medivh;
$i = $i + 1;

$Minahonda = new Servers; 
$Minahonda ->title = "Minahonda [ES]";
$Minahonda ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=699&faction=1087&sorting=price@asc';
$serverArray[$i] = $Minahonda;
$i = $i + 1;

$Moonglade = new Servers; 
$Moonglade ->title = "Moonglade [EU]";
$Moonglade ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=700&faction=1087&sorting=price@asc';
$serverArray[$i] = $Moonglade;
$i = $i + 1;

$Dummy = new Servers; 
$Dummy ->title = "dummy";
$Dummy ->url = 'https://www.g2g.com/wow-eu/gold-2522-19248?&server=6&faction=1087&sorting=price@asc';
$serverArray[$i] = $Dummy;
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
echo 'WoW Retail EU Horde' . '<br>' . '<br>' . '<br>';
foreach($serverArray as $e){
	$e->getTitle();
	$e->getPrice();
	echo '<br>';
}

?>