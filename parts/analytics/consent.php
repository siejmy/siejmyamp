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
      <a href="<?php echo(SiejmyConfig::$privacyUrl) ?>">Polityka prywatności</a>
      <Strong>Niech będzie Pan pochwalony we wszystkich naszych dziełach!</strong>
    </p>
    <span>
      <button on="tap:analyticsconsent-elem.accept" role="button">Zgadzam się na 🍪</button>
    </span>
  </div>
</amp-consent>
