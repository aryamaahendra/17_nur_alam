import JQ from "jquery";
import "datatables.net-dt";
import { initDataTable } from "../utils";
import {
    basicLink,
    btnDelete,
    editIcon,
    wrapper,
} from "../utils/table-buttons";

const initPeopleTable = (ID, el) => {
    const url = `${dashboard_url}/people/datatable`;
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
                                  `${dashboard_url}/people/${data}/edit`,
                                  editIcon
                              )
                            : "",
                        row.actions.delete
                            ? btnDelete(`${dashboard_url}/people/${data}`)
                            : ""
                    );
                },
            },
        ],
    });
};

export default initPeopleTable;
