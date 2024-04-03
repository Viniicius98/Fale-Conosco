import React from "react";
import { createRoot } from "react-dom/client";

import styled from "styled-components";

const ImageContainer = styled.div`
    width: 150px;
    height: 50px;
    margin: 5%;
    display: flex;
    align-items: center;
    justify-content: center;

    img {
        width: 50px;
        height: 50px;
    }
`;

const ImageComponent = () => {
    return (
        <ImageContainer>
            <img src="/images/pc.png" alt="tarefa" />
        </ImageContainer>
    );
};

export default ImageComponent;

const rootElement = document.getElementById("image-container");

if (rootElement) {
    // Verifique se o elemento raiz existe
    const Index = createRoot(rootElement);
    Index.render(<ImageComponent />);
}
