<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pl">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	<title>The Gym Project</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" style="margin-top: 20px; border-color: #d6d6d6;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="glyphicon glyphicon-th-list"/>
                </button>
                <a class="navbar-brand" href="index.php">GymProject</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">

                    <li class="active"><a href="exercise.php">Zobacz Ćwiczenia</a></li>
                    <li><a href="rejestracja.php">Załóż konto</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                    <?php if(isset($_SESSION['zalogowano'])){ echo "<li><a href='pu.php'>Panel Użytkownika</a></li>"; } ?>   
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron" style="background-color: #f8f8f8; border-style: solid; border-width: 1px; border-color: #d6d6d6;">
                <p>

	<div class="list-group">
 	 		<a href="#" class="list-group-item disabled"><b> Klata</b> </a>
 			<a href="#" class="list-group-item">Wyciskanie sztangi - skos górny</a>
<!--Ustaw ławkę pod kątem 20-45 stopni. Połóż się na niej tak, aby pośladki i grzbiet przylegały bezpośrednio, stopy zaś wesprzyj stabilnie na podłożu. Złap sztangę nachwytem mniej więcej na szerokości barków, a następnie zdejmij ją z uchwytów i opuść równym tempem do klatki piersiowej biorąc głęboki wdech (w fazie negatywnej). Po lekkim dotknięciu klatki wykonaj ruch powrotny wyciskając sztangę i jednocześnie robiąc wydech (faza pozytywna). Najlepiej unikać pełnego wyprostu ramion z rozluźnieniem i przeniesieniem ciężaru na stawy. Łokcie w trakcie całego ćwiczenia powinny oddalone od tułowia. -->
  			<a href="#" class="list-group-item">Wyciskanie sztangi - skos dolny</a>
<!--Ustaw ławkę pod kątem 20-45 stopni (skos ujemny). Połóż się na niej głową do dołu tak, aby pośladki i grzbiet przylegały bezpośrednio. Nogi zaczep o uchwyt, żeby utrzymać równowagę i nie zjechać w dół. Złap sztangę nachwytem mniej więcej na szerokości barków, następnie zdejmij ją ze stojaków i opuść równym tempem do klatki piersiowej biorąc głęboki wdech (w fazie negatywnej). Po lekkim dotknięciu klatki wykonaj ruch powrotny wyciskając sztangę, jednocześnie robiąc wydech (faza pozytywna). Łokcie w trakcie całego ćwiczenia powinny być oddalone od ciała. -->
  			<a href="#" class="list-group-item">Wyciskanie sztangielek - skos górny</a>
<!--Ustaw ławkę pod kątem 20-45 stopni. Połóż się na niej tak, aby pośladki i grzbiet przylegał bezpośrednio, stopy zaś wesprzyj stabilnie na podłożu. Złap sztangielki nachwytem i oprzyj się wygodnie całym ciężarem o ławkę. Kiedy pośladki i plecy będą przylegać do ławki weź głęboki wdech i wykonaj ruch podobny do wyciskania sztangi wypychając sztangielki ku górze i jednocześnie robiąc wydech. Następnie opuść równym tempem ciężar w taki sposób, aby łokcie znalazły się nieco poniżej poziomu, na którym ułożony jest tułów. W fazie tej pamiętaj o kolejnym wdechu. Łokcie w trakcie całego ćwiczenia powinny być skierowane na zewnątrz, a nie do środka.-->
  			<a href="#" class="list-group-item">Wyciskanie sztangielek - skos dolny </a>
<!--Ustaw ławkę pod kątem 20-45 stopni (skos ujemny). Połóż się na na niej głową do dołu tak, żeby pośladki i grzbiet przylegały bezpośrednio. Nogi zaczep o uchwyt, aby utrzymać równowagę i nie zjechać w dół. Złap sztangielki nachwytem. W momencie kiedy pośladki oraz plecy będą przylegać do ławki weź głęboki wdech i wykonaj ruch podobny do wyciskania sztangi, wypychając sztangielki ku górze i jednocześnie robiąc wydech. Następnie opuść równym tempem ciężar w taki sposób, aby łokcie znalazły się trochę poniżej poziomu, na którym ułożony jest tułów. W fazie tej pamiętaj o kolejnym wdechu. Łokcie w trakcie całego ćwiczenia powinny być oddalone od tułowia. -->
			<a href="#" class="list-group-item">Rozpiętki na maszynie, siedząc</a>
