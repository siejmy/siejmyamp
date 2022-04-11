<?php  require_once(dirname(__FILE__) . '/../../config.php'); ?>

<amp-consent layout="nodisplay" id="analyticsconsent-elem">
  <script type="application/json">
    {
      "consentInstanceId": "analyticscontent",
      "consentRequired": true,
      "promptUI": "consent-ui",
      "postPromptUI": "post-consent-ui"
    }
  </script>
  <div id="consent-ui">
    <p>
      Siejmy, tak jak (prawie) wszystkie inne strony wykorzystuje
      ciasteczka oraz analityki Google/Facebook. Używamy tych zbiorczych i anonimowych
      danych tylko aby dowiedzieć się, które treści najbardziej Wam się podobają.
      <a href="<?php echo(Config::$privacyUrl) ?>">Polityka prywatności</a>
      <Strong>Niech będzie Pan pochwalony we wszystkich naszych dziełach!</strong>
    </p>
    <span>
      <button on="tap:analyticsconsent-elem.accept" role="button">Zgadzam się na 🍪</button>
    </span>
  </div>
</amp-consent>

<style>
  #consent-ui {
    position: fixed;
    left: 0;
    bottom: 0;
    right: 0;
    padding: 1rem;
    padding-bottom: 3rem;
    background: var(--overlays-bg-dark-opaque);
    color: white;
    box-shadow: 0 0 12px 5px rgba(0,0,0,.4);
  }

  #consent-ui p {
    margin: 0 auto;
    max-width: var(--text-column-width);
    margin-bottom: 2rem;
    font-size: 14px;
    line-height: 20px;
  }

  #consent-ui span {
    display: block;
    width: 100%;
    text-align: center;
  }

  #consent-ui button {
    color: white;
    background: var(--color-accent);
    border: 0;
    padding: 15px;
    font-size: 30px;
    box-shadow: 1px 1px 5px 1px rgba(0,0,0,.4);
  }
</style>
