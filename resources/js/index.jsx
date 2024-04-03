import { createRoot } from "react-dom";
import ImageComponent from "./components/ImageComponent/Image";
import FormComponent from "./components/FormularioComponent/Formulario";

createRoot(document.getElementById("app")).render(
    <>
        <ImageComponent />
        <FormComponent />
    </>
);
