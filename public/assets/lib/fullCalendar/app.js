document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var dateData;
  var fullateData;

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialDate: "2023-01-12",
    editable: true,
    selectable: true,
    businessHours: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: "All Day Event",
        start: "2023-01-01",
      },
      {
        title: "Long Event",
        start: "2023-01-07",
        end: "2023-01-10",
      },
      {
        groupId: 999,
        title: "Repeating Event",
        start: "2023-01-09T16:00:00",
      },
      {
        groupId: 999,
        title: "Repeating Event",
        start: "2023-01-16T16:00:00",
      },
      {
        title: "Conference",
        start: "2023-01-11",
        end: "2023-01-13",
      },
      {
        title: "Meeting",
        start: "2023-01-12T10:30:00",
        end: "2023-01-12T12:30:00",
      },
      {
        title: "Lunch",
        start: "2023-01-12T12:00:00",
      },
      {
        title: "Meeting",
        start: "2023-01-12T14:30:00",
      },
      {
        title: "Happy Hour",
        start: "2023-01-12T17:30:00",
      },
      {
        title: "Dinner",
        start: "2023-01-12T20:00:00",
      },
      {
        title: "Birthday Party",
        start: "2023-01-13T07:00:00",
      },
      {
        title: "Click for Google",
        url: "http://google.com/",
        start: "2023-01-28",
      },
    ],
  });

  calendar.render();

  let fcDay = document.querySelectorAll(".fc-day");
  let calModal = document.getElementById("confirmSelection");
  for (let i = 0; i < fcDay.length; i++) {
    const element = fcDay[i];
    if (!element) return;
    element.addEventListener("click", () => {
      let _date = element.getAttribute("data-date");
      // console.log("_date: ", _date);
      dateData = _date;
      fullateData = _date;
      // console.log("$('#confirmSelection'): ", $("#confirmSelection"));
      // $("#confirmSelection").modal();
      var myModal = new bootstrap.Modal(calModal, {});
      myModal.show();

      //
      let _fullDate = new Date(element.getAttribute("data-date"));
      // console.log("_fullDate: ", _fullDate);
      // alert(element.getAttribute("data-date"))
      let y =
        element.firstChild.firstChild.firstChild.getAttribute("aria-label");
      // console.log(" y: ", y);
    });
  }

  calModal.addEventListener("hidden.bs.modal", function (event) {
    // do something...
    // console.log("hidden: ", event.target);
  });
  calModal.addEventListener("show.bs.modal", function (event) {
    // do something...
    // console.log("show: ", event.target);
    console.log("date data: ", dateData);
    fullateData;
    console.log("fulldate data: ", fullateData);
  });
});
