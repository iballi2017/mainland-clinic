<!-- Header -->
<?php include_once "../components/header.php" ?>

<!-- Title section -->
<div class="title-section-container">
    <section class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../" class="base-text-color-500 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
            </ol>
        </nav>
        <h1 class="fw-bold fs-500">Book Appointment</h1>
    </section>
</div>

<!-- /**STYLE */ -->
<style>
    .calendarDiv {
        display: none;
        text-align: center;
    }

    #calendarPrev:disabled , #calendarPrev:disabled +  span{
        display: none;
    }

    #calendarPrev:before {
        content: url(../assets/images/icons/arrow-left-caret-green-circle.svg);
    }

    #calendarNext:before {
        content: url(../assets/images/icons/arrow-right-caret-green-circle.svg);
    }

    .calendarDiv table {
        width: 100%;
    }

    .calendarDiv table tbody th,
    .calendarDiv table tbody td {
        height: 60px;
        width: 60px;
    }


    .calendarDiv table tbody td {
        padding: .3em;
        position: relative;
    }

    .calendarDiv table tbody td div {
        /* background-color: red; */
        position: inherit;
        /* top: 0;
        bottom: 0;
        left: 0;
        right: 0; */
        width: 100%;
        height: 100%;
        display: flex;
        padding: .5em;
        border: 1px solid var(--clr-accent-50);
    }

    @media (min-width: 768px) {
        .calendarDiv table tbody td {
            height: 7.3rem;
        }
    }

    td.closed-day>div {
        background-color: #C3C3C3 !important;
        color: #ffffff !important;
    }

    #calendarTable_1 {
        display: block;
    }
</style>


<section class="padding-block-600">
    <div class="container">
        <div class="border border-accent-50 rounded-250 pb-4">
            <div id="calendar"></div>
        </div>
    </div>
</section>



