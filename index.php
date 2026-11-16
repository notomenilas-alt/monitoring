<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ERCIHS Network Monitoring</title>

    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- HEADER -->
    <header class="topbar">

        <div class="brand">

            <div class="logo">ER</div>

            <div>
                <strong>ERCIHS NETWORK MONITORING</strong>
                <small>Network Availability and Alert System</small>
            </div>

        </div>

        <div class="header-status">
            <span class="status-dot"></span>
            System Prototype
        </div>

    </header>


    <!-- NAVIGATION -->
    <nav class="navbar">

        <a href="#home">Home</a>
        <a href="#monitoring">Network Monitoring</a>
        <a href="#advisories">Advisories</a>
        <a href="#sensor">Network Sensor</a>
        <a href="#maintenance">Maintenance</a>
        <a href="#help">Help</a>

    </nav>


    <!-- HOME -->
    <section id="home" class="hero">

        <p class="eyebrow">
            ERCIHS NETWORK SITUATION
        </p>

        <h1>
            Current Network Condition
        </h1>

        <div id="overallStatus" class="overall-status">
            NETWORK NORMAL
        </div>

        <p>
            The monitored network areas are currently operating normally.
        </p>

    </section>

    <!-- DASHBOARD SUMMARY -->
    <section class="summary-grid" aria-label="Network summary">

        <article class="summary-card">
            <span class="summary-label">Monitored buildings</span>
            <strong>04</strong>
            <span class="summary-detail">All locations reporting</span>
        </article>

        <article class="summary-card">
            <span class="summary-label">Routers online</span>
            <strong>02 <small>/ 02</small></strong>
            <span class="summary-detail">Connected devices</span>
        </article>

        <article class="summary-card">
            <span class="summary-label">Building availability</span>
            <strong>100<small>%</small></strong>
            <span class="summary-detail">Across monitored areas</span>
        </article>

        <article class="summary-card summary-card-alerts">
            <span class="summary-label">Active advisories</span>
            <strong>00</strong>
            <span class="summary-detail">No issues reported</span>
        </article>

    </section>


    <!-- ADVISORIES -->
    <section id="advisories" class="section">

        <div class="section-title">

            <div>

                <p class="eyebrow">
                    NETWORK ADVISORIES
                </p>

                <h2>
                    Latest Network Situation
                </h2>

            </div>

            <div class="updated">

                Updated:
                <span id="updateTime">--:--</span>

            </div>

        </div>


        <div class="advisory-card">

            <div class="advisory-icon">
                ✓
            </div>

            <div>

                <h3>
                    All monitored areas are operational
                </h3>

                <p>
                    No major network problems have been detected
                    in the monitored areas.
                </p>

            </div>

        </div>

    </section>


    <!-- NETWORK MONITORING -->
    <section id="monitoring" class="section">

        <p class="eyebrow">
            NETWORK MONITORING
        </p>

        <h2>
            Building Network Status
        </h2>


        <div class="monitor-grid">


            <!-- BUILDING A -->
            <div class="monitor-card">

                <h3>
                    Building A
                </h3>

                <div class="percentage">
                    100%
                </div>

                <span class="operational">
                    Operational
                </span>

            </div>


            <!-- BUILDING B -->
            <div class="monitor-card">

                <h3>
                    Building B
                </h3>

                <div class="percentage">
                    100%
                </div>

                <span class="operational">
                    Operational
                </span>

            </div>


            <!-- BUILDING C -->
            <div class="monitor-card">

                <h3>
                    Building C
                </h3>

                <div class="percentage">
                    100%
                </div>

                <span class="operational">
                    Operational
                </span>

            </div>


            <!-- BUILDING D -->
            <div class="monitor-card">

                <h3>
                    Building D
                </h3>

                <div class="percentage">
                    100%
                </div>

                <span class="operational">
                    Operational
                </span>

            </div>

        </div>


        <!-- LEGEND -->
        <div class="legend">

            <span>
                <i class="legend-dot operational-dot"></i>
                Operational
            </span>

            <span>
                <i class="legend-dot unstable-dot"></i>
                Unstable
            </span>

            <span>
                <i class="legend-dot problem-dot"></i>
                Problem Detected
            </span>

        </div>


        <button
            class="main-button"
            onclick="refreshNetwork()">

            Refresh Network Status

        </button>

    </section>


    <!-- NETWORK SENSOR -->
    <section id="sensor" class="section">

        <p class="eyebrow">
            NETWORK SENSOR
        </p>

        <h2>
            Monitored Network Devices
        </h2>


        <div class="sensor-panel">

            <div class="sensor-circle">

                <div class="sensor-pulse"></div>

                📡

            </div>


            <div class="sensor-info">

                <h3 id="scanStatus">
                    Ready to Scan
                </h3>

                <p id="scanMessage">
                    Click the button to scan monitored network devices.
                </p>


                <button
                    class="main-button"
                    onclick="scanNetwork()">

                    📡 Scan Network

                </button>

            </div>

        </div>


        <!-- DEVICE LIST -->
        <div class="device-list">


            <!-- ROUTER A -->
            <div class="device-card">

                <div class="device-icon">
                    📡
                </div>

                <div class="device-details">

                    <strong>
                        Router - Building A
                    </strong>

                    <span>
                        Monitored Network Device
                    </span>

                </div>

                <strong class="online">
                    Online
                </strong>

                <span class="signal">
                    ▮▮▮
                </span>

            </div>


            <!-- ROUTER C -->
            <div class="device-card">

                <div class="device-icon">
                    📡
                </div>

                <div class="device-details">

                    <strong>
                        Router - Building C
                    </strong>

                    <span>
                        Monitored Network Device
                    </span>

                </div>

                <strong class="online">
                    Online
                </strong>

                <span class="signal">
                    ▮▮▮
                </span>

            </div>

        </div>

    </section>


    <!-- NETWORK MAINTENANCE -->
    <section id="maintenance" class="section">

        <p class="eyebrow">
            NETWORK MAINTENANCE
        </p>

        <h2>
            Maintenance and Information
        </h2>


        <div class="info-grid">


            <!-- CABLE MAINTENANCE -->
            <div class="info-card">

                <div class="card-icon">
                    🔌
                </div>

                <h3>
                    Cable Maintenance
                </h3>

                <p>
                    View cable installation records,
                    inspection dates, and maintenance reminders.
                </p>

                <a
                    href="cable-maintenance.php"
                    class="view-link">

                    View

                </a>

            </div>


            <!-- ROUTER INFORMATION -->
            <div class="info-card">

                <div class="card-icon">
                    📡
                </div>

                <h3>
                    Router Information
                </h3>

                <p>
                    View router locations, status,
                    and basic network information.
                </p>

                <a
                    href="router-information.php"
                    class="view-link">

                    View

                </a>

            </div>


            <!-- MAINTENANCE GUIDE -->
            <div class="info-card">

                <div class="card-icon">
                    🛠️
                </div>

                <h3>
                    Maintenance Guide
                </h3>

                <p>
                    View basic steps for checking
                    common network problems.
                </p>

                <a
                    href="maintenance-guide.php"
                    class="view-link">

                    View

                </a>

            </div>

        </div>

    </section>


    <!-- HELP CENTER -->
    <section id="help" class="section">

        <p class="eyebrow">
            HELP CENTER
        </p>

        <h2>
            Basic Troubleshooting
        </h2>


        <div class="help-buttons">

            <button onclick="showGuide('Wi-Fi')">
                Wi-Fi
            </button>

            <button onclick="showGuide('Router')">
                Router
            </button>

            <button onclick="showGuide('Cable')">
                Cable
            </button>

        </div>


        <div id="guideBox" class="guide-box">

            Select a troubleshooting category above.

        </div>

    </section>


    <!-- CONTACT -->
    <section class="contact-section">

        <h2>
            Need Assistance?
        </h2>

        <p>
            If the network problem continues,
            contact the school's IT or network personnel.
        </p>

        <button
            class="main-button"
            onclick="contactIT()">

            Contact IT Personnel

        </button>

    </section>


    <!-- FOOTER -->
    <footer>

        <p>
            © 2026 ERCIHS Network Monitoring and Alert System
        </p>

        <p>
            Prototype Website
        </p>

    </footer>


    <!-- JAVASCRIPT -->
    <script src="script.js"></script>

</body>

</html>
