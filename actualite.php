





<div id="tsparticles"></div>
    <section>
      <div class="content">
        <h1>Let's Travel The World Together!</h1>
        <p>
          Our tours are designed to transport you to the heart of the world's
          most captivating destinations, creating memories that will last a
          lifetime. You can uncover the hidden gems, iconic landmarks, and
          unique cultural treasures that make each destination special.
        </p>
        <button>Explore Tours</button>
      </div>

      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/49db1b5f-09f6-4433-be57-51687585600c" />
            <div class="cost">from $230 per group</div>
            <div class="overlay">
              <h1>Walking Tour in Florence</h1>
              <p>
                Discover the fascinating beauty of this historic city by
                strolling through the rich cultural tapestry that makes Florence
                a timeless destination.
              </p>
              <div class="ratings">
                <div class="stars">
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star-half-outline"></ion-icon>
                </div>
                <span>138 reviews</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/2d165721-fe2e-4cf0-a63e-20bc5bc3f847" />
            <div class="cost">from $380 per group</div>
            <div class="overlay">
              <h1>Edinburgh Guided Tour</h1>
              <p>
                Explore the city's majestic castles and fascinating history by
                joining our guided tour for an unforgettable journey through
                Scotland's capital.
              </p>
              <div class="ratings">
                <div class="stars">
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                </div>
                <span>307 reviews</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/d311d1de-7382-4c03-b083-5f7e88458158" />
            <div class="cost dark-text">from $99 per adult</div>
            <div class="overlay">
              <h1>New York Sightseeing Tour</h1>
              <p>
                Experience the energy and excitement of New York City from Times
                Square's dazzling lights to the serene beauty of Central Park.
              </p>
              <div class="ratings">
                <div class="stars">
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star-half-outline"></ion-icon>
                </div>
                <span>1152 reviews</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/be223a30-52d1-4a0b-8d57-2e52f02e2245" />
            <div class="cost dark-text">from $117 per adult</div>
            <div class="overlay">
              <h1>Japan Panoramic Tours</h1>
              <p>
                Embark on a magical journey through Tokyo by discovering the
                beauty of the city as cherry blossom trees paint the streets in
                hues of pink.
              </p>
              <div class="ratings">
                <div class="stars">
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star"></ion-icon>
                  <ion-icon class="star" name="star-outline"></ion-icon>
                </div>
                <span>619 reviews</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <a href="https://www.youtube.com/@ecemgokdogan/videos" target="_blank" class="logo"><img src="https://assets.codepen.io/9868786/youtube.webp" alt="HTML tutorial"></a>
    </section>



    @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Nunito:wght@300;600&display=swap");

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Nunito", sans-serif;
}