<!-- /**SCRIPT */ -->
<script>
    var calendarShow = 1;

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
                // date1.setMonth(date1.getMonth() + 1);
                date1 = settingDate(date1, 31);
            } else {
                temp = new Date(date1);
                if (temp >= range1 && temp <= range2) dates.push(temp);
                date1.setMonth(date1.getMonth() + 1);
            }
        }

        console.log("dates: ", dates);
        let currentMonthYearTitle = "March 2023"
        let content =
            "<div class='d-flex align-items-center justify-content-between border-bottom border-accent-50 py-3 px-4'>"
        content += `<div class='fs-400 fw-semi-bold' id='current-month-year-title'>${currentMonthYearTitle}</div>`
        // content+=""

        content += "<div class='calendarBtns'>"
        content += "<button class='btn btn-sm' id='calendarPrev' onClick='callPrev()' disabled><span class='visually-hidden'>Previous</span></button><span> | </span>"
        content += "<button class='btn btn-sm' id='calendarNext' onClick='callNext()'><span class='visually-hidden'>Next</span></button>"
        content += "</div></div>"; //adding control buttons
        let weekDays = [{
                shortDay: "Mon",
                fullDay: "Monday",
                label: "Mo"
            },
            {
                shortDay: "Tue",
                fullDay: "Tuesday",
                label: "Tu"
            },
            {
                shortDay: "Wed",
                fullDay: "Wednesdayday",
                label: "We"
            },
            {
                shortDay: "Thu",
                fullDay: "Thursday",
                label: "Th"
            },
            {
                shortDay: "Fri",
                fullDay: "Friday",
                label: "Fr"
            },
            {
                shortDay: "Sat",
                fullDay: "Saturday",
                label: "Sa"
            },
            {
                shortDay: "Sun",
                fullDay: "Sunday",
                label: "Su"
            },

            //

            // { shortDay: "Mo", fullDay: "Monday" },
            // { shortDay: "Tu", fullDay: "Tuesday" },
            // { shortDay: "We", fullDay: "Wednesdayday" },
            // { shortDay: "Th", fullDay: "Thursday" },
            // { shortDay: "Fr", fullDay: "Friday" },
            // { shortDay: "Sa", fullDay: "Saturday" },
            // { shortDay: "Su", fullDay: "Sunday" },
        ];


        for (let i = 0; i < dates.length; i++) {
            // console.log("dates: ", dates[i])
            // const date = new Date(2009, 10, 10); // 2009-11-10
            // const month = date.toLocaleString('default', {
            //     month: 'long'
            // });
            // console.log(month);


            lastDate = dates[i];
            firstDate = new Date(dates[i].getFullYear(), dates[i].getMonth(), 1);
            const month = firstDate.toLocaleString('default', {
                month: 'long'
            });
            content += "<div id='calendarTable_" + (i + 1) + "' class='calendarDiv px-4' style='overflow: hidden'>";
            content +=
                "<h2 class='visually-hidden'>" +
                // firstDate.toString().split(" ")[1] +
                month +
                " " +
                firstDate.getFullYear() +
                "</h2>";
            content += "<table>";
            content += "<thead>";
            weekDays.map((item) => {
                content += "<th class='fs-400 fw-semi-bold py-3'>" + item.label + "</th>";
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
                            // content += "<td>" + displayNum + "</td>";
                            content += `<td date-data='${new Date(dates[i].getFullYear(), dates[i].getMonth(), displayNum)}'><div class='fw-semi-bold rounded-250'>${displayNum}</div></td>`;
                            j++;
                        } else {
                            content += "<td></td>";
                        }
                    } else if (j > lastDate.getDate()) {
                        content += "<td></td>";
                    } else {
                        // content += "<td>" + displayNum + "</td>";
                        content += `<td date-data='${new Date(dates[i].getFullYear(), dates[i].getMonth(), displayNum)}'><div class='fw-semi-bold rounded-250'>${displayNum}</div></td>`;
                        // content += `<td date-data='0000/${dates[i].getMonth()}/${displayNum}'>${displayNum}</td>`;
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

    /** */
    function callNext() {
        let allTables = document.getElementsByClassName("calendarDiv");
        document.getElementById("calendarPrev").disabled = false;
        calendarShow++;
        if (calendarShow <= allTables.length) {
            for (let i = 0; i < allTables.length; i++) {
                // allTables[i].style.display = "none";
                allTables[i].classList.add("d-none")
                allTables[i].classList.remove("d-block")

            }
            // document.getElementById("calendarTable_" + calendarShow).style.display =
            //     "block";
            document.getElementById("calendarTable_" + calendarShow).classList.add("d-block")
            document.getElementById("calendarTable_" + calendarShow).classList.remove("d-none")
            if (calendarShow == allTables.length) {
                document.getElementById("calendarNext").disabled = true;
            }
        }

        var calendarMonths = document.querySelectorAll("#calendar .calendarDiv")
        for (let i = 0; i < calendarMonths.length; i++) {
            const month = calendarMonths[i];
            if (month.classList.contains("d-block")) {
                document.getElementById("current-month-year-title").innerHTML = month.firstElementChild.textContent
            }
        }
    }

    function callPrev() {
        let allTables = document.getElementsByClassName("calendarDiv");
        document.getElementById("calendarNext").disabled = false;
        calendarShow--;
        if (calendarShow >= 1) {
            for (let i = 0; i < allTables.length; i++) {
                // allTables[i].style.display = "none";
                allTables[i].classList.remove("d-block")
                allTables[i].classList.add("d-none")
            }
            // document.getElementById("calendarTable_" + calendarShow).style.display =
            //     "block";
            document.getElementById("calendarTable_" + calendarShow).classList.add("d-block")
            document.getElementById("calendarTable_" + calendarShow).classList.remove("d-none")
            if (calendarShow == 1) {
                document.getElementById("calendarPrev").disabled = true;
            }
        }
        var calendarMonths = document.querySelectorAll("#calendar .calendarDiv")
        for (let i = 0; i < calendarMonths.length; i++) {
            const month = calendarMonths[i];
            if (month.classList.contains("d-block")) {
                document.getElementById("current-month-year-title").innerHTML = month.firstElementChild.textContent
            }
        }
    }


    var m = new Date();
    var dateString =
        m.getUTCFullYear() +
        "/" +
        ("0" + (m.getUTCMonth() + 1)).slice(-2) +
        "/" +
        ("0" + m.getUTCDate()).slice(-2);

    console.log("dateString: ", dateString)
    // let content = getDatesBetween("2020/01/01", "2021/01/01");
    let content = getDatesBetween(dateString, "2030/01/01");
    document.getElementById("calendar").innerHTML = content;




    function setInitialPageMonthTitle() {
        var calendarMonths = document.querySelectorAll("#calendar .calendarDiv")
        for (let i = 0; i < calendarMonths.length; i++) {
            const months = calendarMonths[i];
            if (months == calendarMonths[0]) {
                // console.log("months.firstElementChild: ", months.firstElementChild)
                document.getElementById("current-month-year-title").innerHTML = months.firstElementChild.textContent;
                break;
            }
        }
    }
    setInitialPageMonthTitle();


    var closedDates = [
        "Fri Jun 02 2023 00:00:00 GMT+0100 (West Africa Standard Time)",
        "Wed Jun 14 2023 00:00:00 GMT+0100 (West Africa Standard Time)",
        "Sat Jun 17 2023 00:00:00 GMT+0100 (West Africa Standard Time)"
    ]

    function onClosedDates() {

    }
    onClosedDates();


    function handleDayClickEvent() {
        var dayTds = document.querySelectorAll("#calendar .calendarDiv tbody tr td")
        // console.log("dayTds: ", dayTds)
        for (let i = 0; i < dayTds.length; i++) {
            const td = dayTds[i];
            if (
                closedDates.includes(td.getAttribute("date-data"))) {
                if (!td.classList.contains("closed-day")) {
                    td.classList.add("closed-day");
                    td.setAttribute("title", "closed")
                    td.setAttribute("data-bs-toggle", "tooltip")
                    td.setAttribute("data-bs-placement", "top")
                    // data-bs-toggle="tooltip" data-bs-placement="top"
                }
            }

            td.addEventListener("click", () => {
                if (!td.classList.contains("closed-day")) {
                    console.log(td.attributes)
                    console.log(td.getAttribute("date-data"))
                    alert(td.getAttribute("date-data"))
                }
            })

            td.addEventListener("mouseover", () => {
                if (td.classList.contains("closed-day")) {
                    td.firstElementChild.style.cursor = "not-allowed";
                } else {
                    if (!td.textContent) return
                    td.firstElementChild.style.cursor = "pointer";
                    td.firstElementChild.style.background = "var(--clr-primary-500)";
                    td.firstElementChild.style.color = "#FFFFFF";
                }
            })
            td.addEventListener("mouseleave", () => {
                if (td.classList.contains("closed-day")) {
                    td.firstElementChild.style.cursor = "not-allowed";
                } else {
                    td.firstElementChild.style.cursor = "unset"
                    td.firstElementChild.style.background = "unset"
                    td.firstElementChild.style.color = "inherit";
                }
            })

        }
    }
    handleDayClickEvent();
</script>

<!-- Footer -->
<?php include_once "../components/footer.php" ?>