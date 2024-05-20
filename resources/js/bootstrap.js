import JQ from "jquery";
import { initUserTable } from "./datatables";

window.JQ = JQ;
window.base_url = import.meta.env.VITE_APP_URL;
window.dashboard_url = `${base_url}/dashboard`;

JQ(`[datatable]`).each((idx, el) => {
    const ID = JQ(el).attr("datatable");

    switch (ID) {
        case "users":
            initUserTable(ID, el);
            break;

        default:
            return;
    }
});
