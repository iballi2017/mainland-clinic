window.addEventListener("DOMContentLoaded", (event) => {
  /* Page Content Intersection Observer */
  const faders = document.querySelectorAll(".fade-in");
  const sliders = document.querySelectorAll(".slide-in");


  const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -100px 0px"
  };
  const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach((fader) => {
    appearOnScroll.observe(fader);
  });


  sliders.forEach((slider)=>{
    appearOnScroll.observe(slider)
  })


  //   // console.log("DOM fully loaded and parsed");

  //   const navToggle = document.querySelector(".mobile-nav-toggle");
  //   const primaryNav = document.querySelector("#primary-navigation");

  //   if (navToggle)
  //     navToggle.addEventListener("click", () => {
  //       primaryNav.hasAttribute("data-visible", false)
  //         ? navToggle.setAttribute("aria-expanded", false)
  //         : navToggle.setAttribute("aria-expanded", true);
  //       primaryNav.toggleAttribute("data-visible");
  //     });
});