body {
  background: #162561;
  background-image: radial-gradient(
      circle at 20% 100%,
      rgba(184, 184, 184, 0.1) 0%,
      rgba(184, 184, 184, 0.1) 33%,
      rgba(96, 96, 96, 0.1) 33%,
      rgba(96, 96, 96, 0.1) 66%,
      rgba(7, 7, 7, 0.1) 66%,
      rgba(7, 7, 7, 0.1) 99%
    ),
    linear-gradient(40deg, #040a22, #162561, #202e64, #6f7aa6);
  background-repeat: no-repeat;
  background-size: cover;
}

section {
  display: grid;
  grid-template-columns: 50% 45%;
  place-items: center;
  gap: 60px;
  min-height: 100vh;
  padding: 20px 60px;
}

/* CONTENT */

.content {
  max-width: 2400px;
}

.content h1 {
  font-family: "Comfortaa", sans-serif;
  font-size: clamp(2rem, 4vw, 3.5rem);
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: 1px;
  margin-bottom: 36px;
  color: #fff;
}

.content p {
  font-size: clamp(0.9rem, 3vw, 1.25rem);
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 30px;
  color: #fff;
}

.content button {
  background: #eaeaea;
  color: #202134;
  font-size: clamp(0.9rem, 4vw, 1rem);
  font-weight: 600;
  border: 0;
  outline: 0;
  padding: 8px 14px;
  border-radius: 7px;
  transform: scale(1);
  transition: all 0.4s ease-in;
  cursor: pointer;
}

.content button:is(:hover, :focus) {
  transform: scale(0.98);
  background-color: #6f7aa6;
  color: #eaeaea;
}

/* SLIDER */

.swiper {
  position: relative;
  width: 400px;
  height: 490px;
}

.swiper-slide {
  position: relative;
  border: 1px solid rgba(255, 255, 255, 0.3);
  user-select: none;
  border-radius: 20px;
}

.cost {
  position: absolute;
  top: 8px;
  right: 6px;
  background: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
  border-radius: 30px;
  padding: 6px 10px;
  color: #fff;
  font-size: clamp(0.8rem, 4vw, 0.9rem);
  font-weight: 600;
}

.dark-text {
  color: #202134;
}

.swiper-slide img {
  width: 100%;
  height: 100%;
  border-radius: 20px;
}

.overlay {
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 150px;
  padding: 10px 20px;
  background: rgba(93, 95, 145, 0.2);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  color: #fff;
  border-radius: 0 0 20px 20px;
}

.overlay h1 {
  font-size: clamp(1.2rem, 4vw, 1.5rem);
  font-weight: 600;
}

.overlay p {
  font-size: clamp(0.8rem, 4vw, 0.9rem);
  font-weight: 300;
  line-height: 1.3;
}

.ratings {
  display: flex;
  column-gap: 10px;
  margin-top: -6px;
}

.ratings span {
  font-size: clamp(0.8rem, 4vw, 0.9rem);
  font-weight: 300;
}

.star {
  color: #afe312;
}

.logo {
  position: fixed;
  right: -20px;
  bottom: -30px;
  z-index: 10;
}

.logo img {
  width: 120px;
}

@media (max-width: 890px) {
  .logo {
  right: -10px;
  bottom: -20px;
}
  
 .logo img {
  width: 80px;
  }
}

@media (max-width: 1050px) {
  .swiper {
    width: 350px;
    height: 450px;
  }
}

@media (max-width: 930px) {
  section {
    grid-template-columns: 100%;
    grid-template-rows: 55% 40%;
    grid-template-areas:
      "slider"
      "content";
    place-items: center;
    gap: 64px;
    padding: 60px;
  }

  .swiper {
    grid-area: slider;
  }

  .content {
    grid-area: content;
    text-align: center;
  }

  .content h1 {
    margin-bottom: 20px;
  }
}

@media (max-width: 470px) {
  section {
    padding: 40px 40px 60px;
  }

  .swiper {
    width: 300px;
    height: 400px;
  }
}








var swiper = new Swiper(".swiper", {
  effect: "cube",
  grabCursor: true,
  loop: true,
  speed: 1000,
  cubeEffect: {
    shadow: false,
    slideShadows: true,
    shadowOffset: 10,
    shadowScale: 0.94,
  },
  autoplay: {
    delay: 2600,
    pauseOnMouseEnter: true,
  },
});

tsParticles.load("tsparticles", {
  fpsLimit: 60,
  backgroundMode: {
    enable: true,
    zIndex: -1,
  },
  particles: {
    number: {
      value: 30,
      density: {
        enable: true,
        area: 800,
      },
    },
    color: {
      value: [
        "#3998D0",
        "#2EB6AF",
        "#A9BD33",
        "#FEC73B",
        "#F89930",
        "#F45623",
        "#D62E32",
      ],
    },
    destroy: {
      mode: "split",
      split: {
        count: 1,
        factor: {
          value: 5,
          random: {
            enable: true,
            minimumValue: 4,
          },
        },
        rate: {
          value: 10,
          random: {
            enable: true,
            minimumValue: 5,
          },
        },
        particles: {
          collisions: {
            enable: false,
          },
          destroy: {
            mode: "none",
          },
          life: {
            count: 1,
            duration: {
              value: 1,
            },
          },
        },
      },
    },
    shape: {
      type: "circle",
      stroke: {
        width: 0,
        color: "#000000",
      },
      polygon: {
        sides: 5,
      },
    },
    opacity: {
      value: 1,
      random: false,
      animation: {
        enable: false,
        speed: 1,
        minimumValue: 0.1,
        sync: false,
      },
    },
    size: {
      value: 8,
      random: {
        enable: true,
        minimumValue: 4,
      },
      animation: {
        enable: false,
        speed: 40,
        minimumValue: 0.1,
        sync: false,
      },
    },
    collisions: {
      enable: true,
      mode: "destroy",
    },
    move: {
      enable: true,
      speed: 7,
      direction: "none",
      random: false,
      straight: false,
      out_mode: "out",
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200,
      },
    },
  },
  detectRetina: true,
});
