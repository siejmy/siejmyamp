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
      <Strong>Niech będzie Pan pochwalony we wszystkich naszych dziełach!</strong>
    </p>
    <span>
      <button on="tap:analyticsconsent-elem.accept" role="button">Zgadzam się</button>
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
    padding-bottom: 2rem;
    background: var(--overlays-bg-dark);
    color: white;
    box-shadow: 0 0 12px 5px rgba(0,0,0,.4);
  }

  #consent-ui p {
    margin-bottom: 0;
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
    padding: 7px;
    font-size: 16px;
    box-shadow: 1px 1px 5px 1px rgba(0,0,0,.4);
  }
</style>

<amp-analytics data-block-on-consent type="gtag" data-credentials="include">
  <script type="application/json">
  {
    "vars":{
        "account":"UA-173172948-1",
        "gtag_id":"UA-173172948-1",
        "config":{
          "UA-173172948-1":{
              "groups":"default",
              "extraUrlParams":{
                "cd1":"${ampdocHost}"
              }
          }
        }
    },
    "triggers":{
        "trackPageview":{
          "on":"visible",
          "request":"pageview"
        }
    }
  }
  </script>
</amp-analytics>

<amp-analytics data-block-on-consent type="facebookpixel" id="facebook-pixel">
  <script type="application/json">
  {
      "vars": {
          "pixelId": "3061901444080879"
      },
      "triggers": {
          "trackPageview": {
              "on": "visible",
              "request": "pageview"
          }
      }
  }
  </script>
</amp-analytics>
