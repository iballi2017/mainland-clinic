var calendarShow = 1;
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

  /**SHEDULER CALENDAR */
  function shedulerCalendar() {
    function getDatesBetween(date1, date2) {
      let range1 = new Date(date1);
      let range2 = new Date(date2);
      // console.log("range1: ", range1);
      // console.log("range2: ", range2);

      date1 = settingDate(date1, 31);
      date2 = settingDate(date2, 31);
      // console.log("date1: ", date1);
      // console.log("date2: ", date2);

      let temp;
      let dates = [];

      while (date1 <= date2) {
        // console.group("date1: ", date1);
        // console.warn("date1.getDate(): ", date1.getDate());
        if (date1.getDate() != 31) {
          temp = settingDate(date1, 0);
          // console.log("temp: ", temp);
          if (temp >= range1 && temp <= range2) dates.push(temp);
          date1.setMonth(date1.getMonth() + 1);
        } else {
          temp = new Date(date1);
          if (temp >= range1 && temp <= range2) dates.push(temp);
          date1.setMonth(date1.getMonth() + 1);
        }
      }

      // console.log("dates: ", dates);
      let content =
        "<div class='calendar-header-wrap'><div class='fw-semi-bold fs-300' id='calendarTitle'>";

      content += "test head";

      content += "</div>";

      content +=
        "<div class='calendarBtns'><button id='calendarPrev'>Prev</button> | <button id='calendarNext'>Next</button></div>"; //adding control buttons
      content += "</div>";
      let weekDays = [
        { shortDay: "Mon", fullDay: "Monday", label: "Mo" },
        { shortDay: "Tue", fullDay: "Tuesday", label: "Tu" },
        { shortDay: "Wed", fullDay: "Wednesdayday", label: "We" },
        { shortDay: "Thu", fullDay: "Thursday", label: "Th" },
        { shortDay: "Fri", fullDay: "Friday", label: "Fr" },
        { shortDay: "Sat", fullDay: "Saturday", label: "Sa" },
        { shortDay: "Sun", fullDay: "Sunday", label: "Su" },

        //

        // { shortDay: "Mo", fullDay: "Monday" },
        // { shortDay: "Tu", fullDay: "Tuesday" },
        // { shortDay: "We", fullDay: "Wednesdayday" },
        // { shortDay: "Th", fullDay: "Thursday" },
        // { shortDay: "Fr", fullDay: "Friday" },
        // { shortDay: "Sa", fullDay: "Saturday" },
        // { shortDay: "Su", fullDay: "Sunday" },
      ];

      const monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ];

      for (let i = 0; i < dates.length; i++) {
        lastDate = dates[i];
        firstDate = new Date(dates[i].getFullYear(), dates[i].getMonth(), 1);
        // console.log("dates[i].getMonth(): ", monthNames[dates[i].getMonth()]);

        content +=
          "<div id='calendarTable_" + (i + 1) + "' class='calendarDiv'>";
        content +=
          "<h2 style='position: absolute; left: -100%; visibility: hidden'>" +
          monthNames[dates[i].getMonth()] +
          " " +
          firstDate.getFullYear() +
          "</h2>";
        content += "<table>";
        content += "<thead>";
        weekDays.map((item) => {
          content += "<th>" + item.label + "</th>";
        });
        content += "</thead>";
        content += "<tbody>";

        let j = 1;
        let displayNum, idMonth;
        while (j <= lastDate.getDate()) {
          content += "<tr>";
          for (let k = 0; k < 7; k++) {
            displayNum = j < 10 ? "0" + j : j;
            if (j === 1) {
              if (firstDate.toString().split(" ")[0] == weekDays[k].shortDay) {
                content += "<td>" + displayNum + "</td>";
                j++;
              } else {
                content += "<td></td>";
              }
            } else if (j > lastDate.getDate) {
              content += "<td></td>";
            } else {
              content += "<td>" + displayNum + "</td>";
              j++;
            }
          }
          content += "</tr>";
        }

        content += "</tbody>";
        content += "</table>";
        content += "</div>";
      }
      return content;
    }

    function settingDate(date, day) {
      date = new Date(date);
      date.setDate(day);
      date.setHours(23);
      return date;
    }

    /**Today's date YYY/MM/DD formatting */
    var m = new Date();
    var dateString =
      m.getUTCFullYear() +
      "/" +
      ("0" + (m.getUTCMonth() + 1)).slice(-2) +
      "/" +
      ("0" + m.getUTCDate()).slice(-2);
    /** */

    // let content = getDatesBetween("2020/01/01", "2027/01/01");
    let content = getDatesBetween(dateString, "2027/01/01");
    // document.getElementById("calendar").innerHTML = content;

    /**Place initial title */
    let allTables = document.getElementsByClassName("calendarDiv");
    console.log("first carlendar: ", allTables[0]);
    placeCalendarTitle(allTables, calendarShow);
  }

  /** */
  function callNext() {
    let allTables = document.getElementsByClassName("calendarDiv");
    document.getElementById("calendarPrev").disabled = false;
    calendarShow++;
    if (calendarShow <= allTables.length) {
      for (let i = 0; i < allTables.length; i++) {
        allTables[i].style.display = "none";
        // console.log("allTables[i]: ", allTables[i])
      }
      document.getElementById("calendarTable_" + calendarShow).style.display =
        "block";

      placeCalendarTitle(allTables, calendarShow);

      if (calendarShow == allTables.length) {
        document.getElementById("calendarNext").disabled = true;
      }
    }
  }

  /**Place calendar name in title element */
  function placeCalendarTitle(allTables, calendarShow) {
    let x = allTables[calendarShow - 1];
    console.log("x: ", x);
    if (!x) return;
    document.getElementById("calendarTitle").innerHTML =
      x.firstElementChild.textContent;
    return;
  }
  /** */

  function callPrev() {
    let allTables = document.getElementsByClassName("calendarDiv");
    document.getElementById("calendarNext").disabled = false;
    calendarShow--;
    if (calendarShow >= 1) {
      for (let i = 0; i < allTables.length; i++) {
        allTables[i].style.display = "none";
      }
      document.getElementById("calendarTable_" + calendarShow).style.display =
        "block";

      placeCalendarTitle(allTables, calendarShow);

      if (calendarShow == 1) {
        document.getElementById("calendarPrev").disabled = true;
      }
    }
  }
  shedulerCalendar();

  const calendarPrevBtn = document.querySelector("#calendarPrev");
  const calendarNextBtn = document.querySelector("#calendarNext");
  if (calendarNextBtn && calendarPrevBtn) {
    calendarNextBtn.addEventListener("click", callNext);
    calendarPrevBtn.addEventListener("click", callPrev);
  }

  /**Appointment Selection */

  var appointmentSelectionBtn = document.getElementById(
    "appointmentSelectionBtn"
  );

  if (appointmentSelectionBtn) {
    appointmentSelectionBtn.addEventListener("click", () => {
      let appointment = document.querySelector(
        'input[name="Appointment"]:checked'
      );
      if (!appointment) return;
      console.log("appointment: ", appointment.value);
      window.location.href = `http://localhost/projects/mainland-clinic/public/views/book-appointment.php?title=${appointment.value}`;
    });
  }

  let appointmentControls = document.querySelectorAll(
    'input[name="Appointment"]'
  );
  for (let i = 0; i < appointmentControls.length; i++) {
    const element = appointmentControls[i];
    element.addEventListener("click", (e) => {
      if (e.target.checked) appointmentSelectionBtn.removeAttribute("disabled");
    });
  }

  /** */
});
