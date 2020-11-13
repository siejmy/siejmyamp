<?php
function admin_random_bible_quote_widget() {
	return '<a class="siejmybtn" onClick="siejmy_dashboard_widget_get_random_bible_quote_generator_generate_qote()">Następny cytat</a><span id="quote_out"></span>'
			. '<script>
					window.addEventListener("DOMContentLoaded", (event) => {
						siejmy_dashboard_widget_get_random_bible_quote_generator_generate_qote();
					 });

					 function siejmy_dashboard_widget_get_random_bible_quote_generator_generate_qote() {
						 const quotes = [' . implode(',', array_map(function($quote) { return '"' . str_replace("\n", "", $quote) . '"'; }, siejmy_dashboard_widget_get_random_bible_quotes())) . '];
						 const randomQuote = quotes[Math.floor(Math.random()*quotes.length)];
						 document.getElementById("quote_out").innerText=randomQuote;
					 }
			   </script>';
}


function siejmy_dashboard_widget_get_random_bible_quotes() {
	$bibleQuotes = array(
		"Wy jesteście solą dla ziemi. Lecz jeśli sól utraci swój smak, czymże ją posolić? Na nic się już nie przyda, chyba na wyrzucenie i podeptanie przez ludzi. ~Mt 5,13",
		"Wy jesteście światłem świata. Nie może się ukryć miasto położone na górze. ~Mt 5,14",
		"Kto miłuje swego brata,<br /> ten trwa w światłości<br /> i nie może się potknąć. ~1J 2,10",
		"Po tym właśnie poznajemy, że jesteśmy w Nim. Kto twierdzi, że w Nim trwa, powinien również sam postępować tak, jak On postępował. ~1J 2,6",
		"Dzieci, jest już ostatnia godzina, i tak, jak słyszeliście, Antychryst5 nadchodzi, bo oto teraz właśnie pojawiło się wielu Antychrystów; stąd poznajemy, że już jest ostatnia godzina. ~1J 2,18",
		"Ja wam nie pisałem, jakobyście nie znali prawdy, lecz że ją znacie i że żadna fałszywa nauka z prawdy nie pochodzi. ~1J 2,21",
		"Co do was, to namaszczenie, które otrzymaliście od Niego, trwa w was i nie potrzebujecie pouczenia od nikogo, ponieważ Jego namaszczenie poucza was o wszystkim. Ono jest prawdziwe i nie jest kłamstwem. Toteż trwajcie w nim tak,	jak was nauczył. ~1J 2,27",
		"Jeżeli wiecie, że jest sprawiedliwy, to uznajcie również, że każdy, kto postępuje sprawiedliwie, pochodzi od Niego. ~1J 2,29",
		"Nie dziwcie się, bracia,
		jeśli świat was nienawidzi.
		My wiemy, że przeszliśmy ze śmierci do życia,
		bo miłujemy braci,
		kto zaś nie miłuje, trwa w śmierci. ~1J, 3,13-14",
		"Jeśliby ktoś posiadał majętność tego świata
		i widział, że brat jego cierpi niedostatek,
		a zamknął przed nim swe serce,
		jak może trwać w nim miłość Boga? ~1J 3,17",
		"Umiłowani, jeśli serce nas nie oskarża,
		mamy ufność wobec Boga,
		i o co prosić będziemy,
		otrzymamy od Niego,
		ponieważ zachowujemy Jego przykazania
		i czynimy to, co się Jemu podoba. ~1J 3,21-22",
		"Kto wypełnia Jego przykazania,
		trwa w Bogu, a Bóg w nim;
		a to, że trwa On w nas,
		poznajemy po Duchu, którego nam dał ~1J 3,24",
		"Umiłowani,
		nie dowierzajcie każdemu duchowi,
		ale badajcie duchy, czy są z Boga,
		gdyż wielu fałszywych proroków
		pojawiło się na świecie.
		Po tym poznajecie Ducha Bożego:
		każdy duch,
		który uznaje,
		że Jezus Chrystus przyszedł w ciele, jest z Boga. ~1J 4,1-2",
		"My jesteśmy z Boga.
		Ten, który zna Boga, słucha nas.
		Kto nie jest z Boga, nas nie słucha.
		W ten sposób poznajemy
		ducha prawdy i ducha fałszu ~1J 4,6",
		"Wszystko bowiem, co z Boga zrodzone, zwycięża świat;
		tym właśnie zwycięstwem,
		które zwyciężyło świat, jest nasza wiara. ~1J 5,4",
		"Wiemy, że jesteśmy z Boga,
		cały zaś świat7leży w mocy Złego. ~1J 5,19",

		"Mądrość biednego podniesie mu głowę
		i posadzi go między możnymi.
		Nie wychwalaj męża z powodu jego pięknej postawy
		ani się nie brzydź człowiekiem z powodu jego wyglądu.
		Mała jest pszczoła wśród latających stworzeń,
		lecz owoc jej ma pierwszeństwo pośród słodyczy. ~Syr 11,1-3",

		"Błogosławieństwo Pana nagrodą bogobojnych
		i prędko zakwitnie Jego błogosławieństwo.
		Nie mów: «Czego potrzebuję
		i jakie dobra mam mieć od tej chwili?»
		Nie mów: «Wystarczam sam sobie
		i jakież zło może mnie obecnie spotkać?»  ~Syr 11,22-24",

		"O nic się już zbytnio nie troskajcie, ale w każdej sprawie wasze prośby przedstawiajcie Bogu w modlitwie i błaganiu z dziękczynieniem! A pokój Boży, który przewyższa wszelki umysł, będzie strzegł waszych serc i myśli w Chrystusie Jezusie. ~Flp 4,6-7",
		"Bracia, ja nie sądzę o sobie samym, że już zdobyłem, ale to jedno [czynię]: zapominając o tym, co za mną, a wytężając siły ku temu, co przede mną, pędzę ku wyznaczonej mecie, ku nagrodzie, do jakiej Bóg wzywa w górę w Chrystusie Jezusie. Wszyscy więc my, doskonali5, tak to odczuwajmy: a jeśli odczuwacie coś inaczej, i to Bóg wam objawi. W każdym razie: dokąd doszliśmy, w tę samą stronę zgodnie postępujmy! ~Flp 3,13-16",



		"Bóg nikomu Miłosierdzia Swego nie odmów. Niebo i ziemia może się odmienić, ale nie wyczerpie się Miłosierdzie Boże ~Dzienniczek 72",
		"Strzeżmy się dorzucać cierpień innym, bo to się nie podoba Panu… Pozwalamy sobie na wydawanie sądów rozmaitych i mówimy tam, gdzie nie powinniśmy tego nieraz powtarzać. ~Dzienniczek 117",
		"Można wiele mówić, a nie przerwać milczenia, a zarazem można niewiele mówić, a zawsze łamać milczenie. O, jak niepowetowana szkodę przynosi niezachowanie milczenia. ~Dzienniczek 119",
		"Jezu, nie cofnę się z pola walki, chociaż mi pot śmiertelny zrosi czoło, nie wypuszczę miecza z ręki, aż spocznę u stóp Trójcy Świętej. ~Dzienniczek 287",
		"Cokolwiek czynię, nie liczę na własne siły, ale na łaskę Bożą. Z łaska Bożą dusza może przejść przez największe trudności zwycięsko. ~Dzienniczek 287",
		"Z Nim idę do pracy, z Nim idę na rekreację, z Nim cierpię, z Nim się cieszę, żyję w nim a On we mnie. Nigdy nie jestem sama, bo On mi jest stałym Towarzyszem. ~Dzieniczek 318",
		"Dusza nieposłuszna nie odniesie żadnego zwycięstwa, chociaż by ją Sam Pan Jezus bezpośrednio spowiadał. Na wielkie nieszczęście naraża się dusza nieposłuszna i nic nie postąpi w doskonałości i nie da rady w życiu duchowym. ~Dzienniczek 113",
		"O życie szare i monotonne, ile w tobie skarbów. Żadna godzina nie jest podobna do siebie. Szarzyzna i monotonia znikają, kiedy patrzę na wszystko okiem wiary ~Dzienniczek 62",
		"O mój Jezu, jak trudno jest znosić tego rodzaju cierpienie: gdy ktoś jest dla nas nieżyczliwy i zrobi nam jakąś przykrość, mniej mnie boli, ale unieść nie mogę tego, jeżeli ktoś okazuje mi swą życzliwość, a rzuca kłody pod nogi na każdym kroku. Jak wielkiej potrzeba siły woli, aby taką duszę kochać dla Boga (Dz. 1241).",
		"Ani łaski, ani objawienia, ani zachwyty, ani żadne dary jej udzielane nie czynią ją doskonałą, ale wewnętrzne zjednoczenie duszy mojej z Bogiem (Dz. 1107).",
		"Zachęcaj dusze, z którymi się stykasz, do ufności w nieskończone miłosierdzie Moje. O, jak bardzo kocham dusze, które Mi zupełnie zaufały – wszystko im uczynię (Dz. 294).",
		"Łaski z Mojego miłosierdzia czerpie się jednym naczyniem, a nim jest – ufność. Im dusza więcej zaufa, tym więcej otrzyma. (Dz. 1578).",
		"Powiedz duszom, gdzie mają szukać pociech, to jest w trybunale miłosierdzia; tam są największe cuda, które się nieustannie powtarzają. Aby zyskać ten cud (…) wystarczy przystąpić do stóp zastępcy Mojego z wiarą i powiedzieć mu nędzę swoją, a cud miłosierdzia Bożego okaże się w całej pełni. Choćby dusza była jak trup rozkładająca się (…), cud miłosierdzia Bożego wskrzesza tę duszę w całej pełni (Dz. 1448).",
		"Rozumiem, że miłosierdzie jest wielorakie, zawsze i wszędzie, i w każdy czas można czynić dobrze. Gorąca miłość Boga widzi wkoło siebie nieustanne potrzeby udzielania się przez czyn, słowo i modlitwę (Dz. 1313).",
		"Kiedy przychodzę w Komunii świętej do serca ludzkiego, mam ręce pełne łask wszelkich i pragnę je oddać duszy, ale dusze nawet nie zwracają uwagi na Mnie, pozostawiają Mnie samego, a zajmują się czym innym. O, jak Mi smutno, że dusze nie poznały Miłości. Obchodzą się ze Mną jak z czymś martwym (Dz. 1385).",
		"O Jezu, (…) uczyń serce moje tak wielkie, aby pomieściło potrzeby wszystkich dusz żyjących na całej kuli ziemskiej. O Jezu, miłość moja sięga poza świat, do dusz w czyśćcu cierpiących i dla nich chcę czynić miłosierdzie przez modlitwy odpustowe. (…) O Jezu mój, wiem, że Ty tak postępujesz z nami, jak i my postępujemy z bliźnimi (Dz. 692).",
		"Jezu mój, przeniknij mnie całą, abym mogła Cię odzwierciedlić w całym życiu swoim. Przebóstwij mnie, aby czyny moje miały wartość nadprzyrodzoną. Spraw, abym miała dla każdej duszy bez wyjątku miłość, litość i miłosierdzie (Dz. 1242).",
		"Jezu, uczyń serce moje podobne do swego, a raczej przemień je w swoje własne, abym umiała wyczuwać potrzeby innych serc, a szczególnie cierpiących i smutnych; niech promienie miłosierdzia odpoczną w sercu moim (Dz. 514).",
		"O Jezu, miłosierdzia, drżę, kiedy pomyślę, że mam zdawać sprawę z języka, w języku jest życie, ale i śmierć, a nieraz językiem zabijamy, popełniamy prawdziwe zabójstwo – i to mamy jeszcze uważać za rzecz małą? (Dz. 119).",


		"Daj mi, Panie, wiedzieć to, co godne wiedzy, kochać to, co godne kochania, chwalić to, co Tobie się podoba, szanować to, co Tobie bliskie, ganić to, co w Twoich oczach nikczemne.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Im więcej i lepiej umiesz, tym surowiej z tego tytułu będziesz sądzony, jeśli nie żyjesz święciej. Nie wywyższaj się z racji jakiejś umiejętności czy nauki, lecz raczej bój się z racji danej ci wiedzy. A jeśli ci się wydaje, że dużo wiesz i dość dobrze rozumiesz, wiedz jednak, że istnieje o wiele więcej rzeczy, których nie znasz.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Z równą chęcią powinniśmy czytać księgi pobożne i proste, co wzniosłe i głębokie. Niech cię nie zraża autorytet piszącego: czy był to człowiek mało czy bardzo wprawny literacko, lecz do czytania niech cię pociąga umiłowanie czystej prawdy. Nie dociekaj, kto to powiedział, lecz zwracaj uwagę na to, co zostało powiedziane.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"To pewne, że w godzinie Sądu nie zapytają nas, cośmy czytali, ale co robiliśmy; ani czyśmy dobrze przemawiali, lecz czy żyliśmy po Bożemu.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Najczystszą bowiem ofiarą i największym zadośćuczynieniem za grzechy jest czyste i całkowite ofiarowanie Bogu siebie samego razem z ofiarą Ciała Chrystusa podczas mszy i Komunii świętej.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Nie pyszni się z dobrych uczynków, bo inne są sądy boga niż ludzi, który często tym się brzydzi, co ludziom się podoba.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Lepiej jest odczuwać skruchę, aniżeli poznać jej definicję. Nawet gdybyś się nauczył na pamięć całej Biblii i wszystkiego, co powiedzieli filozofowie, cóż ci to pomoże, jeśli ci zabraknie miłości i łaski?  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Bo mocniejsza jest siła i łaska Ducha Świętego w dobrym, niż duch nieprawości w złym.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Często wydaje się być miłością, co jest raczej zmysłowością, ponieważ naturalny pociąg, własna wola, nadzieja nagrody i chęć wygody rzadko kiedy nas opuszczają.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Albowiem najpierw duszy zjawia się prosta myśl, następnie żywe wyobrażenie, wreszcie upodobanie, złe wzruszenie i zezwolenie.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Strzeż się, jak tylko możesz, ludzkiego zgiełku, bardzo bowiem szkodzi gadanie o sprawach błahych, nawet gdyby wypływało z najlepszych intencji. Szybko owieje nas pustka i schwyta w swe sidła.  ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Jeżeli chcesz, abym pozostawał w ciemności, bądź pochwalony, a jeśli zechcesz wyprowadzić mnie na światło, także bądź pochwalony.   ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",
		"Gdy nas spotyka nawet mała przeciwność, zbyt prędko upadamy na duchu i zwracamy się ku ludzkim pociechom. Gdybyśmy, jak mocni mężowie usiłowali wytrwać w boju, ujrzelibyśmy niezawodnie zesłaną nam z nieba pomoc Bożą. Gdyż Bóg jest gotów pomagać walczącym i ufającym Jego łasce; On bowiem daje nam sposobność do walki, żebyśmy zwyciężyli.   ~Tomasz z Kempis, O naśladowaniu Jezusa Chrystusa",


		"Nie mieczem, lecz krzyżem uczynił Chrystus ziemię sobie poddaną. ~Św. Augustyn",
		"Pracuj tak, jakby wszystko zależało od ciebie ale ufaj tak, jakby wszystko zależało od Boga.  ~Św. Augustyn",
		"Człowiek jest tyle wart, ile jest w stanie kochać. ~Św. Augustyn",
		"Bóg jest bliżej nas, niż my siebie samych. ~Św. Augustyn",
		"Szczęśliwy, kto kocha Ciebie, przyjaciela w Tobie, a nieprzyjaciela ze względu na Ciebie. ~Św. Augustyn"
	);
	shuffle($bibleQuotes);
	return $bibleQuotes;
}
