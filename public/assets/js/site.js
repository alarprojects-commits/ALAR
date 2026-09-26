(function () {
    var burger = document.getElementById("alar-burger");
    var drawer = document.getElementById("alar-drawer");
    var areasToggle = document.getElementById("alar-areas-toggle");
    var areas = document.getElementById("alar-areas");
    var airportsToggle = document.getElementById("alar-airports-toggle");
    var airports = document.getElementById("alar-airports");

    if (burger && drawer) {
        burger.addEventListener("click", function () {
            var open = drawer.classList.toggle("is-open");
            burger.setAttribute("aria-expanded", open ? "true" : "false");
        });
    }

    if (areasToggle && areas) {
        areasToggle.addEventListener("click", function () {
            areas.classList.toggle("is-open");
        });
    }

    if (airportsToggle && airports) {
        airportsToggle.addEventListener("click", function () {
            airports.classList.toggle("is-open");
        });
    }

    document.querySelectorAll(".alar-guide").forEach(function (guide) {
        var buttons = guide.querySelectorAll(".alar-guide-nav button");
        var panels = guide.querySelectorAll(".alar-guide-panel");

        buttons.forEach(function (button) {
            button.addEventListener("click", function () {
                var id = button.getAttribute("data-guide");
                buttons.forEach(function (item) {
                    var on = item === button;
                    item.classList.toggle("is-on", on);
                    item.setAttribute("aria-selected", on ? "true" : "false");
                });
                panels.forEach(function (panel) {
                    panel.classList.toggle("is-on", panel.id === id);
                });
            });
        });
    });

    var filters = document.getElementById("alar-airport-filters");
    var board = document.getElementById("alar-airport-board");
    if (filters && board) {
        var filterButtons = filters.querySelectorAll("button[data-state]");
        var blocks = board.querySelectorAll(".alar-airport-state-block");

        filterButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                var state = button.getAttribute("data-state");
                filterButtons.forEach(function (item) {
                    var on = item === button;
                    item.classList.toggle("is-on", on);
                    item.setAttribute("aria-selected", on ? "true" : "false");
                });
                blocks.forEach(function (block) {
                    var match = state === "all" || block.getAttribute("data-state") === state;
                    block.hidden = !match;
                });
            });
        });
    }
})();