<!--Bardzo ważne jest zajęcie odpowiedniej pozycji - powinieneś odpowiednio uregulować wysokość siedzenia i usadowić się tak, aby przedramię i łokcie przylegały bezpośrednio do poduszek (albo chwycić za drążki zastępujące poduszki). Stopy powinny być osadzone na podłożu, a grzbiet powinien przylegać do oparcia. Usiądź w poziomie (cała sylwetka ugięta w pasie ma tworzyć mniej więcej kąt prosty). Klatka powinna być wypięta nieco do przodu. Przyciągając poduszki zrób wydech, a przy powrocie do początkowego ułożenia weź wdech. W fazie szczytowej należy przytrzymać przez chwilę ciężar, natomiast ruch powrotny powinien odbywać się płynnie, bez jakiegokolwiek szarpania, tak aby mięśnie pracowały przez cały czas. Zadbaj też o pełne rozciągnięcie mięśni w fazie negatywnej. Łokcie w trakcie całego ćwiczenia powinny być oddalone od tułowia. -->            
            <a href="#" class="list-group-item">Rozpiętki na ławce skos górny / w bramie</a>
<!--Ustaw ławkę pod kątem 20-45 stopni. Połóż się na niej tak, aby pośladki i grzbiet przylegał bezpośrednio, a stopy wesprzyj stabilnie na podłożu. Weź w dłonie sztangielki i ugnij lekko łokcie. Prostopadle do tułowia wykonaj ruch na zewnątrz, jednocześnie weź wdech. Kiedy sztangielki wędrują do góry należy zrobić wydech. Przy ruchu do dołu, w końcowej fazie, dobrze jest przez chwilę zatrzymać sztangielki, w celu lepszego napięcia mięśni. Łokcie w trakcie całego ćwiczenia powinny być oddalone od tułowia.-->            
            <a href="#" class="list-group-item">Rozpiętki na ławce skos dolny / w bramie</a>
<!--Ustaw ławkę pod kątem 20-45 stopni (skos ujemny). Połóż się na niej głową do dołu tak, aby pośladki i grzbiet przylegały bezpośrednio. Nogi zaczep o uchwyt, żeby utrzymać równowagę i nie zjechać w dół. Weź w dłonie sztangielki i ugnij lekko łokcie. Prostopadle do tułowia wykonaj ruch na zewnątrz, biorąc jednocześnie wdech. Kiedy sztangielki wędrują do góry zrób wydech. Przy ruchu do dołu, w końcowej fazie, dobrze jest przez chwilę zatrzymać sztangielki, w celu lepszego napięcia mięśni. Łokcie w trakcie całego ćwiczenia powinny być oddalone od tułowia. -->            
	</div>
    </p>
    <p>
    <div class="list-group">
 	 		<a href="#" class="list-group-item disabled"><b> Plecy </b></a>
 			<a href="#" class="list-group-item">Wiosłowanie sztangą</a>
<!--Podejdź do sztangi i rozstaw stopy na szerokość barków. Pochyl tułów zachowując naturalną krzywiznę kręgosłupa, a następnie złap gryf na szerokości barków (więcej w uwagach) nachwytem bądź podchwytem (więcej w uwagach). Weź wdech, patrz przed siebie i rozpocznij ruch wiosłowania. W momencie dotknięcia gryfem brzucha lub klatki (więcej w uwagach) zrób wydech i zacznij powoli opuszczać sztangę, aż do momentu pełnego rozciągnięcia mięśni. -->
  			<a href="#" class="list-group-item">Wiosłowanie sztangielką</a>
