/* ==============================
   ERCIHS NETWORK MONITORING
   ============================== */


/* UPDATE TIME */

function updateTime() {

    const timeElement = document.getElementById("updateTime");

    if (!timeElement) {
        return;
    }

    const now = new Date();

    timeElement.textContent = now.toLocaleTimeString([], {
        hour: "2-digit",
        minute: "2-digit"
    });

}


/* REFRESH NETWORK */

function refreshNetwork() {

    const status = document.getElementById("overallStatus");

    if (!status) {
        return;
    }

    status.textContent = "CHECKING NETWORK...";

    setTimeout(function () {

        status.textContent = "NETWORK NORMAL";

        updateTime();

        alert("Network status has been refreshed.");

    }, 1000);

}


/* GENERAL MESSAGE */

function showMessage(message) {

    alert(message);

}


/* TROUBLESHOOTING GUIDE */

function showGuide(type) {

    const guideBox = document.getElementById("guideBox");

    if (!guideBox) {
        return;
    }


    if (type === "Wi-Fi") {

        guideBox.innerHTML = `
            <strong>Wi-Fi Troubleshooting</strong><br><br>

            1. Check if Wi-Fi is enabled.<br>
            2. Check if other devices can connect.<br>
            3. Move closer to the access point.<br>
            4. If the problem continues, report it to the IT personnel.
        `;

    }


    else if (type === "Router") {

        guideBox.innerHTML = `
            <strong>Router Troubleshooting</strong><br><br>

            1. Check if the router has power.<br>
            2. Check the router indicator lights.<br>
            3. Check if the network cable is connected properly.<br>
            4. Report the issue if the router remains offline.
        `;

    }


    else if (type === "Cable") {

        guideBox.innerHTML = `
            <strong>Cable Troubleshooting</strong><br><br>

            1. Check if the cable is connected properly.<br>
            2. Check for visible cable damage.<br>
            3. Do not force damaged cables into ports.<br>
            4. Report the cable for inspection.
        `;

    }

}


/* CONTACT IT */

function contactIT() {

    alert(
        "Network problem report:\n\n" +
        "Please contact the school's IT or network personnel."
    );

}


/* NETWORK SENSOR */

function scanNetwork() {

    const scanStatus = document.getElementById("scanStatus");

    const scanMessage = document.getElementById("scanMessage");


    if (!scanStatus || !scanMessage) {
        return;
    }


    scanStatus.textContent = "Scanning...";

    scanMessage.textContent =
        "Checking monitored network devices...";


    setTimeout(function () {

        scanStatus.textContent =
            "Network Scan Complete";

        scanMessage.textContent =
            "2 monitored routers are currently online.";

    }, 2000);

}


/* PAGE LOADED */

document.addEventListener("DOMContentLoaded", function () {

    updateTime();

    console.log(
        "ERCIHS Network Monitoring System loaded."
    );

});