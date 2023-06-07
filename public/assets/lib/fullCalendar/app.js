document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

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
  for (let i = 0; i < fcDay.length; i++) {
    const element = fcDay[i];
    element.addEventListener("click", () => {
      console.log("element: ", $(element).attr("data-date"));
      console.log("element new Date: ", new Date($(element).attr("data-date")));
      alert($(element).attr("data-date"))
      let x = $(element)
        .children(":first-child")
        .children(":first-child")
        .html();
        console.log("x.attr('data-date'): ", $(x).attr("aria-label"));
        console.log("x.attr('data-date') new Date: ", new Date($(x).attr("aria-label")));
    });
  }
});
