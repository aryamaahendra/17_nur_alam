import JQ from "jquery";
import ConfirmDelete from "./confirm-delete";

export const getcookie = (cookieName) => {
    const cookies = document.cookie.split("; ");

    for (const cookie of cookies) {
        const [name, value] = cookie.split("=");
        if (name === cookieName) {
            return decodeURIComponent(value);
        }
    }

    return null; // Return null if the cookie is not found
};

const initDataTable = (ID, el, url, config) => {
    const table = JQ(`#${ID}`).DataTable({
        dom: `<<<"overflow-x-auto"t>><"pagination" ip>>`,
        ajax: {
            url: url,
            headers: {
                "X-XSRF-TOKEN": getcookie("XSRF-TOKEN"),
                Accept: "application/json",
            },
            data: (query) => {
                query.columns = null;
            },
        },
        processing: true,
        serverSide: true,
        ...config,
    });

    initBasicFilter(table, el);

    return table;
};

const initBasicFilter = (table, el) => {
    table.on("submit", "tbody tr form.conf-delete", async (e) => {
        e.preventDefault();
        const modal = new ConfirmDelete();
        if (await modal.show()) {
            e.currentTarget.submit();
            return;
        }

        return;
    });

    table.on("click", "tbody tr .show-qrcode", async (e) => {
        e.preventDefault();
        const url = JQ(e.currentTarget).data("url");
        const modal = document.getElementById("qrcode_modal");
        JQ("#qrcode_modal img").attr("src", url);

        modal.showModal();
        return;
    });

    JQ(el)
        .find(".search")
        .on("keyup", (e) => {
            table.search(e.currentTarget.value).draw();
        });

    JQ(el)
        .find(".perpage")
        .on("change", (e) => {
            table.page.len(e.currentTarget.value).draw();
        });
};

export { initBasicFilter };

export default initDataTable;
