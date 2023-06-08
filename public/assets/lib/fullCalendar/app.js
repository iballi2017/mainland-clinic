document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var dateData;
  var fullateData;
  /**Today's date YYY/MM/DD formatting */
  var m = new Date();

  var dateString =
    m.getUTCFullYear() +
    "-" +
    ("0" + (m.getUTCMonth() + 1)).slice(-2) +
    "-" +
    ("0" + m.getUTCDate()).slice(-2);
  /** */

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    initialDate: "2023-01-12",
    // initialDate: dateString,
    editable: true,
    selectable: true,
    businessHours: false,
    dayMaxEvents: true, // allow "more" link when too many events
    eventColor: "#5b5b5b",
    // hiddenDays: [ 2, 4 ],
    showNonCurrentDates: false,
    fixedWeekCount: false,
    events: [
      {
        title: "All Day Event",
        start: "2023-01-01",
        selectable: false,
        backgroundColor: "#343aabb",
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

  // let unavailableDates = events.filter((date) => date.isUnavailable == true);
  // console.log("unavailableDates: ", unavailableDates);
  console.log("calendar: ", calendar);

  closedDates = ["2023-01-12", "2023-01-14"];

  calendar.render();

  document
    .getElementById("my-next-button")
    .addEventListener("click", function () {
      calendar.next();
      // alert("hello")
    });
  document
    .getElementById("my-prev-button")
    .addEventListener("click", function () {
      calendar.prev();
      // alert("hello")
    });
});