<!--Jedną ręką (tą, którą nie ćwiczysz) i kolanem z tej samej strony oprzyj się o ławkę, zaś drugą ręką złap sztangielkę tak, aby dłoń była zwrócona palcami w kierunku ciała (więcej w uwagach). Tułów powinien być prawie równoległy do podłoża. Weź wdech i rozpocznij ruch wiosłowania, poruszając łokciem przez cały czas blisko ciała. Zakończ powtórzenie w momencie, gdy ręka znajdzie się w najwyższym punkcie, a następnie zrób wydech i powróć powoli kontrolując ciężar do pozycji wyjściowej. -->
  			<a href="#" class="list-group-item">Wyprosty tułowia na ławeczce / na maszynie  </a>
<!--Ułóż się na ławeczce, twarzą w kierunku podłoża. Biodra spoczywają na oparciu, zaś nogi zaprzyj o bloczek znajdujący się na dole ławeczki. Skrzyżuj ręce na piersiach (więcej w uwagach), weź wdech i rozpocznij zgięcie. W momencie wyprostu zrób wydech i wróć do pozycji wyjściowej. -->
  			<a href="#" class="list-group-item">Wiosłowanie sztangielkami, stojąc </a>
<!--Złap sztangielki nachwytem, ustawiając nadgarstek w chwycie młotkowym. Pochyl tułów zachowując naturalną krzywiznę kręgosłupa, weź oddech, patrz przed siebie i rozpocznij ruch wiosłowania sztangielkami, (łokcie przez cały czas poruszają się blisko ciała), w momencie, gdy sztangielki znajdą się w najwyższym punkcie, wypuść powietrze i zacznij je powoli opuszczać do momentu pełnego rozciągnięcia mięśni. -->
			<a href="#" class="list-group-item">Wznosy barków - szrugsy</a>
<!--Chwyć sztangę nachwytem na szerokości barków. Wypnij klatkę piersiową do przodu i ściągnij łopatki. Głowę trzymaj prosto lub lekko pochyloną w dół. Weź wdech i unieś barki jak najwyżej do góry. W momencie napięcia mięśni przytrzymaj chwilę, zrób wydech i wróć do pozycji wyjściowej. -->
			<a href="#" class="list-group-item">Martwy ciąg </a>
<!--Podejdź do sztangi i stań w rozkroku na szerokość barków (lub trochę większym). Palce stóp powinny lekko wystawać za gryf. Następnie ugnij nogi w kolanach zachowując naturalną krzywiznę kręgosłupa, złap gryf nachwytem bądź chwytem mieszanym nieco szerzej niż położenie kolan (martwy ciąg klasyczny, więcej w uwagach), wypnij klatkę do przodu, a głowę odchyl lekko do tyłu. Weź oddech i zacznij ruch w górę. W początkowej fazie ruchu największą pracę wykonują mięśnie ud oraz mięśnie pośladkowe. Prowadź sztangę blisko ciała i nie prostuj zbyt szybko nóg. Klatka powinna być cały czas wypięta, plecy zaś zachowują naturalną krzywiznę kręgosłupa. W momencie wyprostu ściągnij barki lekko do tyłu i zrób wydech, zacznij powrót do pozycji wyjściowej cały czas unikając okrągłych pleców czy kociego grzbietu. Nie odbijaj także sztangi od podłoża. -->
	</div>
    </p>     
    <p>
    <div class="list-group">
 	 		<a href="#" class="list-group-item disabled"> <b>Brzuch</b> </a>
 			<a href="#" class="list-group-item">Unoszenie nóg w zwisie na drążku / na stojaku</a>
<!--Chwyć drążek nachwytem, na szerokość barków, weź wdech i zacznij ruch unoszenie nóg jednocześnie zginając je w kolanach(więcej w uwagach) jak najwyżej, unikając bujania tułowiem, w momencie spięcia mięśni brzucha zrób wydech i powoli powróć do pozycji wyjściowej. -->            
  			<a href="#" class="list-group-item">Unoszenie nóg w leżeniu na ławce skośnej / płaskiej</a>
<!--Połóż się na ławce skośnej na plecach, rękoma złap za uchwyty znajdujące się nad Twoją głową, bądź za coś co pozwoli Ci utrzymać stabilną pozycję podczas wykonywania ćwiczenia. Weź wdech i zacznij ruch unoszenie nóg jednocześnie zginając je w kolanach jak najwyżej, w momencie spięcia mięśni brzucha zrób wydech i powoli powróć do pozycji wyjściowej. -->               
  			<a href="#" class="list-group-item">Spięcia brzucha leżąc / na maszynie leżąc z oporem</a>
