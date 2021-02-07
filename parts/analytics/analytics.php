<?php get_template_part('parts/analytics/consent') ?>

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
