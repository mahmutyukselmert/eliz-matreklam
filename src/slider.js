document.addEventListener("DOMContentLoaded", function () {
  // Hero Video Slider
  const videoSlides = document.querySelectorAll(".video-slide");
  const indicators = document.querySelectorAll(".indicator");
  const prevBtn = document.getElementById("heroPrevBtn");
  const nextBtn = document.getElementById("heroNextBtn");
  const progressBar = document.querySelector(".progress-bar");

  let currentSlide = 0;
  let isPlaying = false;
  let slideInterval;
  let progressInterval;
  let videoDuration = 0;
  let currentTime = 0;
  let userInteracted = false;

  // Tooltip elements
  const tooltip = document.getElementById("videoTooltip");
  const sliderContainer = document.querySelector(".video-slider-container");

  function hideAllSlides() {
    videoSlides.forEach((slide) => {
      slide.classList.remove("active");
      const video = slide.querySelector("video");
      if (video) {
        video.pause();
        video.currentTime = 0;
      }
    });
    indicators.forEach((indicator) => {
      indicator.classList.remove("active");
    });
  }

  function showSlide(index) {
    hideAllSlides();

    if (index >= videoSlides.length) {
      currentSlide = 0;
    } else if (index < 0) {
      currentSlide = videoSlides.length - 1;
    } else {
      currentSlide = index;
    }

    const activeSlide = videoSlides[currentSlide];
    const activeVideo = activeSlide.querySelector("video");

    activeSlide.classList.add("active");
    indicators[currentSlide].classList.add("active");

    videoDuration = parseInt(activeSlide.dataset.duration) || 15;
    currentTime = 0;

    // Reset progress bar for new slide
    resetProgressBar();

    // play video oto
    if (activeVideo) {
      activeVideo
        .play()
        .then(() => {
          isPlaying = true;
          userInteracted = true;
          startProgressBar();
          startAutoSlide();
        })
        .catch((error) => {
          console.log("Video autoplay failed:", error);
          // İlk slide için user interaction bekle
          if (currentSlide === 0 && !userInteracted) {
            isPlaying = false;
            // Progress ve auto-slide başlatma, user interaction bekle
            showUserInteractionPrompt();
          } else {
            // Diğer slide'lar için normal devam et
            startProgressBar();
            startAutoSlide();
          }
        });
    }
  }

  function startProgressBar() {
    clearInterval(progressInterval);

    progressInterval = setInterval(() => {
      currentTime += 0.1;
      const progress = (currentTime / videoDuration) * 100;
      progressBar.style.width = Math.min(progress, 100) + "%";

      if (currentTime >= videoDuration) {
        clearInterval(progressInterval);
      }
    }, 100);
  }

  function resetProgressBar() {
    clearInterval(progressInterval);
    progressBar.style.width = "0%";
    currentTime = 0;
  }

  function startAutoSlide() {
    clearInterval(slideInterval);

    slideInterval = setTimeout(() => {
      nextSlide();
    }, videoDuration * 1000);
  }

  function nextSlide() {
    showSlide(currentSlide + 1);
  }

  function prevSlide() {
    showSlide(currentSlide - 1);
  }

  function pauseSlider() {
    clearInterval(slideInterval);
    clearInterval(progressInterval);
    const activeVideo = videoSlides[currentSlide].querySelector("video");
    if (activeVideo) {
      activeVideo.pause();
    }
    isPlaying = false;

    // Update tooltip message for paused state
    if (tooltip && userInteracted) {
      tooltip.innerHTML =
        '<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 18V6l8 6-8 6Z"/></svg>';
    }
  }

  function resumeSlider() {
    if (!isPlaying) {
      // Only resume if not already playing
      const activeVideo = videoSlides[currentSlide].querySelector("video");
      if (activeVideo) {
        activeVideo
          .play()
          .then(() => {
            isPlaying = true;
            startProgressBar(); // Resume progress from current time
            startAutoSlide();
          })
          .catch(() => {
            // Video hala oynatılamazsa manuel progress başlat
            startProgressBar();
            startAutoSlide();
          });
      }

      // Update tooltip message for playing state
      if (tooltip && userInteracted) {
        tooltip.textContent = "Videoyu durdurmak için çift tıklayın";
        setTimeout(() => {
          tooltip.innerHTML =
            '<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6"/></svg>';
        }, 3000);
      }
    }
  }

  // Event Listeners
  nextBtn.addEventListener("click", () => {
    nextSlide();
  });

  prevBtn.addEventListener("click", () => {
    prevSlide();
  });

  // Indicator click events
  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
      showSlide(index);
    });
  });

  // Mouse double click ile video durdur
  sliderContainer.addEventListener("dblclick", pauseSlider);
  sliderContainer.addEventListener("click", resumeSlider);

  videoSlides.forEach((slide, index) => {
    const video = slide.querySelector("video");
    if (video) {
      video.addEventListener("ended", () => {
        if (index === currentSlide) {
          nextSlide();
        }
      });

      video.addEventListener("timeupdate", () => {
        if (index === currentSlide && video.duration > 0) {
          const realProgress = (video.currentTime / video.duration) * 100;
          if (realProgress >= 99) {
            setTimeout(() => {
              if (index === currentSlide) {
                nextSlide();
              }
            }, 500);
          }
        }
      });
    }
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
      prevSlide();
    } else if (e.key === "ArrowRight") {
      nextSlide();
    } else if (e.key === " ") {
      e.preventDefault();
      if (isPlaying) {
        pauseSlider();
      } else {
        resumeSlider();
      }
    }
  });

  document.addEventListener("visibilitychange", () => {
    if (document.hidden) {
      pauseSlider();
    } else {
      resumeSlider();
    }
  });

  window.addEventListener("resize", () => {
    const activeVideo = videoSlides[currentSlide].querySelector("video");
    if (activeVideo) {
      activeVideo.style.width = "100%";
      activeVideo.style.height = "100%";
    }
  });

  function showUserInteractionPrompt() {
    // Show tooltip
    showTooltip();

    // User interaction için bir kez dinle
    const handleUserInteraction = () => {
      userInteracted = true;
      const activeSlide = videoSlides[currentSlide];
      const activeVideo = activeSlide.querySelector("video");

      // Update tooltip message
      updateTooltipMessage();

      if (activeVideo) {
        activeVideo
          .play()
          .then(() => {
            isPlaying = true;
            startProgressBar();
            startAutoSlide();
          })
          .catch(() => {
            // Video hala oynatılamazsa manuel progress başlat
            startProgressBar();
            startAutoSlide();
          });
      }

      // Event listener'ları kaldır
      document.removeEventListener("click", handleUserInteraction);
      document.removeEventListener("keydown", handleUserInteraction);
      document.removeEventListener("touchstart", handleUserInteraction);
    };

    // Çeşitli user interaction'ları dinle
    document.addEventListener("click", handleUserInteraction, { once: true });
    document.addEventListener("keydown", handleUserInteraction, { once: true });
    document.addEventListener("touchstart", handleUserInteraction, {
      once: true,
    });
  }

  // Tooltip functions
  function showTooltip() {
    if (tooltip && sliderContainer) {
      tooltip.classList.remove("hidden");
      tooltip.classList.add("visible");

      // Mouse move event'i ekle
      sliderContainer.addEventListener("mousemove", followMouse);
      sliderContainer.addEventListener("mouseenter", showTooltipOnHover);
      sliderContainer.addEventListener("mouseleave", hideTooltipOnLeave);
    }
  }

  function hideTooltip() {
    if (tooltip && sliderContainer) {
      tooltip.classList.remove("visible");
      tooltip.classList.add("hidden");

      // Mouse event'lerini kaldır
      sliderContainer.removeEventListener("mousemove", followMouse);
      sliderContainer.removeEventListener("mouseenter", showTooltipOnHover);
      sliderContainer.removeEventListener("mouseleave", hideTooltipOnLeave);
    }
  }

  function updateTooltipMessage() {
    if (tooltip) {
      tooltip.textContent = "Videoyu durdurmak için çift tıklayın";
      setTimeout(() => {
        tooltip.innerHTML =
          '<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6"/></svg>';
      }, 3000);
    }
  }

  function followMouse(e) {
    if (tooltip) {
      // Hero-content alanında tooltip gösterme
      const heroContent = e.target.closest(".hero-content");
      if (heroContent) {
        tooltip.classList.remove("visible");
        tooltip.classList.add("hidden");
        return;
      } else {
        // Hero-content dışındaysa tooltip'i tekrar göster
        tooltip.classList.remove("hidden");
        tooltip.classList.add("visible");
      }

      const offsetX = 8;
      const offsetY = -25;
      tooltip.style.left = e.clientX + offsetX + "px";
      tooltip.style.top = e.clientY + offsetY + "px";
    }
  }

  function showTooltipOnHover(e) {
    if (tooltip) {
      // Hero-content alanında tooltip gösterme
      const heroContent = e.target.closest(".hero-content");
      if (heroContent) {
        return;
      }

      tooltip.classList.remove("hidden");
      tooltip.classList.add("visible");
    }
  }

  function hideTooltipOnLeave() {
    if (tooltip) {
      tooltip.classList.remove("visible");
      tooltip.classList.add("hidden");
    }
  }

  showSlide(0);

  const slider = document.getElementById("referenceItemsWrapper");
  if (slider) {
    const refPrevBtn = document.getElementById("prevBtn");
    const refNextBtn = document.getElementById("nextBtn");
    const items = document.querySelectorAll(".reference-item");

    let refCurrentIndex = 0;
    let itemsToShow = getItemsToShow();
    let maxIndex = Math.max(0, items.length - itemsToShow);

    function getItemsToShow() {
      const width = window.innerWidth;
      if (width >= 1400) return 6;
      if (width >= 1200) return 5;
      if (width >= 992) return 4;
      if (width >= 768) return 3;
      if (width >= 576) return 2;
      return 1;
    }

    function getSlideWidth() {
      const containerWidth = slider.parentElement.offsetWidth;
      const gap = 32; // 2rem gap
      const itemsVisible = getItemsToShow();

      return (containerWidth + gap) / itemsVisible;
    }

    function updateSlider() {
      const slideWidth = getSlideWidth();
      const translateX = refCurrentIndex * slideWidth;
      slider.style.transform = `translateX(-${translateX}px)`;

      refPrevBtn.disabled = refCurrentIndex === 0;
      refNextBtn.disabled = refCurrentIndex >= maxIndex;
    }

    function slideNext() {
      if (refCurrentIndex < maxIndex) {
        refCurrentIndex++;
        updateSlider();
      }
    }

    function slidePrev() {
      if (refCurrentIndex > 0) {
        refCurrentIndex--;
        updateSlider();
      }
    }

    if (refNextBtn) refNextBtn.addEventListener("click", slideNext);
    if (refPrevBtn) refPrevBtn.addEventListener("click", slidePrev);

    let refAutoSlideInterval = setInterval(() => {
      if (refCurrentIndex >= maxIndex) {
        refCurrentIndex = 0;
      } else {
        refCurrentIndex++;
      }
      updateSlider();
    }, 4000);

    const refSliderContainer = document.querySelector(
      ".references-slider-container"
    );
    if (refSliderContainer) {
      refSliderContainer.addEventListener("mouseenter", () => {
        clearInterval(refAutoSlideInterval);
      });

      refSliderContainer.addEventListener("mouseleave", () => {
        refAutoSlideInterval = setInterval(() => {
          if (refCurrentIndex >= maxIndex) {
            refCurrentIndex = 0;
          } else {
            refCurrentIndex++;
          }
          updateSlider();
        }, 4000);
      });
    }

    window.addEventListener("resize", () => {
      itemsToShow = getItemsToShow();
      maxIndex = Math.max(0, items.length - itemsToShow);
      refCurrentIndex = Math.min(refCurrentIndex, maxIndex);
      updateSlider();
    });

    if (items.length > 0) {
      updateSlider();
    }
  }
});