<!--Połóż się na ławeczce lub podłożu, ugnij nogi w kolanach, stopy powinny przylegać do podłoża. Ręce trzymaj przy skroniach albo skrzyżuj na piersiach. Weź wdech i zacznij skłon tułowia , w momencie spięcia mięśni brzucha zrób wydech i powoli powróć do pozycji wyjściowej do momentu, gdy dotkniesz plecami i głową ławeczki.-->               
  			<a href="#" class="list-group-item">Skręty ze sztangą na barkach </a>
<!--Usiądź na ławce płaskiej. Umieść gryf za głową na górnej części czworobocznych łapiąc go szeroko nachwytem. Weź wdech i zacznij naprzemienne skręty tułowia, gdy dane ramię jest z przodu rób wydech, mięśnie pośladkowe powinny cały czas przylegać do ławki. -->               
	</div>
    </p>      
    <p>
    <div class="list-group">
 	 		<a href="#" class="list-group-item disabled"><b> Biceps</b> </a>
 			<a href="#" class="list-group-item">Uginanie przedramion ze sztangielkami stojąc z supinacją / siedząc</a>
<!--Stojąc chwyć sztangielki podchwytem. Trzymaj je w tzw chwycie młotkowym tj. palce skierowane w kierunku ciała. Wyprostuj się wypychając klatkę piersiową nieco do przodu. Pamiętaj aby łokcie trzymać blisko ciała tak aby zachować stabilność podczas wykonywania ćwiczenia. Weź wdech i zacznij zginać przedramiona - obracając dłońmi i przedramionami na zewnątrz - tak aby unieść sztangielki do momentu pełnego zgięcia łokci i uzyskania pełnego zrotowania dłoni i przedramion na zawnarz tj. w kierunku twarzy. Wykonując zgięcie - rób wydech. Przytrzymaj chwilę i robiąc wdech zacznij ruch opuszczania sztangielek poprzez prostowanie i rotację wewnętrzną przedramion tak aby powrócić do pozycji wyjściowej (w tzw chwycie młotkowym). -->
  			<a href="#" class="list-group-item">Uginanie przedramion ze sztangielkami stojąc uchwyt młotkowy  </a>
<!--Złap sztangielki podchwytem w pozycji stojącej, Nadgarstki ustaw w chwycie młotkowym, czyli w taki sposób, że palce są skierowane w stronę ciała. Wypnij klatkę piersiową do przodu. Weź wdech i zacznij zginanie przedramion, trzymając łokcie przez cały czas jak najbliżej ciała. W momencie maksymalnego napięcia mięśni zrób wydech i powoli kontrolując ciężar powróć do pozycji wyjściowej, czyli do momentu maksymalnego rozciągnięcia mięśni, jednocześnie robiąc wdech. -->
  			<a href="#" class="list-group-item">Uginanie przedramion ze sztangą z podchwytem na modlitewniku </a>
<!--Usiądź wygodnie na modlitewniku - jeśli dostępna jest regulacja - dopasuj modlitewnik do swojego wzrostu a następnie ułóż ramiona i łokcie na oparciu, tak aby zachowały stabliność podczas wykonywania ćwiczenia. Chwyć sztangę podchwytem i weź wdech. Zacznij uginanie przedramion aż do osiągnięcia pełnego zgięcia - robiąc jednocześnie wydech. Przytrzymaj chwilę i zacznij opuszczać sztangę do dołu prostując ramiona i robiąc wdech. -->            
  			<a href="#" class="list-group-item">Uginanie przedramion ze sztangą siedząc  </a>
<!--Usiądź na ławeczce prostej. Sztangę i przedramiona umieść na kolanach. Wypnij lekko klatkę piersiową. Łokcie staraj się utrzymywać jak najbliżej ciała. Weź wdech. Uginając przedramiona unieś sztangę do momentu pełnego zgięcia jednocześnie robiąc wydech. Opuść sztangę, powoli kontrolując ciężar ponownie na kolana robiąc wdech. -->    
			<a href="#" class="list-group-item">Uginanie przedramion z linką wyciągu dolnego leżąc  </a>
