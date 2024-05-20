import JQ from "jquery";
import "datatables.net-dt";
import { initDataTable } from "../utils";
import {
    basicLink,
    btnDelete,
    editIcon,
    wrapper,
} from "../utils/table-buttons";

const initUserTable = (ID, el) => {
    const url = `${dashboard_url}/user/datatable`;
    const table = initDataTable(ID, el, url, {
        order: [[3, "desc"]],
        columns: [
            {
                data: "name",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "username",
                render: JQ.fn.dataTable.render.text(),
                className: "whitespace-nowrap",
            },
            {
                data: "email",
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
                    return wrapper(
                        row.actions.update
                            ? basicLink(
                                  `${dashboard_url}/user/${data}/edit`,
                                  editIcon
                              )
                            : "",
                        row.actions.delete
                            ? btnDelete(`${dashboard_url}/user/${data}`)
                            : ""
                    );
                },
            },
        ],
    });
};

export default initUserTable;
