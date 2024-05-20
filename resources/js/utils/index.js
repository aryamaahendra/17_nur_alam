import ConfirmDelete from "./confirm-delete";
import Toast from "./toast";
import initDataTable, { getcookie } from "./datatable";

export const sleep = (milliseconds) => {
    return new Promise((resolve) => setTimeout(resolve, milliseconds));
};

export { ConfirmDelete, Toast, initDataTable, getcookie };