<!--Ustaw się twarzą do wyciągu z linką wyciągu dolnego. Złap gryf połączony z linką wyciągu dolnego podchwytem na szerokość barków oraz usiądź na podłożu tak jak w przypadku gdy chciałbyś wykonać przyciąganie siedząc. Połóż się na podłożu. Wypnij klatkę piersiową, weź wdech i zacznij ruch uginania przedramion łokcie trzymając cały czas jak najbliżej ciała , w momencie maksymalnego spięcia mięśni zrób wydech i powoli kontrolując ciężar powróć do pozycji wyjściowej do momentu maksymalnego rozciągnięcia mięśni jednocześnie robiąc wdech.-->        
	</div>
    </p>
    <p>
    <div class="list-group">
 	 		<a href="#" class="list-group-item disabled"> <b>Triceps</b> </a>
 			<a href="#" class="list-group-item">Wyciskanie sztangi na ławce w wąskim uchwycie  </a>
<!--Połóż się na plecach na ławce poziomej. Stopy ustaw stabilnie na podłożu i ściągnij łopatki. Podczas wykonywania ćwiczenia plecy i pośladki powinny przylegać do ławki. Złap sztangę nachwytem, na szerokość trochę mniejszą niż szerokość barków. Zdejmij sztangę ze stojaków, weź wdech i zacznij ruch opuszczania. W momencie, gdy gryf znajdzie się 2 - 3 cm nad klatką zacznij ruch wyciskania, aż do momentu wyprostu ramion (ale przed zblokowaniem łokci), jednocześnie robiąc wydech. -->
  			<a href="#" class="list-group-item">Wyciskanie francuskie sztangi siedząc / sztangielki oburącz  </a>
<!--Usiądź na ławeczce (najlepiej opierając się o oparcie), nogi ustaw stabilnie na podłożu, a dłonie zaciśnij na gryfie nachwytem na szerokości nieco mniejszej od barków. Unieś ramiona do góry (do pionu). Zaczynając ruch zegnij przedramiona w łokciach, w taki sposób, aby gryf powędrował za głowę (podczas ruchu weź wdech). W celu zaliczenia pełnego powtórzenia wykonaj ruch powrotny, kończąc tuż przed zablokowaniem łokci i jednocześnie robiąc wydech. Łokcie podczas całego ćwiczenia powinny być skierowane do przodu (przed siebie), a także trzymane w stabilnej pozycji. -->           
  			<a href="#" class="list-group-item">Wyciskanie francuskie sztangi leżąc / sztangielki oburącz  </a>
<!--Połóż się na ławce poziomej (płaskiej), stopy postaw stabilnie na podłożu i ugnij nogi w kolanach tak, aby utworzył się kąt prosty (można zastosować wersję z nogami ułożonymi na poziomie tułowia). Dłonie zaciśnij na gryfie nachwytem na szerokość barków (lub nieco wężej) i unieś ramiona nad klatką piersiową. Zaczynając ruch zegnij przedramiona w łokciach, w taki sposób, aby gryf powędrował do czoła (podczas ruchu weź wdech). Następnie wykonaj ruch powrotny kończąc tuż przed zablokowaniem łokci. Łokcie podczas całego ćwiczenia powinny być skierowane równolegle do tułowia oraz trzymane w stabilnej pozycji. -->            
  			<a href="#" class="list-group-item">Wyciskanie francuskie sztangą leżąc na ziemi  </a>
<!--Połóż się na podłożu, stopy postaw stabilnie na ziemi i ugnij nogi w kolanach. Dłonie zaciśnij na gryfie nachwytem na szerokość barków (lub nieco wężej) i unieś ramiona nad klatką piersiową. Zaczynając ruch ugnij przedramiona w łokciach, w taki sposób, aby gryf powędrował za głowę (podczas ruchu weź wdech), w momencie odłożenia gryfu na podłoże, zrób chwilową pauzę, następnie wykonaj ruch powrotny kończąc tuż przed zablokowaniem łokci. Łokcie podczas całego ćwiczenia skierowane równolegle do tułowia, a także powinny być utrzymane w stabilnej pozycji. -->     
			<a href="#" class="list-group-item">Wyciskanie francuskie hantla jednorącz  </a>
