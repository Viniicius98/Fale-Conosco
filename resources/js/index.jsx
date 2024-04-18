import { createRoot } from "react-dom";
import ImageComponent from "./components/ImageComponent/Image";
import FormComponent from "./components/FormularioComponent/Formulario";
import MeusRegistrosComponent from "./components/MeusRegistrosComponent/MeusRegistros";

createRoot(document.getElementById("app")).render(
    <>
        <ImageComponent />
        <FormComponent />
        <MeusRegistrosComponent />
    </>
);
