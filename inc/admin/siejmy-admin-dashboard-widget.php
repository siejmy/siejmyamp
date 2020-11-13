<?php
require_once(dirname(__FILE__) . '/admin-random-bible-quote-widget.php');

function siejmy_dashboard_widget_render() {
	$logoUrl = get_bloginfo('template_url') . '/assets/images/siejmy-logo-amp.min.svg';
	echo '<p style="text-align: center; background: #3ace00; padding: 1rem;"><img src="' . $logoUrl . '" width="100" height="100" alt="Logo siejmy" /></p>'
		 . '<h1><strong>Naszym światłem jest <span class="siejmyg">prawda</span>, celem <span class="siejmyg">apostolstwo</span>, a główną siłą <span class="siejmyg">miłość</span>.</strong></h1>'
		 . '<h2 style="text-align: center; margin-bottom: 0; padding-bottom: 0; margin-top: 2rem;">Nadcel</h2>'
		 . '<p style="background: #3ace00; color: white; font-size: 1.5em; padding: 0.25em;">Przyczynianie się do poznania i przyjęcia wartości katolickich przez młodych ludzi.</p>'
		 . '<h2 style="margin-top: 3rem;">Cele podstawowe</h2>'
		 . '<ol>'
		 .   '<li>Przedstawianie całościowego programu społecznego w duchu katolickim dla młodych ludzi.</li>'
		 .   '<li>Kreowanie kulturowego wzorca życia, który łączy współczesność z niezmiennym orędziem Chrystusa zdeponowanym w Kościele.</li>'
		 .   '<li>Stworzenie forum dyskusji o Kościele, w ramach katolickiej ortodoksji.</li>'
		 . '</ol>'
		 . '<h3>Cele służebne</h3>'
		 . '<ol>'
		 .   '<li>Rozpoznawalność SIEJMY przez każdą osobę aktywnie działającą w internecie w Polsce.</li>'
		 .   '<li>Zdobycie środków finansowych zarówno poprzez działalność gospodarczą, jak i dobroczynność, zapewniających stabilne funkcjonowanie i rozwój.</li>'
		 . '</ol>'
		 . '<p class="siejmy_quote">' . admin_random_bible_quote_widget() . '</p>'
		 . '<style>
					 .siejmyg { color: #3ace00; }
					 .siejmy_quote { background: #2A3189; padding: 40px; color: white; min-height: 120px; margin-top: 3rem; }
					 .siejmy_quote .siejmybtn {
						 color: white;
						 opacity: 0.6;
						 float: right;
						 width: 70px;
						 height: 180px;
						 text-align: right;
						 text-decoration: underline;
						 cursor: pointer;
						 font-size: 10px;
						 display: block;
						 margin-bottom: 20px;
						 clear: both;
					 }
			  </style>';
}
