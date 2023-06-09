window.addEventListener("DOMContentLoaded", (event) => {
  /* Page Content Intersection Observer */
  const faders = document.querySelectorAll(".fade-in");
  const sliders = document.querySelectorAll(".slide-in");

  const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -100px 0px",
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

  sliders.forEach((slider) => {
    appearOnScroll.observe(slider);
  });

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

  function myFunction() {
    const w = window.outerWidth;
    const screenWidthSize = 768;
    const sideNavigation = document.getElementById("side-navigation");

    if (!sideNavigation) return;

    let closeToggleBtn = sideNavigation.firstElementChild;
    let openSidenavBtn = document.getElementById("openSidenavBtn");
    if (!sideNavigation) return;
    if (w > screenWidthSize) {
      !sideNavigation.classList.contains("show")
        ? sideNavigation.classList.add("show")
        : null;
    } else {
      sideNavigation.classList.contains("show")
        ? sideNavigation.classList.remove("show")
        : null;

      closeToggleBtn?.setAttribute("aria-expanded", false);
      openSidenavBtn.setAttribute("aria-expanded", false);
    }
  }
  addEventListener("resize", (event) => myFunction());
});

/** */
const wrapper = document.querySelector(".custom-search-dropdown");
selectBtn = wrapper.querySelector(".select-btn");
searchInput = wrapper.querySelector("input");
options = wrapper.querySelector(".options");

/**array of some countries */
let countries = [
  "Afghanistan",
  "Algeria",
  "Argenetina",
  "Australia",
  "Bangladesh",
  "Belgium",
  "Bhutan",
  "Brazil",
  "Canada",
  "China",
  "Denmark",
  "Ethiopia",
  "Finland",
  "France",
  "Germany",
  "Hungary",
  "Iceland",
  "India",
  "Indonesia",
  "Iran",
  "Italy",
  "Japan",
  "Malaysia",
  "Maldives",
  "Mexico",
];
/**############################### */

class DropdownSearch {
  countries;
  wrapper;
  constructor(dropdownName, list) {
    this.wrapper = dropdownName;
    this.countries = [...list];
    this.wrapper.addEventListener("mouseleave", () => {
      if (!this.wrapper.classList.contains("active")) return;
      this.wrapper.classList.remove("active");
    });
    this.addCountry(null);

    this.triggerSelectionEvent();
  }

  addCountry(selectedCountry) {
    this.wrapper.querySelector(".options").innerHTML = "";
    this.countries.forEach((country) => {
      // console.log("country: ", country);
      /**if selected country value is same then add selected class */
      let isSelected = country == selectedCountry ? "selected" : "";
      // adding each country inside li and inserting all li inside options tag
      let li = `<li class='${isSelected}'>${country}</li>`;
      this.wrapper
        .querySelector(".options")
        .insertAdjacentHTML("beforeend", li);
    });
  }

  updateName(selectedLi) {
    this.wrapper.querySelector("input").value = "";
    // this.addCountry(selectedLi.innerText);
    this.wrapper.classList.remove("active");
    this.wrapper.querySelector(".select-btn").firstElementChild.innerText =
      selectedLi.innerText;
    this.wrapper
      .querySelector(".select-btn")
      .firstElementChild.classList.add("base-text-color-500");
  }

  searchItem() {
    this.wrapper.querySelector("input").addEventListener("keyup", () => {
      this.searchTerm();
      this.triggerSelectionEvent();
    });
  }

  selectButton() {
    this.wrapper.querySelector(".select-btn").addEventListener("click", () => {
      this.wrapper.classList.toggle("active");

      /** */
      if (!this.wrapper.classList.contains("active")) return;
      if (this.wrapper.classList.contains("active")) {
        this.searchTerm();
        this.triggerSelectionEvent();
      }
    });
  }

  searchTerm() {
    let arr = []; /**create empty array */
    let searchVal = this.wrapper.querySelector("input").value;
    /**returning all countries from array which starts with user searched value
     * and mapping returned country wit li and joining them
     */
    arr = this.countries
      .filter((data) => {
        return data.toLowerCase().startsWith(searchVal);
      })
      .map((data) => `<li>${data}</li>`)
      .join("");
    //   console.log(arr);
    this.wrapper.querySelector(".options").innerHTML = arr
      ? arr
      : `<p>Oops!, Country not found</p>`;

    //
  }

  triggerSelectionEvent() {
    let li = this.wrapper.querySelectorAll(".options li");
    for (let i = 0; i < li.length; i++) {
      const element = li[i];
      element.addEventListener("click", () => {
        this.updateName(element);
      });
    }
  }
}

const test1 = document.querySelector(".custom-search-dropdown-1");
const myList = ["hello", "hi", "me"];
var x = new DropdownSearch(test1, countries);
// x.addCountry();
// function updateValue(data) {
//   x.updateName(data);
// }
x.searchItem();
x.selectButton();

//

const test2 = document.querySelector(".custom-search-dropdown-2");
const myList2 = ["hello", "hi", "me"];
var y = new DropdownSearch(test2, myList);
// y.addCountry();
// function updateValue(data) {
//   y.updateName(data);
// }
y.searchItem();
y.selectButton();
