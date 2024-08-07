import JQ from "jquery";
import "./bootstrap";
import { Toast } from "./utils";
import Chart from "chart.js/auto";
import axios from "axios";

const initFlashMessage = () => {
    const flashType = JQ(`[name="flash_type"]`).val();
    const flashMessage = JQ(`[name="flash_message"]`).val();

    if (flashType && flashMessage)
        setTimeout(() => new Toast(flashType, flashMessage).show(), 2000);
};

JQ.when(JQ.ready).then(function () {
    initFlashMessage();
});

(async function () {
    const chartEl = document.getElementById("acquisitions");

    if (!chartEl) return;

    const res = await axios.get(`${dashboard_url}/data`);
    const data = res.data.data;

    new Chart(chartEl, {
        type: "doughnut",
        data: {
            labels: data.map((row) => row.class),
            datasets: [
                {
                    label: "History Pemeriksaan",
                    data: data.map((row) => row.count),
                },
            ],
        },
    });
})();
