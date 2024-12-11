window.addEventListener("DOMContentLoaded", (event) => {});

/** */

class DropdownSearch {
  countries;
  wrapper;
  constructor(dropdownName, list) {
    this.wrapper = dropdownName;
    this.countries = [...list];
    addCountry();
  }

  addCountry(selectedCountry) {
    this.wrapper.querySelector(".options").innerHTML = "";
    this.countries.forEach((country) => {
      // console.log("country: ", country);
      /**if selected country value is same then add selected class */
      let isSelected = country == selectedCountry ? "selected" : "";
      // adding each country inside li and inserting all li inside options tag
      let li = `<li onclick='updateName(this)' class='${isSelected}'>${country}</li>`;
      this.wrapper.querySelector(".options").insertAdjacentHTML("beforeend", li);
    });
  }

  updateName(selectedLi) {
    console.log(selectedLi.innerText);
     this.wrapper.querySelector("input").value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    this.wrapper.querySelector(".select-btn").firstElementChild.innerText = selectedLi.innerText;
    // this.wrapper.querySelector(".select-btn").firstElementChild.style.color = "red";
    this.wrapper.querySelector(".select-btn").firstElementChild.classList.add("base-text-color-500");
    console.log(this.wrapper.querySelector(".select-btn").firstElementChild);
  }

  searchItem() {
     this.wrapper.querySelector("input").addEventListener("keyup", () => {
      // console.log( this.wrapper.querySelector("input").value);
      let arr = []; /**create empty array */
      let searchVal =  this.wrapper.querySelector("input").value;
      /**returnong all countries from array which starts with user searched value
       * and mapping returned country wit li and joining them
       */
      arr = countries
        .filter((data) => {
          return data.toLowerCase().startsWith(searchVal);
        })
        .map((data) => `<li onclick='updateName(this)'>${data}</li>`)
        .join("");
      //   console.log(arr);
      this.wrapper.querySelector(".options").innerHTML = arr ? arr : `<p>Oops!, Country not found</p>`;
    });
  }

  selectButton() {
    this.wrapper.querySelector(".select-btn").addEventListener("click", () => {
      wrapper.classList.toggle("active");
    });
  }
}