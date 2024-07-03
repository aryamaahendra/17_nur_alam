import JQ from "jquery";
import "datatables.net-dt";
import { initDataTable } from "../utils";
import { wrapper } from "../utils/table-buttons";

const initHistoryPredictionTable = (ID, el) => {
    const url = `${dashboard_url}/history/prediction/data`;
    const table = initDataTable(ID, el, url, {
        order: [[3, "desc"]],
        columns: [
            {
                data: "name",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "sex",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "birth",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "sentence",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "class",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "created_at",
                className: "w-1 whitespace-nowrap",
                render: JQ.fn.dataTable.render.text(),
            },
            {
                data: "id",
                render: (data, type, row) => {
                    return wrapper("");
                },
            },
        ],
    });
};

export default initHistoryPredictionTable;
