<div class="single-content">
  <?php the_content(); ?>
</div>

<style>
.single-content {
  margin: 6rem auto;
  margin-bottom: 18rem;
  padding: 0 1rem;
  max-width: calc(var(--text-column-width) + 2rem);
}

.single-content figure {
  margin: 0;
  margin-bottom: 3rem;
  cursor: pointer;
  position: relative;
}

.single-content figure amp-img > img {
  transition: all 0.5s ease;
}

.single-content figure:hover amp-img > img {
  transform: scaleZ(1) scale(1.03);
}

.single-content figure::before {
  content: "Kliknij aby powiększyć ☞";
  float: right;
  font-size: 12px;
  font-weight: 400;
  color: #777;
}

@media(min-width:768px) {
  .single-content figure::before {
    color: black;
    opacity: 0;
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: rgba(255, 255, 255, 0.85);
    transition: opacity 0.3s ease;
    padding: 5px;
    z-index: 3;
  }

  .single-content figure:hover::before {
    opacity: 1;
  }
}

.single-content figure figcaption {
  opacity: 0.9;
  font-size: 1.6em;
  line-height: 3rem;
  margin-top: 0;
  margin-bottom: 3rem;
  font-weight: 300;
}

</style>
