import JQ from "jquery";
import "datatables.net-dt";
import { initDataTable } from "../utils";
import {
    basicLink,
    btnDelete,
    editIcon,
    wrapper,
} from "../utils/table-buttons";

const initDatasetTable = (ID, el) => {
    const url = `${dashboard_url}/dataset/datatable`;
    const table = initDataTable(ID, el, url, {
        order: [[2, "desc"]],
        columns: [
            {
                data: "name",
                className: "whitespace-nowrap",
                render: JQ.fn.dataTable.render.text(),
            },
            {
                data: "class",
                className: "whitespace-nowrap",
                render: JQ.fn.dataTable.render.text(),
            },
            {
                data: "created_at",
                className: "w-1 whitespace-nowrap",
                render: JQ.fn.dataTable.render.text(),
            },
            {
                data: "id",
                className: "w-1 whitespace-nowrap",
                render: (data, type, row) => {
                    return wrapper(
                        row.actions.update
                            ? basicLink(
                                  `${dashboard_url}/dataset/${data}/edit`,
                                  editIcon
                              )
                            : "",
                        row.actions.delete
                            ? btnDelete(`${dashboard_url}/dataset/${data}`)
                            : ""
                    );
                },
            },
        ],
    });
};

export default initDatasetTable;
