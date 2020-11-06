<?php require_once(dirname(__FILE__) . '/../config.php') ?>

<span class="who-we-are-tooltip">
  <span>
    Sprawdź, <a href="<?php echo(Config::$whoWeAreUrl) ?>">kim jesteśmy</a>!
  </span>
</span>
<style>
.who-we-are-tooltip {
  display: inline-block;
  vertical-align: top;
  font-size: 12px;
  color: var(--color-text-auxillary);
  margin: 0px 10px;
}

.who-we-are-tooltip span {
  display: block;
	text-align: center;
	line-height: 14px;
  background: white;
  border: 1px solid #bbb;
  border-radius: 4px;
  padding: 4px;
  margin-top: 9px;
  position:relative;
}

.who-we-are-tooltip span:before {
	content: '';
  display: block;

  position: absolute;

  left: 30px;
  top: -4px;
  z-index: 2;

  border: solid #bbb;
  border-width: 0 1px 1px 0;
  background: white;
  display: inline-block;
  padding: 3px;

  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

</style>
