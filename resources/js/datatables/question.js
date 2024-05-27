import JQ from "jquery";
import "datatables.net-dt";
import { initDataTable } from "../utils";
import {
    basicLink,
    btnDelete,
    editIcon,
    wrapper,
} from "../utils/table-buttons";

const initQuestionTable = (ID, el) => {
    const url = `${dashboard_url}/question/datatable`;
    const table = initDataTable(ID, el, url, {
        order: [[1, "desc"]],
        columns: [
            {
                data: "question",
                render: JQ.fn.dataTable.render.text(),
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
                                  `${dashboard_url}/question/${data}/edit`,
                                  editIcon
                              )
                            : "",
                        row.actions.delete
                            ? btnDelete(`${dashboard_url}/question/${data}`)
                            : ""
                    );
                },
            },
        ],
    });
};

export default initQuestionTable;