<!--Usiądź na ławeczce (najlepiej opierając się o oparcie) i weź hantle do ręki. Następnie wyprostuj ramię w taki sposób, aby znalazła się ona w pionie w stosunku do podłoża. Rozpocznij ruch uginając przedramię w łokciu w taki sposób, aby w końcowej fazie ciężar znalazł się za Twoją głową (równocześnie weź wdech). W celu zaliczenia pełnego powtórzenia wykonaj ruch powrotny kończąc tuż przed zablokowaniem łokcia, jednocześnie robiąc wydech. Łokieć podczas całego ćwiczenia powinien być skierowany na zewnątrz, a nie do środka tułowia oraz należy trzymać go w stabilnej pozycji. -->             
	</div>
    </p>
    <p>
    <div class="list-group">
 	 		<a href="#" class="list-group-item disabled"><b> Nogi </b></a>
 			<a href="#" class="list-group-item">Zgięcia grzbietowe stopy z hantlami  </a>
<!--Umieść sztangielkę na górnej stronie stopy. Następnie ustaw stopy na podpórce i chwyć rękami za coś stabilnego (dzięki czemu zachowasz stabilną pozycję podczas ćwiczenia). Weź wdech i przodem stopy zacznij ruch wspięcia. W najwyższym punkcie przytrzymaj trochę, zrób wydech i powróć do pozycji wyjściowej, czyli do momentu maksymalnego rozciągnięcia mięśni. Podczas wykonywania ćwiczenia nogi i tułów trzymaj prosto.-->
  			<a href="#" class="list-group-item">Wypychanie stopami na maszynie / hack - maszynie</a>
<!--Wejdź na platformę suwnicy. Plecy powinny przylegać do oparcia. Umieść stopy na platformie w taki sposób, aby znajdowały się na niej palce. Weź wdech i rozpocznij ruch wypychania palcami. Kolana powinno się trzymać prosto lub lekko ugięte. W momencie maksymalnego napięcia przytrzymaj trochę, zrób wydech i powróć do pozycji wyjściowej, powoli kontrolując ciężar aż do momentu maksymalnego rozciągnięcia mięśni. -->
  			<a href="#" class="list-group-item">Wypychanie nogi w tył w klęku podpartym na suwnicy</a>
<!--Stań w klęku podpartym na poduszkach maszyny. Jedną stopę oprzyj o suwnicę tak, aby zachować stabilna pozycję i weź wdech. Wypychaj nogę do góry poprzez prostowanie jej w kolanie, równocześnie robiąc wydech. Następnie prowadź nogę w dół i w tym samym czasie zginaj kolano, jednocześnie biorąc wdech. -->           
  			<a href="#" class="list-group-item">Wypychanie nogi w tył na maszynie  </a>
<!--Stań przy maszynie i złap uchwyty rękami, a stopę drugiej nogi umieść na przeznaczonej do tego platformie. Następnie weź wdech i zacznij wypychanie nogi w tył. W momencie gdy noga będzie w najwyższym punkcie zrób wydech i powoli kontrolując ciężar powróć do pozycji wyjściowej. -->   
			<a href="#" class="list-group-item">Wypychanie nóg na suwnicy </a>
<!--Usiądź w siedzisku maszyny. Połóż stopy na platformie (powinny w całości do niej przylegać) mniej więcej na szerokość barków (szerzej o tym w uwagach). Weź wdech, zwolnij blokadę ciężaru i rozpocznij wykonywanie ćwiczenia. W momencie, gdy nogi ugną się w kolanach pod kątem ok. 90 stopni zacznij wypychanie ciężaru, jednocześnie robiąc wydech. -->                
	</div>
    </p>            
                
            </div>
        </div>
        
    </div>
</div>
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
</body>
</html>
