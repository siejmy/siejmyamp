<?php
require_once(dirname(__FILE__) . '/admin-random-bible-quote-widget.php');

function hollyquote_metabox_html($post) {
  echo '<p class="siejmy_quote">' . admin_random_bible_quote_widget() . '</p>'
  . '<style>
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
