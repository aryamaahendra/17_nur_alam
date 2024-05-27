import JQ from "jquery";
import "./bootstrap";
import { Toast } from "./utils";

const initFlashMessage = () => {
    const flashType = JQ(`[name="flash_type"]`).val();
    const flashMessage = JQ(`[name="flash_message"]`).val();

    if (flashType && flashMessage)
        setTimeout(() => new Toast(flashType, flashMessage).show(), 2000);
};

JQ.when(JQ.ready).then(function () {
    initFlashMessage();
});
