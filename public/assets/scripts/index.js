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

const servicesCategories = [
  "Point of care testing",
  "Home services",
  "Medical Screening",
  "Other services",
];
// const serviceTypes = ["hello", "hi", "me"];
var serviceTypes = [];
var availableServiceTypes = [
  {
    offer: "Point of care testing",
    types: [
      "Blood sample testing: Blood Pregnancy test",
      "Blood sample testing: Malaria Parasite",
      "Blood sample testing: Widal reactivity",
      "Blood sample testing: Hepatitis A",
      "Blood sample testing: Hepatitis B",
      "Blood sample testing: Hepatitis C",
      "Blood sample testing: Random blood sugar",
      "Blood sample testing: Fasting blood sugar",
      "Blood sample testing: Serum total cholesterol level",
      "Blood sample testing: Blood Haemoglobin level",
      "Urine sample testing: Leukocytes",
      "Urine sample testing: Nitrite",
      "Urine sample testing: Urobilinogen",
      "Urine sample testing: Protein",
      "Urine sample testing: PH",
      "Urine sample testing: Blood",
      "Urine sample testing: Specific Gravity",
      "Urine sample testing: Ketone",
      "Urine sample testing: Bilirubin",
      "Urine sample testing: Glucose",
    ],
  },
  {
    offer: "Home services",
    types: [
      "Request a doctor",
      "Request a nurse",
      "Request a drug refill",
      "Home care services",
    ],
  },
  {
    offer: "Medical Screening",
    types: [
      "Food handlers testing",
      "Pre-employment testing",
      "Drivers fitness test",
      "Pregnancy fit to fly testing",
    ],
  },
  {
    offer: "Other services",
    types: [
      "First aid/ medical training for company staff",
      "Management of onsite clinic for corporate bodies",
    ],
  },
];
const wrapper = document.querySelector(".custom-search-dropdown");
var selectBtn;
var searchInput;
var searchInput;
if (wrapper) {
  selectBtn = wrapper.querySelector(".select-btn");
  searchInput = wrapper.querySelector("input");
  options = wrapper.querySelector(".options");
}

var serviceValue = {
  category: null,
  type: null,
};

/**############################### */

class DropdownSearch {
  arrayList;
  wrapper;
  constructor(dropdownName, list) {
    this.wrapper = dropdownName;
    if (list) {
      this.arrayList = [...list];
    }
    if (!this.wrapper) return;
    this.wrapper.addEventListener("mouseleave", () => {
      if (!this.wrapper.classList.contains("active")) return;
      this.wrapper.classList.remove("active");
    });
    this.addCountry(null);

    this.triggerSelectionEvent();
  }

  addCountry(selectedCountry) {
    this.wrapper.querySelector(".options").innerHTML = "";
    this.arrayList
      ? this.arrayList.forEach((country) => {
          // console.log("country: ", country);
          /**if selected country value is same then add selected class */
          let isSelected = country == selectedCountry ? "selected" : "";
          // adding each country inside li and inserting all li inside options tag
          let li = `<li class='${isSelected}'>${country}</li>`;
          this.wrapper
            .querySelector(".options")
            .insertAdjacentHTML("beforeend", li);
        })
      : null;
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

    this.appointmentFormOfferUpdate(selectedLi.innerText);
  }

  appointmentFormOfferUpdate(data) {
    // serviceTypes = [];

    let c = availableServiceTypes.find((item) => item.offer == data);
    serviceTypes = c?.types;

    const serviceType = document.querySelector(".custom-search-dropdown-2");
    var serviceTypesDropSearch = new DropdownSearch(serviceType, serviceTypes);
    serviceTypesDropSearch.searchItem();
    serviceTypesDropSearch.selectButton();
    // this.triggerSelectionEvent();

    var selectedServiceCategory = document.querySelector("#serviceCategory");
    var selectedServiceType = document.querySelector("#serviceType");

    serviceValue.category = selectedServiceCategory.textContent;
    serviceValue.type = selectedServiceType.textContent;

    if (serviceValue.category == "Select offer") serviceValue.category = null;

    if (serviceValue.type == "Select type") serviceValue.type = null;

    console.log("serviceValue: ", serviceValue);
  }

  searchItem() {
    if (!this.wrapper) return;
    this.wrapper.querySelector("input").addEventListener("keyup", () => {
      this.searchTerm();
      this.triggerSelectionEvent();
    });
  }

  selectButton() {
    if (!this.wrapper) return;
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
    /**returning all arrayList from array which starts with user searched value
     * and mapping returned country wit li and joining them
     */
    arr = this.arrayList
      .filter((data) => {
        return data.toLowerCase().startsWith(searchVal);
      })
      .map((data) => `<li>${data}</li>`)
      .join("");
    //   console.log(arr);
    this.wrapper.querySelector(".options").innerHTML = arr
      ? arr
      : `<p>
      <small>Oops!, No data found</small></p>`;

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

const serviceOffer = document.querySelector(".custom-search-dropdown-1");
var servicesCategoriesDropSearch = new DropdownSearch(
  serviceOffer,
  servicesCategories
);
servicesCategoriesDropSearch.searchItem();
servicesCategoriesDropSearch.selectButton();

/** */
// const serviceType = document.querySelector(".custom-search-dropdown-2");
// var serviceTypesDropSearch = new DropdownSearch(serviceType, serviceTypes);
// serviceTypesDropSearch.searchItem();
// serviceTypesDropSearch.selectButton();
